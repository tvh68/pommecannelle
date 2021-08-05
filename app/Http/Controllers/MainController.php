<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Modal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function accueil()
    {
        //Les données du modal sont passées à la vue 'Accueil'  
        $modal = DB::table('modals')->where('id', '=', 1)->get();        
        return view('site.pages.accueil', [
            'modal' => $modal
        ]);       
    }

    public function restaurant()
    {
        $plats = DB::table('produits')->where('categorie_id', '=', 4)->get();
        $desserts = DB::table('produits')->where('categorie_id', '=', 3)->get();
        return view('site.pages.restaurant', [
            'plats' => $plats,
            'desserts' => $desserts
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
