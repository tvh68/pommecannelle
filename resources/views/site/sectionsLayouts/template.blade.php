<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!--OpenStreetMap -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    
    
    <title>Pomme Cannelle</title>
</head>

<body>
    
    @include('site.sectionsLayouts.navbar')
    @yield('content')
    @include('site.sectionsLayouts.footer')

    <!--Fichiers Javascript-->
    <!--JS Bootstrap-->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js.map') }}"></script>
    <!--JS leaflet (Map)-->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <!--Scripts Personnels-->
    <script src="{{ asset('js/scriptPerso.js') }}"></script>

    
</body>
</html>