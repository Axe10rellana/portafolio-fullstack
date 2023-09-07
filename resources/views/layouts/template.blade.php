<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="description" content="Portafolio" />
  <meta name="author" content="Axe10rellana" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link rel="icon" href="{{ asset('storage/icons/favicon.png') }}" />
  <link rel="favicon" href="{{ asset('storage/icons/favicon.png') }}" />
  <link rel="apple-touch-icon" href="{{ asset('storage/icons/favicon.png') }}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" type="text/css" />
  <link rel="stylesheet" href="css/styles.css" type="text/css" />

  <script type="text/javascript" src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

  <title>Portafolio</title>
</head>

<body style="user-select: none;" id="page-top">
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      @yield('platform')
      <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portafolio</a></li>
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">¿Quién soy?</a></li>
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#services">Servicios</a></li>
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contáctame</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead bg-primary text-white text-center">
    @yield('postulante')
  </header>
  <section class="page-section portfolio" id="portfolio">
    <div class="container">
      @yield('portfolio')
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <div class="row justify-content-center">
        @yield('proyectos')
      </div>
    </div>
  </section>
  <section class="page-section bg-secondary text-white mb-0" id="about">
    <div class="container">
      @yield('titleabout')
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <div class="row">
        @yield('entradas')
      </div>
      @yield('linkdownloadcv')
    </div>
  </section>
  <section class="page-section bg-primary text-white mb-0" id="services">
    <div class="container">
      @yield('titleservice')
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <div class="row">
        @yield('servicios')
      </div>
    </div>
  </section>
  <section class="page-section" id="contact">
    <div class="container">
      @yield('titlecontact')
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      @yield('email')
    </div>
  </section>
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        @yield('location')
        @yield('socialmedia')
      </div>
    </div>
  </footer>
  <div class="copyright py-4 text-center text-white">
    @yield('footer')
  </div>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script type="text/javascript" src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>