<?php $__env->startSection('title','Crear Usuari'); ?>

<?php $__env->startSection('content'); ?>

	<div class="container top100">
		<h1 class="h1" style="margin-bottom: 30px;">Creació d'usuari </h1>
		<form action="<?php echo e(route('users.store')); ?>" method="POST" accept-charset="utf-8">
			<?php echo e(csrf_field()); ?>

			<label> Nom d'usuari:
				<input type="text" name="name" style="margin-left: 30px;" REQUIRED>
			</label><br>
			<label> E-mail:    
				<input type="email" name="email" style="margin-left: 75px;" REQUIRED>
			</label><br>
			<label> Contrasenya:
				<input type="password" name="password" style="margin-left: 30px;" REQUIRED>
			</label><br>		
			<label> Rol:    
				<div class="btn-group" style="margin-left: 100px;">
				   <div class="form-group">
					  <select class="form-control" name="role" id="sel1">
					    <option value="1 - Admin">Admin</option>
					    <option value="2 - treballador">Treballador</option>
					    <option value="3 - Client">Client</option>
					  </select>
					</div> 
				</div>
			</label><br><br>			
			<input type="submit" value="Enviar" style="margin-left: 130px;">
		</form>
	</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>