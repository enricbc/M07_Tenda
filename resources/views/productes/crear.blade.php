@extends('layouts.app')

@section('content')
  <form action="" method="post" enctype="multipart/formdata">
    <div class="form-group">
      <label for="nom">Nom del producte:</label>
      <input type="text" name="" class="form-control"value="">
    </div>
    <div class="form-group">
      <label for="descripcio">Descripció:</label>
      <textarea name="descripcio" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="url">Imatge:</label>
      <input type="file" name="imatge" class="" >
    </div>
    <div class="form-group">
      <label for="preu">Preu:</label>
      <input type="number" step="any" name="preu" class="form-control">
    </div>
    <div class="form-group">
      <label for="preu">Quantitat:</label>
      <input type="number" name="quantitat" class="form-control">
    </div>
    <div class="form-group">
      <button type="button" class="btn btn-primary">
        Crear producte
      </button>
    </div>
  </form>
@endsection
