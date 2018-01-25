@extends('layouts.app')

@section('content')
  <h2>Editar Producte</h2>
  <br>
  @include('productes._form', ['producte'=>$producte])
@endsection
