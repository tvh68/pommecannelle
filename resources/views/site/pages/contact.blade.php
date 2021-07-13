<!-- Ajout du template html, navbar et footer, commun à toute les pages -->
@extends('site/pages/sectionsLayouts/template')
<!-- Corps de la page accueil-->
@section('content')

<main class="w-100 bg-pale py-5">
  <div class="container bg-white shadow rounded p-3">
    <h2 class="card-title display-5 py-3 text-center text-cannelle">Idéalement située à deux pas de la gare de Braine-L'Alleud</h2>
    <h2 class="card-title display-6 bg-cannelle text-center text-jaune py-2">Rue Jules Hans, 79 - 1420 Braine-L'Alleud</h2>
    <hr>
    <div class="card w-100 border">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6">
          <div class="card-body">
            <h3 class="card-title fw-bold">Petit déj' avant d'attaquer le boulot ?</h3>
            <p class="card-text"> Le petit déjeuner se compose de viennoiseries au choix, préparés artisanalement sur place. Une expérience délicieuse pour nos papilles gustatives. </p>
          </div>
          <div class="card-body">
            <h3 class="card-title fw-bold">Petit break ce midi ?</h3>
            <p class="card-text">Quel meilleur occasion sur le temps de midi, pour se retrouver et partager des moments privilégiés entre collègues, entre amis, en famille ou en amoureux, devant un bon petit plat !</p>
          </div>
          <div class="card-body">
            <h3 class="card-title fw-bold">Pas envie de cuisiner ce soir ?</h3>
            <p class="card-text">Emploi du temps trop chargé? Trop la flemme de se mettre au fourneau? La cuisine c'est tout un art et bien souvent on a pas nécessirement le temps, ni même l'envie de concocter un plat digne de soit. 
              Clairement il est bon quelque fois de se tourner vers la facilité, rien qu'à la simple idée de passer une heure en cuisine. <strong>Alors n'hésitez pas à nous contacter pour réserver votre plat à emporter.</strong></p>
          </div>
        </div>
        <!--carte OpenStreetMap-->
        <div class="col-lg-6 text-center" id="macarte">                
        </div>
      </div>
    </div>
  </div>
</main>   

<!--JS leaflet (Map)-->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
<script src="{{ asset('js/script-map.js') }}"></script>
@stop