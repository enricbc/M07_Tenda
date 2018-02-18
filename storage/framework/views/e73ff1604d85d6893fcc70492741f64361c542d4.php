<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <h2><?php echo e($producte->nom); ?></h2>
    <p><?php echo e($producte->descripcio); ?></p>
    <a><?php echo e($producte->preu); ?></a>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>