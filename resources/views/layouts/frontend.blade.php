<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>HPku</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/imgs/logo/logo.png">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom.css">
</head>

<body>


<header class="header-area d-flex align-items-center header-style-1">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="header-wrap d-flex justify-content-between align-items-center">

                    <!-- Navigation -->
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2">
                        <nav>
                            <ul class="d-flex align-items-center">
                                <li><a href="{{ route('home') }}">Beranda</a></li>
                                <li><a href="{{ route('contact') }}">Kontak</a></li>
                                <li><a class="categori-button" href="{{ route('spk') }}"> Rekomendasi</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                    <!-- User Authentication -->
                    <div class="header-info header-info-right">
                        @auth
                            <ul class="d-flex align-items-center">
                                <li>
                                    <i class="fi-rs-user"></i>{{ Auth::user()->name }} /
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                    </form>
                                </li>
                            </ul>
                        @else
                            <ul class="d-flex align-items-center">
                                <li>
                                    <i class="fi-rs-key"></i><a href="{{ route('login') }}">Login</a> / <a href="{{ route('register') }}">Sign Up</a>
                                </li>
                            </ul>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


        @yield('content')

            <div class="futer">
    <div class="container">
        <div class="footer-section">
            <div class="footer-column">
                <h5 class="footer-title">Kontak</h5>
                <p class="contact-info">
                    <strong>Alamat: </strong>Krandon, Kota Tegal.
                </p>
                <p class="contact-info">
                    <strong>Telepon: </strong>0896-3051-7466
                </p>
                <p class="contact-info">
                    <strong>Email: </strong>hafidzr.smkn3tgl@gmail.com
                </p>
            </div>
            <div class="footer-column">
                <h5 class="footer-title">Install Aplikasi</h5>
                <p class="app-info">Temukan SMartphone berkualitas dengan harga terbaik di sini. Kami menyediakan pilihan lengkap untuk berbagai kebutuhan, dari pelajar hingga profesional. Dapatkan Smaertphone impian Anda sekarang dan nikmati pengalaman belanja yang memuaskan!</p>
            </div>
            <div class="footer-column">
                <h5 class="footer-title">Ikuti Kami</h5>
                <div class="social-icons">
                    <a href="#"><img src="frontend/imgs/theme/icons/icon-facebook.svg" alt="Facebook"></a>
                    <a href="https://www.instagram.com/kiibo0202"><img src="frontend/imgs/theme/icons/icon-instagram.svg" alt="Instagram"></a>
                    <a href="#"><img src="frontend/imgs/theme/icons/icon-pinterest.svg" alt="Pinterest"></a>
                    <a href="#"><img src="frontend/imgs/theme/icons/icon-youtube.svg" alt="YouTube"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom-container">
            <div class="footer-bottom-divider"></div>
            <div class="footer-bottom-content">
                <p class="text-left">
                    <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-conditions.html">Terms & Conditions</a>
                </p>
                <p class="text-right">
                    &copy; <strong class="text-brand">HPku</strong> All rights reserved
                </p>
            </div>
        </div>
    </div>
</div>


        </footer>
        <!-- Vendor JS-->
        <script src="{{ asset('frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/slick.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery.syotimer.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/wow.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery-ui.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/magnific-popup.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/select2.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/waypoints.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/counterup.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/images-loaded.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/isotope.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/scrollup.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery.vticker-min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery.theia.sticky.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins/jquery.elevatezoom.js') }}"></script>
        <!-- Template  JS -->
        <script src="{{ asset('frontend/js/main.js?v=3.3') }}"></script>
        <script src="{{ asset('frontend/js/shop.js?v=3.3') }}"></script>
    </body>

    </html>

    {{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>mylaptop</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}" />
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('frontend/assets/imgs/logo.png')}}" alt="logo" height="65px"
          width="150px"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header-->
@yield('content')
  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">
        Copyright &copy; mylaptop
      </p>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
  <!-- Core theme JS-->
  <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html> --}}
