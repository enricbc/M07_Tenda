<?php $__env->startSection('title'); ?> 
	Inicio
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

	<h1> Hola, esto es Bootstrap </h1>

	<button type="button" class="btn btn-success">Success</button>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>