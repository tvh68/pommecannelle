<!-- Ajout du template html, navbar et footer, commun à toute les pages -->
@extends('site/sectionsLayouts/template')

<!-- Corps de la page accueil-->
@section('content')
<!--section image d'accueil-->
<div class="bgimageaccueil mask px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-1 fw-bold accueil-titre">Tradition et Convivialité</h1>
        <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4 accueil-texte">Pomme cannelle, c'est avant tout un concept associant la pâtisserie traditionnelle et la restauration de brasserie, dans une ambiance sympa et décontractée.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-outline-primary btn-lg px-4 me-sm-3 fw-bold"><i class="fas fa-utensils"></i> Restaurant</button>
            <button type="button" class="btn btn-outline-primary btn-lg px-4 me-sm-3 fw-bold"><i class="fas fa-birthday-cake"></i> Pâtisserie</button>
        </div>
        </div>
    </div>
</div>

<!--section présentation générale de l'entreprise-->
<div class="bg-beige w-100">
  <div class="container">
    <div class="card my-3 w-100">
        <div class="row g-0 align-items-center">
          <div class="col-md-6 text-center">
            <img src="{{ asset('images/patron.jpg') }}" alt="..." class="img-fluid w-75">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h1 class="card-title display-2 text-center">Card title</h1>
              <p class="card-text text-justify">This is a wider card with supporfghfgfghfg fghfgh fghfghf fghfghhfghting textfhgfghfghf fgnfghfghfgg fgnffghfghf fg f  f below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<!--section services (petit-déjeuner, repas midi, goûter)-->
<div class="container marketing bg-white">
  <div class="row">
    <div class="col-lg-4">
      <img src="{{ asset('images/petit-dej.jpg') }}" alt="patron-pommecannelle" class="img-fluid">
      <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="{{ asset('images/diner.jpg') }}" alt="patron-pommecannelle" class="img-fluid">
      <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p> 
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="{{ asset('images/gouter.jpg') }}" alt="patron-pommecannelle" class="img-fluid">
      <p>And lastly this, the third column of representative placeholder content.</p>
     
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
</div>

@stop
