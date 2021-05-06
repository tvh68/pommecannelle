@extends('site/sectionsLayouts/template')

@php
@endphp

@section('content')
<!--section présentation Pâtisserie-->
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
                      <img src="{{ asset('images/patisserie/patisserie8.jpg') }}"  class="d-block w-100" alt="patisserie Pomme Cannelle">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/patisserie/patisserie12.jpg') }}"  class="d-block w-100" alt="patisserie Pomme Cannelle">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/patisserie/patisserie14.jpg') }}"  class="d-block w-100" alt="patisserie Pomme Cannelle">
                    </div>
                  </div>
                </div>
              </li>
              <!--2ème carousel photos-->
              <li id="img2">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('images/patisserie/patisserie13.jpg') }}"  class="d-block w-100" alt="patisserie Pomme Cannelle">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/patisserie/patisserie15.jpg') }}"  class="d-block w-100" alt="patisserie Pomme Cannelle">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/patisserie/patisserie16.jpg') }}"  class="d-block w-100" alt="patisserie Pomme Cannelle">
                    </div>
                  </div>
                </div>
              </li>
              <!--3ème carousel photos-->
              <li id="img3">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('images/patisserie/dessert1.jpg') }}"  class="d-block w-100" alt="patisserie Pomme Cannelle">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/patisserie/dessert2.jpg') }}"  class="d-block w-100" alt="patisserie Pomme Cannelle">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/patisserie/dessert3.jpg') }}"  class="d-block w-100" alt="patisserie Pomme Cannelle">
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
            <div class="col-lg-6 d-flex align-items-center px-0">
              <div class="card-body ">
                <h1 class="card-title display-4 text-center fw-bold">La pâtisserie nous rend heureux.
                </h1>
                <p class="card-text pe-2">Pour lutter contre la morosité, rien de mieux que de bonnes pâtisseries faites maison, à partager avec ceux qu'on aime.
                    Les recettes et les tours de main propres à la fabrication artisanale se sont transmis de père en fils sur trois générations. 
                    Pas de couleurs artificielles ni de glaçage rutilant mais de vraies textures comme autrefois.
                    <strong>Comme tout est produit sur place et varie en fonction de nos inspirations et de la saison, il vaut mieux nous contacter si vous avez envie d'un gâteau en particulier</strong>.
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

<div class="bg-noir w-100">
    <div class="container">
        <h3 class="card-title display-3 text-center text-white">"La pâtisserie a littéralement été inventée pour remonter le moral !"</h3>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 py-4">
            <div class="col py-4">
            <div class="card h-100">
                <img src="{{ asset('images/champsdebles.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h3 class="card-title">Tarte cerise</h3>
                <p class="card-text">Pâte frangipane crkezjl rkjlgjdlk fgkldfgdfgd.</p>
                </div>
            </div>
            </div>
            <div class="col py-4">
            <div class="card h-100">
                <img src="{{ asset('images/champsdebles.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">This is a short card.</p>
                </div>
            </div>
            </div>
            <div class="col py-4">
            <div class="card h-100">
                <img src="{{ asset('images/champsdebles.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            </div>
            <div class="col py-4">
            <div class="card h-100">
                <img src="{{ asset('images/champsdebles.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <div class="col py-4">
            <div class="card h-100">
                <img src="{{ asset('images/champsdebles.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <div class="col py-4">
                <div class="card h-100">
                <img src="{{ asset('images/champsdebles.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop