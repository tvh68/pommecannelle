<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //On affiche 6 éléments par pages.
        $plats = Produit::where('categorie_id', '=', 4)->paginate(6);        
        $nbrplats = count(Produit::all()->where('categorie_id', '=', 4));
        return view('site.admin.adminRestaurant.index', [
            'plats' => $plats,
            'nbrplats' => $nbrplats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.admin.adminRestaurant.create',[
            'categories' => Categorie::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation des données du formulaire ajout d'un plat(create.blade)
        request()->validate([
            'nom' => 'required|max:150',
            'prix' => 'required|numeric'
        ]);
        //Ajout du plat dans la BD, puis revenir sur la page admin/restaurant, si le plat n'est pas déjà dans la DB
        if (Produit::where('produit_libelle', $request->nom)->doesntExist()){
            Produit::create([
                'produit_libelle' => $request->nom,
                'produit_prix' => $request->prix,
                'categorie_id' => 4
            ]);
            //On revient sur la page adminRestaurant avec un message de réussite, après avoir ajouter les éléments dans la DB. 
            return redirect('/admin/restaurant')->with('success',"Le plat a bien été ajouté !");
        }
        else{
            return redirect('/admin/restaurant')->with('danger',"Le plat n'a pas été ajouté, car il existe déjà !");
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $plat)
    {
        return view('site.admin.adminRestaurant.edit',[
            'plat' => $plat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $plat)
    {
        //validation des données du formulaire ajout d'un plat(create.blade)
        request()->validate([
            'nom' => 'required|max:150',
            'prix' => 'required|numeric'
        ]);

        $plat->produit_libelle = $request->input('nom');
        $plat->produit_prix = $request->input('prix');
        $plat->save();
        return redirect()->route('restaurant.index')->with('success',"Le plat a bien été modifié !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plat = Produit::find($id);
        $plat->delete();
        return redirect()->route('restaurant.index')->with('success',"Le plat a bien été supprimé !");
    }
}
