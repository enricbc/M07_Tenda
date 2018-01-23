<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producte;
class ProductesController extends Controller
{
    public function index()//LListem tots els productes
    {
      $productes = Producte::all();

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
}
