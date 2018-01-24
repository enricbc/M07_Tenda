@extends('layouts.app')

@section('content')
  @if (count($errors)>0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
    <form action="{{route('ruta_actualitzar_producte',['producte'=>$producte->id])}}" method="post" enctype="multipart/formdata">
      {{csrf_field()}}
      {{method_field('put')}}
      <div class="form-group">
        <label for="nom">Nom del producte:</label>
        <input type="text" name="nom" class="form-control"value="{{$producte->nom}}">
      </div>
      <div class="form-group">
        <label for="descripcio">Descripció:</label>
        <textarea name="descripcio" rows="5" class="form-control">{{$producte->descripcio}}</textarea>
      </div>
      <div class="form-group">
        <label for="url">Imatge:</label>
        <input type="file" name="url" value="{{$producte->url}}" class="" >
      </div>
      <div class="form-group">
        <label for="preu">Preu:</label>
        <input type="number" step="any" name="preu" class="form-control" value="{{$producte->preu}}">
      </div>
      <div class="form-group">
        <label for="preu">Quantitat:</label>
        <input type="number" name="quantitat" class="form-control" value="{{$producte->quantitat}}">
      </div>

        <button type="submit" class="btn btn-primary">
          Editar producte
        </button>

    </form>
@endsection
