@extends('layouts.app')

@section('content')
  <h2>Crear Producte</h2>
  <br>
  @include('productes._form', ['producte'=>$producte])

@endsection
