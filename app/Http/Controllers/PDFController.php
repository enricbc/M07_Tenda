<?php

namespace App\Http\Controllers;
use Illuminate\Routing\UrlGenerator;
use App\Http\Requests\RequestCrearProducte;
use App\Http\Requests\RequestActualitzarProducte;
use Illuminate\Http\Requests;
use App\Producte;
use Barryvdh\DomPDF\Facade as PDF;

class PDFController extends Controller
{
    public function index()//LListem tots els productes
    {
      $productes = Producte::all();

        return view('pdfproductes')->with(['productes'=>$productes]);
    }
    public function pdf()
      {
          /**
           * toma en cuenta que para ver los mismos
           * datos debemos hacer la misma consulta
          **/
          $productes = Producte::all();

          $pdf = PDF::loadView('pdf.pdfproductes', compact('productes'));

          return $pdf->download('pdf.pdfproductes.pdf');
      }
      public function pdfcarro()
        {
            /**
             * toma en cuenta que para ver los mismos
             * datos debemos hacer la misma consulta
            **/

            $pdf = PDF::loadView('pdf.pdfcarro', compact('productes'));

            return $pdf->download('pdf.pdfcarro.pdf');
        }
}
