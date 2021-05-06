<!-- Ajout du template html, navbar et footer, commun à toute les pages -->
@extends('site/sectionsLayouts/template')

<!-- Corps de la page accueil-->
@section('content')
<!--section image d'accueil-->
<div class="bgimageaccueil mask px-4 py-4 text-center">
    <div class="py-5 pt-0">
        <h1 class="titre display-1 fw-bold py-4">Tradition et Convivialité</h1>
        <div class="col-lg-6 mx-auto">
        <p class="fs-3 mb-5 accueil-texte">Pomme cannelle, c'est avant tout un concept associant la pâtisserie traditionnelle et la restauration de brasserie, dans une ambiance sympa et décontractée.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-outline-jaune btn-lg px-4 me-sm-3 fw-bold"><i class="fas fa-utensils"></i> Restaurant</button>
            <button type="button" class="btn btn-outline-jaune btn-lg px-4 me-sm-3 fw-bold"><i class="fas fa-birthday-cake"></i> Pâtisserie</button>
        </div>
        </div>
    </div>
</div>

<!--section présentation générale de l'entreprise-->
<div class="bg-pale w-100">
  <div class="container h-100">
    <div class="card card-bg w-100">
        <div class="row g-0 align-items-center">
          <div class="col-md-6 text-center">
            <img src="{{ asset('images/patrons.png') }}" alt="Présentation de Patrick et Nathalie Nicaise, gérant de 'Pomme Cannelle'" class="img-fluid w-75 my-5">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h1 class="card-title display-4 text-center fw-bold">Simple et authentique en même temps,....
              </h1>
              <p class="card-text"><strong>C'est une Pâtisserie ou un Restaurant ?</strong> "Pomme Cannelle" c'est un tout qui allie 2 activités, la cuisine-maison savoureuse et la pâtisserie maison traditionnelle.  
                C'est en 1999 que Patrick et Nathalie se lancent dans l'aventure pour vous faire partager leur passion de la cuisine et de la pâtisserie. Les recettes et les tours de main propres à la fabrication artisanale se sont transmis de père en fils sur trois générations.
                Poussez donc la porte et vous serez aimablement accueillis dans un espace au charme rétro.<br>"<i class="fst-italic">L’esprit familial du lieu nous caractérise ! En effet, chez nous, vous vous sentirez comme à la maison, <strong>en toute simplicité</strong>"</i>.
                
              </p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<!--section services (petit-déjeuner, repas midi, goûter)-->
<div class="container marketing bg-white my-5">
  <div class="row">
    <div class="col-lg-4">
      <img src="{{ asset('images/petit-dej.jpg') }}" alt="petit-déjeuner" class="img-fluid">
      <p><strong>Le matin,</strong> un café fumant, un verre de jus d’orange et de goûteuses viennoiseries confectionnées sur place, vous feront commencer la journée en douceur.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="{{ asset('images/diner.jpg') }}" alt="repas de midi" class="img-fluid">
      <p><strong>Le midi,</strong> prenez le temps de vous poser pour un repas entre collègues, entre amis ou en famille. Une vraie cuisine-maison sans concession pour des clients gourmets et gourmands. </p> 
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="{{ asset('images/gouter.jpg') }}" alt="goûter" class="img-fluid">
      <p><strong>L'après-midi,</strong> n'hésitez pas à pousser notre porte et découvrir notre étal de pâtisseries variées faites maison à déguster sur place ou à emporter.</p>
     
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
</div>

@stop
