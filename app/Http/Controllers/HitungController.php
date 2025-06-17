<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class HitungController extends Controller
{
    public function hitung(Request $request)
    {
        $kriterias = Kriteria::orderBy('id', 'asc')->get();
        $totalBobot = $kriterias->sum('bobot');

        $widget = [];
        foreach ($kriterias as $kriteria) {
            $widget[] = [
                'kriteria' => $kriteria->bobot / $totalBobot,
                'jenis' => $kriteria->jenis,
            ];
        }

        $data = Alternatif::orderBy('kode_alternatif', 'asc')->get();

        $max = [];
        $min = [];
        foreach ($kriterias as $index => $kriteria) {
            $key = 'kriteria_' . ($index + 1);
            $max['c' . ($index + 1)] = Alternatif::max($key) ?: 1;
            $min['c' . ($index + 1)] = Alternatif::min($key) ?: 1;
        }

        $normalisasi = [];
        $preferensi = [];

        foreach ($data as $item) {
            foreach ($kriterias as $index => $kriteria) {
                $key = 'kriteria_' . ($index + 1);

                if ($kriteria->jenis == 'benefit') {
                    $nilaiNormalisasi = $item->$key / $max['c' . ($index + 1)];
                } else { // cost
                    $nilaiNormalisasi = $min['c' . ($index + 1)] / $item->$key;
                }

                $normalisasi[$item->id]['k' . ($index + 1)] = $nilaiNormalisasi;
            }

            // Hitung nilai preferensi
            $preferensi[$item->id] = 0;
            foreach ($kriterias as $index => $kriteria) {
                $preferensi[$item->id] += ($normalisasi[$item->id]['k' . ($index + 1)] * $widget[$index]['kriteria']);
            }
        }

        $nilaiTertinggi = max($preferensi);
        $idTerbaik = array_search($nilaiTertinggi, $preferensi);
        $alternatifTerbaik = Alternatif::find($idTerbaik);

        // Hitung WP (Weighted Product)
        $vektorS = [];
        $totalVektorS = 0;
        foreach ($data as $item) {
            $vektorS[$item->id] = 1;
            foreach ($kriterias as $index => $kriteria) {
                $key = 'kriteria_' . ($index + 1);
                $bobot = $widget[$index]['kriteria'];

                // WP: jika cost, bobot dikalikan -1
                $pangkat = $kriteria->jenis == 'cost' ? -$bobot : $bobot;

                $vektorS[$item->id] *= pow($item->$key, $pangkat);
            }
            $totalVektorS += $vektorS[$item->id];
        }

        // Hitung nilai preferensi WP (V)
        $vektorV = [];
        foreach ($vektorS as $id => $nilaiS) {
            $vektorV[$id] = $nilaiS / $totalVektorS;
        }

        $nilaiWPTertinggi = max($vektorV);
        $idTerbaikWP = array_search($nilaiWPTertinggi, $vektorV);
        $alternatifTerbaikWP = Alternatif::find($idTerbaikWP);

        return view('hitung', compact(
            'data',
            'widget',
            'normalisasi',
            'preferensi',
            'alternatifTerbaik',
            'vektorS',
            'vektorV',
            'alternatifTerbaikWP'
        ));
    }

    // Fungsi untuk menghasilkan PDF
    public function cetakPdf()
    {
        $kriterias = Kriteria::orderBy('id', 'asc')->get();
        $totalBobot = $kriterias->sum('bobot');

        $widget = [];
        foreach ($kriterias as $kriteria) {
            $widget[] = [
                'kriteria' => $kriteria->bobot / $totalBobot,
                'jenis' => $kriteria->jenis,
            ];
        }

        $data = Alternatif::orderBy('kode_alternatif', 'asc')->get();

        $max = [];
        $min = [];
        foreach ($kriterias as $index => $kriteria) {
            $key = 'kriteria_' . ($index + 1);
            $max['c' . ($index + 1)] = Alternatif::max($key) ?: 1;
            $min['c' . ($index + 1)] = Alternatif::min($key) ?: 1;
        }

        $normalisasi = [];
        $preferensi = [];

        foreach ($data as $item) {
            foreach ($kriterias as $index => $kriteria) {
                $key = 'kriteria_' . ($index + 1);

                if ($kriteria->jenis == 'benefit') {
                    $nilaiNormalisasi = $item->$key / $max['c' . ($index + 1)];
                } else { // cost
                    $nilaiNormalisasi = $min['c' . ($index + 1)] / $item->$key;
                }

                $normalisasi[$item->id]['k' . ($index + 1)] = $nilaiNormalisasi;
            }

            // Hitung nilai preferensi
            $preferensi[$item->id] = 0;
            foreach ($kriterias as $index => $kriteria) {
                $preferensi[$item->id] += ($normalisasi[$item->id]['k' . ($index + 1)] * $widget[$index]['kriteria']);
            }
        }

        $nilaiTertinggi = max($preferensi);
        $idTerbaik = array_search($nilaiTertinggi, $preferensi);
        $alternatifTerbaik = Alternatif::find($idTerbaik);

        // Hitung WP (Weighted Product)
        $vektorS = [];
        $totalVektorS = 0;
        foreach ($data as $item) {
            $vektorS[$item->id] = 1;
            foreach ($kriterias as $index => $kriteria) {
                $key = 'kriteria_' . ($index + 1);
                $bobot = $widget[$index]['kriteria'];

                // WP: jika cost, bobot dikalikan -1
                $pangkat = $kriteria->jenis == 'cost' ? -$bobot : $bobot;

                $vektorS[$item->id] *= pow($item->$key, $pangkat);
            }
            $totalVektorS += $vektorS[$item->id];
        }

        // Hitung nilai preferensi WP (V)
        $vektorV = [];
        foreach ($vektorS as $id => $nilaiS) {
            $vektorV[$id] = $nilaiS / $totalVektorS;
        }

        $nilaiWPTertinggi = max($vektorV);
        $idTerbaikWP = array_search($nilaiWPTertinggi, $vektorV);
        $alternatifTerbaikWP = Alternatif::find($idTerbaikWP);

        // Load view untuk PDF
        $pdf = Pdf::loadView('pdf_hasil_perhitungan', compact(
            'data',
            'widget',
            'normalisasi',
            'preferensi',
            'alternatifTerbaik',
            'vektorS',
            'vektorV',
            'alternatifTerbaikWP'
        ));

        // Atur orientasi dan ukuran kertas
        $pdf->setPaper('A4', 'portrait');

        // Download PDF
        return $pdf->download('Hasil_Perhitungan_SPK.pdf');
    }

     // Fungsi untuk menghasilkan file Excel
    public function cetakExcel()
    {
        $kriterias = Kriteria::orderBy('id', 'asc')->get();
        $totalBobot = $kriterias->sum('bobot');

        $widget = [];
        foreach ($kriterias as $kriteria) {
            $widget[] = [
                'kriteria' => $kriteria->bobot / $totalBobot,
                'jenis' => $kriteria->jenis,
            ];
        }

        $data = Alternatif::orderBy('kode_alternatif', 'asc')->get();

        $max = [];
        $min = [];
        foreach ($kriterias as $index => $kriteria) {
            $key = 'kriteria_' . ($index + 1);
            $max['c' . ($index + 1)] = Alternatif::max($key) ?: 1;
            $min['c' . ($index + 1)] = Alternatif::min($key) ?: 1;
        }

        $normalisasi = [];
        $preferensi = [];

        foreach ($data as $item) {
            foreach ($kriterias as $index => $kriteria) {
                $key = 'kriteria_' . ($index + 1);

                if ($kriteria->jenis == 'benefit') {
                    $nilaiNormalisasi = $item->$key / $max['c' . ($index + 1)];
                } else { // cost
                    $nilaiNormalisasi = $min['c' . ($index + 1)] / $item->$key;
                }

                $normalisasi[$item->id]['k' . ($index + 1)] = $nilaiNormalisasi;
            }

            // Hitung nilai preferensi
            $preferensi[$item->id] = 0;
            foreach ($kriterias as $index => $kriteria) {
                $preferensi[$item->id] += ($normalisasi[$item->id]['k' . ($index + 1)] * $widget[$index]['kriteria']);
            }
        }

        $nilaiTertinggi = max($preferensi);
        $idTerbaik = array_search($nilaiTertinggi, $preferensi);
        $alternatifTerbaik = Alternatif::find($idTerbaik);

        // Hitung WP (Weighted Product)
        $vektorS = [];
        $totalVektorS = 0;
        foreach ($data as $item) {
            $vektorS[$item->id] = 1;
            foreach ($kriterias as $index => $kriteria) {
                $key = 'kriteria_' . ($index + 1);
                $bobot = $widget[$index]['kriteria'];

                // WP: jika cost, bobot dikalikan -1
                $pangkat = $kriteria->jenis == 'cost' ? -$bobot : $bobot;

                $vektorS[$item->id] *= pow($item->$key, $pangkat);
            }
            $totalVektorS += $vektorS[$item->id];
        }

        // Hitung nilai preferensi WP (V)
        $vektorV = [];
        foreach ($vektorS as $id => $nilaiS) {
            $vektorV[$id] = $nilaiS / $totalVektorS;
        }

        $nilaiWPTertinggi = max($vektorV);
        $idTerbaikWP = array_search($nilaiWPTertinggi, $vektorV);
        $alternatifTerbaikWP = Alternatif::find($idTerbaikWP);

        // Buat spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Hasil Perhitungan SPK');

        // Header
        $sheet->setCellValue('A1', 'Hasil Perhitungan Sistem Pendukung Keputusan');
        $sheet->setCellValue('A2', 'Metode SAW dan WP - Tanggal: ' . date('d M Y'));
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A2')->getFont()->setItalic(true);

        // Bobot Kriteria
        $sheet->setCellValue('A4', '1. Bobot Kriteria');
        $sheet->getStyle('A4')->getFont()->setBold(true);
        $header = ['Kriteria'];
        foreach ($widget as $index => $item) {
            $header[] = 'Kriteria ' . ($index + 1);
        }
        $sheet->fromArray($header, null, 'A5');
        $row = ['Bobot'];
        foreach ($widget as $item) {
            $row[] = number_format($item['kriteria'], 4);
        }
        $sheet->fromArray($row, null, 'A6');
        $row = ['Jenis'];
        foreach ($widget as $item) {
            $row[] = $item['jenis'];
        }
        $sheet->fromArray($row, null, 'A7');
        $sheet->getStyle('A5:' . chr(65 + count($widget)) . '5')->getFont()->setBold(true);
        $sheet->getStyle('A5:' . chr(65 + count($widget)) . '5')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF3498DB');

        // Metode SAW
        $sheet->setCellValue('A9', '2. Metode SAW');
        $sheet->getStyle('A9')->getFont()->setBold(true);

        // Matriks Normalisasi
        $sheet->setCellValue('A10', 'Matriks Normalisasi');
        $sheet->getStyle('A10')->getFont()->setBold(true);
        $header = ['Kode Alternatif', 'C1', 'C2', 'C3', 'C4', 'C5'];
        $sheet->fromArray($header, null, 'A11');
        $rowNum = 12;
        foreach ($data as $item) {
            $sheet->fromArray([
                $item->kode_alternatif,
                number_format($normalisasi[$item->id]['k1'], 4),
                number_format($normalisasi[$item->id]['k2'], 4),
                number_format($normalisasi[$item->id]['k3'], 4),
                number_format($normalisasi[$item->id]['k4'], 4),
                number_format($normalisasi[$item->id]['k5'], 4)
            ], null, 'A' . $rowNum);
            $rowNum++;
        }
        $sheet->getStyle('A11:F11')->getFont()->setBold(true);
        $sheet->getStyle('A11:F11')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF3498DB');

        // Nilai Preferensi
        $sheet->setCellValue('A' . ($rowNum + 1), 'Nilai Preferensi');
        $sheet->getStyle('A' . ($rowNum + 1))->getFont()->setBold(true);
        $sheet->fromArray(['Kode Alternatif', 'Nilai Preferensi'], null, 'A' . ($rowNum + 2));
        $rowNum += 3;
        foreach ($data as $item) {
            $sheet->fromArray([$item->kode_alternatif, number_format($preferensi[$item->id], 4)], null, 'A' . $rowNum);
            $rowNum++;
        }
        $sheet->getStyle('A' . ($rowNum - count($data) - 1) . ':B' . ($rowNum - count($data) - 1))->getFont()->setBold(true);
        $sheet->getStyle('A' . ($rowNum - count($data) - 1) . ':B' . ($rowNum - count($data) - 1))->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF3498DB');

        // Data Peringkat
        $sheet->setCellValue('A' . ($rowNum + 1), 'Data Peringkat');
        $sheet->getStyle('A' . ($rowNum + 1))->getFont()->setBold(true);
        $sheet->fromArray(['Peringkat', 'Kode Alternatif', 'Nilai Preferensi'], null, 'A' . ($rowNum + 2));
        $rowNum += 3;
        $peringkat = collect($preferensi)
            ->sortDesc()
            ->map(function($nilai, $id) use ($data) {
                $alternatif = $data->firstWhere('id', $id);
                return [
                    'kode' => $alternatif->kode_alternatif ?? '-',
                    'nilai' => $nilai,
                ];
            });
        $rank = 1;
        foreach ($peringkat as $item) {
            $sheet->fromArray([$rank++, $item['kode'], number_format($item['nilai'], 4)], null, 'A' . $rowNum);
            if ($rank == 2) {
                $sheet->getStyle('A' . $rowNum . ':C' . $rowNum)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFF3CD');
            }
            $rowNum++;
        }
        $sheet->getStyle('A' . ($rowNum - count($peringkat) - 1) . ':C' . ($rowNum - count($peringkat) - 1))->getFont()->setBold(true);
        $sheet->getStyle('A' . ($rowNum - count($peringkat) - 1) . ':C' . ($rowNum - count($peringkat) - 1))->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF3498DB');

        // Kesimpulan SAW
        $sheet->setCellValue('A' . ($rowNum + 1), 'Kesimpulan Metode SAW');
        $sheet->getStyle('A' . ($rowNum + 1))->getFont()->setBold(true);
        $sheet->setCellValue('A' . ($rowNum + 2), 'Alternatif terbaik adalah ' . ($alternatifTerbaik->nama_alternatif ?? '-') . ' dengan nilai preferensi ' . number_format(max($preferensi), 4));
        $sheet->getStyle('A' . ($rowNum + 2) . ':C' . ($rowNum + 2))->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD4EDDA');

        // Metode WP
        $rowNum += 4;
        $sheet->setCellValue('A' . $rowNum, '3. Metode WP');
        $sheet->getStyle('A' . $rowNum)->getFont()->setBold(true);

        // Perhitungan Metode WP
        $sheet->setCellValue('A' . ($rowNum + 1), 'Perhitungan Metode WP');
        $sheet->getStyle('A' . ($rowNum + 1))->getFont()->setBold(true);
        $sheet->fromArray(['Kode Alternatif', 'Vektor S', 'Preferensi V'], null, 'A' . ($rowNum + 2));
        $rowNum += 3;
        foreach ($data as $item) {
            $sheet->fromArray([$item->kode_alternatif, number_format($vektorS[$item->id], 6), number_format($vektorV[$item->id], 6)], null, 'A' . $rowNum);
            $rowNum++;
        }
        $sheet->getStyle('A' . ($rowNum - count($data) - 1) . ':C' . ($rowNum - count($data) - 1))->getFont()->setBold(true);
        $sheet->getStyle('A' . ($rowNum - count($data) - 1) . ':C' . ($rowNum - count($data) - 1))->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF3498DB');

        // Data Peringkat WP
        $sheet->setCellValue('A' . ($rowNum + 1), 'Data Peringkat');
        $sheet->getStyle('A' . ($rowNum + 1))->getFont()->setBold(true);
        $sheet->fromArray(['Peringkat', 'Kode Alternatif', 'Nilai Preferensi V'], null, 'A' . ($rowNum + 2));
        $rowNum += 3;
        $peringkatWP = collect($vektorV)
            ->sortDesc()
            ->map(function($nilai, $id) use ($data) {
                $alternatif = $data->firstWhere('id', $id);
                return [
                    'kode' => $alternatif->kode_alternatif ?? '-',
                    'nilai' => $nilai,
                ];
            });
        $rankWP = 1;
        foreach ($peringkatWP as $item) {
            $sheet->fromArray([$rankWP++, $item['kode'], number_format($item['nilai'], 6)], null, 'A' . $rowNum);
            if ($rankWP == 2) {
                $sheet->getStyle('A' . $rowNum . ':C' . $rowNum)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFF3CD');
            }
            $rowNum++;
        }
        $sheet->getStyle('A' . ($rowNum - count($peringkatWP) - 1) . ':C' . ($rowNum - count($peringkatWP) - 1))->getFont()->setBold(true);
        $sheet->getStyle('A' . ($rowNum - count($peringkatWP) - 1) . ':C' . ($rowNum - count($peringkatWP) - 1))->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF3498DB');

        // Kesimpulan WP
        $sheet->setCellValue('A' . ($rowNum + 1), 'Kesimpulan Metode WP');
        $sheet->getStyle('A' . ($rowNum + 1))->getFont()->setBold(true);
        $sheet->setCellValue('A' . ($rowNum + 2), 'Alternatif terbaik adalah ' . ($alternatifTerbaikWP->nama_alternatif ?? '-') . ' dengan nilai preferensi ' . number_format($vektorV[$alternatifTerbaikWP->id], 6));
        $sheet->getStyle('A' . ($rowNum + 2) . ':C' . ($rowNum + 2))->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFE2D6F5');

        // Perbandingan Hasil
        $rowNum += 4;
        $sheet->setCellValue('A' . $rowNum, '4. Perbandingan Hasil');
        $sheet->getStyle('A' . $rowNum)->getFont()->setBold(true);
        $sheet->fromArray(['Kode Alternatif', 'Nama Alternatif', 'Nilai SAW', 'Ranking SAW', 'Nilai WP', 'Ranking WP', 'Perbandingan Ranking'], null, 'A' . ($rowNum + 1));
        $rowNum += 2;
        $peringkatSAW = [];
        $rankSAW = 1;
        foreach (collect($preferensi)->sortDesc() as $id => $nilai) {
            $peringkatSAW[$id] = $rankSAW++;
        }
        $peringkatWP = [];
        $rankWP = 1;
        foreach (collect($vektorV)->sortDesc() as $id => $nilai) {
            $peringkatWP[$id] = $rankWP++;
        }
        foreach ($data as $item) {
            $sawRank = $peringkatSAW[$item->id] ?? '-';
            $wpRank = $peringkatWP[$item->id] ?? '-';
            $selisih = abs(($sawRank - $wpRank));
            $selisihText = $selisih == 0 ? 'Sama' : $selisih . ' Peringkat';
            $sheet->fromArray([
                $item->kode_alternatif,
                $item->nama_alternatif,
                number_format($preferensi[$item->id], 4),
                $sawRank,
                number_format($vektorV[$item->id], 6),
                $wpRank,
                $selisihText
            ], null, 'A' . $rowNum);
            if ($selisih == 0) {
                $sheet->getStyle('A' . $rowNum . ':G' . $rowNum)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD4EDDA');
            } elseif ($selisih >= 3) {
                $sheet->getStyle('A' . $rowNum . ':G' . $rowNum)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFF8D7DA');
            } else {
                $sheet->getStyle('A' . $rowNum . ':G' . $rowNum)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFF3CD');
            }
            $rowNum++;
        }
        $sheet->getStyle('A' . ($rowNum - count($data) - 1) . ':G' . ($rowNum - count($data) - 1))->getFont()->setBold(true);
        $sheet->getStyle('A' . ($rowNum - count($data) - 1) . ':G' . ($rowNum - count($data) - 1))->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF3498DB');

        // Auto-size kolom
        foreach (range('A', 'G') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        // Buat file Excel
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Hasil_Perhitungan_SPK.xlsx';

        // Set header untuk download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');

        // Simpan dan kirim ke browser
        $writer->save('php://output');
        exit;
    }
}