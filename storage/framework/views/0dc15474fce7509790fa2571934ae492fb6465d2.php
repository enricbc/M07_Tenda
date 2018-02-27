<?php $__env->startSection('content'); ?>


<div class="container col-6" style="margin-top: 100px;"> 
	<?php echo e(Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT'))); ?>


	    <div class="form-group">
	        <?php echo e(Form::label('name', 'Nom')); ?>

	        <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

	    </div>

	    <div class="form-group">
	        <?php echo e(Form::label('email', 'E-mail')); ?>

	        <?php echo e(Form::email('email', null, array('class' => 'form-control'))); ?>

	    </div>

	    <div class="form-group">
	        <?php echo e(Form::label('role_name', 'Rol')); ?>

	        <?php echo e(Form::select('role_name', array('0' => 'Selecciona un rol', 'Admin' => 'Admin', 'treballador' => 'Treballador', 'Client' => 'Client'), null, array('class' => 'form-control'))); ?>

	    </div>

	    <?php echo e(Form::submit('Modifica l\'usuari!', array('class' => 'btn btn-primary'))); ?>


	<?php echo e(Form::close()); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>