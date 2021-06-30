<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ public_path('css/stylePdf.css')}}" rel="stylesheet">
    <title>Pâtisserie Pomme Cannelle</title>
</head>
<body>
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
    
    <div class="cadre-patisserie">  
        <div>  
            <img id="illustration" src="{{ public_path('images/pdf-patisserie-illustration.png') }}" />
        </div> 
        <p class="presentation">Nos recettes et les tours de main propres à la fabrication artisanale se sont transmis de père en fils sur trois générations de boulanger-pâtissier. Pas de couleurs artificielles ni de glaçage rutilant mais de vraies textures comme autrefois.</p> 
        <span>
            <h2>Nos viennoiseries</h2>   
            <hr>        
            <ul>
                @foreach ($patisseries as $patisserie)
                    @if ($patisserie->categorie_id === 1)
                    <li>                
                        <div id="carte">
                            <img src="{{public_path('storage')}}/{{ $patisserie->produit_image }}" alt="pâtisserie traditionnelles" />
                            <h3>{{ $patisserie->produit_libelle }}<br>{{ $patisserie->produit_prix }} &euro;</h3>  
                        </div>
                    </li>
                    @endif
                @endforeach 
            </ul>
            <div class="espace"></div><!-- Sert de marge uniquement pour le pdf pâtisserie, afin d'éviter que les cartes soient mal affichées (coupées) -->

            <h2>Nos gâteaux</h2>
            <hr>
            <ul>
                @foreach ($patisseries as $patisserie)
                    @if ($patisserie->categorie_id === 2)
                    <li>                
                        <div id="carte">
                            <img src="{{public_path('storage')}}/{{ $patisserie->produit_image }}" alt="pâtisserie traditionnelles" />
                            <h3>{{ $patisserie->produit_libelle }}<br>{{ $patisserie->produit_prix }} &euro;</h3>  
                        </div>
                    </li>
                    @endif
                @endforeach 
            </ul>
            <div class="espace"></div><!-- Sert de marge uniquement pour le pdf pâtisserie, afin d'éviter que les cartes soient mal affichées (coupées) -->

            <h2>... mais aussi</h2>
            <hr>
            <ul>
                @foreach ($patisseries as $patisserie)
                    @if ($patisserie->categorie_id === 3)
                    <li>                
                        <div id="carte">
                            <img src="{{public_path('storage')}}/{{ $patisserie->produit_image }}" alt="pâtisserie traditionnelles" />
                            <h3>{{ $patisserie->produit_libelle }}<br>{{ $patisserie->produit_prix }} &euro;</h3>  
                        </div>
                    </li>
                    @endif
                @endforeach 
            </ul> 
            <div class="espace"></div><!-- Sert de marge uniquement pour le pdf pâtisserie, afin d'éviter que les cartes soient mal affichées (coupées) -->
            <p class="commande">Commande et réservation uniquement par téléphone ou sur place</p>       
        </span>
       
    </div>    
</body>
</html>