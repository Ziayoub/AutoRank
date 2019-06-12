<nav class="navbar navbar-expand navbar-dark bg-primary p-3 static-top">

    <a class="navbar-brand ml-5" href="{{ route('index') }}">
        <img src="{{ asset('/assets/img/brand/white.png') }}"  height="30" alt="">
    </a>


    <ul class="navbar-nav ml-auto d-flex align-items-center">
        <li class="nav-item dropdown ml-4">
            <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-3">{{ auth()->user()->first_name . ' ' .  auth()->user()->last_name }}</span>
                <img class="rounded-circle" style="width:30px;height:30px"
                     src="{{ asset('/storage/' . auth()->user()->photo) }}">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="{{route('admin.index')}}">
                    <i class="fas fa-columns"></i>&nbsp;&nbsp;Tableau de bord
                </a>
                <a class="dropdown-item" href="{{ route('admin.showUpdateProfile') }}">
                    <i class="fas fa-user"></i>&nbsp;&nbsp;Compte
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}">Se Déconnecter</a>
            </div>

        </li>
    </ul>

</nav>
