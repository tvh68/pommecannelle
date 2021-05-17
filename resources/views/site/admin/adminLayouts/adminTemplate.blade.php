<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>Pomme Cannelle</title>
</head>

<body>
    
    @include('site.admin.adminLayouts.adminNavbar')
    @yield('content')

    <!--Fichiers Javascript-->
    <!--JS Bootstrap-->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js.map') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>