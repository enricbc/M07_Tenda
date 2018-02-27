@extends('layouts.app')

@section('content')
  <div class="container my-5">
  <h2>Editar Producte</h2>
  <br>
  @include('productes._form', ['producte'=>$producte])
</div>
@endsection
