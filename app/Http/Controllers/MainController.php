<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function accueil()
    {
        return view('site.pages.accueil');
    }

    public function restaurant()
    {
        $plats = Produit::all();
        return view('site.pages.restaurant', [
            'plats' => $plats
        ]);
    }

    public function patisserie()
    {
        return view('site.pages.patisserie');
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
