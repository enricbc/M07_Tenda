@if ($producte->exists)
  <form action="{{route('ruta_actualitzar_producte',['producte'=>$producte->id])}}" method="post" enctype="multipart/form-data">
    {{method_field('put')}}
@else
    <form action="{{route('ruta_guardar_producte')}}" method="post" enctype="multipart/form-data">
@endif
  {{csrf_field()}}
  <div class="form-group">
    <label for="nom">Nom del producte:</label>
    <input type="text" name="nom" class="form-control"value="{{$producte->nom or old('nom')}}">
  </div>
  <div class="form-group">
    <label for="descripcio">Descripció:</label>
    <textarea name="descripcio" rows="5" class="form-control">{{$producte->descripcio or old('descripcio')}}</textarea>
  </div>
  <div class="form-group">
    <label for="url">Imatge:</label>
    <input type="file" name="url" value="{{$producte->url or old('url')}}" class="" >
  </div>
  <div class="form-group">
    <label for="preu">Preu:</label>
    <input type="number" step="any" name="preu" class="form-control" value="{{$producte->preu or old('preu')}}">
  </div>
  <div class="form-group">
    <label for="preu">Quantitat:</label>
    <input type="number" name="quantitat" class="form-control" value="{{$producte->quantitat or old('quantitat')}}">
  </div>

    <button type="submit" class="btn btn-primary">
      Guardar producte
    </button>
</form>
