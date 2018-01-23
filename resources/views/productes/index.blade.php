@extends('layouts.app')

@section('content')
  @foreach ($productes as $producte)
    <div class="row">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ route('ruta_producte', ['producte'=>$producte->id])}}">{{$producte->nom}}</a></h5>
          <p class="card-text">{{$producte->descripcio}}</p>
          <a class="card-link">{{$producte->preu}}</a>
          <a class="card-link">{{$producte->quantitat}}</a>
        </div>
      </div>
      <hr>
  @endforeach

@endsection
