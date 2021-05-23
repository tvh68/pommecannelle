<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    

    public function adminpatisserie()
    {
        return view('site.admin.adminPatisserie');
    }

    public function admincommande()
    {
        return view('site.admin.adminCommande');
    }
}
