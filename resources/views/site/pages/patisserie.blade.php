@extends('site/sectionsLayouts/template')

@php
@endphp

@section('content')

<div class="container">
    <div class="card my-3 w-100">
        <div class="row g-0 align-items-center">
          <div class="col-md-6 text-center">
            <img src="{{ asset('images/patron.jpg') }}" alt="..." class="img-fluid w-75">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h1 class="card-title display-2 text-center">La pâtisserie a littéralement été inventée pour remonter le moral !</h1>
              <p class="card-text">Pour lutter contre la morosité, rien de mieux que de bonnes pâtisseries faites maison, à partager avec ceux qu'on aime. Nos pâtisseries sont préparées sur place ...goût et texture ...fascinée ..partagent la passion de la cuisine est né de ma passion depuis toujours pour la pâtisserie...parce que chez nous le plaisir est une chose qui ne se prend pas à la légère.  .ontentThis is a longer card with supporting text below as a natural lead-in to additional contentThis is a longer card with supporting text below as a This is a longer card with supporting text below as a natural lead-in to additional contentThis is a longer card with supporting text below as a natural lead-in to additional contentThis is a longer card with supporting text below as a natural lead-in to additional contentnatural lead-in to additional content.</p>
              <div class="text-center">
                <button class="btn btn-primary btn-lg" type="button">Example button</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="bg-noir w-100">
    <div class="container">
        <h3 class="card-title display-3 text-center text-white">"La pâtisserie nous rend heureux"</h3>
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