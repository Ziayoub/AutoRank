<ul class="sidebar navbar-nav pl-2">
    <li class="nav-item active mt-3">
        <a class="nav-link" href="{{route('admin.index')}}">
            <i class="fas fa-fw fa-columns"></i>
            <span>Tableau de bord</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="{{route('admin.showUpdateAgency', 1)}}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Agence</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.showCars')}}">
            <i class="fas fa-fw fa-car"></i>
            <span>Voitures</span>
        </a>
    </li>

</ul>
