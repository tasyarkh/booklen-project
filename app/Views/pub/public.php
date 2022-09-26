<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Booklen | Book Lending</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link href="pubtemp/assets/img/favicon.png" rel="icon">
  <link href="pubtemp/assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="pubtemp/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="pubtemp/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="pubtemp/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="pubtemp/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="pubtemp/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="pubtemp/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="pubtemp/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="pubtemp/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>Booklen</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">Fitur</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Mudahkan peminjaman buku mu menggunakan <span>Booklen</span></h1>
            <div class="text-center text-lg-start">
              <a href="<?= base_url('/login')?>" class="btn-get-started scrollto">Login</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="pubtemp/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="#1363DF">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="#47B5FF">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Fitur Yang terdapat dalam Booklen</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Peminjaman Buku</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-book-line" style="color: #5578ff;"></i>
              <h3><a href="">Memilih Buku Favorit</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">Riwayat Peminjaman</a></h3>
            </div>
          </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
              <p>Banyak Riwayat User</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p>Buku yang Tersedia</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          </div>
        </div>

      </div>
    </section>
    
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Mockup Booklen</h2>
        </div>

        <div class="row g-15" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="pubtemp/assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="pubtemp/assets/img/gallery/gallery-1.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="pubtemp/assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="pubtemp/assets/img/gallery/gallery-2.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="pubtemp/assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="pubtemp/assets/img/gallery/gallery-3.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>
      </div>
    </section>

    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="pubtemp/assets/img/testimonials/sya.jpeg" class="testimonial-img" alt="">
                <h3>Tasya Ramadhinta</h3>
                <h4>UI/UX Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Booklen sangat mudah digunakan dan memudahkan dalam proses peminjaman buku
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="pubtemp/assets/img/testimonials/ara2.jpeg" class="testimonial-img" alt="">
                <h3>Zahra Revana</h3>
                <h4>Penulis</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sangat Bagus
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="pubtemp/assets/img/testimonials/dian1.jpeg" class="testimonial-img" alt="">
                <h3>Dian Sifa</h3>
                <h4>pelukis</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Bukunya lengkap
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="pubtemp/assets/img/testimonials/ica2.jpeg" class="testimonial-img" alt="">
                <h3>Dalisya Hayoto</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Mantap banget booklen
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="pubtemp/assets/img/testimonials/thomas.jpeg" class="testimonial-img" alt="">
                <h3>Thomas Ariel</h3>
                <h4>Programmer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Booklen sangat bagus
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="pubtemp/assets/img/testimonials/vidi1.jpeg" class="testimonial-img" alt="">
                <h3>Vidi Ariel</h3>
                <h4>Tukang Bengkel</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Berguna banget
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apakah Booklen merupakan e-book?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                 Tidak
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Booklen bekerja sama dengan perpustakaan apa?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Booklen berkerja sama dengan perpustakaan Sekolah Prestasi Prima
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Booklen</h3>
              <p class="pb-3"><em>Gunakan Booklen dan Rasakan Pengalamannya</em></p>
              <p>
                Jakarta<br>
                Indonesisa<br><br>
                <strong>Phone:</strong> 0895329483971<br>
                <strong>Email:</strong> tasyaramadhinta@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-github"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-linkedin"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-behance"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-dribbble"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Peminjaman Buku</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">e-book</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Team SFTech</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">tasyaaaaa</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="pubtemp/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="pubtemp/assets/vendor/aos/aos.js"></script>
  <script src="pubtemp/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="pubtemp/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="pubtemp/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="pubtemp/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="pubtemp/assets/js/main.js"></script>

</body>

</html>