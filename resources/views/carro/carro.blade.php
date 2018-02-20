@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12 mt-5">
      <div class="row mt-5">
        @if (Cart::count() <= 0  )
          <table class="table table-hover"><thead class="bg-alert"><tr><th><center>No hi han productes al carro</center></th></tr></thead></table>
        @else
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Producte</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th scope="col">Quantitat</th>
              <th scope="col">Preu</th>
            </tr>
          </thead>
          <tbody>
            @foreach (Cart::content() as $row)
            <tr>
              <input hidden type="text" name="id" value="{{$row->id}}">
              <td class="col-md-2"><a style="text-decoration:none;"class="text-dark" href="{{route('ruta_producte', ['producte'=>$row->id])}}">{{$row->name}}</a></td>
              <td><a href="{{route('ruta_afegir_carro', ['producte'=>$row->id])}}"><i class="far fa-plus-square text-success float-right" style="font-size:40px"></i></a></td>
              <td><a href="{{route('ruta_eliminar_carro', ['producte'=>$row->rowId])}}"><i class="far fa-trash-alt text-danger float-right" style="font-size:38px"></i></a></td>
              <td class="col-3">
                <form class="" action="{{route('ruta_actualitzar_carro', ['producte'=>$row->rowId])}}">
                  <div class="row">
                    <div class="">
                      <input class="form-control "type="number" style="width: 59px;" name="quantitat" value="{{$row->qty}}">
                    </div>
                  </div>
              </td>
              <td><button style="border:none; background-color: transparent;" ><i style="font-size:40px;" class="text-success far fa-arrow-alt-circle-left"></i></button></i></form></td>
              <td class="col-md-2">{{$row->qty}}</td>
              <td class="col-md-auto">{{$row->price}}</td>
            </tr>
            @endforeach
          </tbody>
          </table>
          <div class="container">
            <div class="row col-2 offset-9">
              <table class="table table-dark my-2 ">
                <thead>
               		<tr>
               			<th>Subtotal</th>
               			<th>Tax</th>
                    <th>Total</th>
               		</tr>
                </thead>
                <tbody>
                  <tr class="bg-light text-dark">
                    <td scope="col">{{Cart::subtotal()}}</td>
               			<td scope="col">{{Cart::tax()}}</td>
                    <td scope="col">{{Cart::total()}}</td>
               		</tr>
                  <tr>
                    <td>Comprar</td>
                    <td>
                      <div class="btn btn-info container-fluid">

                      </div>
                    </td>
                  </tr>
                </tbody>
       	      </table>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
@endsection
