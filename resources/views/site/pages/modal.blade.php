<!-- Modal d'information pour la page d'accueil-->
@foreach ($modal as $modalinfo)
@if($modalinfo->modal_afficher == 'actif')
<div class="modal fade border" id="modalInformation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <img class="mx-auto img-fluid d-block border rounded-top" src="{{asset('images')}}/{{ $modalinfo->modal_image }}" alt="image information" />
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">{{ $modalinfo->modal_titre }}</h3> 
      </div>
      <div class="modal-body">
        <p>{!! $modalinfo->modal_texte !!}</p><!-- On interprête les balises html de l'enregistrement de la BD, ici on exécute la balise <br /> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
@endif
@endforeach
  