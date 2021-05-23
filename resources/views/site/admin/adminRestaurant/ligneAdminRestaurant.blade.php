<!--Affiche une ligne de plat-->
<tr>
    <td>{{ $plat->produit_libelle }}</td>
    <td>{{ $plat->produit_prix }}</td>
    <td>{{ date('d-M-Y', strtotime($plat->created_at)) }}</td>
    <td class="d-flex">
        <a href="{{ route('restaurant.edit', $plat->id) }}" class="btn btn-warning mx-3 text-white"><i class="fas fa-pen"></i> Editer</a>
        <button type="button" class="btn btn-danger mx-3 text-white" onclick="getElementById('{{ $plat->id }}').style.display='block'"><i class="fas fa-trash-alt"></i> Supprimer</button>
        <form action={{ route('restaurant.destroy', $plat->id)}} method="POST">
            @csrf
            @method("delete")
            <!--Modal de confirmation de suppression d'un élément-->
            <div class="modal" id='{{ $plat->id }}'>
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">La suppression d'un élement est défénitive</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"onclick="getElementById('{{ $plat->id }}').style.display='none'" aria-label="Close">
                        <span aria-hidden="true"></span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Etes-vous sûr de vouloir supprimer cet élément ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Oui</button>
                      <button type="button" class="btn btn-secondary" onclick="getElementById('{{ $plat->id }}').style.display='none'" data-bs-dismiss="modal">Annuler</button>
                    </div>
                  </div>
                </div>
            </div>
        </form>
    </td>
</tr>