<ul class="sidebar navbar-nav pl-2">
  <li class="nav-item active mt-3">
    <a class="nav-link" href="{{ route('admin.index' )}}">
      <div class="d-flex align-items-center">
        <i style="width:30px" class="text-left fas fa-fw fa-columns"></i>
        <span>Tableau de bord</span>
      </div>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.showModerators' )}}">
      <div class="d-flex align-items-center">
        <i style="width:30px" class="text-left fas fa-fw fa-users"></i>
        <span>
          Modérateurs &nbsp;<div style="font-size:10px;width:15px;" class="badge badge-danger">4</div>
        </span>

      </div>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link" href="{{ route('admin.showAgencies' )}}">
      <div class="d-flex align-items-center">
        <i style="width:30px" class="text-left fas fa-fw fa-hotel"></i>
        <span>Agences</span>
      </div>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.showCars' )}}">
      <div class="d-flex align-items-center">
        <i style="width:30px" class="text-left fas fa-fw fa-car"></i>
        <span>Voitures</span>
      </div>
    </a>
  </li>
</ul>
