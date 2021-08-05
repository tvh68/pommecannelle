<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
		  content="Pomme Cannelle, restaurant Braine-l'Alleud, pâtisserie Braine-l'Alleud, tearoom Braine-l'Alleud, petit déjeuner, tradition, authentique, plats à emportés, esprit familial, endroit rétro,
          cuisine classique, cuisine traditionnelle, dessert, tarte frangipane traditionnelle, tarte cerise,tarte pomme cannelle,tarte abricot, petit prix,
          tartelette, gourmand, truffe chocolat, gauffrette, mousse chocolat, gâteau anniversaire, gourmet">
	<meta name="description" content="Pomme Cannelle est un concept qui allie à la fois la pâtisserie véritablement traditionnelle et la restauration sur le temps de midi">
	<meta name="author" content="Thierry Van Hiel">
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
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
        
</body>
</html>