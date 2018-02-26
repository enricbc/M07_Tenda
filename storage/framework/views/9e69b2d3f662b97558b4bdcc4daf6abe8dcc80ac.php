<?php $__env->startSection('content'); ?>


<div class="col-3">&nbsp;</div>
<div class="col-3">&nbsp;</div>
<div class="container">
	<div class="table-responsive">
		<div>&nbsp;</div>
		<table class="table table-hover">
		  <thead class="bg-success">
		    <tr>
		      <th class="col-1">#</th>
		      <th class="col-2">Nom</th>
		      <th class="col-3">Correu electrònic</th>
		      <th class="col-2">Rol</th>
		      <th class="col-2">Permisos</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		    <div class="row">
	            <tr class="table-warning">
	                <td class="col-1"><?php echo e($user->id); ?></td>
	                <td class="col-2"><?php echo e($user->name); ?></td>
	                <td class="col-3"><?php echo e($user->email); ?></td>
	                <td class="col-2"><?php echo e($user->getRoleNames()->implode('name')); ?></td>
	                <td class="col-2"><?php echo e($user->getAllPermissions()->implode('name', ', ')); ?></td>
	            </tr>
	        </div>
	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  </tbody>
		</table>
	</div>
</div>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>