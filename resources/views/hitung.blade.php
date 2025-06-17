@extends('layout.page')

@section('content')

<div class="content-wrapper">
  <section class="content-header bg-primary text-white py-3 mb-4">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col">
          <h1><i class="fas fa-calculator mr-2"></i> Hasil Perhitungan SPK</h1>
          <p class="lead mb-0">Metode SAW dan WP</p>
        </div>
        <div class="col-auto">
    <a href="{{ route('Hasil_Perhitungan_SPK.pdf') }}" class="btn btn-light">
        <i class="fas fa-file-pdf mr-1"></i> Unduh PDF
    </a>
    <a href="{{ route('Hasil_Perhitungan_SPK.excel') }}" class="btn btn-light">
        <i class="fas fa-file-excel mr-1"></i> Unduh Excel
    </a>
</div>
    </div>
  </section>

  <div class="container-fluid">
    <!-- Navigasi Tab -->
    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="saw-tab" data-bs-toggle="tab" href="#saw" role="tab" aria-controls="saw" aria-selected="true">
          <i class="fas fa-chart-line mr-1"></i> Metode SAW
        </a>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="wp-tab" data-bs-toggle="tab" href="#wp" role="tab" aria-controls="wp" aria-selected="false">
          <i class="fas fa-chart-bar mr-1"></i> Metode WP
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="comparison-tab" data-bs-toggle="tab" href="#comparison" role="tab" aria-controls="comparison" aria-selected="false">
          <i class="fas fa-balance-scale mr-1"></i> Perbandingan Hasil
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="saw-calculation-tab" data-bs-toggle="tab" href="#saw-calculation" role="tab" aria-controls="saw-calculation" aria-selected="false">
          <i class="fas fa-chalkboard mr-1"></i> Rumus SAW
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="wp-calculation-tab" data-bs-toggle="tab" href="#wp-calculation" role="tab" aria-controls="wp-calculation" aria-selected="false">
          <i class="fas fa-chalkboard-teacher mr-1"></i> Rumus WP
        </a>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="myTabContent">
      <!-- Tab SAW -->
      <div class="tab-pane fade show active" id="saw" role="tabpanel" aria-labelledby="saw-tab">
        <div class="row">
          <!-- Bobot Kriteria -->
          <div class="col-md-12">
            <div class="card card-info shadow-sm mb-4">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-weight mr-2"></i>Bobot Kriteria</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead class="bg-info text-white">
                      <tr>
                        @foreach ($widget as $index => $item)
                          <th class="text-center">Kriteria {{ $index + 1 }}</th>
                        @endforeach
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($widget as $item)
                          <td class="text-center">{{ number_format($item['kriteria'], 4) }}</td>
                        @endforeach
                      </tr>
                      <tr class="bg-light">
                        @foreach ($widget as $item)
                          <td class="text-center small">
                            <span class="badge badge-{{ $item['jenis'] == 'benefit' ? 'success' : 'danger' }}">
                              {{ $item['jenis'] }}
                            </span>
                          </td>
                        @endforeach
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- Normalisasi -->
          <div class="col-md-12">
            <div class="card card-primary shadow-sm mb-4">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-table mr-2"></i>Matriks Normalisasi</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead class="bg-primary text-white">
                      <tr>
                        <th class="text-center">Kode Alternatif</th>
                        <th class="text-center">C1</th>
                        <th class="text-center">C2</th>
                        <th class="text-center">C3</th>
                        <th class="text-center">C4</th>
                        <th class="text-center">C5</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $item)
                        <tr>
                          <td class="text-center font-weight-bold">{{ $item->kode_alternatif }}</td>
                          <td class="text-center">{{ number_format($normalisasi[$item->id]['k1'], 4) }}</td>
                          <td class="text-center">{{ number_format($normalisasi[$item->id]['k2'], 4) }}</td>
                          <td class="text-center">{{ number_format($normalisasi[$item->id]['k3'], 4) }}</td>
                          <td class="text-center">{{ number_format($normalisasi[$item->id]['k4'], 4) }}</td>
                          <td class="text-center">{{ number_format($normalisasi[$item->id]['k5'], 4) }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="row">
              <!-- Hasil Preferensi -->
              <div class="col-md-6">
                <div class="card card-success shadow-sm mb-4">
                  <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-sort-numeric-down mr-2"></i>Nilai Preferensi</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                        <thead class="bg-success text-white">
                          <tr>
                            <th class="text-center">Kode Alternatif</th>
                            <th class="text-center">Nilai Preferensi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $item)
                            <tr>
                              <td class="text-center">{{ $item->kode_alternatif }}</td>
                              <td class="text-center">{{ number_format($preferensi[$item->id], 4) }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Data Peringkat -->
              <div class="col-md-6">
                <div class="card card-warning shadow-sm mb-4">
                  <div class="card-header bg-warning text-white">
                    <h3 class="card-title"><i class="fas fa-trophy mr-2"></i>Data Peringkat</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                        <thead class="bg-warning text-white">
                          <tr>
                            <th class="text-center">Peringkat</th>
                            <th class="text-center">Kode Alternatif</th>
                            <th class="text-center">Nilai Preferensi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            // Buat array [id => nilai] terus diurutkan dari terbesar
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
                            <tr class="{{ $rank == 1 ? 'table-warning' : '' }}">
                              <td class="text-center">
                                @if($rank == 1)
                                  <span class="badge badge-warning">{{ $rank++ }}</span>
                                @else
                                  {{ $rank++ }}
                                @endif
                              </td>
                              <td class="text-center">{{ $item['kode'] }}</td>
                              <td class="text-center font-weight-{{ $rank <= 2 ? 'bold' : 'normal' }}">
                                {{ number_format($item['nilai'], 4) }}
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Kesimpulan -->
          <div class="col-md-12">
            <div class="card bg-success text-white shadow mb-4">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-check-circle mr-2"></i>Kesimpulan Metode SAW</h3>
              </div>
              <div class="card-body">
                <div class="text-center">
                  <h4><i class="fas fa-award mr-2"></i>Alternatif terbaik adalah</h4>
                  <h2 class="my-3"><strong>{{ $alternatifTerbaik->nama_alternatif ?? '-' }}</strong></h2>
                  <p class="lead">dengan nilai preferensi <span class="badge badge-light text-success">{{ number_format(max($preferensi), 4) }}</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab Perbandingan Hasil -->
<div class="tab-pane fade" id="comparison" role="tabpanel" aria-labelledby="comparison-tab">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary shadow-sm mb-4">
        <div class="card-header bg-indigo text-white">
          <h3 class="card-title"><i class="fas fa-balance-scale mr-2"></i>Perbandingan Hasil Metode SAW dan WP</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead class="bg-indigo text-white">
                <tr>
                  <th class="text-center">Kode Alternatif</th>
                  <th class="text-center">Nama Alternatif</th>
                  <th class="text-center">Nilai SAW</th>
                  <th class="text-center">Ranking SAW</th>
                  <th class="text-center">Nilai WP</th>
                  <th class="text-center">Ranking WP</th>
                  <th class="text-center">Perbandingan Ranking</th>
                </tr>
              </thead>
              <tbody>
                @php
                  // Buat array peringkat SAW
                  $peringkatSAW = [];
                  $rankSAW = 1;
                  foreach (collect($preferensi)->sortDesc() as $id => $nilai) {
                    $peringkatSAW[$id] = $rankSAW++;
                  }
                  
                  // Buat array peringkat WP
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
                    
                    // Tambahkan warna berdasarkan perbedaan ranking
                    $rowClass = '';
                    $selisihText = 'Sama';
                    if ($selisih > 0) {
                      $selisihText = $selisih . ' Peringkat';
                      if ($selisih >= 3) {
                        $rowClass = 'table-danger';
                      } elseif ($selisih >= 1) {
                        $rowClass = 'table-warning';
                      }
                    } else {
                      $rowClass = 'table-success';
                    }
                  @endphp
                  
                  <tr class="{{ $rowClass }}">
                    <td class="text-center font-weight-bold">{{ $item->kode_alternatif }}</td>
                    <td>{{ $item->nama_alternatif }}</td>
                    <td class="text-center">{{ number_format($preferensi[$item->id], 4) }}</td>
                    <td class="text-center">
                      <span class="badge badge-{{ $sawRank == 1 ? 'primary' : 'secondary' }}">
                        {{ $sawRank }}
                      </span>
                    </td>
                    <td class="text-center">{{ number_format($vektorV[$item->id], 6) }}</td>
                    <td class="text-center">
                      <span class="badge badge-{{ $wpRank == 1 ? 'purple' : 'secondary' }}">
                        {{ $wpRank }}
                      </span>
                    </td>
                    <td class="text-center">
                      @if($selisih == 0)
                        <span class="badge badge-success">{{ $selisihText }}</span>
                      @else
                        <span class="badge badge-{{ $selisih >= 3 ? 'danger' : 'warning' }}">{{ $selisihText }}</span>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Grafik Perbandingan -->
    <div class="col-md-12">
      <div class="card card-info shadow-sm mb-4">
        <div class="card-header bg-indigo text-white">
          <h3 class="card-title"><i class="fas fa-chart-bar mr-2"></i>Analisis Perbandingan</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="card bg-light mb-4">
                <div class="card-header">
                  <h5 class="card-title">Kesimpulan Perbandingan</h5>
                </div>
                <div class="card-body">
                  @php
                    // Hitung berapa banyak alternatif yang peringkatnya sama
                    $samaPosisi = 0;
                    $bedaPosisi = 0;
                    $bedaSignifikan = 0; // Beda 3 atau lebih
                    
                    foreach ($data as $item) {
                      $sawRank = $peringkatSAW[$item->id] ?? 0;
                      $wpRank = $peringkatWP[$item->id] ?? 0;
                      $selisih = abs(($sawRank - $wpRank));
                      
                      if ($selisih == 0) {
                        $samaPosisi++;
                      } else {
                        $bedaPosisi++;
                        if ($selisih >= 3) {
                          $bedaSignifikan++;
                        }
                      }
                    }
                    
                    // Alternatif terbaik pada kedua metode
                    $topSAW = array_keys(collect($preferensi)->sortDesc()->toArray())[0] ?? null;
                    $topWP = array_keys(collect($vektorV)->sortDesc()->toArray())[0] ?? null;
                    $samaTerbaik = ($topSAW == $topWP);
                    
                    $altTerbaikSAW = $data->firstWhere('id', $topSAW);
                    $altTerbaikWP = $data->firstWhere('id', $topWP);
                  @endphp
                  
                  <div class="alert alert-{{ $samaTerbaik ? 'success' : 'warning' }}">
                    <h5>
                      <i class="icon fas fa-{{ $samaTerbaik ? 'check' : 'exclamation-triangle' }}"></i>
                      Alternatif Terbaik
                    </h5>
                    @if($samaTerbaik)
                      <p>Kedua metode menghasilkan alternatif terbaik yang <strong>sama</strong>, yaitu: <br>
                      <strong>{{ $altTerbaikSAW->nama_alternatif ?? '-' }}</strong> ({{ $altTerbaikSAW->kode_alternatif ?? '-' }})</p>
                    @else
                      <p>Kedua metode menghasilkan alternatif terbaik yang <strong>berbeda</strong>:</p>
                      <ul>
                        <li>Metode SAW: <strong>{{ $altTerbaikSAW->nama_alternatif ?? '-' }}</strong> ({{ $altTerbaikSAW->kode_alternatif ?? '-' }})</li>
                        <li>Metode WP: <strong>{{ $altTerbaikWP->nama_alternatif ?? '-' }}</strong> ({{ $altTerbaikWP->kode_alternatif ?? '-' }})</li>
                      </ul>
                    @endif
                  </div>
                  
                  <h6>Statistik Perbandingan:</h6>
                  <ul>
                    <li>{{ $samaPosisi }} alternatif memiliki peringkat yang sama di kedua metode ({{ number_format(($samaPosisi / count($data)) * 100, 1) }}%)</li>
                    <li>{{ $bedaPosisi }} alternatif memiliki perbedaan peringkat ({{ number_format(($bedaPosisi / count($data)) * 100, 1) }}%)</li>
                    <li>{{ $bedaSignifikan }} alternatif memiliki perbedaan signifikan (≥ 3 peringkat)</li>
                  </ul>
                  
                  <div class="alert alert-info">
                    <h6><i class="fas fa-info-circle mr-1"></i> Analisis:</h6>
                    <p>
                      @if($samaTerbaik && $samaPosisi > ($bedaPosisi + $bedaSignifikan))
                        Kedua metode menunjukkan <strong>konsistensi yang tinggi</strong> dengan mayoritas alternatif mendapatkan peringkat yang sama.
                      @elseif($samaTerbaik && $samaPosisi <= $bedaPosisi)
                        Meskipun alternatif terbaik sama, terdapat <strong>perbedaan signifikan</strong> pada peringkat alternatif lainnya.
                      @elseif(!$samaTerbaik)
                        Terdapat <strong>perbedaan fundamental</strong> antara kedua metode, ditunjukkan dengan alternatif terbaik yang berbeda.
                      @endif
                      
                      @if($bedaSignifikan > 0)
                        Perhatikan alternatif dengan perbedaan peringkat yang signifikan untuk analisis lebih lanjut.
                      @endif
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card bg-light mb-4">
                <div class="card-header">
                  <h5 class="card-title">Karakteristik Metode</h5>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Aspek</th>
                          <th>Metode SAW</th>
                          <th>Metode WP</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Prinsip</td>
                          <td>Penjumlahan terbobot</td>
                          <td>Perkalian terbobot</td>
                        </tr>
                        <tr>
                          <td>Kelebihan</td>
                          <td>Sederhana, perhitungan mudah</td>
                          <td>Lebih akurat untuk kriteria yang saling bergantung</td>
                        </tr>
                        <tr>
                          <td>Kekurangan</td>
                          <td>Kurang sensitif terhadap interdependensi</td>
                          <td>Perhitungan lebih kompleks</td>
                        </tr>
                        <tr>
                          <td>Penggunaan</td>
                          <td>Masalah dengan kriteria independen</td>
                          <td>Masalah dengan kriteria yang saling mempengaruhi</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                  <div class="alert alert-primary mt-3">
                    <h6><i class="fas fa-lightbulb mr-1"></i> Rekomendasi Penggunaan:</h6>
                    <p>
                      @if($samaTerbaik && $samaPosisi > $bedaPosisi)
                        Karena hasil kedua metode cenderung <strong>konsisten</strong>, Anda dapat menggunakan metode SAW yang lebih sederhana untuk pengambilan keputusan.
                      @elseif(!$samaTerbaik || $bedaSignifikan > 0)
                        Terdapat <strong>perbedaan signifikan</strong> antara kedua metode. Pertimbangkan metode WP jika kriteria saling mempengaruhi, atau lakukan analisis lebih lanjut terhadap karakteristik data.
                      @else
                        Kedua metode memberikan hasil yang cukup serupa. Pertimbangkan tujuan dan karakteristik masalah untuk memilih metode yang tepat.
                      @endif
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

      <!-- Tab WP -->
      <div class="tab-pane fade" id="wp" role="tabpanel" aria-labelledby="wp-tab">
        <div class="row">
          <!-- Bobot Kriteria (sama seperti di tab SAW) -->
          <div class="col-md-12">
            <div class="card card-info shadow-sm mb-4">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-weight mr-2"></i>Bobot Kriteria</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead class="bg-info text-white">
                      <tr>
                        @foreach ($widget as $index => $item)
                          <th class="text-center">Kriteria {{ $index + 1 }}</th>
                        @endforeach
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($widget as $item)
                          <td class="text-center">{{ number_format($item['kriteria'], 4) }}</td>
                        @endforeach
                      </tr>
                      <tr class="bg-light">
                        @foreach ($widget as $item)
                          <td class="text-center small">
                            <span class="badge badge-{{ $item['jenis'] == 'benefit' ? 'success' : 'danger' }}">
                              {{ $item['jenis'] }}
                            </span>
                          </td>
                        @endforeach
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- Perhitungan WP -->
          <div class="col-md-12">
            <div class="card card-primary shadow-sm mb-4">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-calculator mr-2"></i>Perhitungan Metode WP</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead class="bg-primary text-white">
                      <tr>
                        <th class="text-center">Kode Alternatif</th>
                        <th class="text-center">Vektor S</th>
                        <th class="text-center">Preferensi V</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $item)
                        <tr>
                          <td class="text-center font-weight-bold">{{ $item->kode_alternatif }}</td>
                          <td class="text-center">{{ number_format($vektorS[$item->id], 6) }}</td>
                          <td class="text-center">{{ number_format($vektorV[$item->id], 6) }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- Data Peringkat WP -->
          <div class="col-md-12">
            <div class="card card-warning shadow-sm mb-4">
              <div class="card-header bg-warning text-white">
                <h3 class="card-title"><i class="fas fa-trophy mr-2"></i>Data Peringkat (Metode WP)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead class="bg-warning text-white">
                      <tr>
                        <th class="text-center">Peringkat</th>
                        <th class="text-center">Kode Alternatif</th>
                        <th class="text-center">Nilai Preferensi V</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        // Buat array [id => nilai] untuk WP terus diurutkan dari terbesar
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
                        <tr class="{{ $rankWP == 1 ? 'table-warning' : '' }}">
                          <td class="text-center">
                            @if($rankWP == 1)
                              <span class="badge badge-warning">{{ $rankWP++ }}</span>
                            @else
                              {{ $rankWP++ }}
                            @endif
                          </td>
                          <td class="text-center">{{ $item['kode'] }}</td>
                          <td class="text-center font-weight-{{ $rankWP <= 2 ? 'bold' : 'normal' }}">
                            {{ number_format($item['nilai'], 6) }}
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- Kesimpulan WP -->
          <div class="col-md-12">
            <div class="card bg-purple text-white shadow mb-4">
              <div class="card-header bg-purple">
                <h3 class="card-title"><i class="fas fa-check-circle mr-2"></i>Kesimpulan Metode WP</h3>
              </div>
              <div class="card-body">
                <div class="text-center">
                  <h4><i class="fas fa-award mr-2"></i>Alternatif terbaik adalah</h4>
                  <h2 class="my-3"><strong>{{ $alternatifTerbaikWP->nama_alternatif ?? '-' }}</strong></h2>
                  <p class="lead">dengan nilai preferensi <span class="badge badge-light text-purple">{{ number_format($vektorV[$alternatifTerbaikWP->id], 6) }}</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab Cara Perhitungan SAW -->
      <div class="tab-pane fade" id="saw-calculation" role="tabpanel" aria-labelledby="saw-calculation-tab">
        <div class="row">
          <div class="col-md-12">
            <div class="card shadow-sm mb-4">
              <div class="card-header bg-info text-white">
                <h3 class="card-title"><i class="fas fa-book mr-2"></i>Langkah-langkah Perhitungan Metode SAW</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card bg-light mb-4">
                      <div class="card-header">
                        <h5 class="card-title">1. Menentukan Kriteria</h5>
                      </div>
                      <div class="card-body">
                        <p>Kriteria yang digunakan dalam perhitungan:</p>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead class="bg-info text-white">
                              <tr>
                                <th>Kriteria</th>
                                <th>Bobot</th>
                                <th>Jenis</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($widget as $index => $item)
                                <tr>
                                  <td>Kriteria {{ $index + 1 }}</td>
                                  <td>{{ number_format($item['kriteria'], 4) }}</td>
                                  <td>
                                    <span class="badge badge-{{ $item['jenis'] == 'benefit' ? 'success' : 'danger' }}">
                                      {{ $item['jenis'] }}
                                    </span>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card bg-light mb-4">
                      <div class="card-header">
                        <h5 class="card-title">2. Matriks Keputusan</h5>
                      </div>
                      <div class="card-body">
                        <p>Nilai awal setiap alternatif pada setiap kriteria:</p>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead class="bg-info text-white">
                              <tr>
                                <th>Alternatif</th>
                                @foreach ($widget as $index => $item)
                                  <th>C{{ $index + 1 }}</th>
                                @endforeach
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $item)
                                <tr>
                                  <td>{{ $item->kode_alternatif }}</td>
                                  <td>{{ $item->kriteria_1 }}</td>
                                  <td>{{ $item->kriteria_2 }}</td>
                                  <td>{{ $item->kriteria_3 }}</td>
                                  <td>{{ $item->kriteria_4 }}</td>
                                  <td>{{ $item->kriteria_5 }}</td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="card bg-light mb-4">
                      <div class="card-header">
                        <h5 class="card-title">3. Normalisasi Matriks</h5>
                      </div>
                      <div class="card-body">
                        <div class="alert alert-info">
                          <p><strong>Rumus Normalisasi:</strong></p>
                          <ul>
                            <li>
                              <strong>Benefit:</strong> r<sub>ij</sub> = x<sub>ij</sub> / max(x<sub>ij</sub>)
                              <br><small class="text-muted">Nilai dibagi dengan nilai maksimum di kolom tersebut</small>
                            </li>
                            <li>
                              <strong>Cost:</strong> r<sub>ij</sub> = min(x<sub>ij</sub>) / x<sub>ij</sub>
                              <br><small class="text-muted">Nilai minimum di kolom tersebut dibagi dengan nilai</small>
                            </li>
                          </ul>
                        </div>
                        
                        <p>Contoh perhitungan normalisasi untuk alternatif pertama:</p>
                        
                        @if(count($data) > 0)
                          @php
                            $alternatif1 = $data->first();
                            $id1 = $alternatif1->id;
                          @endphp
                          
                          <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead class="bg-info text-white">
                                <tr>
                                  <th>Kriteria</th>
                                  <th>Jenis</th>
                                  <th>Nilai</th>
                                  <th>Nilai Maks/Min</th>
                                  <th>Normalisasi</th>
                                  <th>Perhitungan</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($widget as $index => $item)
                                  @php
                                    $key = 'kriteria_' . ($index + 1);
                                    $maxOrMin = $item['jenis'] == 'benefit' ? 
                                      number_format($data->max($key), 2) : 
                                      number_format($data->min($key), 2);
                                      
                                    $normValue = $normalisasi[$id1]['k' . ($index + 1)];
                                  @endphp
                                  <tr>
                                    <td>C{{ $index + 1 }}</td>
                                    <td>{{ $item['jenis'] }}</td>
                                    <td>{{ $alternatif1->$key }}</td>
                                    <td>{{ $maxOrMin }}</td>
                                    <td>{{ number_format($normValue, 4) }}</td>
                                    <td>
                                      @if($item['jenis'] == 'benefit')
                                        {{ $alternatif1->$key }} / {{ $maxOrMin }} = {{ number_format($normValue, 4) }}
                                      @else
                                        {{ $maxOrMin }} / {{ $alternatif1->$key }} = {{ number_format($normValue, 4) }}
                                      @endif
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="card bg-light mb-4">
                      <div class="card-header">
                        <h5 class="card-title">4. Perangkingan</h5>
                      </div>
                      <div class="card-body">
                        <div class="alert alert-info">
                          <p><strong>Rumus Preferensi:</strong></p>
                          <p>V<sub>i</sub> = Σ w<sub>j</sub> × r<sub>ij</sub></p>
                          <p><small class="text-muted">Nilai preferensi adalah jumlah dari perkalian bobot kriteria dengan nilai normalisasi</small></p>
                        </div>
                        
                        <p>Contoh perhitungan preferensi untuk alternatif pertama:</p>
                        
                        @if(count($data) > 0)
                          @php
                            $alternatif1 = $data->first();
                            $id1 = $alternatif1->id;
                            $prefValue = $preferensi[$id1];
                          @endphp
                          
                          <div class="table-bordered p-3 bg-white">
                            <p>V<sub>{{ $alternatif1->kode_alternatif }}</sub> = 
                              @foreach ($widget as $index => $item)
                                @php
                                  $normValue = $normalisasi[$id1]['k' . ($index + 1)];
                                  $bobotValue = $item['kriteria'];
                                  $result = $normValue * $bobotValue;
                                @endphp
                                ({{ number_format($bobotValue, 4) }} × {{ number_format($normValue, 4) }})
                                @if($index < count($widget) - 1)
                                  +
                                @endif
                              @endforeach
                            </p>
                            <p>V<sub>{{ $alternatif1->kode_alternatif }}</sub> = 
                              @foreach ($widget as $index => $item)
                                @php
                                  $normValue = $normalisasi[$id1]['k' . ($index + 1)];
                                  $bobotValue = $item['kriteria'];
                                  $result = $normValue * $bobotValue;
                                @endphp
                                {{ number_format($result, 4) }}
                                @if($index < count($widget) - 1)
                                  +
                                @endif
                              @endforeach
                              = {{ number_format($prefValue, 4) }}
                            </p>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Tab Cara Perhitungan WP -->
      <div class="tab-pane fade" id="wp-calculation" role="tabpanel" aria-labelledby="wp-calculation-tab">
        <div class="row">
          <div class="col-md-12">
            <div class="card shadow-sm mb-4">
              <div class="card-header bg-purple text-white">
                <h3 class="card-title"><i class="fas fa-book mr-2"></i>Langkah-langkah Perhitungan Metode WP</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card bg-light mb-4">
                      <div class="card-header">
                        <h5 class="card-title">1. Menentukan Kriteria dan Bobot</h5>
                      </div>
                      <div class="card-body">
                        <p>Kriteria yang digunakan dalam perhitungan:</p>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead class="bg-purple text-white">
                              <tr>
                                <th>Kriteria</th>
                                <th>Bobot</th>
                                <th>Jenis</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($widget as $index => $item)
                                <tr>
                                  <td>Kriteria {{ $index + 1 }}</td>
                                  <td>{{ number_format($item['kriteria'], 4) }}</td>
                                  <td>
                                    <span class="badge badge-{{ $item['jenis'] == 'benefit' ? 'success' : 'danger' }}">
                                      {{ $item['jenis'] }}
                                    </span>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card bg-light mb-4">
                      <div class="card-header">
                        <h5 class="card-title">2. Matriks Keputusan</h5>
                      </div>
                      <div class="card-body">
                        <p>Nilai awal setiap alternatif pada setiap kriteria:</p>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead class="bg-purple text-white">
                              <tr>
                                <th>Alternatif</th>
                                @foreach ($widget as $index => $item)
                                  <th>C{{ $index + 1 }}</th>
                                @endforeach
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $item)
                                <tr>
                                  <td>{{ $item->kode_alternatif }}</td>
                                  <td>{{ $item->kriteria_1 }}</td>
                                  <td>{{ $item->kriteria_2 }}</td>
                                  <td>{{ $item->kriteria_3 }}</td>
                                  <td>{{ $item->kriteria_4 }}</td>
                                  <td>{{ $item->kriteria_5 }}</td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="card bg-light mb-4">
                      <div class="card-header">
                        <h5 class="card-title">3. Perbaikan Bobot</h5>
                      </div>
                      <div class="card-body">
                        <div class="alert alert-info">
                          <p><strong>Rumus Perbaikan Bobot:</strong></p>
                          <p>W<sub>j</sub> = w<sub>j</sub> / Σw<sub>j</sub></p>
                          <p><small class="text-muted">Setiap bobot dibagi dengan total bobot sehingga total bobot baru adalah 1</small></p>
                        </div>
                        
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead class="bg-purple text-white">
                              <tr>
                                <th>Kriteria</th>
                                <th>Bobot Awal</th>
                                <th>Bobot Perbaikan</th>
                                <th>Perhitungan</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                                $totalBobot = array_sum(array_column($widget, 'kriteria'));
                              @endphp
                              
                              @foreach ($widget as $index => $item)
                                <tr>
                                  <td>C{{ $index + 1 }}</td>
                                  <td>{{ $item['kriteria'] }}</td>
                                  <td>{{ number_format($item['kriteria'], 4) }}</td>
                                  <td>{{ $item['kriteria'] }} / {{ number_format($totalBobot, 4) }} = {{ number_format($item['kriteria'], 4) }}</td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="card bg-light mb-4">
                      <div class="card-header">
                        <h5 class="card-title">4. Menghitung Vektor S</h5>
                      </div>
                      <div class="card-body">
                        <div class="alert alert-info">
                          <p><strong>Rumus Vektor S:</strong></p>
                          <p>S<sub>i</sub> = Π (X<sub>ij</sub>)<sup>w<sub>j</sub></sup></p>
                          <p><small class="text-muted">Untuk kriteria benefit: pangkat positif, untuk kriteria cost: pangkat negatif</small></p>
                        </div>
                        
                        <p>Contoh perhitungan vektor S untuk alternatif pertama:</p>
                        
                        @if(count($data) > 0)
                          @php
                            $alternatif1 = $data->first();
                            $id1 = $alternatif1->id;
                            $sValue = $vektorS[$id1];
                          @endphp
                          
                          <div class="table-bordered p-3 bg-white">
                            <p>S<sub>{{ $alternatif1->kode_alternatif }}</sub> = 
                              @foreach ($widget as $index => $item)
                                @php
                                  $key = 'kriteria_' . ($index + 1);
                                  $bobotValue = $item['kriteria'];
                                  $pangkat = $item['jenis'] == 'cost' ? -$bobotValue : $bobotValue;
                                @endphp
                                ({{ $alternatif1->$key }})<sup>{{ $item['jenis'] == 'cost' ? '-' : '' }}{{ number_format($bobotValue, 4) }}</sup>
                                @if($index < count($widget) - 1)
                                  ×
                                @endif
                              @endforeach
                            </p>
                            <p>S<sub>{{ $alternatif1->kode_alternatif }}</sub> = {{ number_format($sValue, 6) }}</p>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="card bg-light mb-4">
                      <div class="card-header">
                        <h5 class="card-title">5. Menghitung Vektor V</h5>
                      </div>
                      <div class="card-body">
                        <div class="alert alert-info">
                          <p><strong>Rumus Vektor V:</strong></p>
                          <p>V<sub>i</sub> = S<sub>i</sub> / ΣS<sub>i</sub></p>
                          <p><small class="text-muted">Nilai vektor V adalah nilai vektor S dibagi jumlah seluruh vektor S</small></p>
                        </div>
                        
                        <p>Contoh perhitungan vektor V untuk alternatif pertama:</p>
                        
                        @if(count($data) > 0)
                          @php
                            $alternatif1 = $data->first();
                            $id1 = $alternatif1->id;
                            $vValue = $vektorV[$id1];
                            $totalS = array_sum($vektorS);
                          @endphp
                          
                          <div class="table-bordered p-3 bg-white">
                            <p>V<sub>{{ $alternatif1->kode_alternatif }}</sub> = {{ number_format($sValue, 6) }} / {{ number_format($totalS, 6) }} = {{ number_format($vValue, 6) }}</p>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="card bg-light mb-4">
                      <div class="card-header">
                        <h5 class="card-title">6. Perangkingan</h5>
                      </div>
                      <div class="card-body">
                        <p>Alternatif dengan nilai V tertinggi adalah alternatif terbaik.</p>
                        
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead class="bg-purple text-white">
                              <tr>
                                <th>Peringkat</th>
                                <th>Alternatif</th>
                                <th>Nilai V</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                                $rankCount = 1;
                                $wpRanking = collect($vektorV)
                                  ->sortDesc()
                                  ->map(function($nilai, $id) use ($data) {
                                    $alternatif = $data->firstWhere('id', $id);
                                    return [
                                      'kode' => $alternatif->kode_alternatif ?? '-',
                                      'nama' => $alternatif->nama_alternatif ?? '-',
                                      'nilai' => $nilai,
                                    ];
                                  });
                              @endphp
                              
                              @foreach ($wpRanking as $item)
                                <tr class="{{ $rankCount == 1 ? 'table-warning' : '' }}">
                                  <td>{{ $rankCount++ }}</td>
                                  <td>{{ $item['kode'] }} ({{ $item['nama'] }})</td>
                                  <td>{{ number_format($item['nilai'], 6) }}</td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script>
  $(document).ready(function() {
    // Aktivasi tooltips
    $('[data-toggle="tooltip"]').tooltip();
    
    // Animasi loading data
    $('.card').each(function(index) {
      $(this).delay(100 * index).fadeIn(500);
    });
  });
  
  
</script>
@endpush

@section('content2')
@endsection

@endsection