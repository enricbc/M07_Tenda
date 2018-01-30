@extends('layouts.app')

@section('content')



<div class="container">
  <div class="row">

  @foreach ($productes as $producte)

      <div class="col-sm-4">
        <div class="card mt-4" style="height: 18em;width:20em">
          <div class="card-header bg-success ">
            <h5 class="card-title "><a class="text-light"href="{{ route('ruta_producte', ['producte'=>$producte->id])}}">{{$producte->nom}}</a></h5>
          </div>
          <div class="card-body">
            <img src="{{$producte->url}}" alt="">
            <p class="card-text">{{$producte->descripcio}}</p>
          </div>
          <div class="card-footer bg-light" >
            <a class="card-link">{{$producte->preu}}</a>
            <a class="card-link">{{$producte->quantitat}}</a>
            <small class="float-right pl-5" >
              <a href="{{route('ruta_editar_producte', ['producte'=>$producte->id])}}"class="btn btn-info">Editar</a>
              <form action="{{route('ruta_eliminar_producte', ['producte'=>$producte->id])}}" method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </small>
          </div>
        </div>
      </div>

  @endforeach

  </div>
</div>
<div class=" container col-2 mt-4">
  <div class="row ">
    {{$productes->render("pagination::bootstrap-4")}}
  </div>
</div>

@endsection
