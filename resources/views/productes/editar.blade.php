@extends('layouts.app')

@section('content')
  <div class="container">
  <h2>Editar Producte</h2>
  <br>
  @include('productes._form', ['producte'=>$producte])
</div>
@endsection
