@extends('layout')

@section('title', 'Accueil')

@section('content')

    {{-- Navbar --}}
    @include('partials.navbar')

    <header class="bg-primary py-5 mb-5" style="height:700px">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-12 px-5">
            <h1 class="display-4 text-white mt-5 mb-2">
              <img src="{{asset('assets/img/brand/white.png')}}"  alt="" style="height: 80px;">
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
          <form method="get" action="{{ route('search') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="text-uppercase text-letter-spacing text-sm text-muted @error('agency') is-invalid @enderror" for="agency">Agence</label>
                <select class="form-control" placeholder="Agence" id="agency" name="agency">
                    <option value="" selected>Choisir</option>
                    @foreach ($agencies as $agency)
                        <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                    @endforeach
                </select>
                @error('agency')
                    <div class=" pt-1 text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-6">
                    <label class="text-uppercase text-letter-spacing text-sm text-muted @error('brand') is-invalid @enderror" for="brand">Marque</label>
                    <select class="form-control" id="brand" name="brand">
                        <option value="" selected>Choisir</option>
                        @foreach (array_keys($brands) as $brand)
                            <option value={{ str_replace(' ', '_', $brand) }}>{{ ucfirst($brand) }}</option>
                        @endforeach
                    </select>
                    @error('brand')
                        <div class=" pt-1 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label class="text-uppercase text-letter-spacing text-sm text-muted @error('model') is-invalid @enderror" for="model">Model</label>
                    <select class="form-control" id="model" name="model">
                        <option value="" selected>Choisir</option>
                    </select>
                    @error('model')
                        <div class=" pt-1 text-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
            </div>

              <div class="row">
                <div class="form-group col-6 mb-0">
                    <label class="text-uppercase text-letter-spacing text-sm text-muted" for="price_filter">Filter par</label>
                    <select class="form-control @error('price_filter') is-invalid @enderror" id="price_filter" name="price_filter">
                        <option value="asc">Prix croissant</option>
                        <option value="desc">Prix décroissant</option>
                    </select>
                    @error('price_filter')
                        <div class=" pt-1 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-6 mb-0">
                    <label class="text-uppercase text-letter-spacing text-sm text-muted @error('city') is-invalid @enderror" for="city">Filter par ville</label>
                    <select class="form-control" id="city" name="city">
                        <option value="">Ville</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city }}">{{ ucfirst($city) }}</option>
                        @endforeach
                    </select>
                    @error('city')
                        <div class=" pt-1 text-danger">{{ $message }}</div>
                    @enderror
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

      <div class="row">
        @foreach($featuredAgencies as $agency)
            <div class="col-lg-4 mb-4">
                <div style="min-height:350px" class="card">
                    <a href="{{ route('agency', $agency->id )}}">
                    <img style="height:200px;object-fit:cover;" class="card-img-top" src="{{ $agency->photo() }}" alt="">
                    </a>
                    <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ route('agency', $agency->id) }}">{{ $agency->name }}</a>
                    </h4>
                    <p class="card-text">
                        <div class="mb-2">
                        <div class="d-flex align-items-center">
                            <i style="width:22px" class="fa text-icon fa-car"></i>
                            <span>{{ $agency->cars()->get()->count() }} Voitures</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i style="width:22px" class="fa text-icon fa-map-marker-alt"></i>
                            <span>{{ $agency->city }}</span>
                        </div>
                        </div>
                    </p>
                    </div>
                </div>
            </div>
        @endforeach
      </div>

      <!-- /.row -->
      <div class="text-center my-5">
        <a href="/agencies" class="h4">Voir toutes les agences</a>
      </div>

      <div class="space-200"></div>
      <!-- Portfolio Section -->

      <hr class="my-4">
      <h1 class="my-4 text-center mb-5">Dernières voitures ajoutés</h1>
      <br><br>

      <div class="row">
          @foreach($featuredCars as $car)
             <div class="col-lg-4 col-sm-6 portfolio-item">
                <div style="min-height:360px" class="card">
                    <a href="{{ route('car', $car->id)}}">
                        <img style="height:200px;object-fit:cover;" class="card-img-top" src="{{ $car->photo() }}" alt="">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('car', $car->id) }}">{{ $car->name }}</a>
                                <h5 class="text-right">{{ $car->price }} <small>DH/Jour</small></h5>
                            </div>
                        </h4>
                        <p class="card-text">
                            <div class="mb-2">
                                <div class="d-flex align-items-center">
                                    <i style="width:22px" class="fa text-icon fa-car"></i>
                                    <span>{{ $car->seats }} Places</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i style="width:22px" class="fa text-icon fa-gas-pump"></i>
                                    <span>{{ $car->fuel }}</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i style="width:22px" class="fa text-icon fa-cog"></i>
                                    <span>Vitesse {{ $car->speed }}</span>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center my-5">
            <a href="/cars" class="h4">Voir autres voitures...</a>
        </div>

        <div class="space-200"></div>

        <!-- Features Section -->
        <div class="row px-5">
            <div class="col-lg-6 col-sm-12">
            <h2 class="mt-4">Êtes-vous propréritère d'une agence de location de voitures?</h2>
            <p>Rejoindre notre réseau gratuitement</p>

            <a class="mt-4 btn btn-lg btn-primary mb-4" href="/register">Inscrire mon agence</a>
            </div>
            <div class="col-lg-6 col-sm-12">
            <div class="art art-join-us">
                @include('partials.svg.onboarding')
            </div>
            </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.row -->


    </div>
    <!-- /.container -->

    <div class="space-200"></div>

    @include('partials.footer')

@stop

@section('scripts')
  <script>
    const brands = @json($brands);
    $('#brand').change(function() {
        var brand = $(this).val().replace('_', ' ');
        nextModels = brands[brand];

        selectEl = document.createElement('select')
        nextOptions = nextModels.map(function(model, index) {
            optionEl = document.createElement('option');
            optionEl.value = model.replace(/ /g, '_');
            optionEl.innerText = model;
            return optionEl;
        });

        $('select#model').empty().append(nextOptions)
    });
  </script>
@stop

