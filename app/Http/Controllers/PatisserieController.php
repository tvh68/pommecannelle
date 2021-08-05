<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Str , File as FileFacade;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PatisserieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//afficher les cards
    {
        //On affiche 6 éléments par pages
        $patisseries = Produit::where('categorie_id', '<', 4)->paginate(8);   
        $categories =  Categorie::where('id', '<', 4)->get();
        return view('site.admin.adminPatisserie.index', [
            'patisseries' => $patisseries,
            'categories' => $categories,
            'nbrpatisseries' => count(Produit::all()->where('categorie_id', '<>', 4))            
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.admin.adminPatisserie.create',[
            'categories' => Categorie::where('id', '<', 4)->get()
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
        //validation des données du formulaire d'ajout(create.blade)
        request()->validate([
            'nom' => 'required|max:150',
            'description' => 'required|max:200',
            'prix' => 'required|numeric',
            'photo' => 'required|image|mimes:jpeg,jpg,png'
         ]);
        
        //On traite la photo
        if(request()->hasFile('photo') && request()->file('photo')->isValid()){//si l'upload s'est bien passé
            //On récupère l'extension de la photo
            $extension_photo = request()->file('photo')->extension();
            //on crée un nom de fichier unique avec l'extension récupéré (avec l'aide du Helper Str)
            $nom_fichier = Str::uuid().'.'.$extension_photo;
            //On récupère le chemin pour accéder à la photo à partir du dossier storage
            $imagePath = request()->file('photo')->store('photos', 'public');
            $img = Image::make(public_path("/storage/{$imagePath}"))->fit(600,400);
            $img->save();
            //on rempli les champs de la table Produit     
            Produit::create([
                'produit_libelle' => $request->nom,
                'produit_description' => $request->description,
                'produit_prix' => $request->prix,
                'produit_image' => $imagePath, //dossier + nom de fichier
                'categorie_id' => $request->categorie
            ]);
        }        
        //On revient sur la page adminPatisserie avec un message de réussite. 
        return redirect('/admin/patisserie')->with('success',"Le gâteau a bien été ajouté !");
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
    public function edit(Produit $patisserie)
    {    
        return view('site.admin.adminPatisserie.edit',[
            'patisserie' => $patisserie,
            'categories' => Categorie::where('id', '<', 4)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $patisserie)
    {
        request()->validate([
            'nom' => 'required|max:150',
            'description' => 'required|max:200',
            'prix' => 'required|numeric',
            'photo' => 'required|image|mimes:jpeg,jpg,png'
         ]);
        
        //On traite la photo
        if(request()->hasFile('photo') && request()->file('photo')->isValid()){//si l'upload s'est bien passé
            //On récupère l'extension de la photo
            $extension_photo = request()->file('photo')->extension();
            //on crée un nom de fichier unique avec l'extension récupéré (avec l'aide du Helper Str)
            $nom_fichier = Str::uuid().'.'.$extension_photo;
            //On récupère lechemin pour accéder à la photo à partir du dossier storage
            $imagePath = request()->file('photo')->store('photos', 'public');
            $img = Image::make(public_path("/storage/{$imagePath}"))->fit(600,400);    
            $img->save();      
        }       
        //on rempli les champs de la table Produit
        $patisserie->produit_libelle = $request->input('nom'); 
        $patisserie->produit_description = $request->input('description');
        $patisserie->produit_prix = $request->input('prix');
        $patisserie->produit_image = $imagePath;
        $patisserie->categorie_id = $request->input('categorie'); 
        //On sauve dans la BD   
        $patisserie->save(); 
        //On revient sur la page adminPatisserie avec un message de réussite. 
        return redirect('/admin/patisserie')->with('success',"La pâtisserie a bien été modifié!");
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Trouver la pâtisserie à supprimer
        $patisserie = Produit::find($id);
        //Supprimer la photo du répertoire 
        FileFacade::delete(public_path("/storage/{$patisserie->produit_image}"));  
        //supprimer dans la base de données      
        $patisserie ->delete();
        //On revient sur la page adminPatisserie avec un message de réussite.
        return redirect()->route('patisserie.index')->with('success',"La patisserie a bien été supprimé !");
    }
}
