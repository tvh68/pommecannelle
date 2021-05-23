<!--Y-a-t-il plus de 6 éléments (le nombre d'élément a été défini dans la fonction index de RestaurantController)-->
@if ($paginator->hasPages())
    <ul class="pagination">
        <!--Si je suis sur la première page alors je grise le bouton précédent (text-muted)-->
        @if ($paginator->onFirstPage())
        <li class="page-link list-unstyled disabled m-0 m-0"><i class="fas fa-caret-left text-muted"></i></li>
    @else
        <li class="page-item list-unstyled m-0"><a class="page-link m-0" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fas fa-caret-left text-dark"></i></a></li>
    @endif
        <!--Afficher les numéros des pages-->
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled m-0"><span class="page-link m-0">{{ $element }}</span></li>
            @endif
            <!--Si il y a plusieurs pages-->
            @if (is_array($element))
                @foreach ($element as $page => $url) <!--On prend l'url de l'élément page-->
                    @if ($page == $paginator->currentPage())<!--Pour marquer dans le bloc pagination, la page sur laquelle je me trouve-->                    
                        <li class="page-link bg-secondary text-white m-0">{{ $page }}</li><!--Je désactive le lien-->
                    @else
                        <li class="page-item m-0"><a class="page-link m-0" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        <!--Si je suis sur la dernière page alors je grise le bouton suivant(text-muted)-->
        @if ($paginator->hasMorePages())
            <li class="page-item list-unstyled text-dark m-0"><a class="page-link m-0" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fa-caret-right text-dark"></i></a></li> 
        @else
            <li class="page-link list-unstyled disabled m-0 m-0"><i class="fas fa-caret-right text-muted"></i></li>
        @endif
    </ul>

@endif
