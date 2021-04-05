<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pengaduan Masyarakat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="{{asset('landing-page/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('landing-page/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('landing-page/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing-page/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('landing-page/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('landing-page/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section class="hero">
    <div class="container text-center">

      <div class="col-md-12">
        <h1>
          Adukan Masalah Anda
        </h1>

        <p class="tagline">
            laporan Anda langsung Masuk kepada Ketua RT 03 Cinere Depok
        </p>
        <a class="btn btn-full scrollto" href="{{asset('/register')}}">Adukan Sekarang</a>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="assets/img/logo-nav.png" alt=""></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="{{asset('/login')}}" class="mr-5">Login/Daftar</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#features">Sistem Kerja</a></li>
          <li><a href="#team">Team</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section class="about" id="about">

      <div class="container text-center">
        <h2>
          Tentang Pengaduan Masyarakat
        </h2>

        <p>
            Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di Indonesia belum terkelola secara efektif dan terintegrasi.
            <br>Masing-masing organisasi penyelenggara mengelola pengaduan secara parsial dan tidak terkoordinir dengan baik.
        </p>

        <div class="row stats-row">
          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">100</span> Keamanan Identitas
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">100</span> Keamanan Laporan
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">100</span> Keamanan Akun
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">100</span> Pengerjaan Tepat Waktu
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section class="features" id="features">

      <div class="container">
        <h2 class="text-center">
          Sistem Kerja Website
        </h2>

        <div class="row">

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-rocket"></span>
                </div>
              </div>

              <div>
                <h3>
                  Tulis Laporan
                </h3>

                <p>
                    Laporkan keluhan atau aspirasi anda dengan<br> jelas dan lengkap sertakan foto jika ada
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-envelope"></span>
                </div>
              </div>

              <div>
                <h3>
                  Proses Verifikasi
                </h3>

                <p>
                    Laporan anda akan masuk kedalam folder <br>Ketua RT untuk proses pengerjaan
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-bell"></span>
                </div>
              </div>

              <div>
                <h3>
                  Proses Tindak Lanjut
                </h3>

                <p>
                  Setelah laporan diterima Ketua RT akan <br> menindak lanjuti laporan masyarakat
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-database"></span>
                </div>
              </div>

              <div>
                <h3>
                  Beri Tanggapan
                </h3>

                <p>
                  Setelah pengerjaan sudah selesai Ketua RT <br>akan mengirimkan pesan untuk anda
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-dashboard"></span>
                </div>
              </div>

              <div>
                <h3>
                  Selesai
                </h3>
                <p>
                  Selamat Aduan Anda sudah berhasil tersampaikan dan sudah di selesaikan oleh Ketua RT
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Features Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" id="team">
      <div class="container">
        <h2 class="text-center">
          Pembuat website
        </h2>

        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href=""><img alt="" class="team-img" src="assets/img/team-1.jpg">
                <div class="card-title-wrap">
                  <span class="card-title">Ario Bna</span> <span class="card-text">Art Director</span>
                </div>

              </a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="assets/img/team-2.jpg">
                <div class="card-title-wrap">
                  <span class="card-title">Ario Kousei</span> <span class="card-text">Animasi Warna</span>
                </div>

              </a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="assets/img/team-3.jpg">
                <div class="card-title-wrap">
                  <span class="card-title">Ario Purnomo</span> <span class="card-text">Design Website</span>
                </div>

              </a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="assets/img/team-4.jpg">
                <div class="card-title-wrap">
                  <span class="card-title">Muhammad Ario </span> <span class="card-text">Endorsement</span>
                </div>

              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

  <!-- ======= Footer ======= -->
  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              &copy; Copyright <strong>Ario</strong>. All Rights Reserved
            </p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bell
            -->
              Designed by <a href="https://ariotampan.com">Ario Bna (Canda)</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- Vendor JS Files -->
  <script src="{{asset('landing-page/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/tether/js/tether.min.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/lockfixed/jquery.lockfixed.min.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('landing-page/assets/vendor/hoverIntent/hoverIntent.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('landing-page/assets/js/main.js')}}"></script>

</body>

</html>
