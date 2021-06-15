<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motor Website Template</title>
  <meta name="description" content="">
  <!-- 
Motor Template
http://www.templatemo.com/tm-463-motor
-->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/templatemo-style.css')}}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="about-page">

  <!-- Preloader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Preloader -->

  <section class="templatemo-top-section">
    <div class="templatemo-header">
      <img class="templatemo-header-img" src="img/header.png" alt="Header">
      <h1 class="templatemo-site-name">Motor</h1>
      <div class="mobile-menu-icon">
        <i class="fa fa-bars"></i>
      </div>
      <div class="templatemo-nav-container">
        <nav class="templatemo-nav">
          <ul>
            <li><a href="{{ url('../home') }}" class="active">Home</a></li>
            <li><a href="{{ url('../produk') }}">Products</a></li>
            <li><a href="{{ url('../transaksi') }}">Transaksi</a></li>
            <li><a href="{{ url('../galeri') }}">Gallery</a></li>
            <li><a href="{{ url('../kontak') }}">Contact</a></li>
            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="templatemo-welcome welcome-slider">
      <div class="container">
        <div class="row">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <div class="about-slider">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                    <h2 class="text-uppercase welcome-title">
                      <span class="welcome-title-1">Performance</span>
                      <span class="welcome-title-2">for the speed</span>
                    </h2>
                    <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided
                      by <span class="blue">template</span><span class="green">mo</span>.com website. You can download,
                      modify and use this for your website projects. Please tell your friends about our templates.
                      Thank you for visiting. Have fun!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="about-slider">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                    <h2 class="text-uppercase welcome-title">
                      <span class="welcome-title-1">Find to own</span>
                      <span class="welcome-title-2">the fast &amp; best</span>
                    </h2>
                    <p class="welcome-message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit dori. Aenean commodo ligula eget. Aenean massa. Cumdent sociis natoque penatibus et magnis dis parturient montes, sor ind nascetur ridiculus mus. Lorem ipsum dolor sit amet dipiscing elit dori.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  </section>
  @yield('content')
  <!--banner-->
  <div class="tm-banner">
    <h2 class="tm-banner-title">Maecenas</h2>
    <p class="tm-banner-description">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium</p>
    <a href="#" class="tm-banner-link"><i class="fa fa-play"></i></a>
  </div>

  </section> <!-- Main content -->

  <!--Footer content-->
  <footer class="tm-footer">
    <div class="container">
      <div class="row margin-bottom-60">
        <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
          <h3 class="tm-footer-div-title">Main Menu</h3>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="{{ url('../about') }}">About Us</a></li>
            <li><a href="gallery.html">Directory</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="services.html">Our Services</a></li>
          </ul>
        </nav>
        <div class="col-lg-5 col-md-5 tm-footer-div">
          <h3 class="tm-footer-div-title">About Us</h3>
          <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
          <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
        </div>
        <div class="col-lg-4 col-md-4 tm-footer-div">
          <h3 class="tm-footer-div-title">Get Social</h3>
          <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.</p>
          <div class="tm-social-icons-container">
            <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
            <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
            <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
            <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
      <div class="row tm-copyright">
        <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Company Name</p>
      </div>
    </div>
  </footer> <!-- Footer content-->

  <!-- JS -->
  <script type="text/javascript" src="{{asset('js/jquery-1.11.2.min.js')}}"></script> <!-- jQuery -->
  <script type="text/javascript" src="{{asset('js/templatemo-script.js')}}"></script> <!-- Templatemo Script -->
  <script defer src="{{asset('js/jquery.flexslider-min.js')}}"></script><!-- FlexSlider -->
  <script>
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        slideshow: false,
        prevText: "&#xf104;",
        nextText: "&#xf105;"
      });

      // Remove preloader
      // https://ihatetomatoes.net/create-custom-preloading-screen/
      $('body').addClass('loaded');
    });
  </script>
</body>

</html>