<!--Navigation de l'interface Administration-->
<nav class="p-3 mb-3 border-bottom bg-light" id="navbar-perso">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <img src="{{ asset('images/logo-pommecannelle.png') }}" alt="Pomme Cannelle">
      <span class="fs-4 text-cannelle">ADMINISTRATION</span>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a class="nav-link <?= $_SERVER['PHP_SELF'] == '/index.php/restaurant' ? 'active' : '' ?>" aria-current="page" href="{{ route('restaurant.index')}}"><i class="fas fa-utensils"></i> Restaurant</a></li>
        <li><a class="nav-link <?= $_SERVER['PHP_SELF'] == '/index.php/patisserie' ? 'active' : '' ?>" aria-current="page" href="{{ route('patisserie.index')}}"><i class="fas fa-birthday-cake"></i> Pâtisserie</a></li>
      </ul>

      <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}<!--nom de l'administrateur-->
        </a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li class="dropdown-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Déconnexion') }}
              </a>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
