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
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="hero-content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="content">
                <h1>Discover Your Next Camping Adventure</h1>
                <p>CampGo helps outdoor enthusiasts discover the best camping destinations, compare facilities, and reserve campsites with ease. We connect you with trusted campgrounds so you can spend less time planning and more time enjoying nature.
                <div class="cta-group">
                  <a href="#about" class="btn-primary">Start Your Journey</a>
                  <a href="https://youtu.be/uvX4Oi_dsTI?si=X1k01sh1wXUhKJjT" class="btn-secondary glightbox">
                    <i class="bi bi-play-circle"></i>
                    <span>Watch Our Story</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="hero-image">
                <img src="assets/img/about/camp.jpg" alt="Corporate Business" class="img-fluid">
                <div class="floating-card" data-aos="fade-up" data-aos-delay="300">
                  <div class="card-content">
                    <div class="metric">
                      <span class="number">150+</span>
                      <span class="label">Camping Destinations</span>
                    </div>
                    <div class="metric">
                      <span class="number">10K+</span>
                      <span class="label">Happy Campers</span>
                    </div>
                     <div class="metric">
                      <span class="number">500+</span>
                      <span class="label">Bookings Completed</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hero-features">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-graph-up"></i>
                  </div>
                  <h4>Explore More</h4>
                  <p>Find the best camping destinations across Indonesia with ease.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-lightbulb"></i>
                  </div>
                  <h4>Book Instantly</h4>
                  <p>Enjoy a seamless reservation experience anytime, anywhere.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <h4>Trusted Partners</h4>
                  <p>Connect with verified campgrounds that offer quality facilities and reliable service.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-award"></i>
                  </div>
                  <h4>Adventure Starts Here</h4>
                  <p>From weekend escapes to unforgettable outdoor journeys, CampGo is your trusted camping companion.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Find Out More About Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
              <h2>Discovering Nature, Made Simple</h2>
              <p class="lead">CampGo is built to make outdoor adventures more accessible for everyone. We connect travelers with trusted camping destinations, helping them explore nature without the hassle of complicated planning.</p>

              <div class="description">
                <p>From hidden forest spots to scenic mountain campsites, our platform brings together a curated selection of locations complete with detailed information, photos, and real visitor experiences. We focus on simplicity, reliability, and inspiration so every journey starts with confidence.</p>

                <p>Whether you're planning a weekend escape or a long-awaited adventure, CampGo is here to make discovering and booking your next camping experience effortless and enjoyable.</p>
              </div>

              <div class="stats-row">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>+
                  </div>
                  <div class="stat-label">Camping Destinations</div>
                </div>

                <div class="stat-item" data-aos="fade-up" data-aos-delay="500">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>K+
                  </div>
                  <div class="stat-label">Happy Campers</div>
                </div>

                <div class="stat-item" data-aos="fade-up" data-aos-delay="500">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>+
                  </div>
                  <div class="stat-label">Bookings Completed</div>
                </div>
              </div><!-- End Stats Row -->

              
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="image-container">
              <img src="assets/img/about/camp-about.jpg" alt="About Us" class="img-fluid">
              <div class="image-overlay">
                <div class="overlay-content">
                  <i class="bi bi-award"></i>
                  <div class="overlay-text">
                    <h4>Curated Destinations</h4>
                    <p>Best Camping Spots in One Place</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

   






<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="testimonial-slider swiper init-swiper">

      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 4000
          },
          "slidesPerView": 1,
          "spaceBetween": 30,
          "navigation": {
            "nextEl": ".swiper-button-next",
            "prevEl": ".swiper-button-prev"
          },
          "breakpoints": {
            "768": {
              "slidesPerView": 2
            },
            "1200": {
              "slidesPerView": 3
            }
          }
        }
      </script>

      <div class="swiper-wrapper">

        <!-- 1 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="testimonial-header">
              <img src="assets/img/person/person-f-12.webp" alt="User" class="img-fluid" loading="lazy">
              <div class="rating">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>

            <div class="testimonial-body">
              <p>CampGo made it super easy to find and book a camping spot. Everything was clear and the experience was amazing from start to finish.</p>
            </div>

            <div class="testimonial-footer">
              <h5>Jessica Martinez</h5>
              <span>Outdoor Traveler</span>
            </div>
          </div>
        </div>

        <!-- 2 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="testimonial-header">
              <img src="assets/img/person/person-m-8.webp" alt="User" class="img-fluid" loading="lazy">
              <div class="rating">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>

            <div class="testimonial-body">
              <p>I found a hidden camping spot through CampGo. The booking process was fast and the place was exactly like the photos.</p>
            </div>

            <div class="testimonial-footer">
              <h5>David Rodriguez</h5>
              <span>Adventure Enthusiast</span>
            </div>
          </div>
        </div>

        <!-- 3 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="testimonial-header">
              <img src="assets/img/person/person-f-6.webp" alt="User" class="img-fluid" loading="lazy">
              <div class="rating">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>

            <div class="testimonial-body">
              <p>We booked a family camping trip using CampGo. The location was clean, safe, and perfect for spending quality time together.</p>
            </div>

            <div class="testimonial-footer">
              <h5>Amanda Wilson</h5>
              <span>Family Camper</span>
            </div>
          </div>
        </div>

        <!-- 4 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="testimonial-header">
              <img src="assets/img/person/person-m-12.webp" alt="User" class="img-fluid" loading="lazy">
              <div class="rating">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>

            <div class="testimonial-body">
              <p>CampGo helped me plan a last-minute camping trip. Booking was simple and I didn’t have to worry about anything.</p>
            </div>

            <div class="testimonial-footer">
              <h5>Ryan Thompson</h5>
              <span>Weekend Camper</span>
            </div>
          </div>
        </div>

        <!-- 5 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="testimonial-header">
              <img src="assets/img/person/person-f-10.webp" alt="User" class="img-fluid" loading="lazy">
              <div class="rating">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>

            <div class="testimonial-body">
              <p>Great platform for camping lovers. I discovered new places I never knew existed and everything was well organized.</p>
            </div>

            <div class="testimonial-footer">
              <h5>Rachel Chen</h5>
              <span>Nature Explorer</span>
            </div>
          </div>
        </div>

      </div>

      <div class="swiper-navigation">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>

    </div>

  </div>

</section>

    <!-- Portfolio Section -->
<section id="destination" class="portfolio section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Destinations Camp</h2>
    <p>Explore Camping Locations Across Indonesia</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

      @foreach($destinasi as $item)
      <div class="col-lg-4 col-md-6">

        <div class="portfolio-card">

          {{-- IMAGE --}}
          <div class="image-container">
            <img src="{{ asset('storage/' . $item->gambar) }}"
                 class="img-fluid"
                 alt="{{ $item->nama_tempat }}"
                 loading="lazy">

            <div class="overlay">
              <div class="overlay-content">

                {{-- ZOOM IMAGE --}}
                <a href="{{ asset('storage/' . $item->gambar) }}"
                   class="glightbox zoom-link"
                   title="{{ $item->nama_tempat }}">
                  <i class="bi bi-zoom-in"></i>
                </a>

                {{-- DETAIL PAGE --}}
                <a href="{{ route('destinasi.show', $item->id_lokasi) }}"
                   class="details-link"
                   title="View Camp Details">
                  <i class="bi bi-arrow-right"></i>
                </a>

              </div>
            </div>
          </div>

          {{-- CONTENT --}}
        <div class="content p-3">

    <!-- Title -->
    <h3 class="mb-2 fw-semibold">
        {{ $item->nama_tempat }}
    </h3>

    <!-- Facilities -->
    <p class="text-muted small mb-3">
        {{ \Illuminate\Support\Str::limit($item->fasilitas, 90) }}
    </p>

    <!-- Info Row -->
    <div class="d-flex justify-content-between align-items-center mb-2">

        <div>
            <small class="text-muted d-block">Starting from</small>
            <strong class="text-success">
                Rp {{ number_format($item->biaya, 0, ',', '.') }}
            </strong>
        </div>

        <div class="text-end">
            <small class="text-muted d-block">Opening Hours</small>
            <span class="badge bg-light text-dark border">
                {{ $item->jam_operasional }}
            </span>
        </div>

    </div>

    <!-- Button -->
    <a href="{{ route('destinasi.show', $item->id_lokasi) }}"
       class="btn btn-success w-100 mt-2 rounded-pill">
        View Details
    </a>

</div>

        </div>

      </div>
      @endforeach

    </div>
  </div>

</section>

 

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Need Help? Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-stretch">
          <div class="col-lg-7 order-lg-1 order-2" data-aos="fade-right" data-aos-delay="200">
            <div class="contact-form-container">
              <div class="form-intro">
              <h2>Let’s Plan Your Next Adventure</h2>
<p>Have questions about camping destinations, bookings, or partnerships? Our team is ready to help you explore nature with ease.</p>
              </div>

              <form action="forms/contact.php" method="post" class="php-email-form contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" name="name" class="form-input" id="userName" placeholder="Your Name" required="">
                      <label for="userName" class="field-label">Name</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="email" class="form-input" name="email" id="userEmail" placeholder="Your Email" required="">
                      <label for="userEmail" class="field-label">Email</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="tel" class="form-input" name="phone" id="userPhone" placeholder="Your Phone">
                      <label for="userPhone" class="field-label">Phone</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" class="form-input" name="subject" id="messageSubject" placeholder="Subject" required="">
                      <label for="messageSubject" class="field-label">Subject</label>
                    </div>
                  </div>
                </div>

                <div class="form-field message-field">
                  <textarea class="form-input message-input" name="message" id="userMessage" rows="5" placeholder="Tell us about your project" required=""></textarea>
                  <label for="userMessage" class="field-label">Message</label>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <button type="submit" class="send-button">
                  Send Message
                  <span class="button-arrow">→</span>
                </button>
              </form>
            </div>
          </div>

          <div class="col-lg-5 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="300">
            <div class="contact-sidebar">
              <div class="contact-header">
             <h3>Get in Touch</h3>
             <p>Have questions about camping destinations, bookings, or partnerships? Our team is ready to assist you anytime.</p>
              </div>

              <div class="contact-methods">
                <div class="contact-method" data-aos="fade-in" data-aos-delay="350">
                  <div class="contact-icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Address</span>
                    <p>Jakarta, Indonesia</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="400">
                  <div class="contact-icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Email</span>
                    <p>support@campgo.id</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="450">
                  <div class="contact-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Phone</span>
                    <p>+62 812-9041-2906</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="500">
                  <div class="contact-icon">
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Hours</span>
                    <p>Monday - Friday: 9AM - 6PM<br>Saturday: 10AM - 4PM</p>
                  </div>
                </div>
              </div>

              <div class="connect-section" data-aos="fade-up" data-aos-delay="550">
                <span class="connect-label">Connect with us</span>
                <div class="social-links">
                  <a href="#" class="social-link">
                    <i class="bi bi-linkedin"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-twitter-x"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-instagram"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-facebook"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

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