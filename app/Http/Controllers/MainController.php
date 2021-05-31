<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function accueil()
    {
        return view('site.pages.accueil');
    }

    public function restaurant()
    {
        $plats = DB::table('produits')->where('categorie_id', '=', 4)->get();
        
        return view('site.pages.restaurant', [
            'plats' => $plats
        ]);
    }

    public function patisserie()
    {       
        $patisseries = Produit::where('categorie_id', '<>', 4)->get();
        return view('site.pages.patisserie', [
            'patisseries' => $patisseries
        ]);
    }

    public function contact()
    {
        return view('site.pages.contact');
    }

    public function mentionslegales()
    {
        return view('site.pages.mentionslegales');
    }

}
