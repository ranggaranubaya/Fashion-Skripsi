<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hasil Perhitungan SPK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 12px;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        .benefit {
            background-color: #d4edda;
        }
        .cost {
            background-color: #f8d7da;
        }
        .highlight {
            background-color: #fff3cd;
            font-weight: bold;
        }
        .section {
            margin-bottom: 30px;
        }
        .conclusion {
            background-color: #d4edda;
            padding: 10px;
            border-radius: 5px;
        }
        .wp-conclusion {
            background-color: #e2d6f5;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Hasil Perhitungan Sistem Pendukung Keputusan</h1>
    <p>Metode SAW dan WP - Tanggal: {{ date('d M Y') }}</p>

    <div class="section">
        <h2>1. Bobot Kriteria</h2>
        <table>
            <thead>
                <tr>
                    @foreach ($widget as $index => $item)
                        <th>Kriteria {{ $index + 1 }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($widget as $item)
                        <td>{{ number_format($item['kriteria'], 4) }}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($widget as $item)
                        <td class="{{ $item['jenis'] == 'benefit' ? 'benefit' : 'cost' }}">
                            {{ $item['jenis'] }}
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

    <div class="section">
        <h2>2. Metode SAW</h2>
        <h3>Matriks Normalisasi</h3>
        <table>
            <thead>
                <tr>
                    <th>Kode Alternatif</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->kode_alternatif }}</td>
                        <td>{{ number_format($normalisasi[$item->id]['k1'], 4) }}</td>
                        <td>{{ number_format($normalisasi[$item->id]['k2'], 4) }}</td>
                        <td>{{ number_format($normalisasi[$item->id]['k3'], 4) }}</td>
                        <td>{{ number_format($normalisasi[$item->id]['k4'], 4) }}</td>
                        <td>{{ number_format($normalisasi[$item->id]['k5'], 4) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Nilai Preferensi</h3>
        <table>
            <thead>
                <tr>
                    <th>Kode Alternatif</th>
                    <th>Nilai Preferensi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->kode_alternatif }}</td>
                        <td>{{ number_format($preferensi[$item->id], 4) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Data Peringkat</h3>
        <table>
            <thead>
                <tr>
                    <th>Peringkat</th>
                    <th>Kode Alternatif</th>
                    <th>Nilai Preferensi</th>
                </tr>
            </thead>
            <tbody>
                @php
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
                @endphp
                @foreach ($peringkat as $item)
                    <tr class="{{ $rank == 1 ? 'highlight' : '' }}">
                        <td>{{ $rank++ }}</td>
                        <td>{{ $item['kode'] }}</td>
                        <td>{{ number_format($item['nilai'], 4) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="conclusion">
            <h3>Kesimpulan Metode SAW</h3>
            <p>Alternatif terbaik adalah <strong>{{ $alternatifTerbaik->nama_alternatif ?? '-' }}</strong> dengan nilai preferensi <strong>{{ number_format(max($preferensi), 4) }}</strong></p>
        </div>
    </div>

    <div class="section">
        <h2>3. Metode WP</h2>
        <h3>Perhitungan Metode WP</h3>
        <table>
            <thead>
                <tr>
                    <th>Kode Alternatif</th>
                    <th>Vektor S</th>
                    <th>Preferensi V</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->kode_alternatif }}</td>
                        <td>{{ number_format($vektorS[$item->id], 6) }}</td>
                        <td>{{ number_format($vektorV[$item->id], 6) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Data Peringkat</h3>
        <table>
            <thead>
                <tr>
                    <th>Peringkat</th>
                    <th>Kode Alternatif</th>
                    <th>Nilai Preferensi V</th>
                </tr>
            </thead>
            <tbody>
                @php
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
                @endphp
                @foreach ($peringkatWP as $item)
                    <tr class="{{ $rankWP == 1 ? 'highlight' : '' }}">
                        <td>{{ $rankWP++ }}</td>
                        <td>{{ $item['kode'] }}</td>
                        <td>{{ number_format($item['nilai'], 6) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="wp-conclusion">
            <h3>Kesimpulan Metode WP</h3>
            <p>Alternatif terbaik adalah <strong>{{ $alternatifTerbaikWP->nama_alternatif ?? '-' }}</strong> dengan nilai preferensi <strong>{{ number_format($vektorV[$alternatifTerbaikWP->id], 6) }}</strong></p>
        </div>
    </div>

    <div class="section">
        <h2>4. Perbandingan Hasil</h2>
        <table>
            <thead>
                <tr>
                    <th>Kode Alternatif</th>
                    <th>Nama Alternatif</th>
                    <th>Nilai SAW</th>
                    <th>Ranking SAW</th>
                    <th>Nilai WP</th>
                    <th>Ranking WP</th>
                    <th>Perbandingan Ranking</th>
                </tr>
            </thead>
            <tbody>
                @php
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
                @endphp
                @foreach ($data as $item)
                    @php
                        $sawRank = $peringkatSAW[$item->id] ?? '-';
                        $wpRank = $peringkatWP[$item->id] ?? '-';
                        $selisih = abs(($sawRank - $wpRank));
                        $selisihText = $selisih == 0 ? 'Sama' : $selisih . ' Peringkat';
                    @endphp
                    <tr class="{{ $selisih == 0 ? 'benefit' : ($selisih >= 3 ? 'cost' : 'highlight') }}">
                        <td>{{ $item->kode_alternatif }}</td>
                        <td>{{ $item->nama_alternatif }}</td>
                        <td>{{ number_format($preferensi[$item->id], 4) }}</td>
                        <td>{{ $sawRank }}</td>
                        <td>{{ number_format($vektorV[$item->id], 6) }}</td>
                        <td>{{ $wpRank }}</td>
                        <td>{{ $selisihText }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>