<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function accueil()
    {
        return view('site.pages.accueil');
    }

    public function restaurant()
    {
        return view('site.pages.restaurant');
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
