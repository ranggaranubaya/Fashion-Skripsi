<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAW - Sistem Pendukung Keputusan</title>

  <!-- Google Font: Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap">
  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Bootstrap 4 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AdminLTE (customized for modern look) -->
  <link rel="stylesheet" href="{{ url('adminlte/dist/css/adminlte.min.css') }}">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f6f9;
    }

    /* Sidebar Styling */
    .main-sidebar {
      background: linear-gradient(180deg, #1a73e8 0%, #0d47a1 100%);
      transition: all 0.3s ease;
    }

    .sidebar-dark-primary .nav-link {
      color: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      margin: 5px 10px;
      padding: 12px;
      transition: all 0.3s ease;
    }

    .sidebar-dark-primary .nav-link:hover,
    .sidebar-dark-primary .nav-link.active {
      background-color: rgba(255, 255, 255, 0.2);
      color: white;
      transform: translateX(5px);
    }

    .brand-link {
      border-bottom: none !important;
      padding: 1.5rem 1rem;
      display: flex;
      align-items: center;
    }

    .brand-text {
      font-weight: 600;
      color: white;
      font-size: 1.5rem;
    }

    /* Content Wrapper */
    .content-wrapper {
      background: #fff;
      border-radius: 15px;
      margin: 20px;
      padding: 20px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .main-sidebar {
        transform: translateX(-250px);
      }
      .sidebar-open .main-sidebar {
        transform: translateX(0);
      }
      .content-wrapper {
        margin: 10px;
        padding: 15px;
      }
    }

    /* Table Styling */
    .table-modern {
      border: none;
      background: white;
      border-radius: 10px;
      overflow: hidden;
    }

    .table-modern th {
      background: #1a73e8;
      color: white;
      padding: 15px;
      font-weight: 600;
    }

    .table-modern td {
      padding: 15px;
      vertical-align: middle;
      transition: background 0.2s ease;
    }

    .table-modern tr:hover {
      background: #f1f3f5;
    }

    /* Button Styling */
    .btn-action {
      margin: 0 5px;
      padding: 5px 10px;
      border-radius: 5px;
      transition: all 0.2s ease;
    }

    .btn-action:hover {
      transform: translateY(-2px);
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    /* Card Animation */
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ url('adminlte/dist/img/AdminLTELogo.png') }}" alt="SAW Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text">SAW R</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('dashboard') }}" class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('wisata') }}" class="nav-link {{ request()->is('wisata*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-map-marked-alt"></i>
              <p>Data Wisata</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kriteria') }}" class="nav-link {{ request()->is('kriteria*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tasks"></i>
              <p>Kriteria</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('alternatif') }}" class="nav-link {{ request()->is('alternatif*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>Alternatif</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('hitung') }}" class="nav-link {{ request()->is('hitung*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-calculator"></i>
              <p>Perhitungan</p>
            </a>
          </li>
          <!-- Sidebar Menu 
          <li class="nav-item">
            <a href="{{ url('gallery') }}" class="nav-link {{ request()->is('hitung*') ? 'active' : '' }}">
              <i class="nav-icon fa-solid fa-panorama"></i>
              <p>Gallery</p>
            </a>
          </li> -->
          <li class="nav-item mt-3">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-arrow-left"></i>
              <p>Kembali</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  @yield('content')

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright © 2025 Disparpora</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('adminlte/dist/js/adminlte.min.js') }}"></script>
@yield('scripts')
</body>
</html>