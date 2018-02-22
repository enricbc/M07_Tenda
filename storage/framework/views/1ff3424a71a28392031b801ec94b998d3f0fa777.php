<?php $__env->startSection('content'); ?>
  <!--Començar carrousel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner shadow-all-3i" style="" id="splash">
    <?php for($i=0; $i < 3; $i++): ?>
      <?php if($i == 0): ?>
      <div class="parallax carousel-item active"style="height:520px;background: url('http://localhost:82/M07/M07_tenda/public/images/offer.jpg');">
      <?php else: ?>
      <div class="parallax carousel-item"style="height:520px;background: url(<?php echo e($productes[$i]->url); ?>);">
      <?php endif; ?>

      </div>
    <?php endfor; ?>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  <!-- Final carrousel-->
<div class="container mt-5">
  <div class="row mt-5">
  <?php $__currentLoopData = $productes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-sm-4">
        <div class="card my-4" style="height: 18em;width:20em">
          <?php if(Auth::guest()): ?>
            <a href="<?php echo e(route('ruta_producte', ['producte'=>$producte->id])); ?>"><img class="card-img-top" height="200px"src="<?php echo e($producte->url); ?>" alt=""></a>
          <div class="card-body p-0 bg-light" >
            <div class="container">
              <div class="row mt-1">
                <div class="col">
                <h6 class="text-center"><?php echo e($producte->nom); ?></h6>
                <h5 class="text-center my-0"><?php echo e($producte->preu); ?> €</h5>
                </div>
              </div>
            </div>
          <?php else: ?>
            <a href="<?php echo e(route('ruta_producte', ['producte'=>$producte->id])); ?>"><img class="card-img-top"style="height:160px;" src="<?php echo e($producte->url); ?>" alt=""></a>
          <div class="card-body bg-light" >
            <a class="card-link">Preu: <?php echo e($producte->preu); ?></a><br>
            <a class="card-link">Quantitat: <?php echo e($producte->quantitat); ?></a>
          <?php endif; ?>

              <?php if(Auth::guest()): ?>

              <?php else: ?>
                <small class="float-right pl-5" >
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar_productes')): ?>
                <a href="<?php echo e(route('ruta_editar_producte', ['producte'=>$producte->id])); ?>"class="btn btn-info">Editar</a>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('eliminar_productes')): ?>
                <form action="<?php echo e(route('ruta_eliminar_producte', ['producte'=>$producte->id])); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

                  <?php echo e(method_field('DELETE')); ?>

                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              <?php endif; ?>
              </small>
            <?php endif; ?>

          </div>
        </div>
      </div>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
</div>
<div class=" container col-2 mt-4">
  <div class="row ">
    <?php echo e($productes->render("pagination::bootstrap-4")); ?>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>