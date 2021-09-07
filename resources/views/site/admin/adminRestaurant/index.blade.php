@extends('site/admin/adminLayouts/adminTemplate')

@php    

@endphp
   
@section('content')

<main class="administration">
  <!--Message s'alert de réussite d'ajout-->
  <div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close" ></button>
          <strong>{{ $message }}</strong>
        </div>
    @elseif ($message = Session::get('danger'))
        <div class="alert alert-danger alert-block">
          <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close" ></button>
          <strong>{{ $message }}</strong>
        </div>
    @endif
    <h1 class="text-center font-weight-bold my-3">Restaurant - Il y a {{ $nbrplats }} <?php echo $nbrplats <2 ? 'plat' : 'plats'; ?></h1>
    <hr>
    <a class="btn btn-info p-2 my-4 text-white" href="{{ route('restaurant.create') }}"><i class="fas fa-plus"></i> Ajouter un plat</a>
    <table class="table table-hover table table-bordered table-responsive-lg mb-5">
        <thead class="bg-secondary">
          <tr class="table-active text-white">
            <th scope="col">Plat</th>
            <th scope="col">Prix</th>
            <th scope="col">Crée le</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @each('site/admin/adminRestaurant/ligneAdminRestaurant', $plats, 'plat')
        </tbody>
    </table>
    <!--Bloc pagination-->
    <div class="d-flex justify-content-center align-items-center p-0 m-0">
      {{ $plats->links('site.admin.vendor.pagination.custom')}}
    </div>
  </div>
</main>
@stop



