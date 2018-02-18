<?php $__env->startSection('content'); ?>
  <h2>Editar Producte</h2>
  <br>
  <?php echo $__env->make('productes._form', ['producte'=>$producte], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>