<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="col-md-12 mt-5">
      <div class="row mt-5">

        <h1 class="page-header">Listado de productos</h1>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Descripción</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $productes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($producte->preu); ?></td>
            <td><?php echo e($producte->nom); ?></td>
            <td><?php echo e($producte->descripcio); ?></td>
            <td class="text-right"><?php echo e($producte->quantitat); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<hr>
<p>
    <a href="<?php echo e(route('ruta_pdf_productes')); ?>" class="btn btn-sm btn-primary">
        <i class="far fa-file-alt"></i> Descargar productos en PDF
    </a>
</p>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>