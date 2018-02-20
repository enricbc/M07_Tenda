<?php $__env->startSection('content'); ?>



<div class="container">
  <div class="row">
  <?php $__currentLoopData = $productes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <div class="col-sm-4">
        <div class="card mt-4" style="height: 18em;width:20em">
          <div class="card-header bg-success ">
            <h5 class="card-title "><a style="text-decoration:none;" class="text-light"href="<?php echo e(route('ruta_producte', ['producte'=>$producte->id])); ?>"><?php echo e($producte->nom); ?></a></h5>
          </div>
          <?php if(Auth::guest()): ?>
            <a href="<?php echo e(route('ruta_producte', ['producte'=>$producte->id])); ?>"><img class="card-img-top" height="175px"src="<?php echo e($producte->url); ?>" alt=""></a>
          <div class="card-footer bg-light" >
            <a class="card-link">Preu: <?php echo e($producte->preu); ?></a>
          <?php else: ?>
            <a href="<?php echo e(route('ruta_producte', ['producte'=>$producte->id])); ?>"><img class="card-img-top"style="height:100px;" src="<?php echo e($producte->url); ?>" alt=""></a>
          <div class="card-footer bg-light" >
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