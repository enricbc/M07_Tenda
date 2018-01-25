<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCrearProducte;
use Illuminate\Http\Requests;
use App\Producte;

class ProductesController extends Controller
{
    public function index()//LListem tots els productes
    {
      $productes = Producte::orderBy('id', 'desc')->paginate(9);

      return view('productes.index')->with(['productes'=>$productes]);
    }

    public function show(Producte $producte)//LListem sols un producte
    {
      return view('productes.show')->with(['producte'=>$producte]);
    }

    public function crear()
    {
      return view('productes.crear');
    }

    public function guardar(RequestCrearProducte $request)
    {
      $producte = Producte::create($request->only('nom', 'descripcio', 'url', 'preu', 'quantitat'));

      return redirect()->route('ruta_productes');
    }

    public function editar(Producte $producte)
    {
      return view('productes.editar')->with(['producte'=>$producte]);
    }

    public function actualitzar(Producte $producte, RequestCrearProducte $request)
    {
      $producte->update(
        $request->only('nom', 'descripcio', 'url', 'preu', 'quantitat')
      );

      return redirect()->route('ruta_producte',['producte'=>$producte->id]);
    }
}
