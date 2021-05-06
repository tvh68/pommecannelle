@extends('site/sectionsLayouts/template')

@php
@endphp

@section('content')

<div class="bgimagerestaurant mask px-4 py-5 text-center">
  <div class="py-5">
      <h1 class="titre display-1 fw-bold">Entre Tradition et Convivialité</h1>
  </div>
</div>

<!--section présentation Restaurant-->
<div class="bg-pale">
  <div class="container">
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
            <p class="card-text pe-2">Notre cuisine est destinée à flatter vos papilles, en profitant du meilleur de chaque saison, de manière insolite et traditionnelle.
              Du classique à l'inatendu la carte varie également en fonction de l’inspiration du chef, ... notre carte ....proposant une petite carte mais bien ficelée de plats authentiques cuisinés avec passion.
            </p>
            <div class="text-center">
              <button class="btn btn-primary btn-lg" type="button"><i class="fas fa-file-download"></i> Les classiques</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop