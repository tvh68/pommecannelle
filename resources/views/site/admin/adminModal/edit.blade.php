@extends('site/admin/adminLayouts/adminTemplate')

@php
@endphp

@section('content') 

<div class="container administration form-plat mt-5 p-5 border">
  <h1 class="bg-cannelle text-center text-white py-2 mb-4">Affichage du modal en page d'accueil</h1>

  <form method="POST" action="{{ route('modal.update', 1)}}">
    @method("PUT")
    @csrf
    <div class="col-12">
      <div class="form-group">
        <label>Titre information</label>
        <input type="text" name="titremodal" value="{{ $modal->modal_titre }}" class="form-control @error('titremodal') is-invalid @enderror mb-2" placeholder="Entrez ici le titre du modal"/>
        <!--Message d'erreur en cas d'invalidation (champ vide)-->
        @error('titremodal')
            <div class="alert alert-danger">Vous devez entrez le titre du modal (maximum 100 caractères)</div>
        @enderror
      </div>
    </div>
    <div class="col-12">
      <div class="form-group">
        <label>Texte Information</label>
        <!-- Afficher le contenu texte sans la balise <br \>, sinon à chaque modification elle se rajoutera en BD-->
        <textarea name="textemodal" class="form-control @error('textemodal') is-invalid @enderror mb-2" placeholder="Entrez ici le texte du modal">{{ preg_replace('/<br\\s*?\/??>/i', '', $modal->modal_texte) }}
          </textarea>
        <!--Message d'erreur en cas d'invalidation (champ vide)-->
        @error('textemodal')
            <div class="alert alert-danger">Vous devez entrez le texte du modal (maximum 190 caractères)</div>
        @enderror
      </div>
    </div>        
      
    <label class="mt-2">Sujet du modal (Détermine l'image du modal)</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="choixImageModal" id="exampleRadios1" value="modal/modalVacances.jpg" <?php echo "modal/modalVacances.jpg"==$modal->modal_image ? 'checked' : '';?>>
      <label class="form-check-label" for="exampleRadios1">
        Vacances
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="choixImageModal" id="exampleRadios2" value="modal/modalVirus.jpg" <?php echo "modal/modalVirus.jpg"==$modal->modal_image ? 'checked' : '';?>>
      <label class="form-check-label" for="exampleRadios2">
        Virus
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="choixImageModal" id="exampleRadio3" value="modal/modalproduit.jpg" <?php echo "modal/modalproduit.jpg"==$modal->modal_image ? 'checked' : '';?>>
      <label class="form-check-label" for="exampleRadios3">
        Produit à mettre en évidence
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="choixImageModal" id="exampleRadio4" value="modal/modalfermeture.jpg" <?php echo "modal/modalfermeture.jpg"==$modal->modal_image ? 'checked' : '';?>>
      <label class="form-check-label" for="exampleRadios4">
        Fermeture pour cause diverse
      </label>
    </div>
    <!--Message d'erreur en cas d'invalidation (champ vide)-->
    @error('choixImageModal')
      <div class="alert alert-danger">Vous devez choisir le sujet pour définir l'image du modal</div>
    @enderror
      
    <div class="form-check form-switch my-3">
      <input class="form-check-input" type="hidden" name="afficherModal" value="0">
      <input class="form-check-input" type="checkbox" name="afficherModal" value="actif" id="switch">
      <label class="form-check-label" for="flexSwitchCheckDefault">Afficher le modal</label>
    </div>
    
    <div class="my-3">
        <button type="submit" class="btn btn-warning">Modifier le modal</button>
    </div>    
  </form>

</div>

<script src="{{ asset('js/script-modal.js') }}" type="text/javascript"></script>

@stop