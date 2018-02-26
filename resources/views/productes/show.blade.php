@extends('layouts.app')

@section('content')
  <div class="container">
<div class="row">
  <div class="col-md-12">
    <div class="row pt-5">
      <div class="col-sm">
        <img class="image-fluid border-primary img-thumbnail"src="{{$producte->url}}" style="height:320px;width:400px;"alt="">
      </div>
      <div class="col-sm">
        <div class="row">
          <h2>{{$producte->nom}}</h2>
        </div>
        <div class="row" style="margin-bottom: 15px;">
          <div class="col"style="height:240px;">
            <div class="row" style="height:  244px;">
              <div class="col">
                <p style="height:240px;overflow:hidden;">{{$producte->descripcio}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h5>{{$producte->preu}}</h5>
              </div>
            </div>
          </div>
        </div>


          @if (Auth::guest())
            <div class="row">
            <div class="col">
            <form action="{{route('ruta_afegir_carro', ['producte'=>$producte->id,'rid'=>"nullo"])}}">
              <button class="float-right"style="border:none; background-color: transparent;"><i class=" btn btn-success far fa-plus-square"></i></button></i>
            </form>
          </div>
          @else


            <div class="row">
        <small class="col-2 offset-10" style="display:inline-flex;" >
          <form action="{{route('ruta_editar_producte', ['producte'=>$producte->id])}}">
            <button class="btn btn-info"><i class="fa fa-edit"></button></i>
          </form>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#comprovarEliminar">
            <i style="font-size:20px;"class="fa fa-trash-alt"></i>
          </button>
        </small>
</div>
</div>
        @endif
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-5">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="comprovarEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="comprovarEliminar">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Segur que vols eliminar el producte</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="{{route('ruta_eliminar_producte', ['producte'=>$producte->id])}}" method="POST">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
