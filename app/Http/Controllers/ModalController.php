<?php

namespace App\Http\Controllers;

use App\Models\Modal;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('site.admin.adminModal.edit'); 
        /*        
        $modal = DB::table('modals')->where('id', '=', 1)->get();          
        return view('site.pages.accueil', [
            'modal' => $modal
        ]); 
        */
        return redirect()->route('modal.edit', ['modal' => 1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('site.admin.adminModal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        /*
        return view('site.pages.accueil', [
            'titremodal' => $request->input('titremodal'),
            'textemodal' => $request->input('textemodal')
        ]);*/
        
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
    public function edit(Modal $modal) //$id
    {
        return view('site.admin.adminmodal.edit', [
            'modal' => $modal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modal $info)
    {        
        //validation des données du formulaire ajout d'un plat(create.blade)
        request()->validate([
            'titremodal' => 'required|max:60',
            'textemodal' => 'required|max:190',
            'choixImageModal' => 'required',            
        ]);

        $textemodal = nl2br($request->input('textemodal')); // Insérer les balises de saut de ligne (br \)
        //$info->modal_id = $request->input('id');
        $info->modal_titre = $request->input('titremodal');
        $info->modal_texte = $textemodal;
        $info->modal_image = $request->input('choixImageModal');
        $info->modal_afficher = $request->input('afficherModal');
        //dd($info);
        $info->save(); // Sauver les nouvelles infos dans la base de données
        return redirect()->route('restaurant.index')->with('success',"Le modal a bien été modifié !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
