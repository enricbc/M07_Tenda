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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>
  <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
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
            <a style=" padding:0px;"class="nav-link" href="<?php echo e(route('ruta_carro')); ?>">
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
        <li class="nav-item active navbar-nav dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Sortir
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
          </div>
        <!--</div>-->
      </li>
    <?php endif; ?>
  </div>
</nav>
  <!--MARKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->
<div class="container">
  <?php echo $__env->make('layouts._errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layouts._misatges', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>
</div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
