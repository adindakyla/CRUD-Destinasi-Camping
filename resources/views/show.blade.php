<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - CampGo Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">support@campgo.id</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 812-9041-2906</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">CampGo</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
           <li><a href="{{ route('public.index') }}#hero">Home</a></li>
            <li><a href="{{ route('public.index') }}#about">About</a></li>
            <li><a href="{{ route('public.index') }}#destination">Destination Camp</a></li>
            <li><a href="{{ route('public.index') }}#contact">Contact</a></li>
            <li><a href="{{ route('login') }}">Login Admin</a></li>

          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

<div class="container py-4">

    <!-- HERO IMAGE -->
    <div class="position-relative rounded-4 overflow-hidden shadow mb-4">

        <img src="{{ asset('storage/' . $destinasi->gambar) }}"
             class="w-100"
             style="height: 420px; object-fit: cover;">

        <!-- overlay gelap -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
        </div>

        <!-- text on image -->
        <div class="position-absolute bottom-0 start-0 p-4 text-white">
            <h1 class="fw-bold mb-1">
                {{ $destinasi->nama_tempat }}
            </h1>
            <p class="mb-0 small">
                🌲 Premium Camping Destination
            </p>
        </div>

    </div>

    <div class="row g-4">

        <!-- LEFT -->
        <div class="col-md-8">

            <!-- DESCRIPTION CARD -->
            <div class="card border-0 shadow-sm rounded-4 mb-3">
                <div class="card-body">

                    <h5 class="fw-bold mb-3">About This Place</h5>

                    <p class="text-muted mb-0">
                         Nikmati pengalaman camping terbaik dengan suasana alam yang tenang,
                        udara segar, dan fasilitas lengkap yang cocok untuk keluarga maupun adventure trip.
                    </p>

                </div>
            </div>

            <!-- FACILITIES -->
            <div class="card border-0 shadow-sm rounded-4 mb-3">
                <div class="card-body">

                    <h5 class="fw-bold mb-3">Facilities</h5>

                    <div class="d-flex flex-wrap gap-2">
                        @foreach(explode(',', $destinasi->fasilitas) as $item)
                            <span class="badge rounded-pill bg-success px-3 py-2">
                                ✔ {{ trim($item) }}
                            </span>
                        @endforeach
                    </div>

                </div>
            </div>

            <!-- OPENING -->
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <h6 class="fw-bold mb-1">Operating Hours</h6>
                        <small class="text-muted">Available time for visitors</small>
                    </div>

                    <span class="badge bg-dark px-3 py-2 rounded-pill">
                         {{ $destinasi->jam_operasional }}
                    </span>

                </div>
            </div>

        </div>

        <!-- RIGHT SIDEBAR -->
        <div class="col-md-4">

            <div class="card border-0 shadow-lg rounded-4 sticky-top" style="top: 20px;">

                <div class="card-body">

                    <small class="text-muted">Starting from</small>

                    <h2 class="fw-bold text-success mb-3">
                        Rp {{ number_format($destinasi->biaya, 0, ',', '.') }}
                    </h2>

                    <button class="btn btn-success w-100 rounded-pill mb-2 fw-semibold">
                        Book Now
                    </button>

                    <button class="btn btn-outline-dark w-100 rounded-pill mb-3">
                        Save to Wishlist
                    </button>

                    <hr>

                    <div class="small text-muted">
                        <p class="mb-1">✔ Free cancellation</p>
                        <p class="mb-1">✔ Instant confirmation</p>
                        <p class="mb-0">✔ Best price guarantee</p>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

  </main>

  <footer id="footer" class="footer light-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
           <h4>Join Our Newsletter</h4>
            <p>Be the first to discover new camping spots, hidden nature escapes, and weekend getaway ideas.</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">CampGo</span>
          </a>
          <div class="footer-contact pt-3">
            <p>CampGo Headquarters</p>
            <p>Indonesia</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 812-9041-2906</span></p>
            <p><strong>Email:</strong> <span>support@campgo.id</span></p>
        </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        
        <div class="col-lg-4 col-md-12">
        <h4>Follow Us</h4>
        <p>Get inspired with new camping destinations, travel tips, and outdoor stories from CampGo community.</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">CampGo</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
       
        Designed by <a href="">Adinda Kayla Izzati</a> | <a href="">241011750156</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
 <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>