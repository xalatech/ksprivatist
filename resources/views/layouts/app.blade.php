<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="site-wrap">
        <div class="site-navbar fixed-top bg-white py-2">
          <div class="search-wrap">
            <div class="container">
              <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
              <form action="#" method="post">
                <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
              </form>
            </div>
          </div>
          <div class="container">
            <div class="d-flex align-items-center justify-content-between">
              <div class="logo">
                <div class="site-logo">
                  <a href="/" class="js-logo-clone"><img src="{{ asset('images/kslogo.png')}}" alt="KS Privatist" /></a>
                </div>
              </div>
              <div class="main-nav d-none d-lg-block">
                <nav class="site-navigation text-right text-md-center" role="navigation">
                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    @foreach($navbars as $nav)
                    @if($nav->icon == "" && $nav->name != 'Logg inn')
                    <li><a href="{{ route('showpage', $nav->link) }}">{{ $nav->name }}</a></li>
                    @elseif($nav->name == 'Logg inn')
                    <li><a href="{{ route('login') }}">{{ $nav->name }}</a></li>
                    @endif
                    @endforeach

                  </ul>
                </nav>
              </div>
              <div class="icons">
                {{-- <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a> --}}
                <a href="cart.html" class="icons-btn d-inline-block bag">
                  <img src="{{ asset('images/kart.png')}}" class="icon-shopping-bag mr-2" />
                  <span class="number"></span>
                </a>
                <a href="#" class="icons-btn d-inline-block js-search-open">
                    <img src="{{ asset('images/search.png')}}" class="ml-3 icon-search" />
                </a>

                <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
              </div>
            </div>
          </div>
        </div>

        <main class="content-wrapper">
            @yield('content')
        </main>

        <footer class="site-footer custom-border-top text-light">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <a href="/" class="block-6 mb-4">
                  <img src="{{ asset('images/kslogo.png')}}" alt="KS Privatist" class="logo">
                </a>
                <ul class="social-network social-circle mt-3">
                    <li><a href="#"><img src="{{ asset('images/fb.png')}}" alt="Facebook" class="social-network-image icoFacebook"></a></li>
                    <li><a href="#"><img src="{{ asset('images/ig.png')}}" alt="Instagram" class="social-network-image icoInstagram"></a></li>
                </ul>

              </div>
              <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <h3 class="footer-heading mb-4">Meny</h3>

                    <ul class="list-unstyled">
                        @foreach($navbars as $nav)
                    @if($nav->icon == "" && $nav->name != 'Logg inn')
                    <li><a href="{{ route('showpage', $nav->link) }}">{{ $nav->name }}</a></li>
                    @endif
                    @endforeach
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <h3 class="footer-heading mb-4">Konto</h3>

                    <ul class="list-unstyled">
                        <li><a href="{{ route('login') }}">Logg inn</a></li>
                    </ul>
                  </div>

                </div>
              </div>

              <div class="col-md-6 col-lg-3">
                <div class="block-6 mb-2">
                  <h3 class="footer-heading mb-4">Kontakt oss</h3>
                  <ul class="list-unstyled">
                    <li class="name">Kajanan Sothilingam</li>
                    <li class="title">Daglig leder</li>
                    <li class="telefon">+ 47 400 76 601</li>
                  </ul>
                  <ul class="list-unstyled">
                    <li class="name">Lathushan Uthayakumar</li>
                    <li class="title">Styremedlem</li>
                    <li class="telefon">+ 47 400 76 601</li>
                  </ul>
                  <ul class="list-unstyled">
                    <li class="name">Denuyan Premakumar</li>
                    <li class="title">Styremedlem</li>
                    <li class="telefon">+ 47 405 50 106</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="container">
        <div class="row pt-3">
            <div class="col-md-8">
              <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <strong>KS PRIVATIST AS</strong></p>
            </div>
            <div class="col-md-4">

              Developed by <a href="https://xala.no" target="_blank" class="text-primary">Xala Technologies</a>
            </div>

          </div>
        </div>
      </div>

      <!-- Scripts -->
      <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{ asset('js/jquery-ui.js')}}"></script>
      <script src="{{ asset('js/popper.min.js')}}"></script>
      <script src="{{ asset('js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{ asset('js/aos.js')}}"></script>
      <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
