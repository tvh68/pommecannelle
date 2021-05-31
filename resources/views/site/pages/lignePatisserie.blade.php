<!--Affiche une carte-->
<div class="col py-4">
    <div class="card h-100">
        <img src="{{asset('storage')}}/{{ $patisserie->produit_image }}" class="card-img-top w-100" alt="pâtisserie traditionnelles">
        <div class="card-body">
            <h3 class="card-title">{{ $patisserie->produit_libelle }}</h3>
            <p class="card-text">{{ $patisserie->produit_description }}</p>
        </div>
    </div>
</div>