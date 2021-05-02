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
              <h1 class="card-title display-2 text-center">Card title</h1>
              <p class="card-text"> La cuisine est destinée à flatter vos papilles, en profitant du meilleur de chaque saison, de manière insolite et traditionnelle.
                Cela dépend de l’inspiration du chef. Notre carte, du clssique à l'inatendu longer card with supporting text below as a natural lead-in to additional contentThis is a longer card with supporting text below as a This is a longer card with supporting text below as a natural lead-in to additional contentThis is a longer card with supporting text below as a natural lead-in to additional contentThis is a longer card with supporting text below as a natural lead-in to additional contentnatural lead-in to additional content.</p>
              <div class="text-center">
                <button class="btn btn-primary btn-lg" type="button">Example button</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>


@stop