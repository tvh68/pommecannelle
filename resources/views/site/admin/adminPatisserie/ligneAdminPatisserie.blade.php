<!--Affiche une carte-->
<div class="col py-4">
    <div class="card h-100">
        <img src="{{asset('storage')}}/{{ $patisserie->produit_image }}" class="card-img-top w-100" alt="pâtisserie traditionnelles">
        <div class="card-body">
            <h3 class="card-title">{{ $patisserie->produit_libelle }}</h3>
            <p class="card-text">{{ $patisserie->produit_description }}</p>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-warning w-50 text-white"><i class="fas fa-pen"></i> Edit</button>
            <button type="button" class="btn btn-sm btn-danger w-50 text-white" onclick="getElementById('{{ $patisserie->id }}').style.display='block'"><i class="fas fa-trash-alt"></i> Supprimer</button>
            <form action={{ route('patisserie.destroy', $patisserie->id)}} method="POST">
                @csrf
                @method("delete")
                <!--Modal de confirmation de suppression d'un élément-->
                <div class="modal" id='{{ $patisserie->id }}'>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">La suppression d'un élement est définitive</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"onclick="getElementById('{{ $patisserie->id }}').style.display='none'" aria-label="Close">
                        <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Etes-vous sûr de vouloir supprimer cet élément ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Oui</button>
                        <button type="button" class="btn btn-secondary" onclick="getElementById('{{ $patisserie->id }}').style.display='none'" data-bs-dismiss="modal">Annuler</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
