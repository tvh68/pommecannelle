@extends('site/admin/adminLayouts/adminTemplate')
<!--Formulaire d'ajout-->
@section('content') 
    <div class="container administration form-plat mt-5 p-5 border">
        <h1 class="bg-cannelle text-center text-white py-2 mb-4">Ajout d'un nouveau plat</h1>
        <form method="POST" action="{{ route('restaurant.store')}}">
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label>Nom du plat</label>
                    <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror mb-2" placeholder="Entrez ici le nom du plat "/>
                    <!--Message d'erreur en cas d'invalidation (champ vide)-->
                    @error('nom')
                        <div class="alert alert-danger">Vous devez entrez le nom du plat (maximum 150 caractères)</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Prix</label>
                    <input type="text" name="prix" class="form-control @error('prix') is-invalid @enderror mb-2" placeholder="Entrez ici le prix du plat"/>
                    <!--Message d'erreur en cas d'invalidation (champ vide ou non numérique)-->
                    @error('prix')
                        <div class="alert alert-danger">Vous devez entrez une valeur numérique</div>
                    @enderror
                </div>
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-warning">Ajouter</button>
            </div>

        </form>
    </div>

@endsection