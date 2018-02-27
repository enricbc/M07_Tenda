<?php if($producte->exists): ?>
  <form action="<?php echo e(route('ruta_actualitzar_producte',['producte'=>$producte->id])); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(method_field('put')); ?>

<?php else: ?>
    <form action="<?php echo e(route('ruta_guardar_producte')); ?>" method="post" enctype="multipart/form-data">
<?php endif; ?>
  <?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label for="nom">Nom del producte:</label>
    <input type="text" name="nom" class="form-control"value="<?php echo e(isset($producte->nom) ? $producte->nom : old('nom')); ?>">
  </div>
  <div class="form-group">
    <label for="descripcio">Descripció:</label>
    <textarea name="descripcio" rows="5" class="form-control"><?php echo e(isset($producte->descripcio) ? $producte->descripcio : old('descripcio')); ?></textarea>
  </div>
  <div class="form-group">
    <label for="url">Imatge:</label>
    <input type="file" name="url" value="<?php echo e(isset($producte->url) ? $producte->url : old('url')); ?>" class="" >
  </div>
  <div class="form-group">
    <label for="preu">Preu:</label>
    <input type="number" step="any" name="preu" class="form-control" value="<?php echo e(isset($producte->preu) ? $producte->preu : old('preu')); ?>">
  </div>
  <div class="form-group">
    <label for="preu">Quantitat:</label>
    <input type="number" name="quantitat" class="form-control" value="<?php echo e(isset($producte->quantitat) ? $producte->quantitat : old('quantitat')); ?>">
  </div>

    <button type="submit" class="btn btn-primary">
      Guardar producte
    </button>
</form>
