<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wisata Aja Yuk</title>
  <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="https://unpkg.com/photo-sphere-viewer@4/dist/photo-sphere-viewer.css" rel="stylesheet" />

  @yield('head') {{-- Tambahan jika dibutuhkan --}}
</head>
<body class="page-blog">

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">Wisata Kab Madiun</h1>
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/viewgallery">Gallery</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/rekomendasi">Rekomendasi</a></li>
          <li><a href="/dashboard">SPK SAW</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main" style="margin-top: 100px;">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <span>Wisata Kab Madiun</span>
            </a>
            <p>Madiun: Pesona Alam dan Budaya di Setiap Langkah.</p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="https://unpkg.com/uevent@2/browser.js"></script>
  <script src="https://unpkg.com/three@0.150.1/build/three.min.js"></script>
  <script src="https://unpkg.com/photo-sphere-viewer@4/dist/photo-sphere-viewer.js"></script>

  @yield('scripts') {{-- Script khusus halaman --}}
</body>
</html>
