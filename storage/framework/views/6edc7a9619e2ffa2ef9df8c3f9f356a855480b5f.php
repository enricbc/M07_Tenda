<html>
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
  <body style="background-color:#e5f4e7;">
    <div class="container">
    <h1 id="title">Listado de productos</h1>
    </div>
    <div class="container">
        <div class="col-md-12 mt-5">
          <div class="row mt-5">

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $productes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($producte->id); ?></td>
                <td><?php echo e($producte->nom); ?></td>
                <td><?php echo e($producte->descripcio); ?></td>
                <td class="text-right"><?php echo e($producte->quantitat); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
        </div>
        </div>
    </div>

  </body>
</html>
