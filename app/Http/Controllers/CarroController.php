<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producte;
use Cart;

class CarroController extends Controller
{
  public function index()//LListem tots els productes
  {


    return view('carro.carro');
  }
  public function afegir($producte)//LListem tots els productes
  {
    $pr=Producte::find($producte);

    $preu=$pr->preu;

    Cart::add($producte, $pr->nom, 1, $pr->preu);

    return redirect()->route('ruta_carro');
  }
  public function eliminar($producte)//LListem tots els productes
  {
    Cart::remove($producte);

    return redirect()->route('ruta_carro');
  }
  public function actualitzar($producte, Request $request)//LListem tots els productes
  {
    $quantitat=$request->input('quantitat');
    Cart::update($producte, $quantitat);

    return redirect()->route('ruta_carro');
  }
}
