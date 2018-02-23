<html>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <body style="background-color:#e5f4e7;">
    <div class="container">
    <h1 id="title">Listado de productos</h1>
    </div>
    <div class="container">
        <div class="col-md-12 mt-5">
          <div class="row mt-5">

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productes as $producte)

            <tr>
                <td>{{ $producte->id }}</td>
                <td>{{ $producte->nom }}</td>
                <td>{{ $producte->descripcio }}</td>
                <td class="text-right">{{ $producte->quantitat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
        </div>
    </div>

  </body>
</html>
