@extends('layouts.app')

@section('content')
  <!--Comensar carrousel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner shadow-all-3i" style="" id="splash">
    @for ($i=0; $i < 3; $i++)
      @if($i == 0)
      <div class="parallax carousel-item active"style="height:520px;background: url('http://localhost:82/M07/M07_tenda/public/images/offer.jpg');">
      @else
      <div class="parallax carousel-item"style="height:520px;background: url({{$productes[$i]->url}});">
      @endif

      </div>
    @endfor
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  <!-- Final carrousel-->
  <div class=" shadow-sup-2i container col-12" style="height:42px;width:100%;">

  </div>
<div class="container mt-5">
  <div class="row mt-5">
  @foreach ($productes as $producte)
      <div class="col-sm-4 card-deck">
        <div class="card border-primary my-4" style="height: 18em;width:20em">
          @if (Auth::guest())
            <a href="{{ route('ruta_producte', ['producte'=>$producte->id])}}"><img class="card-img-top" height="200px"src="{{$producte->url}}" alt=""></a>
          <div class="card-body p-0 bg-light" >
            <div class="container">
              <div class="row mt-1">
                <div class="col">
                <h6 class="text-center">{{$producte->nom}}</h6>
                <h5 class="text-center my-0">{{$producte->preu}} €</h5>
                </div>
              </div>
            </div>
          @else
            <a href="{{ route('ruta_producte', ['producte'=>$producte->id])}}"><img class="card-img-top"style="height:160px;" src="{{$producte->url}}" alt=""></a>
          <div class="card-body bg-light" >
            <a class="card-link">Preu: {{$producte->preu}}</a><br>
            <a class="card-link">Quantitat: {{$producte->quantitat}}</a>
          @endif

              @if (Auth::guest())

              @else
                <small class="float-right pl-5" >
              <a href="{{route('ruta_editar_producte', ['producte'=>$producte->id])}}"class="btn btn-info">Editar</a>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#comprovarEliminar">
                Eliminar
              </button>
              
              </small>
            @endif

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
  @endforeach

  </div>
</div>
<div class=" container col-2 mt-4 ">
  <div class="row ">
    {{$productes->render("pagination::bootstrap-4")}}
  </div>
</div>
<div class="shadow-inf-2i"  style="height:42px;width:100%;">

</div>

@endsection
