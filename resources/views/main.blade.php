@extends('layout.page')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header bg-light py-3 shadow-sm">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content py-3">
    <div class="container-fluid">
      <!-- Welcome Banner -->
      <div class="row mb-4">
        <div class="col-12">
          <div class="card bg-gradient-primary text-white">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h2 class="mb-3">Selamat Datang, Rangga!</h2>
                  <p class="lead mb-0">Ini adalah sistem pendukung keputusan untuk pemilihan wisata. Gunakan menu di bawah untuk mengelola data dan melihat hasil perhitungan.</p>
                </div>
                <div class="col-md-4 text-center d-none d-md-block">
                  <i class="fas fa-map-marked-alt fa-5x opacity-50"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Stats Overview -->
      <div class="row">
        <div class="col-md-6 col-xl-3">
          <div class="card mb-4 shadow-sm">
            <div class="card-body p-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="text-muted mb-1">Total Wisata</h6>
                  <h3 class="mb-0">24</h3>
                </div>
                <div class="bg-info rounded-circle p-3">
                  <i class="fas fa-map-marker-alt fa-2x text-white"></i>
                </div>
              </div>
              <div class="progress progress-sm mt-3">
                <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="card-footer bg-transparent p-2">
              <a href="{{ url('wisata') }}" class="text-info text-decoration-none">
                <i class="fas fa-arrow-circle-right mr-1"></i> Lihat Data Wisata
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-xl-3">
          <div class="card mb-4 shadow-sm">
            <div class="card-body p-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="text-muted mb-1">Total Kriteria</h6>
                  <h3 class="mb-0">5</h3>
                </div>
                <div class="bg-success rounded-circle p-3">
                  <i class="fas fa-list-ul fa-2x text-white"></i>
                </div>
              </div>
              <div class="progress progress-sm mt-3">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="card-footer bg-transparent p-2">
              <a href="{{ url('kriteria') }}" class="text-success text-decoration-none">
                <i class="fas fa-arrow-circle-right mr-1"></i> Kelola Kriteria
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-xl-3">
          <div class="card mb-4 shadow-sm">
            <div class="card-body p-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="text-muted mb-1">Total Alternatif</h6>
                  <h3 class="mb-0">18</h3>
                </div>
                <div class="bg-warning rounded-circle p-3">
                  <i class="fas fa-random fa-2x text-white"></i>
                </div>
              </div>
              <div class="progress progress-sm mt-3">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="card-footer bg-transparent p-2">
              <a href="{{ url('alternatif') }}" class="text-warning text-decoration-none">
                <i class="fas fa-arrow-circle-right mr-1"></i> Kelola Alternatif
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-xl-3">
          <div class="card mb-4 shadow-sm">
            <div class="card-body p-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="text-muted mb-1">Perhitungan Selesai</h6>
                  <h3 class="mb-0">12</h3>
                </div>
                <div class="bg-danger rounded-circle p-3">
                  <i class="fas fa-calculator fa-2x text-white"></i>
                </div>
              </div>
              <div class="progress progress-sm mt-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="card-footer bg-transparent p-2">
              <a href="{{ url('hitung') }}" class="text-danger text-decoration-none">
                <i class="fas fa-arrow-circle-right mr-1"></i> Lihat Perhitungan
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Charts Row -->
      <div class="row">
        <!-- Popularity Chart -->
        <div class="col-lg-8">
          <div class="card shadow-sm mb-4">
            <div class="card-header bg-transparent border-0">
              <h3 class="card-title">
                <i class="fas fa-chart-bar mr-1"></i>
                Popularitas Wisata
              </h3>
            </div>
            <div class="card-body">
              <canvas id="popularityChart" style="min-height: 300px;"></canvas>
            </div>
          </div>
        </div>

        <!-- Criteria Distribution Chart -->
        <div class="col-lg-4">
          <div class="card shadow-sm mb-4">
            <div class="card-header bg-transparent border-0">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Distribusi Kriteria
              </h3>
            </div>
            <div class="card-body">
              <canvas id="criteriaChart" style="min-height: 300px;"></canvas>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Data & Quick Actions -->
      <div class="row">
        <!-- Recent Data -->
        <div class="col-md-8">
          <div class="card shadow-sm mb-4">
            <div class="card-header bg-transparent border-0">
              <h3 class="card-title">
                <i class="fas fa-history mr-1"></i>
                Data Wisata Terbaru
              </h3>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-hover table-striped m-0">
                  <thead>
                    <tr>
                      <th>Nama Wisata</th>
                      <th>Lokasi</th>
                      <th>Rating</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Pantai Parangtritis</td>
                      <td>Yogyakarta</td>
                      <td>4.5</td>
                      <td><span class="badge badge-success">Aktif</span></td>
                    </tr>
                    <tr>
                      <td>Candi Borobudur</td>
                      <td>Magelang</td>
                      <td>4.8</td>
                      <td><span class="badge badge-success">Aktif</span></td>
                    </tr>
                    <tr>
                      <td>Gunung Bromo</td>
                      <td>Malang</td>
                      <td>4.7</td>
                      <td><span class="badge badge-success">Aktif</span></td>
                    </tr>
                    <tr>
                      <td>Danau Toba</td>
                      <td>Sumatera Utara</td>
                      <td>4.6</td>
                      <td><span class="badge badge-success">Aktif</span></td>
                    </tr>
                    <tr>
                      <td>Raja Ampat</td>
                      <td>Papua Barat</td>
                      <td>4.9</td>
                      <td><span class="badge badge-success">Aktif</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer bg-transparent text-right">
              <a href="{{ url('wisata') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-eye mr-1"></i> Lihat Semua Data
              </a>
            </div>
          </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-md-4">
          <div class="card shadow-sm mb-4">
            <div class="card-header bg-transparent border-0">
              <h3 class="card-title">
                <i class="fas fa-bolt mr-1"></i>
                Aksi Cepat
              </h3>
            </div>
            <div class="card-body">
              <div class="list-group">
                <a href="{{ url('wisata/') }}" class="list-group-item list-group-item-action">
                  <i class="fas fa-plus-circle text-success mr-2"></i> Tambah Data Wisata
                </a>
                <a href="{{ url('kriteria/') }}" class="list-group-item list-group-item-action">
                  <i class="fas fa-plus-circle text-primary mr-2"></i> Tambah Kriteria
                </a>
                <a href="{{ url('alternatif/') }}" class="list-group-item list-group-item-action">
                  <i class="fas fa-plus-circle text-warning mr-2"></i> Tambah Alternatif
                </a>
                <a href="{{ url('hitung/create') }}" class="list-group-item list-group-item-action">
                  <i class="fas fa-calculator text-danger mr-2"></i> Mulai Perhitungan Baru
                </a>
                <a href="{{ url('report') }}" class="list-group-item list-group-item-action">
                  <i class="fas fa-file-export text-info mr-2"></i> Export Laporan
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@section('scripts')
<!-- Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script>
  // Popularity Chart
  const popularityCtx = document.getElementById('popularityChart').getContext('2d');
  const popularityChart = new Chart(popularityCtx, {
    type: 'bar',
    data: {
      labels: ['Pantai Parangtritis', 'Candi Borobudur', 'Gunung Bromo', 'Danau Toba', 'Raja Ampat', 'Kawah Ijen', 'Taman Nasional Komodo'],
      datasets: [{
        label: 'Jumlah Pengunjung (ribu)',
        data: [45, 78, 65, 58, 42, 35, 52],
        backgroundColor: 'rgba(60, 141, 188, 0.8)',
        borderColor: 'rgba(60, 141, 188, 1)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  // Criteria Chart
  const criteriaCtx = document.getElementById('criteriaChart').getContext('2d');
  const criteriaChart = new Chart(criteriaCtx, {
    type: 'doughnut',
    data: {
      labels: ['Biaya', 'Fasilitas', 'Aksesibilitas', 'Keindahan Alam', 'Keamanan'],
      datasets: [{
        data: [25, 20, 15, 25, 15],
        backgroundColor: [
          'rgba(60, 141, 188, 0.8)',
          'rgba(210, 214, 222, 0.8)',
          'rgba(0, 192, 239, 0.8)',
          'rgba(0, 166, 90, 0.8)',
          'rgba(243, 156, 18, 0.8)'
        ],
        borderColor: [
          'rgba(60, 141, 188, 1)',
          'rgba(210, 214, 222, 1)',
          'rgba(0, 192, 239, 1)',
          'rgba(0, 166, 90, 1)',
          'rgba(243, 156, 18, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'bottom'
        }
      }
    }
  });
</script>
@endsection