<nav class="navbar navbar-expand navbar-dark bg-primary p-3 static-top">

    <a class="navbar-brand ml-5" href="{{ route('index') }}">
        <img src="{{ asset('/assets/img/brand/white.png') }}"  height="30" alt="">
    </a>



    <ul class="navbar-nav ml-auto d-flex align-items-center">

        <li class="nav-item dropdown ml-4">
            <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-3">Moderator Moderator</span>
                <img class="rounded-circle" style="width:30px;height:30px"
                     src="https://argon-dashboard-laravel.creative-tim.com/argon/img/theme/team-4-800x800.jpg">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="{{route('moderator.index')}}">
                    <i class="fas fa-columns"></i>&nbsp;&nbsp;Tableau de bord
                </a>
                <a class="dropdown-item" href="{{ route('moderator.showUpdateProfile') }}">
                    <i class="fas fa-user"></i>&nbsp;&nbsp;Compte
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Se Déconnecter</a>
            </div>

        </li>
    </ul>

</nav>
