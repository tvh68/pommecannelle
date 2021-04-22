<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="container-xl">
    <a href="http://127.0.0.1:8000/accueil" class="navbar-brand"><img src="{{ asset('images/logo-pommecannelle.png') }}" alt="Pomme Cannelle"></a>
    <button type="button" class="btn btn-primary btn-lg shadow sm">02/385 23 70</button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-perso" aria-controls="navbar-perso" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbar-perso">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item ms-4">
          <a class="nav-link <?= $_SERVER['PHP_SELF'] == ('/index.php/accueil') || $_SERVER['PHP_SELF'] == ('/index.php')? 'active' : '' ?>" aria-current="page" href="http://127.0.0.1:8000/accueil"><i class="fas fa-igloo "></i> Accueil</a>
        </li>
        <li class="nav-item ms-4">
          <a class="nav-link <?= $_SERVER['PHP_SELF'] == '/index.php/restaurant' ? 'active' : '' ?>" aria-current="page" href="http://127.0.0.1:8000/restaurant"><i class="fas fa-utensils" aria-hidden="true"></i> Restaurant</a>
        </li>
        <li class="nav-item ms-4">
          <a class="nav-link <?= $_SERVER['PHP_SELF'] == '/index.php/patisserie' ? 'active' : '' ?>" aria-current="page" href="http://127.0.0.1:8000/patisserie"><i class="fas fa-birthday-cake" aria-hidden="true"></i> Pâtisserie</a>
        </li>
        <li class="nav-item ms-4">
          <a class="nav-link <?= $_SERVER['PHP_SELF'] == '/index.php/contact' ? 'active' : '' ?>" aria-current="page" href="http://127.0.0.1:8000/contact"><i class="fas fa-mail-bulk" aria-hidden="true"></i> Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>