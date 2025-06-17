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

<body class="page-about">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/home" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/logomadiun.png" alt="Logo" class="logo-img"> <!-- aktifkan logo -->
        <h1 class="d-flex align-items-center">Wisata Kab Madiun</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about" class="active">About</a></li>
          <li><a href="/viewgallery">Gallery</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/rekomendasi">Rekomendasi</a></li>
          <li><a href="/dashboard">SPK SAW</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/sungai.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>About</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

   <!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4" data-aos="fade-up">
      <div class="col-lg-4">
        <div class="logo-container">
          <img src="assets/img/ayodolan.png" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-lg-8">
        <div class="content-card">
          <h3>Tentang Kami</h3>
          <p>
            Dinas Pariwisata Pemuda dan Olahraga (Disparpora) merupakan dinas 
            yang mempunyai tugas membantu Bupati untuk melaksanakan urusan pemerintahan 
            Daerah di bidang pariwisata, pemuda, dan olahraga serta tugas pembantuan.
          </p>
          <ul>
            <li onclick="alert('Temukan destinasi wisata terbaik di Kabupaten Madiun!')">
              <i class="bi bi-check-circle-fill"></i> Temukan destinasi wisata terbaik di Kabupaten Madiun.
            </li>
            <li onclick="alert('Nikmati keindahan alam, budaya, dan petualangan seru!')">
              <i class="bi bi-check-circle-fill"></i> Nikmati keindahan alam, budaya, dan petualangan seru.
            </li>
            <li onclick="alert('Dukung pariwisata lokal dengan berwisata di daerah sendiri!')">
              <i class="bi bi-check-circle-fill"></i> Dukung pariwisata lokal dengan berwisata di daerah sendiri.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Section -->

<style>
  /* About Section Modernization */
  .about {
    padding: 60px 0;
    background: #f5f7fa;
  }
  .about .logo-container {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
  }
  .about .logo-container:hover {
    transform: scale(1.05);
  }
  .about .logo-container img {
    width: 100%;
    height: auto;
    animation: pulse 3s infinite ease-in-out;
  }
  @keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
  }
  .about .content-card {
    background: #fff;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .about .content-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
  }
  .about .content-card h3 {
    color: #2c3e50;
    font-weight: 700;
    margin-bottom: 20px;
  }
  .about .content-card p {
    color: #555;
    line-height: 1.6;
  }
  .about .content-card ul li {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    cursor: pointer;
    transition: color 0.3s ease;
  }
  .about .content-card ul li:hover {
    color: #007bff;
  }
  .about .content-card ul li i {
    color: #28a745;
    margin-right: 10px;
    transition: transform 0.3s ease;
  }
  .about .content-card ul li:hover i {
    transform: scale(1.2);
  }
  /* Responsive Adjustments */
  @media (max-width: 992px) {
    .about .content-card {
      padding: 20px;
    }
    .about .logo-container {
      margin-bottom: 20px;
    }
  }
</style>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Wisata Kab Madiun</span>
            </a>
            <p>Madiun: Pesona Alam dan Budaya di Setiap Langkah</p>
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