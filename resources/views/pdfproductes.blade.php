@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12 mt-5">
      <div class="row mt-5">

        <h1 class="page-header">Listado de productos</h1>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Descripción</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productes as $producte)
        <tr>
            <td>{{ $producte->preu }}</td>
            <td>{{ $producte->nom }}</td>
            <td>{{ $producte->descripcio }}</td>
            <td class="text-right">{{ $producte->quantitat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
<p>
    <a href="{{ route('ruta_pdf_productes') }}" class="btn btn-sm btn-primary">
        <i class="far fa-file-alt"></i> Descargar productos en PDF
    </a>
</p>
    </div>
    </div>
</div>
@endsection
