<nav id="nav" class="navbar navbar-expand-lg navbar-light bg-primary navbar-static-top">
    <a class="navbar-brand" href="{{ url('/') }}">
        Antique Gravity
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
            <a style=" padding:0px;margin-left: -350px;"class="nav-link" href="{{ route('ruta_carro') }}">
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
          
            <a class="nav-link" href="{{ route('users.index') }}">Llistar usuaris</a>
        </li>
      @endcan
        <li class="nav-item active navbar-nav dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDrop" role="button" data-toggle="dropdown" >
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <div class="dropdown-menu" >
            <a class="dropdown-item" href="{{ route('users.index') }}">
                Panel d'Administració
            </a>
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