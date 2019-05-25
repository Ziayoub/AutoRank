@extends('layout')

@section('title', 'Index')

@section('content')

    {{-- Navbar --}}
    @include('partials.navbar')

    <header class="bg-primary py-5 mb-5" style="height:700px">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-12">
            <h1 class="display-4 text-white mt-5 mb-2">
              <img src="/assets/img/brand/white.png" alt="" style="height: 80px;">
            </h1>
            <p class="lead mb-5 text-white-50 w-50">
              Autorank et un réseau d'agences de locations de voitures au Maroc, qui vous propose <br>plusieurs gamme de voitures.
            </p>
            <div class="position-relative text-center ml-4">
              <div class="art">
                @include('partials.svg.by_my_car')
              </div>
            </div>
          </div>
          <br><br>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <!-- Search -->
      <div class="card p-4" style="top:-120px;">
        <div class="card-body">
          <form>
            <div class="form-group">
              <label class="text-uppercase text-letter-spacing text-sm text-muted" for="exampleFormControlSelect1">Agence</label>
              <select class="form-control" placeholder="Agence" id="exampleFormControlSelect1">
                <option selected>Choisir</option>
                <option>Agence 1 </option>
                <option>Agence 2</option>
                <option>Agence 3 </option>
              </select>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-6">
                  <label class="text-uppercase text-letter-spacing text-sm text-muted" for="formGroupExampleInput2">Marque</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="col-6">
                  <label class="text-uppercase text-letter-spacing text-sm text-muted" for="formGroupExampleInput2">Model</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Model</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>

              <div class="row">
                <div class="form-group col-6 mb-0">
                  <label class="text-uppercase text-letter-spacing text-sm text-muted" for="exampleFormControlSelect1">Filter par</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Prix croissant</option>
                    <option>Prix décroissant</option>
                  </select>
                </div>
                <div class="form-group col-6 mb-0">
                  <label class="text-uppercase text-letter-spacing text-sm text-muted" for="exampleFormControlSelect1">Filter par ville</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Tanger</option>
                    <option>Tetouan</option>
                    <option>Chefchaouen</option>
                  </select>
                </div>
              </div>
             <div class="row mt-5">
                <div class="col-12 text-right">
                  <button type="submit" class="btn btn-primary btn-lg">Rechercher</button>
                </div>
              </div>
          </form>
        </div>
      </div>
      <hr class="my-4">
      <h1 class="my-4 text-center mb-5">Nos agences</h1>
      <br><br>

      <!-- Agency Card -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card">
            <a href="agency.html">
              <img class="card-img-top" src="http://placehold.it/500x400" alt="">
            </a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="agency.html">Agence 1</a>
              </h4>
              <p class="card-text">
                <div class="mb-2">
                  <div class="d-flex align-items-center">
                    <i style="width:22px" class="fa text-icon fa-car"></i>
                    <span>12 Voitures</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i style="width:22px" class="fa text-icon fa-map-marker-alt"></i>
                    <span>Tanger</span>
                  </div>
                </div>
              </p>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->
      <div class="text-center my-5">
        <a href="agencies.html" class="h4">Voir toutes les agences</a>
      </div>

      <div class="space-200"></div>
      <!-- Portfolio Section -->

      <hr class="my-4">
      <h1 class="my-4 text-center mb-5">Dernières voitures ajoutés</h1>
      <br><br>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card">
            <a href="agency.html">
              <img class="card-img-top" src="http://placehold.it/500x400" alt="">
            </a>
            <div class="card-body">
              <h4 class="card-title">
                <div class="d-flex justify-content-between">
                  <a href="car.html">Fiat Panda</a>
                  <h5 class="text-right">200 <small>DH/Jour</small></h5>
                </div>
              </h4>
              <p class="card-text">
                <div class="mb-2">
                  <div class="d-flex align-items-center">
                    <i style="width:22px" class="fa text-icon fa-car"></i>
                    <span>5 Places</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i style="width:22px" class="fa text-icon fa-gas-pump"></i>
                    <span>Diesel</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i style="width:22px" class="fa text-icon fa-cog"></i>
                    <span>Vitesse automatique</span>
                  </div>
                </div>
              </p>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

      <div class="text-center my-5">
        <a href="cars.html" class="h4">Voir 31 autre voitures...</a>
      </div>

      <div class="space-200"></div>

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Êtes-vous propréritère d'une agence de location de voitures?</h2>
          <p>Rejoindre notre réseau gratuitement</p>

          <a class="mt-4 btn btn-lg btn-primary" href="#">Inscrire mon agence</a>
        </div>
        <div class="col-lg-6 position-relative">
          <div class="art-join-us">
            @include('partials.svg.onboarding')
          </div>
        </div>
      </div>
      <!-- /.row -->


    </div>
    <!-- /.container -->

    <div class="space-200"></div>

    @include('partials.footer')

@stop