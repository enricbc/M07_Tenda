<?php if(session()->has('misatge')): ?>
  <div class="alert alert-success">
    <?php echo e(session()->get('misatge')); ?>

  </div>
<?php endif; ?>
