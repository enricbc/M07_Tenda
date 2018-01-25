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
  <form action="{{route('ruta_guardar_producte')}}" method="post" enctype="multipart/formdata">
    {{csrf_field()}}
    <div class="form-group">
      <label for="nom">Nom del producte:</label>
      <input type="text" name="nom" class="form-control"value="{{old('nom')}}">
    </div>
    <div class="form-group">
      <label for="descripcio">Descripció:</label>
      <textarea name="descripcio" rows="5" class="form-control">{{old('descripcio')}}</textarea>
    </div>
    <div class="form-group">
      <label for="url">Imatge:</label>
      <input type="file" name="url" value="{{old('url')}}" class="" >
    </div>
    <div class="form-group">
      <label for="preu">Preu:</label>
      <input type="number" step="any" name="preu" class="form-control" value="{{old('preu')}}">
    </div>
    <div class="form-group">
      <label for="preu">Quantitat:</label>
      <input type="number" name="quantitat" class="form-control" value="{{old('quantitat')}}">
    </div>

      <button type="submit" class="btn btn-primary">
        Crear producte
      </button>

  </form>
@endsection
