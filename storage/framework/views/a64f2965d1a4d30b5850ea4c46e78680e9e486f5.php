<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body style="background-color:#e5f4e7;">
  <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-primary navbar-static-top">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
        <?php echo e(config('app.name', 'Laravel')); ?>

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
          
            <a class="nav-link" href="<?php echo e(route('llistar_usuaris')); ?>">Llistar usuaris</a>
        </li>
      <?php endif; ?>
        <li class="nav-item active navbar-nav dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDrop" role="button" data-toggle="dropdown" >
            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
          </a>
          <div class="dropdown-menu" >
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
  <!--MARKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->

  <?php echo $__env->make('layouts._errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layouts._misatges', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>



    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>">

    </script>
</body>
</html>
