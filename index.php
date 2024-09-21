<?php
session_start(); // Mulai session

// Periksa apakah pengguna sudah login
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
//     header("Location: login.php"); // Redirect ke halaman login jika belum login
//     exit();
// }
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT PAK</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#about">Profil Perusahaan</a></li>
              <li><a href="#visi-misi">Visi & Misi</a></li>
              <li><a href="#team">Profile Management</a></li>
              <li><a href="#pricing">Pencapaian</a></li>
            </ul>
          </li>
          <li><a href="#services">Produk</a></li>
          <li><a href="#portfolio">Pengolahan</a></li>
          <li><a href="#testimonials">Testimoni</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="register.php">Register</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>PT PESONA AGRI KHATULISTIWA</h1>
            <p>Produk coklat Pesona Bultiya, cokelat yang terbuat dari biji kakao premium yang ditanam di Bulungan, Kalimantan Utara.</p>
            <div class="d-flex">
              <a href="login.php" class="btn-get-started">Login</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/cocoa.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/enm.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/pkn.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/mek.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/sas.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/multi-sumber-alam.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/pak.png" class="img-fluid" alt=""></div>
          </div>
        </div>
      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Profil Perusahaan</h2>
      </div><!-- End Section Title -->

      <div class="about">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
            PT Pesona Agri Khatulistiwa adalah perusahaan berbasis di Bulungan, Kalimantan Utara, yang bergerak di bidang produksi coklat lokal berkualitas tinggi. 
            Mengusung produk unggulan coklat Bultiya, dengan keunggulan meliputi :
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Kualitas Premium</strong>: Menggunakan bahan baku kakao terbaik dari perkebunan lokal.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Ekonomi Lokal</strong>: Memanfaatkan sumber daya alam lokal dan memberdayakan petani kakao di Bulungan, berkontribusi pada perekonomian daerah</span></li>
              <li><i class="bi bi-check2-circle"></i> <span><strong>Keberlanjutan Lingkungan</strong>: Mengedepankan praktik produksi yang ramah lingkungan dan berkelanjutan dalam setiap tahap proses pengolahan coklat.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Dengan mengedepankan nilai-nilai ini, PT Pesona Agri Khatulistiwa terus berinovasi untuk menghadirkan produk yang tidak hanya memuaskan selera pelanggan, tetapi juga mendukung keberlanjutan sosial dan lingkungan. </p>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Pertanyaan umum tentang </span><strong><br>PT Pesona Agri Khatulistiwa</strong></h3>
              <p>
              Temukan jawaban dari pertanyaan-pertanyaan umum yang sering diajukan mengenai PT Pesona Agri Khatulistiwa. Berikut adalah beberapa pertanyaan yang mungkin Anda miliki tentang perusahaan ini :</p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">

                <h3><span>01</span> Kapan berdirinya perusahaan ini ?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>02</span> Dimanakah lokasi perusahaan ini?</h3>
                <div class="faq-content">
                  <p>Tempat produksi cokelat bultiya ini berada di Jl. jeruk Tanjung Selor, Bulungan Kalimantan Utara.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>03</span> Apa produk unggulan dari PT Pesona Agri Khatulistiwa?</h3>
                <div class="faq-content">
                  <p>Produk unggulan dari PT Pesona Agri Khatulistiwa adalah cokelat Bultiya, yang tersedia dalam dua varian: 35% Milk Chocolate Couverture dan 30% Milk Chocolate Couverture. Keduanya menggunakan bahan baku kakao lokal berkualitas tinggi, memberikan cita rasa yang kaya dan tekstur lembut yang cocok untuk berbagai kebutuhan cokelat premium.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3><span>04</span> Bagaimana PT Pesona Agri Khatulistiwa mendukung masyarakat lokal dan lingkungan?</h3>
                <div class="faq-content">
                  <p>PT Pesona Agri Khatulistiwa mendukung masyarakat lokal dengan memberdayakan petani kakao di Bulungan, Kalimantan Utara, melalui kemitraan berkelanjutan yang memberikan dampak positif pada perekonomian daerah. Selain itu, perusahaan ini juga menerapkan praktik produksi yang ramah lingkungan, seperti penggunaan bahan baku lokal dan metode pengolahan yang menjaga kelestarian lingkungan, sehingga memberikan manfaat jangka panjang bagi komunitas dan alam sekitarnya.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/cocoa3.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Skills Section -->
    <section id="visi-misi" class="visi-misi section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-center">
            <img src="assets/img/cocoa5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Visi dan Misi</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>

          </div>

              <!-- <div class="progress">
                <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>   -->
              <!-- End Skills Item -->
<!-- 
              <div class="progress">
                <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div> -->
              <!-- End Skills Item -->

              <!-- <div class="progress">
                <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div> -->
              <!-- End Skills Item -->

              <!-- <div class="progress">
                <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div> -->
              <!-- End Skills Item -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Produk</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-xl-6 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><img src="assets/img/cocoa6.png" alt="Service Icon" class="mx-auto"></div>
              <h4><a href="" class="stretched-link">35% Milk Chocolate Couvertur</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              <div class="mt-4">
                <a href="#" class="buy-btn">Buy Now</a>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-6 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><img src="assets/img/cocoa7.png" alt="Service Icon" class="mx-auto"></div>
              <h4><a href="" class="stretched-link">30% Milk Chocolate Couvertur</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              <div class="mt-4">
                <a href="#" class="buy-btn">Buy Now</a>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <!-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div> -->
          <!-- End Service Item -->
<!-- 
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div> -->
          <!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cocoa8.png" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pengolahan</h2>
        <p>Berikut ini adalah alur produksi cokelat susu kovertur </p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/masonry-portfolio/alur-produksi.jpeg" class="img-fluid" alt="">
            <h4>Crusher</h4>
            <p>Crusher menghancurkan biji kakao dengan memanfaatkan mekanisme seperti gilingan atau roller untuk memecah biji menjadi pecahan kecil. Proses ini memisahkan inti biji (nib) dari kulit luar. Hasil dari proses ini adalah nib kakao yang siap untuk digiling lebih lanjut menjadi pasta kakao, serta kulit kakao yang dapat dipisahkan untuk digunakan dalam produk lain.</p>
            <h4>Ball Mill</h4>
            <p>Stone mill menggunakan dua batu besar yang berputar untuk menghaluskan nib kakao menjadi pasta atau massa kakao. Proses ini mengubah nib yang kasar menjadi pasta yang halus, dan juga dapat memisahkan lemak kakao (mentega kakao) dari padatan kakao. Stone mill sering digunakan dalam pembuatan cokelat untuk menghasilkan tekstur yang halus dan merata dalam produk akhir.</p>
            <h4>Pencetakan</h4>
            <p>Pencetakan melibatkan menuangkan cokelat cair ke dalam cetakan dengan bentuk yang diinginkan, seperti batangan atau bentuk khusus. Cetakan kemudian didinginkan untuk mengeraskan cokelat dan memastikan bentuknya tetap stabil. Proses ini penting untuk menghasilkan produk cokelat dengan bentuk dan tekstur yang konsisten.</p>
            <h4>Packing Primer</h4>
            <p>Packing primer aluminum foil melibatkan membungkus produk cokelat dengan foil aluminium yang memberikan perlindungan terhadap udara, kelembapan, dan cahaya. Foil ini menjaga kesegaran dan kualitas cokelat serta melindunginya dari kontaminasi eksternal. Kemasan ini juga sering digunakan untuk meningkatkan daya tarik produk dan memberikan informasi label.</p>
            <h4>Packing Sekunder</h4>
              <p>Packing sekunder kemasan dus melibatkan menempatkan produk cokelat yang sudah dibungkus dalam foil aluminium ke dalam kotak karton. Kemasan dus ini biasanya mencantumkan informasi mengenai komposisi produk, termasuk berat, bahan, dan informasi nutrisi. Kemasan sekunder ini memberikan perlindungan tambahan selama penyimpanan dan transportasi, serta memudahkan distribusi dan penjualan produk di ritel.</p>
          </div>
          <div class="col-lg-6">
            <div class="portfolio-info">
              <h4>Biji dari Petani</h4>
              <p>Biji kakao kering dari petani adalah hasil fermentasi dan pengeringan dengan kadar air sekitar 6-7%. Berwarna cokelat tua, bertekstur kasar, dan memiliki aroma khas cokelat yang sedikit pahit. Sebelum dikirim ke pabrik, biji dibersihkan dari kotoran dan siap diolah menjadi produk seperti cokelat atau bubuk kakao.</p>
              <h4>Penanganan Biji</h4>
              <p>Penanganan atau sortasi dilakukan untuk memeriksa kualitas biji. Biji yang masih memiliki kadar air terlalu tinggi akan dipisahkan dan dikeringkan kembali, baik melalui penjemuran ulang atau menggunakan alat pengering. Ideal kadar air pada biji kakao 6%-7%. Proses ini penting untuk memastikan biji mencapai kadar air yang ideal, sehingga biji siap untuk diproses lebih lanjut tanpa risiko kerusakan atau penurunan kualitas.</p>
              <h4>Multi Purpose Roaster</h4>
              <p>Roaster adalah proses pemanggangan biji kakao pada suhu 120°C hingga 150°C untuk mengembangkan rasa dan aroma cokelat. Proses ini juga membantu mengurangi kelembapan dan mempermudah pemisahan kulit dari inti biji (nib). Roasting meningkatkan cita rasa cokelat yang khas dan menyiapkan biji untuk proses pengolahan lebih lanjut, seperti pemurnian dan penggilingan.</p>
              <h4>Cooler</h4>
              <p>Cooler adalah tahap di mana biji kakao yang telah dipanggang didinginkan dengan cepat untuk menghentikan proses pemanasan. Biji biasanya didinginkan menggunakan udara dingin atau alat pendingin khusus. Proses ini penting untuk menghindari pembentukan uap air yang dapat mempengaruhi kualitas biji.</p>
              <h4>Stone Mill</h4>
              <p>Stone mill menggunakan dua batu besar yang berputar untuk menghaluskan nib kakao menjadi pasta atau massa kakao. Proses ini mengubah nib yang kasar menjadi pasta yang halus, dan juga dapat memisahkan lemak kakao (mentega kakao) dari padatan kakao. Stone mill sering digunakan dalam pembuatan cokelat untuk menghasilkan tekstur yang halus dan merata dalam produk akhir.</p>
              <h4>Vertical Tempering</h4>
              <p>Vertical tempering mengolah cokelat dengan memanaskan dan mendinginkannya dalam mesin tempering vertikal. Proses ini memastikan bahwa cokelat mencapai suhu dan konsistensi yang tepat untuk kristalisasi yang optimal. Teknik ini menghasilkan cokelat yang memiliki tekstur halus dan kilap yang baik, serta menghindari pembentukan kristal lemak yang tidak diinginkan.</p>
              <h4>Showcase</h4>
              <p>Showcase adalah fase di mana produk cokelat, seperti batangan atau praline, dipamerkan secara visual untuk menilai kualitas, desain, dan presentasinya. Ini bisa dilakukan melalui sampel di toko, pameran, atau dalam materi pemasaran. Tujuannya adalah untuk menarik perhatian konsumen dan menyoroti keunggulan produk cokelat yang telah diproduksi.</p>
            </div>
          </div>
        </div>
      </div>

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Profile Management</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pencapaian</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="achievement-item">
              <img src="assets/img/achievement/pencapaian2.png" class="img-fluid" alt="">
              <h3>1000+ Projects Completed</h3>
              <p>Quam adipiscing vitae proin</p>
              <span><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></span>
              <span><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></span>
              <span><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></span>
            </div>
          </div><!-- End Achievement Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="achievement-item featured">
              <img src="assets/img/achievement/pencapaian2.png" class="img-fluid" alt="">
              <h3>500+ Happy Clients</h3>
              <p>Quam adipiscing vitae proin</p>
              <span><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></span>
              <span><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></span>
              <span><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></span>
            </div>
          </div><!-- End Achievement Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="achievement-item">
              <img src="assets/img/achievement/pencapaian2.png" class="img-fluid" alt="">
              <h3>10+ Years of Experience</h3>
              <p>Quam adipiscing vitae proin</p>
              <span><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></span>
              <span><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></span>
              <span><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></span>
            </div>
          </div><!-- End Achievement Item -->
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pertanyaan Lainnya</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Ada berapa lokasi tempat penanaman kakao lokal yang digunakan</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah PT Pesona Agri Khatulistiwa melayani pembelian dalam jumlah besar</h3>
                <div class="faq-content">
                  <p>Ya, PT Pesona Agri Khatulistiwa melayani pembelian dalam jumlah besar baik untuk keperluan bisnis maupun industri. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah PT Pesona Agri Khatulistiwa terbuka untuk kolaborasi dengan petani kakao lain</h3>
                <div class="faq-content">
                  <p>PT Pesona Agri Khatulistiwa selalu terbuka untuk berkolaborasi dengan petani kakao lain, terutama yang berada di sekitar Kalimantan Utara. Kami percaya bahwa kolaborasi yang baik dengan petani lokal akan mendukung pertumbuhan industri cokelat dan meningkatkan kualitas hidup komunitas petani.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana cara PT Pesona Agri Khatulistiwa memastikan kualitas produknya</h3>
                <div class="faq-content">
                  <p>PT Pesona Agri Khatulistiwa memastikan kualitas produknya melalui pengawasan ketat pada setiap tahap produksi, mulai dari pemilihan biji kakao hingga proses pengolahan akhir. Kami menerapkan standar mutu tinggi dan melakukan uji kualitas untuk memastikan setiap produk cokelat yang dihasilkan memenuhi ekspektasi pelanggan dalam hal cita rasa dan tekstur.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah PT Pesona Agri Khatulistiwa menerima kunjungan pabrik atau tur edukasi</h3>
                <div class="faq-content">
                  <p>Ya, PT Pesona Agri Khatulistiwa menerima kunjungan pabrik dan tur edukasi bagi pihak yang tertarik untuk mempelajari proses produksi cokelat kami. Kami menyediakan kesempatan bagi para pengunjung untuk melihat langsung bagaimana cokelat Bultiya diproduksi, mulai dari pengolahan biji kakao hingga produk akhir, serta belajar tentang upaya kami dalam mendukung keberlanjutan dan pemberdayaan petani lokal.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Faq 2 Section -->

   <!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-6">
        <div class="info-wrap">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Alamat</h3>
              <p>Jl. Jeruk No.21, RT.32/RW.11 Tj.Selor Hilir, Kec. Tj.Selor, Kabupaten Bulungan, Kalimantan Utara 77216</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>info@example.com</p>
            </div>
          </div><!-- End Info Item -->
        </div>
      </div>

      <div class="col-lg-7">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15939.518033650647!2d117.35125626548967!3d2.8511306840917316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3213cf331ce8b1a3%3A0xb05c99a03fddebcd!2sRumah%20Cokelat%20Bultiya!5e0!3m2!1sid!2sus!4v1725947160864!5m2!1sid!2sus" width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </form><!-- End Contact Form -->
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

  </main>

  <footer id="footer" class="footer">
    <div class="container copyright text-center mt-10">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">PT Pesona Agri Khatulistiwa</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>