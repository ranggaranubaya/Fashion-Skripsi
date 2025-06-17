<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wisata Aja Yuk</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- foto360 -->
  <link rel="stylesheet" href="https://unpkg.com/photo-sphere-viewer@4/dist/photo-sphere-viewer.css" />


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

<body class="page-blog">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/home" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">Rekomendasi Brand Fashion</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/viewgallery">Gallery</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/rekomendasi" class="active">Rekomendasi</a></li>
          <li><a href="/dashboard">SPK SAW</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/header1.png');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Rekomendasi</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Rekomendasi</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="row gy-5 posts-list">

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/nongkoijo.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="blog-details.html">Nongko Ijo</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">sakinah</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">May 4, 2023</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">1 Comments</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Hutan dengan pohon pinus yang masih rindang ditambah ada beberapa gazebo. Tiket masuknya sebesar Rp. 5.000 kalian 
                      sudah bisa menikmati segarnya udara. Disana juga terdapat warung yang bisa kalian nikmati jajanannya, dibawah pohon pinus 
                      ini terdapat sungai yang alirannya digunakan untuk PLTA. Terdapat dua PLTA yang berada di Desa Kare yaitu, PLTA Giringan di
                      Desa Kepel dan PLTA Gulang di Desa Wiran.

                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                  <a href="https://go-wisata.id/wisata/nongko-ijo">Read More <i class="bi bi-arrow-right"></i></a>
                  </i><a href="https://go-wisata.id/wisata/nongko-ijo" class="link-underline-secondary">Nongko Ijo</a></i>
                  </div>
                  <!-- Tombol dan viewer 360 -->
                  <a href="{{ url('/view360?img=nongkoijo360.jpg') }}" class="btn btn-primary mt-3">View 360</a>
                  <div id="viewer360" style="width: 100%; height: 500px; display: none; margin-top: 20px;"></div>

                  <!-- Google Maps Embed -->
                  <div class="mt-4">
                    <h5>Lokasi Nongko Ijo</h5>
                    <div class="ratio ratio-16x9 mb-2">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.5143968974885!2d111.68220107609602!3d-7.735131676670195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79afe6906b5b9b%3A0x596fc20d052be1ff!2sPine%20Forest%20Nongko%20IJO!5e0!3m2!1sen!2sid!4v1746046077472!5m2!1sen!2sid" 
                      width="600" 
                      height="450" 
                      style="border:0;" 
                      allowfullscreen="" 
                      loading="lazy" 
                      referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <a href="https://maps.app.goo.gl/ceVjqQVgQmLxh6oc9" target="_blank" class="btn btn-outline-success btn-sm">
                      Buka di Google Maps
                    </a>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/sekarwilis.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="/rekomendasi">Sekar Wilis</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Dinda</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">April 10, 2023</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">6 Comments</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Nikmati sensasi kuliner khas Jawa Timur yang otentik di Sekar Wilis Resto — perpaduan cita rasa 
                      tradisional, suasana asri pegunungan, dan pelayanan hangat yang membuat setiap kunjungan tak terlupakan. 
                      Dari nasi pecel hingga rawon, setiap hidangan disajikan dengan bahan segar dan racikan bumbu lokal. 
                      Cocok untuk wisata keluarga, gathering, atau sekadar melepas penat sambil menikmati pemandangan alam yang 
                      menyejukkan.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://go-wisata.id/kuliner/sekar-wilis">Read More <i class="bi bi-arrow-right"></i></a>
                    </i><a href="https://go-wisata.id/kuliner/sekar-wilis" class="link-underline-secondary">Sekar Wilis</a></i>
                  </div>

                    <!-- Tombol dan viewer 360 -->
                    <<a href="{{ url('/view360?img=sekarwilis360.jpg') }}" class="btn btn-primary mt-3">View 360</a>
                    <div id="viewer360" style="width: 100%; height: 500px; display: none; margin-top: 20px;"></div>
                    
                    <!-- Google Maps Embed -->
                  <div class="mt-4">
                    <h5>Lokasi Sekar Wilis</h5>
                    <div class="ratio ratio-16x9 mb-2">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.390458539588!2d111.69727107609627!3d-7.7483440768239635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79aff2833d7301%3A0xd66901fc900f0c3b!2sSekar%20Wilis%20Resto%20Kare!5e0!3m2!1sen!2sid!4v1746046184732!5m2!1sen!2sid" 
                      width="600" 
                      height="450" 
                      style="border:0;" 
                      allowfullscreen="" 
                      loading="lazy" 
                      referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    </div>
                    <a href="https://maps.app.goo.gl/ujt1hS9pzdo9mhMX7" target="_blank" class="btn btn-outline-success btn-sm">
                      Buka di Google Maps
                    </a>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/airterjunselampir.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="/rekomendasi">Air Terjun Selampir</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Aisyah</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">March 14, 2023</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">9 Comments</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Air terjun yang terletak di lereng gunung Wilis, tepatnya di Desa Kare. Destinasi ini 
                      masih satu wilayah dengan perkebunan kopi Kandangan di wilayah Kabupaten Madiun. Dengan 
                      ketinggian 400 mdpl serta luas sekitar 6 Ha, menjadikan tempat ini begitu sejuk dan nyaman untuk 
                      dinikmati. Dimanjakan dengan sumber mata air dari bawah gunung dan muncul di atas pepohonan yang rindang.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://go-wisata.id/wisata/air-terjun-sewerslampir">Read More <i class="bi bi-arrow-right"></i></a>
                    </i><a href="https://go-wisata.id/wisata/air-terjun-sewerslampir" class="link-underline-secondary">Air Terjun Selampir</a></i>
                  </div>

                  <!-- Tombol dan viewer 360 -->
                  <a href="{{ url('/view360?img=airterjunselampir360.jpg') }}" class="btn btn-primary mt-3">View 360</a>
                  <div id="viewer360" style="width: 100%; height: 500px; display: none; margin-top: 20px;"></div>

                  <!-- Google Maps Embed -->
                  <div class="mt-4">
                    <h5>Lokasi Air Terjun Selampir</h5>
                    <div class="ratio ratio-16x9 mb-2">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15813.059591981808!2d111.68172981535425!3d-7.761706614926626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79afc8200a9027%3A0x3ee8d0aaeb8dfd34!2sKedung%20Malem%20Waterfall!5e0!3m2!1sen!2sid!4v1746046479636!5m2!1sen!2sid" 
                      width="600" 
                      height="450" 
                      style="border:0;" 
                      allowfullscreen="" 
                      loading="lazy" 
                      referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    </div>
                    <a href="https://maps.app.goo.gl/Fvr6aJW3yJZbBZCw7" target="_blank" class="btn btn-outline-success btn-sm">
                      Buka di Google Maps
                    </a>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/aswinloka.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="/rekomendasi"> Aswin Loka</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Rifki</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">May 12, 2023</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">0 Comments</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      sarana wisata yang edukatif yang berada di Dusun Seweru Desa Kare Kare. Aswin Loka merupakan 
                      wahana belajar secara factual terhadap ekosistem lingkungan hidup yang memberikan warna dan 
                      nilai kemanusiaan. Terdapat tempat pertemuan di pusat bangunannya, sanggar, gamelan dan terdapat 
                      phon-pohon istimewa seperti pohon kepel, pohon cendana, dan pohon nagasari.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://go-wisata.id/wisata/aswin-loka">Read More <i class="bi bi-arrow-right"></i></a>
                    </i><a href="https://go-wisata.id/wisata/aswin-loka" class="link-underline-secondary">Aswin Loka</a></i>
                  </div>

                  <!-- Tombol dan viewer 360 -->
                  <a href="{{ url('/view360?img=gunung_indo1.jpg') }}" class="btn btn-primary mt-3">View 360</a>
                  <div id="viewer360" style="width: 100%; height: 500px; display: none; margin-top: 20px;"></div>

                  <!-- Google Maps Embed -->
                  <div class="mt-4">
                    <h5>Lokasi Aswin Loka</h5>
                    <div class="ratio ratio-16x9 mb-2">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.406458402083!2d111.6979822760962!3d-7.746639676804079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79afdd0eebcd2b%3A0x2d6e7585df3c0e32!2zQXN3aW4gTG9rYSBTZXdlcnUgLSDqpoTqprHqp4Dqpq7qprbqpqTqp4Dqpq3qprrqprTqpo_qprHqprzqpq7qprzqpqvqprg!5e0!3m2!1sen!2sid!4v1746046716910!5m2!1sen!2sid" 
                      width="600" 
                      height="450" 
                      style="border:0;" 
                      allowfullscreen="" 
                      loading="lazy" 
                      referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    </div>
                    <a href="https://maps.app.goo.gl/wEVQTPjqRhvfJWYW7" target="_blank" class="btn btn-outline-success btn-sm">
                      Buka di Google Maps
                    </a>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/sarangan.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="blog-details.html">Telaga Sarangan</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Zizo</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jan 25, 2023</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">3 Comments</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Telaga Sarangan, juga dikenal sebagai Telaga Pasir adalah telaga alami yang berada di 
                      ketinggian 1.200 meter di atas permukaan laut dan terletak di lereng Gunung Lawu, 
                      Kecamatan Plaosan, Magetan. Telaga ini berjarak sekitar 16 kilometer arah barat Kota 
                      Magetan. Telaga ini luasnya sekitar 30 hektare dan berkedalaman 28 meter. Dengan suhu 
                      udara antara 15 hingga 20 derajat Celsius. Telaga Sarangan mampu menarik ratusan ribu 
                      pengunjung setiap tahunnya.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="/https://id.wikipedia.org/wiki/Telaga_Sarangan">Read More <i class="bi bi-arrow-right"></i></a>
                    </i><a href="https://id.wikipedia.org/wiki/Telaga_Sarangan" class="link-underline-secondary">Telaga Sarangan</a></i>
                  </div>

                  <a href="{{ url('/view360?img=sarangan360.jpg') }}" class="btn btn-primary mt-3">View 360</a>
                  <div id="viewer360" style="width: 100%; height: 500px; display: none; margin-top: 20px;"></div>

                  <!-- Google Maps Embed -->
                  <div class="mt-4">
                    <h5>Lokasi Telaga Sarangan</h5>
                    <div class="ratio ratio-16x9 mb-2">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15816.221345457025!2d111.20747826533798!3d-7.677200461991663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e798e9941fbceb1%3A0x49bf06f3bb4505db!2sSarangan%20Lake!5e0!3m2!1sen!2sid!4v1746046813489!5m2!1sen!2sid" 
                      width="600" 
                      height="450" 
                      style="border:0;" 
                      allowfullscreen="" 
                      loading="lazy" 
                      referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    </div>
                    <a href="https://maps.app.goo.gl/To9n5CdREmxtJ5y1A" target="_blank" class="btn btn-outline-success btn-sm">
                      Buka di Google Maps
                    </a>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/karimunjawa.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="blog-details.html">Karimun Jawa</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Rama</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">Feb 14, 2022</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">8 Comments</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Karimunjawa adalah kepulauan di Laut Jawa yang termasuk dalam Kabupaten Jepara, Jawa Tengah. 
                      Dengan luas daratan ±1.500 hektare dan perairan ±110.000 hektare, Karimunjawa kini dikembangkan 
                      menjadi pesona wisata Taman Laut yang mulai banyak digemari wisatawan lokal maupun mancanegara.
                      Menurut legenda lokal, Karimunjawa ditemukan oleh Sunan Nyamplungan. Kala itu, Sunan Muria memerintahkan Amir 
                      Hasan ke sebuah pulau yang terlihat kremun-kremun (kabur) dari puncak Gunung Muria untuk mengembangkan ilmu agamanya. 
                      Karena terlihat kremun-kremun, akhirnya pulaunya dinamai "Karimunjawa" hingga kini.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://id.wikipedia.org/wiki/Kepulauan_Karimunjawa">Read More <i class="bi bi-arrow-right"></i></a>
                    </i><a href="https://id.wikipedia.org/wiki/Kepulauan_Karimunjawa" class="link-underline-secondary">Karimun jawa</a></i>
                  </div>

                  <a href="{{ url('/view360?img=karimunjawa.jpg') }}" class="btn btn-primary mt-3">View 360</a>
                  <div id="viewer360" style="width: 100%; height: 500px; display: none; margin-top: 20px;"></div>

                  <!-- Google Maps Embed -->
                  <div class="mt-4">
                    <h5>Lokasi Karimun Jawa</h5>
                    <div class="ratio ratio-16x9 mb-2">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63506.959527482366!2d110.4116313289971!3d-5.829526514702954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e73ce192ccd0b69%3A0x28f5b92d9c1af25e!2sKarimun%20Jawa%20island!5e0!3m2!1sen!2sid!4v1746116429595!5m2!1sen!2sid" 
                      width="600" 
                      height="450" 
                      style="border:0;" 
                      allowfullscreen="" 
                      loading="lazy" 
                      referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    </div>
                    <a href="https://maps.app.goo.gl/H8M49y8TAVSB6w9t7" target="_blank" class="btn btn-outline-success btn-sm">
                      Buka di Google Maps
                    </a>
                  </div>

                </article>
              </div><!-- End post list item -->

            </div><!-- End blog posts list -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
              <li class="active"><a href="rekomendasi">1</a></li>  
              <li> <a href="rekomendasi2">2</a></li>
              <li> <a href="rekomendasi3">3</a></li>
              </ul>
            </div><!-- End blog pagination -->

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">Gunung <span>(25)</span></a></li>
                  <li><a href="#">Hutan <span>(12)</span></a></li>
                  <li><a href="#">Air Terjun <span>(5)</span></a></li>
                  <li><a href="#">Pantai <span>(22)</span></a></li>
                  <li><a href="#">Air Terjun <span>(8)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="assets/img/rek3.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="/rekomendasi">histori tentang Karimun Jawa</a></h4>
                      <time datetime="2020-01-01">March 14, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/rek2.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="/rekomendasi">histori tentang Bromo</a></h4>
                      <time datetime="2020-01-01">April 10, 2020</time>
                    </div>
                  

                </div>

              </div><!-- End sidebar recent posts-->

              <br>
              <br>
              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">Gunung</a></li>
                  <li><a href="#">Trend</a></li>
                  <li><a href="#">Air Terjun</a></li>
                  <li><a href="#">Hutan</a></li>
                  <li><a href="#">Kuliner</a></li>
                  <li><a href="#">Wisata</a></li>
                  <li><a href="#">Explore</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Wisata Kab Madiun</span>
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

  <script src="https://unpkg.com/uevent@2/browser.js"></script>
<script src="https://unpkg.com/three@0.150.1/build/three.min.js"></script>
<script src="https://unpkg.com/photo-sphere-viewer@4/dist/photo-sphere-viewer.js"></script>

<script>
  document.getElementById('view360btn').addEventListener('click', function () {
    const container = document.getElementById('viewer360');
    container.style.display = 'block';

    new PhotoSphereViewer.Viewer({
      container: container,
      panorama: '/assets/img/Panorama Curug Bayan.jpeg', // Ganti dengan gambar kamu
      navbar: ['zoom', 'fullscreen'],
    });
  });
</script>


</body>

</html>