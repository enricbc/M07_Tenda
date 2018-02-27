<?php

namespace App\Http\Controllers;
use Illuminate\Routing\UrlGenerator;
use App\Http\Requests\RequestCrearProducte;
use App\Http\Requests\RequestActualitzarProducte;
use App\Http\Requests\RequestActualitzarStockProducte;
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
      $producte = new Producte;

      return view('productes.crear')->with(['producte'=>$producte]);
    }

    public function guardar(RequestCrearProducte $request)
    {

      $inputs=$request->only('nom', 'descripcio', 'preu', 'quantitat');

      $image = $request->file('url');

      $ruta= time().'.'.$image->getClientOriginalExtension();

      $input['url'] = $ruta;

      $destinationPath = public_path('images');


      $image->move($destinationPath, $input['url']);


      $r=(string)$request->root().'/images/'.''.$ruta;

     $inputs = array_merge($inputs, array("url"=>$r));

      $producte = Producte::create($inputs);

    //  dd($r);
      session()->flash('misatge','Producte Creat!'); //Flash perque un cop creat es eliminat

      return redirect()->route('ruta_productes');
    }

    public function editar(Producte $producte)
    {
      return view('productes.editar')->with(['producte'=>$producte]);
    }

    public function actualitzar(Producte $producte, RequestActualitzarProducte $request)
    {
      $inputs=$request->only('nom', 'descripcio', 'preu', 'quantitat');

      $image = $request->file('url');

      if(!is_null($image)){
      $ruta= time().'.'.$image->getClientOriginalExtension();

      $input['url'] = $ruta;

      $destinationPath = public_path('images');


      $image->move($destinationPath, $input['url']);


      $r=(string)$request->root().'/images/'.''.$ruta;

     $inputs = array_merge($inputs, array("url"=>$r));
   }
      $producte->update(
        $inputs
      );

      session()->flash('misatge','Producte Actualitzat!'); //Flash perque un cop creat es eliminat

      return redirect()->route('ruta_producte',['producte'=>$producte->id]);
    }
    public function eliminar(Producte $producte)
    {
      $producte->delete();

      session()->flash('misatge','Producte Eliminat!'); //Flash perque un cop creat es eliminat

      return redirect()->route('ruta_productes');
    }
    public function actualitzarStock($quantitat)
    {

      $producte->update(
        $qunatitat
      );

    }
}
