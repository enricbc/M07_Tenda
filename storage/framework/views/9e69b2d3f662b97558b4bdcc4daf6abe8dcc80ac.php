<?php $__env->startSection('content'); ?>


<div class="col-3">&nbsp;</div>
<div class="col-3">&nbsp;</div>
<div class="container">
	<div class="table-responsive">
		<div>&nbsp;</div>
		<table class="table table-hover">
		  <thead class="bg-success">
		    <tr>
		      <th class="col-1 text-center align-middle">#</th>
		      <th class="col-2 text-center align-middle">Nom</th>
		      <th class="col-3 text-center align-middle">Correu electrònic</th>
		      <th class="col-2 text-center align-middle">Rol</th>
		      <th class="col-2 text-center align-middle">Permisos</th>
		      <th class="col-2 text-center align-middle">Accions</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		    <div class="row">
	            <tr class="table-warning">
	                <td class="col-1 text-center align-middle"><?php echo e($user->id); ?></td>
	                <td class="col-2 text-center align-middle"><?php echo e($user->name); ?></td>
	                <td class="col-3 text-center align-middle"><?php echo e($user->email); ?></td>
	                <td class="col-2 text-center align-middle"><?php echo e($user->getRoleNames()->implode('name')); ?> </td>
	                <td class="col-2 text-center align-middle"><?php echo e($user->getAllPermissions()->implode('name', ', ')); ?></td>                
	                <td class="col-2 text-center align-middle">
	                	<button type="button" style="margin-left: 30px;" class="btn btn btn-info btn-sm">Editar
	                	</button>
	                	<button class="btn btn btn-danger btn-sm">Eliminar</button>
	                </td>
	            </tr>
	        </div>
	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  </tbody>
		</table>
	</div>
</div>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>