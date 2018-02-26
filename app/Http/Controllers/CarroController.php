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
  public function afegir($producte, $rid, Request $request)//LListem tots els productes
  {

    $pr=Producte::find($producte);

      if ($rid=="nullo"&&Cart::content()->count()>=0){
        //Ve desde la vista show

        foreach(Cart::content() as $carro){

          if($carro->id==$pr->id){

            if($carro->qty>=$pr->quantitat){

              return redirect()->route('ruta_carro');
            }else{

          Cart::add($producte, $pr->nom, 1, $pr->preu);
            return redirect()->route('ruta_carro');
            }
            }
            //return redirect()->route('ruta_carro');
          }

Cart::add($producte, $pr->nom, 1, $pr->preu);
return redirect()->route('ruta_carro');
}else if($rid!="nullo"){

        $carr=Cart::get($rid);//Ve desde la vista carro

      if($carr->qty>=$pr->quantitat){

        return redirect()->route('ruta_carro');
      }else{

      Cart::add($producte, $pr->nom, 1, $pr->preu);
      return redirect()->route('ruta_carro');
      }
}

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
    $pr=Producte::find($request->input('id'));

    if($pr->quantitat>=$quantitat){
      Cart::update($producte, $quantitat);

      return redirect()->route('ruta_carro');
    }else{
      return redirect()->route('ruta_carro');
    }
  }
}
