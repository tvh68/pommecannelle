<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ public_path('css/stylePdf.css')}}" rel="stylesheet">
    <title>Restaurant Pomme Cannelle</title>
</head>
<body>
    <!--Coordonnées-->
    <header>
        <div class="coordonnees">
            <a href="{{ route('accueil') }}" target="_blank">pommecannelle.be</span></a>
            <ul>
                <li><span>Rue Jules Hans 79</span></li>
                <li><span>1420 Braine-L'Alleud</span></li>
                <li><span>02/385 23 70</span></li>
            </ul>
        </div>
        <div class="logo">
            <img src="{{ public_path('images/pdf-logo-pommecannelle.png') }}" alt="logo Pomme Cannelle" />
        </div>        
    </header>  
    <!--Illustration et liste des suggestions de plats et desserts-->
    <div class="cadre-restaurant">      
        <img id="illustration" src="{{ public_path('images/pdf-restaurant-illustration-repas.png') }}" />  
        <p class="presentation">Notre cuisine est destinée à flatter vos papilles, en profitant du meilleur de chaque saison, de manière insolite et traditionnelle. Du classique à l'inatendu la carte varie également en fonction de l’inspiration du chef.</p>   
        <ul>               
            @foreach ($plats as $plat)
                <li>- {{ $plat->produit_libelle }}&nbsp;&nbsp;&nbsp;&nbsp;{{ $plat->produit_prix }} &euro;</li>  
            @endforeach                   
        </ul>
        
        <h2>Laissez-vous tenter par un dessert au choix dans l'étal de pâtisseries et desserts faits maison, comme par exemple :</h2>
        <ul class="text-white row row-cols-1 row-cols-lg-2 row-cols-md-1 row-cols-sm-1">        
            @foreach ($desserts as $dessert)
                <li>- {{ $dessert->produit_libelle }}&nbsp;&nbsp;&nbsp;&nbsp;{{ $dessert->produit_prix }} &euro;</li>  
            @endforeach               
        </ul>
        <p class="commande">Commande et réservation uniquement par téléphone ou sur place</p>
    </div>      
</body>
</html>