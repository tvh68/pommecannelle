@extends('site/pages/sectionsLayouts/template')

@php
@endphp

@section('content')
<main class="bg-pale">
  <div class="bg-image bgimagerestaurant mask px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="titre display-1 fw-bold">Entre Tradition et Convivialité</h1>
    </div>
  </div>

  <!--section présentation Restaurant-->
  <div class="container bg-pale">
    <div class="card card-bg">
      <div class="row my-5">
        <!--partie 1/2 de la préentation. carousels photos-->
        <div class="col-lg-6 py-5 my-4 d-flex align-items-center">
          <ul id="conteneur" class="d-flex flex-wrap justify-content-center">
            <!--1er carousel photos-->
            <li id="img1">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/restaurant/plat1.jpg') }}"  class="d-block w-100" alt="plat du restaurant Pomme Cannelle">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/restaurant/plat15.jpg') }}"  class="d-block w-100" alt="plat du restaurant Pomme Cannelle">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/restaurant/plat3.jpg') }}"  class="d-block w-100" alt="plat du restaurant Pomme Cannelle">
                  </div>
                </div>
              </div>
            </li>
            <!--2ème carousel photos-->
            <li id="img2">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/restaurant/plat4.jpg') }}"  class="d-block w-100" alt="plat du restaurant Pomme Cannelle">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/restaurant/plat5.jpg') }}"  class="d-block w-100" alt="plat du restaurant Pomme Cannelle">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/restaurant/plat7.jpg') }}"  class="d-block w-100" alt="plat du restaurant Pomme Cannelle">
                  </div>
                </div>
              </div>
            </li>
            <!--3ème carousel photos-->
            <li id="img3">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/restaurant/plat11.jpg') }}"  class="d-block w-100" alt="plat du restaurant Pomme Cannelle">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/restaurant/plat12.jpg') }}"  class="d-block w-100" alt="plat du restaurant Pomme Cannelle">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/restaurant/plat16.jpg') }}"  class="d-block w-100" alt="plat du restaurant Pomme Cannelle">
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!--partie 2/2 de la préentation. Textes et téléchargement de la carte-->
        <div class="col-lg-6 d-flex align-items-center px-0">
          <div class="card-body ">
            <h1 class="card-title display-4 text-center fw-bold">Une petite carte, mais plutôt bien ficelé.
            </h1>
            <p class="card-text py-2">Notre cuisine est destinée à flatter vos papilles, en profitant du meilleur de chaque saison, de manière insolite et traditionnelle.
              Du classique à l'inatendu la carte varie également en fonction de l’inspiration du chef, ... notre carte ....proposant une petite carte mais bien ficelée de plats authentiques cuisinés avec passion.
            </p>
            <div class="text-center">
              <button class="btn btn-primary btn-lg" type="button"><i class="fas fa-file-download"></i> Notre carte</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--section tableau accroché au mur-->
  <div class="bgImageMur p-5">
    <div class="container tableau bg-noir p-5">
      <h2 class="display-1 text-white text-center">Suggestions de la semaine</h2>
      <hr class="m-4 text-white">
      <ul class="list-unstyled text-white row row-cols-2">
        <li>Tartiflette</li>
        <li>blanquette de veau</li>
        <li>spaghetti carbonara</li>
        <li>boeuf bourguignon</li>
        <li>Dos de lieu noir sauce vin blanc</li>
        <li>chicon farci</li>
        <li>Boulette mozzarella</li>  
        <li>Tartiflette</li>
        <li>blanquette de veau</li>
        <li>spaghetti carbonara</li>
        <li>boeuf bourguignon</li>
        <li>Dos de lieu noir sauce vin blanc</li>
        <li>chicon farci</li>
        <li>Boulette mozzarella</li>
        @foreach ($plats as $plat)
          <li>{{ $plat->produit_libelle }}&nbsp;&nbsp;&nbsp;&nbsp;{{ $plat->produit_prix }} €</li>  
        @endforeach   
      </ul>
      <p class="text-beige my-4">Laissez-vous tenter par un dessert au choix dans l'étal de pâtisseries !</p>
      <button class="btn btn-outline-beige" type="button">Les desserts</button>
      <button class="btn btn-outline-beige" type="button">Les boissons</button>
    </div>
  </div>
</main>

@stop