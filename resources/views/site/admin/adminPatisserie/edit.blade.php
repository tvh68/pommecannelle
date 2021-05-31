@extends('site/admin/adminLayouts/adminTemplate')

@php  
@endphp
<!--Formulaire d'ajout-->
@section('content') 
    <div class="container administration form-plat mt-5 p-5 border">
        <h1 class="bg-cannelle text-center text-white py-2 mb-4">Editer une Patisserie</h1>
        <form method="POST" action="{{ route('patisserie.update', $patisserie->id)}}" enctype="multipart/form-data">
            @method("PUT")
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" value="{{ $patisserie->produit_libelle }}" class="form-control @error('nom') is-invalid @enderror mb-2" placeholder="Entrez ici le nom du gâteau "/>
                    <!--Message d'erreur en cas d'invalidation (champ vide)-->
                    @error('nom')
                        <div class="alert alert-danger">Vous devez entrez le nom du gâteau (maximum 150 caractères)</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" value="{{ $patisserie->produit_description }}" class="form-control @error('prix') is-invalid @enderror mb-2" placeholder="Entrez ici la description du gâteau"/>
                    <!--Message d'erreur en cas d'invalidation (champ vide)-->
                    @error('description')
                        <div class="alert alert-danger">Vous devez entrez le nom du gâteau (maximum 200 caractères)</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Prix</label>
                    <input type="text" name="prix" value="{{ $patisserie->produit_prix }}" class="form-control @error('prix') is-invalid @enderror mb-2" placeholder="Entrez ici le prix du gâteau"/>
                    <!--Message d'erreur en cas d'invalidation (champ vide ou non numérique)-->
                    @error('prix')
                        <div class="alert alert-danger">Vous devez entrez une valeur numérique</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="categorie">Catégorie</label>
                    <select name="categorie" class="form-control">
                        @foreach($categories as $categorie)                                                 
                            <option value="{{ $categorie->id }}" {{ ( $categorie->id == $patisserie->categorie_id) ? 'selected' : '' }} >{{ $categorie->categorie_libelle }}</option>                               
                        @endforeach
                    </select>                    
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="photo" value="{{ $patisserie->produit_image }}" class="form-control" placeholder="Choisir ici la photo"/>
                    <!--Message d'erreur en cas d'invalidation (champ vide)-->
                    @error('photo')
                        <div class="alert alert-danger">Vous devez entrez une photo avec une extension jpeg,jpg,png</div>
                    @enderror
                </div>
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-warning">Modifier la pâtisserie</button>
            </div>
        </form>
    </div>
@endsection