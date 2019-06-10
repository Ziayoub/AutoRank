<!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white fixed-top p-3 border-bottom">
      <a class="navbar-brand" href="/">
        <img src="{{asset('/assets/img/brand/black.png')}}"  height="30" alt="">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto d-flex align-items-center">
            <li class="nav-item">
                <a class="nav-link text-uppercase text-letter-spacing text-sm" href="/">Home</a>
            </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase text-letter-spacing text-sm" href="/cars">Voitures</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase text-letter-spacing text-sm" href="/agencies">Agences</a>
          </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase text-letter-spacing text-sm" href="/contact">Contact</a>
            </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase text-letter-spacing text-sm" href="{{ route('about') }}">À Propos</a>
          </li>


          @if (auth()->user())
             <li class="nav-item dropdown ml-4">
                <a class="nav-link" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="rounded-circle" style="width:30px;height:30px"
                    src="{{ asset('/storage/' . auth()->user()->photo) }}">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                  <a class="dropdown-item text-uppercase text-letter-spacing text-sm" href="{{ route('admin.index') }}">Tableau de bord</a>
                  <a class="dropdown-item text-uppercase text-letter-spacing text-sm" href="{{ route('admin.showUpdateProfile') }}">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-uppercase text-letter-spacing text-sm" href="{{ route('logout') }}">Se Déconnecter</a>
                </div>
              </li>
           @else
              <li class="nav-item dropdown ml-4">
                <a class="nav-link text-uppercase text-letter-spacing text-sm" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i>&nbsp;&nbsp;Admin
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                  <a class="dropdown-item text-uppercase text-letter-spacing text-sm" href="{{ route('login') }}">
                    Se Connecter
                  </a>
                  <a class="dropdown-item text-uppercase text-letter-spacing text-sm" href="{{ route('register') }}">
                    Créer un compte
                  </a>
                </div>
              </li>
           @endif
        </ul>
      </div>
    </nav>
