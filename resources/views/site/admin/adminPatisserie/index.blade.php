@extends('site/admin/adminLayouts/adminTemplate')

@php    
@endphp

@section('content')

<main class="administration">
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close" ></button>
            <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="d-flex d-flex justify-content-center text-align-center">
            <h1 class="text-center font-weight-bold m-3">Pâtisserie - Il y a {{ $nbrpatisseries }} <?php echo $nbrpatisseries <2 ? 'pâtisserie' : 'pâtisseries'; ?></h1>
            
        </div>
        <hr>
        <a class="btn btn-info p-2 my-4 text-white" href="{{ route('patisserie.create') }}"><i class="fas fa-plus"></i> Ajouter une pâtisserie</a>                 
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 py-4">
            @each('site/admin/adminPatisserie/ligneAdminPatisserie', $patisseries, 'patisseries')                
        </div>
        <!--Bloc pagination-->
        <div class="d-flex justify-content-center align-items-center p-0 m-0">
            {{ $patisseries->links('site.admin.vendor.pagination.custom')}}
        </div>
    </div>
</main>

@stop

