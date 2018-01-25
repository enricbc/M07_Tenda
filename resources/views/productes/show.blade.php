@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h2>{{$producte->nom}}</h2>
    <p>{{$producte->descripcio}}</p>
    <a>{{$producte->preu}}</a>
  </div>
</div>
@endsection
