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
                <th>Nom</th>
                <th>Quantitat</th>
                <th>Preu</th>

            </tr>
        </thead>
        <tbody>
            @foreach(Cart::content() as $row)

            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->qty }}</td>
                <td>{{ $row->price }}</td>
            </tr>
            @endforeach
            <tr>
              <th>Subtotal</th>
              <th>Iva</th>
              <th>Total</th>
            </tr>
            <tr>
              <td>{{Cart::subtotal()}}</td>
              <td>{{Cart::tax()}}</td>
              <td>{{Cart::total()}}</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
  </body>
</html>
