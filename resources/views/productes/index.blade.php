@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">

  @foreach ($productes as $producte)

      <div class="col-sm-4">
        <div class="card mt-4" style="height: 15em;width:20em">
          <div class="card-header bg-success ">
            <h5 class="card-title "><a class="text-light"href="{{ route('ruta_producte', ['producte'=>$producte->id])}}">{{$producte->nom}}</a></h5>
          </div>
          <div class="card-body">
            <p class="card-text">{{$producte->descripcio}}</p>
          </div>
          <div class="card-footer bg-light" >
            <a class="card-link">{{$producte->preu}}</a>
            <a class="card-link">{{$producte->quantitat}}</a>
            <small class="pull-right px-5" >
              <a href="{{route('ruta_editar_producte', ['producte'=>$producte->id])}}"class="btn btn-info">Editar</a>
            </small>
          </div>
        </div>
      </div>

  @endforeach

  </div>
</div>
<div class="fixed-bottom container col-2 mt-4">
  <div class="row ">
    {{$productes->render("pagination::bootstrap-4")}}
  </div>
</div>

@endsection
