<nav id="nav" class="navbar navbar-expand-lg navbar-light bg-primary navbar-static-top">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
        Antique Gravity
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <?php if(Auth::guest()): ?>
        <li class="nav-item  active navbar-nav">
            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
        </li>

        <li class="nav-item active navbar-nav">
            <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
        </li>

        <li style="margin-left: 84em;"class="nav-item active navbar-nav float-right">
            <a style=" padding:0px;margin-left: -350px;"class="nav-link" href="<?php echo e(route('ruta_carro')); ?>">
				      <i style="font-size:30px;"class="fas fa-shopping-basket"></i>
              <span class="badge badge-info"><?php echo e(Cart::count()); ?></span>
			</a>
        </li>
    <?php else: ?>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear_productes')): ?> <!-- Visble solament pels usuaris amb permisos per a crear productes--> 
        <li class="nav-item active navbar-nav">
          
            <a class="nav-link" href="<?php echo e(route('ruta_crear_producte')); ?>">Crear producte</a>
        </li>
      <?php endif; ?>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('llistar_usuaris')): ?>
          <li class="nav-item active navbar-nav">
          
            <a class="nav-link" href="<?php echo e(route('users.index')); ?>">Llistar usuaris</a>
        </li>
      <?php endif; ?>
        <li class="nav-item active navbar-nav dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDrop" role="button" data-toggle="dropdown" >
            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
          </a>
          <div class="dropdown-menu" >
            <a class="dropdown-item" href="<?php echo e(route('users.index')); ?>">
                Panel d'Administració
            </a>
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Sortir
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
          </div>
      </li>
    <?php endif; ?>
  </div>
</nav>