<?php $__env->startSection('content'); ?>
  <div class="container">
  <h2>Crear Producte</h2>
  <br>
  <?php echo $__env->make('productes._form', ['producte'=>$producte], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>