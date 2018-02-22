<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="background-color:#e5f4e7;">
  <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-primary navbar-static-top">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    @if (Auth::guest())
        <li class="nav-item  active navbar-nav">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>

        <li class="nav-item active navbar-nav">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>

        <li style="margin-left: 84em;"class="nav-item active navbar-nav float-right">
            <a style=" padding:0px;"class="nav-link" href="{{ route('ruta_carro') }}">
				      <i style="font-size:30px;"class="fas fa-shopping-basket"></i>
              <span class="badge badge-info">{{Cart::count()}}</span>
			</a>
        </li>
    @else
      @can('crear_productes') <!-- Visble solament pels usuaris amb permisos per a crear productes--> 
        <li class="nav-item active navbar-nav">
          
            <a class="nav-link" href="{{ route('ruta_crear_producte') }}">Crear producte</a>
        </li>
      @endcan
      @can('llistar_usuaris')
          <li class="nav-item active navbar-nav">
          
            <a class="nav-link" href="{{ route('ruta_llistar_usuaris') }}">Llistar usuaris</a>
        </li>
      @endcan
        <li class="nav-item active navbar-nav dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDrop" role="button" data-toggle="dropdown" >
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <div class="dropdown-menu" >
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Sortir
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>
      </li>
    @endif
  </div>
</nav>
  <!--MARKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->

  @include('layouts._errors')
  @include('layouts._misatges')
  @yield('content')



    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}">

    </script>
</body>
</html>
