<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    //pdf restaurant
    public function pdfrestaurant()
    {
      $plats = Produit::where('categorie_id', '=', 4)->get();
      $desserts = DB::table('produits')->where('categorie_id', '=', 3)->get();
      $pdf = PDF::loadView('site.pages.documentsLayouts.pdfRestaurant', compact('plats','desserts'));
      //dd($plats);
      return $pdf->stream('PommeCannelleRestaurant.pdf');//download('PommeCannelleRestaurant.pdf');
    }

    //pdf patisserie
    public function pdfpatisserie()
    {
      $patisseries = Produit::where('categorie_id', '<>', 4)->get();
      $pdf = PDF::loadView('site.pages.documentsLayouts.pdfPatisserie', compact('patisseries'));
      return $pdf->stream('PommeCannellePatisserie.pdf');//download('PommeCannellePatisserie.pdf');
    }
}
