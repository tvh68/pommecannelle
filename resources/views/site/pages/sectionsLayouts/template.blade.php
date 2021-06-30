<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- style site et admin -->   
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- OpenStreetMap -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <title>Pomme Cannelle</title>
</head>

<body>
    
    @include('site.pages.sectionsLayouts.navbar')
    @yield('content')
    @include('site.pages.sectionsLayouts.footer')

    <!--Fichiers Javascript-->
    <!--JS Bootstrap-->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js.map') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>