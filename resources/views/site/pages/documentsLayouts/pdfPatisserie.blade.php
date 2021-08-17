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
    <!--Coordonnées et illustration -->
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
    <!--Illustration et présentation des produits-->
    <div class="cadre-patisserie">  
        <div>  
            <img id="illustration" src="{{ public_path('images/pdf-patisserie-illustration.png') }}" />
        </div> 
        <p class="presentation">Nos recettes et les tours de main propres à la fabrication artisanale se sont transmis de père en fils sur trois générations de boulanger-pâtissier. Pas de couleurs artificielles ni de glaçage rutilant mais de vraies textures comme autrefois.</p> 
        <div class="saut-de-page">  
            <img id="illustration" src="{{ public_path('images/pdf-presentation-produits2.png') }}" />
        </div>

        <section> 
            <!-- bloc viennoiserie -->           
            <h2>Nos viennoiseries</h2>   
            <hr>  
            <p class="categorie">Classiques ou revisitées, nos viennoiseries se veulent généreuses, gourmandes et confectionnées sur place de manière artisanale. Elles vous raviront par leurs fraîcheurs optimales et une saveur authentique.</p>       
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
            <!-- bloc gâteaux -->  
            <h2>Nos gâteaux</h2>
            <hr>
            <p class="categorie">Pourquoi attendre une occasion spéciale pour s'offrir un petit moment de détente en bonne compagnie? 
                Pas de glaçage rutilant pour nos tartes qui se veulent plutôt généreuses et goûteuses.</p>       
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
            <!-- bloc des desserts et en-cas -->  
            <h2>... mais aussi</h2>
            <hr>
            <p class="categorie">Manger des aliments sucrés de manière raisonnable n’est pas forcément mauvais pour la santé ni pour la ligne.
                En dessert ou au moment du goûter, les pâtisseries nous procurent cette sensation de bien être et de réconfort, ce petit moment de détente à ne plus négliger.</p>       
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
                @foreach ($patisseries as $patisserie)
                    @if ($patisserie->categorie_id === 3)
                    <li>   
                        <div class="page">              
                        <div id="carte">
                            <img src="{{public_path('storage')}}/{{ $patisserie->produit_image }}" alt="pâtisserie traditionnelles" />
                            <h3>{{ $patisserie->produit_libelle }}<br>{{ $patisserie->produit_prix }} &euro;</h3>  
                        </div>
                        </div>
                    </li>
                    @endif
                @endforeach 
                @foreach ($patisseries as $patisserie)
                    @if ($patisserie->categorie_id === 3)
                    <li>   
                        <div class="page">              
                        <div id="carte">
                            <img src="{{public_path('storage')}}/{{ $patisserie->produit_image }}" alt="pâtisserie traditionnelles" />
                            <h3>{{ $patisserie->produit_libelle }}<br>{{ $patisserie->produit_prix }} &euro;</h3>  
                        </div>
                        </div>
                    </li>
                    @endif
                @endforeach 
            </ul>                   
        </section>
    </div>    
</body>
</html>