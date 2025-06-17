<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wisata Aja Yuk</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
      <a href="/home" class="logo d-flex align-items-center">
        <img src="assets/img/logomadiun.png" alt="Logo" class="logo-img"> <!-- aktifkan logo -->
        <h1 class="d-flex align-items-center ms-2">Wisata Kab Madiun</h1> <!-- kasih margin-left -->
      </a>
  
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
  
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/home" class="active">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/viewgallery">Gallery</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/rekomendasi">Rekomendasi</a></li>
          <li><a href="{{ url ('spk') }}">SPK SAW</a></li>
        </ul>
      </nav><!-- .navbar -->
  
    </div>
  </header><!-- End Header -->
  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Go Wisata!</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Kalian suka bingung mau liburan ke mana? Kabupaten Madiun punya banyak
               pilihan wisata seru, mulai dari keindahan alam, budaya lokal, sampai petualangan 
               seru di kaki Gunung Wilis. Yuk, jelajahi pesona Madiun bersama kami!</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="/about" class="btn-get-started">Selengkapnya</a>
            <a href="https://www.youtube.com/watch?v=EPO_J4yvDzs" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span><img src="assets/img/logo.png" class="img-fluid" alt="">Wisata Kab Madiun</span>
            </a>
            <p>Madiun: Pesona Alam dan Budaya di Setiap Langkah.</p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="/">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Rangga <br>
              Indonesia,<br>
              Jatim <br><br>
              <strong>Phone:</strong> +62 8778 0749 989<br>
              <strong>Email:</strong> skripsinih@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>bootstrap</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer><!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>