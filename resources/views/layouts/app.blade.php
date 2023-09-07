<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="description" content="Admin panel" />
  <meta name="author" content="Axe10rellana" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link rel="icon" href="{{ asset('storage/icons/favicon.png') }}" />
  <link rel="favicon" href="{{ asset('storage/icons/favicon.png') }}" />
  <link rel="apple-touch-icon" href="{{ asset('storage/icons/favicon.png') }}" />
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(
      function() {
        $("#tabla_id").DataTable({
          "pageLength": 3,
          lengthMenu: [
            [3, 10, 25, 50],
            [3, 10, 25, 50]
          ],
          "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json",
          },
        });
      }
    );
  </script>

  <title>{{ config('app.name', 'Laravel') }} panel</title>
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          Portafolio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          @if (Auth::check())
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('proyectos.index') }}">{{ __('Proyectos') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('servicios.index') }}">{{ __('Servicios') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('entradas.index') }}">{{ __('Entradas') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('postulantes.index') }}">{{ __('Postulante') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('configuraciones.index') }}">{{ __('Configuraciones') }}</a>
            </li>
          </ul>
          @endif

          <ul class="navbar-nav ms-auto">
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                  {{ __('Cerrar sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>

</html>