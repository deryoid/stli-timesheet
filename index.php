<?php
require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>PT SEMESTA TRANSPORTASI LIMBAH INDONESIA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Premium Bootstrap v5.1.3 Landing Page Template" />
  <meta name="keywords" content="bootstrap v5.1.3, premium, marketing, multipurpose" />
  <meta content="Themesdesign" name="author" />

  <!-- favicon -->
  <link rel="shortcut icon" href="<?= base_url() ?>/assets/dist/img/pt.png" />

  <!-- Bootstrap css-->
  <link href="<?= base_url() ?>/assets/usertemp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <!-- Materialdesign icon-->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/usertemp/css/materialdesignicons.min.css" type="text/css" />

  <!-- Swiper Slider css -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/usertemp/css/swiper-bundle.min.css" type="text/css" />

  <!-- Custom Css -->
  <link href="<?= base_url() ?>/assets/usertemp/css/style.min.css" rel="stylesheet" type="text/css" />

  <!-- colors -->
  <link href="<?= base_url() ?>/assets/usertemp/css/colors/purple.css" rel="stylesheet" type="text/css" id="color-opt" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="60">

  <!--start page Loader -->
  <!-- <div id="preloader">
    <div id="status">
      <div class="load">
        <hr />
        <hr />
        <hr />
        <hr />
      </div>
    </div>
  </div> -->
  <!--end page Loader -->

  <!-- START NAVBAR -->
  <nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
    <div class="container">
      <a class="navbar-brand" href="index"><img src="<?= base_url() ?>/assets/dist/img/logo.png" alt="" height="23"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="mdi mdi-menu text-muted"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
          <li class="nav-item">
            <a class="nav-link active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
        </ul>
        <!--end navbar-nav-->
        <ul class="list-inline mb-0 ps-lg-4 ms-2">
          <li class="list-inline-item">
            <a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="primary-link"><i class="mdi mdi-instagram"></i></a>
          </li>
        </ul>
      </div>
      <!--end collapse-->
    </div>
    <!--end container-->
  </nav>
  <!-- END NAVBAR -->

  <!-- START HOME -->
  <section class="bg-home4 overflow-hidden" id="home">
    <div class="container">
      <div class="position-relative" style="z-index: 1;">
        <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6">
            <div>
              <h6 class="home-subtitle text-primary mb-4">Information</h6>
              <h1>PT. Semesta Transportasi Limbah Indonesia</h1>
              <p class="text-black-50 fs-17 pt-4"></p>
            </div>
          </div>
          <!--end col-->
          <div class="col-lg-6 offset-xl-1">
            <div class="mt-lg-0 mt-5">
              <img src="<?= base_url() ?>/assets/dist/img/stli.png" alt="home04" class="home-img">
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
    </div>
    <!--end container-->
  </section>
  <div class="position-relative">
    <div class="shape overflow-hidden text-white position-absolute">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 100%;" height="250" preserveAspectRatio="none" viewBox="0 0 1440 250">
        <g mask="url(&quot;#SvgjsMask1006&quot;)" fill="none">
          <path d="M 0,246 C 288,210 1152,102 1440,66L1440 250L0 250z" fill="rgba(255, 255, 255, 1)"></path>
        </g>
        <defs>
          <mask id="SvgjsMask1006">
            <rect width="1440" height="250" fill="#ffffff"></rect>
          </mask>
        </defs>
      </svg>
    </div>
  </div>
  <!-- END HOME -->





  <!-- START CTA -->
  <section class="bg-cta" style="background-image: url('<?= base_url() ?>/assets/dist/img/bg5.jpeg');">
    <div class="bg-overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="text-center text-white">
            <h3 class="mb-3">Video Presentation</h3>
            <p>Start working with Landsay that can provide everything you need to generate awareness, drive
              traffic, connect.</p>
            <a href="#presentationVideo" class="play-btn mt-4" data-bs-toggle="modal">
              <i class="mdi mdi-play text-white"></i>
            </a>
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!-- END CTA -->




  <!-- START ABOUT -->
  <section class="section bg-light" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="text-center">
            <h1>About </h1>
            <p>PT Semesta Transportasi Limbah Indonesia adalah perusahaan yang bergerak dalam bidang jasa transportasi angkutan darat dan Rental Alat Berat. Perusahaan ini berpusat di Semarang dan memiliki cabang di Kaliwungu, Kendal ( Jateng), Bogor ( Jawa Barat ), Medan (Sumut), Dumai (Riau), Tanah Bumbu (Kalsel).Perusahaan ini melayani jasa pengangkutan limbah B3 untuk wilayah Jawa, Bali, Sumatra& Kalimantan, jasa angkutan Barang untukwilayah Jawa dan Sumatera, Pengangkutan Batu Bara dan Rental Alat Berat untuk wilayah Kalimantan.</p>
          </div>
        </div>
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!-- END ABOUT -->


  <!-- START BLOG -->
  <section class="section" id="blog">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="text-center mb-4">
            <h3>Galeri</h3>
            <p class="text-muted mt-2 mb-0">It is a long established fact that a reader will be of a page when
              established fact looking at its layout.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card blog-box border-0 mt-4">
            <div class="blog-img position-relative">
              <img src="<?= base_url() ?>/assets/dist/img/bg1.jpg" alt="Blog" class="img-fluid rounded">
              <div class="bg-overlay rounded"></div>
              <div class="author">
                <h6 class="fs-16 mb-0"><i class="mdi mdi-account-outline fs-17 align-middle me-1"></i>
                  Calvin Carlo</h6>
                <small><i class="mdi mdi-clock-outline fs-17 align-middle me-1"></i> 20th March
                  2021</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card blog-box border-0 mt-4">
            <div class="blog-img position-relative">
              <img src="<?= base_url() ?>/assets/dist/img/bg2.jpeg" alt="Blog" class="img-fluid rounded">
              <div class="bg-overlay rounded"></div>
              <div class="author">
                <h6 class="fs-16 mb-0"><i class="mdi mdi-account-outline fs-17 align-middle me-1"></i>
                  Theresa Sinclair</h6>
                <small><i class="mdi mdi-clock-outline fs-17 align-middle me-1"></i> 01th July
                  2021</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card blog-box border-0 mt-4">
            <div class="blog-img position-relative">
              <img src="<?= base_url() ?>/assets/dist/img/bg3.jpeg" alt="Blog" class="img-fluid rounded">
              <div class="bg-overlay rounded"></div>
              <div class="author">
                <h6 class="fs-16 mb-0"><i class="mdi mdi-account-outline fs-17 align-middle me-1"></i>
                  Ruben Reed</h6>
                <small><i class="mdi mdi-clock-outline fs-17 align-middle me-1"></i> 25th July
                  2021</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card blog-box border-0 mt-4">
            <div class="blog-img position-relative">
              <img src="<?= base_url() ?>/assets/dist/img/bg4.jpeg" alt="Blog" class="img-fluid rounded">
              <div class="bg-overlay rounded"></div>
              <div class="author">
                <h6 class="fs-16 mb-0"><i class="mdi mdi-account-outline fs-17 align-middle me-1"></i>
                  Ruben Reed</h6>
                <small><i class="mdi mdi-clock-outline fs-17 align-middle me-1"></i> 25th July
                  2021</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card blog-box border-0 mt-4">
            <div class="blog-img position-relative">
              <img src="<?= base_url() ?>/assets/dist/img/bg5.jpeg" alt="Blog" class="img-fluid rounded">
              <div class="bg-overlay rounded"></div>
              <div class="author">
                <h6 class="fs-16 mb-0"><i class="mdi mdi-account-outline fs-17 align-middle me-1"></i>
                  Ruben Reed</h6>
                <small><i class="mdi mdi-clock-outline fs-17 align-middle me-1"></i> 25th July
                  2021</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END BLOG -->


  <!--start contact-->
  <section class="section bg-light" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="text-center mb-5">
            <h3>Contact Us</h3>
            <p class="text-muted mt-2">It is a long established fact that a reader will be of a page when
              established fact looking at its layout.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5">
          <div class="contact-details mb-4 mb-lg-0">
            <!-- <p class="mb-3"><i class="mdi mdi-email-outline align-middle text-muted fs-20 me-2"></i> <span class="fw-medium">support@website.com</span></p>
            <p class="mb-3"><i class="mdi mdi-web align-middle text-muted fs-20 me-2"></i> <span class="fw-medium">www.website.com</span></p>
            <p class="mb-3"><i class="mdi mdi-phone align-middle text-muted fs-20 me-2"></i> <span class="fw-medium">+245 1234 5678</span></p>
            <p class="mb-3"><i class="mdi mdi-hospital-building text-muted fs-20 me-2"></i> <span class="fw-medium">9:00 AM - 6:00 PM</span></p>
            <p class="mb-3"><i class="mdi mdi-map-marker-outline text-muted fs-20 me-2"></i> <span class="fw-medium">412, Plantation Rd, Morehead City, NC, 28557.</span></p> -->
          </div>
          <!--end contact-details-->
        </div>
        <!--end col-->
        <div class="col-lg-7">

          <!--end form-->
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--end contact-->


  <!-- START FOOTER -->
  <footer class="bg-dark section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">

            <!--end social-->
          </div>

          <!--end footer-terms-->
          <div class="mt-4 pt-2 text-center">
            <p class="text-white-50 mb-0">
              <script>
                document.write(new Date().getFullYear())
              </script> &copy;
            </p>
          </div>
        </div>
        <!--end row-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </footer>
  <!-- END FOOTER -->


  <!-- Modal -->
  <div class="modal fade" id="presentationVideo" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content  bg-transparent border-0">
        <div class="modal-body p-0">
          <div class="text-end">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="ratio ratio-16x9">
            <video id="VisaChipCardVideo" class="video-box" controls>
              <source src="https://youtu.be/nq2R3bKEtpE" type="video/mp4">
            </video>
          </div>
        </div>
        <!--end modal-body-->
      </div>
      <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
  </div>
  <!--end modal-->


  <!--start back-to-top-->
  <button onclick="topFunction()" id="back-to-top">
    <i class="mdi mdi-arrow-up"></i>
  </button>
  <!--end back-to-top-->


  <!-- Bootstrap Bundale js -->
  <script src="<?= base_url() ?>/assets/usertemp/js/bootstrap.bundle.min.js"></script>

  <!-- Swiper Slider js -->
  <script src="<?= base_url() ?>/assets/usertemp/js/swiper-bundle.min.js"></script>

  <!-- Contact Js -->
  <script src="<?= base_url() ?>/assets/usertemp/js/contact.js"></script>

  <!-- Index-init Js -->
  <script src="<?= base_url() ?>/assets/usertemp/js/index.init.js"></script>

  <!-- App js -->
  <script src="<?= base_url() ?>/assets/usertemp/js/app.js"></script>
</body>

</html>