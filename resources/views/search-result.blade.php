@extends('layout')

@section('title', 'Voitures')

@section('content')

    @include('partials.navbar')

    <div class="container">
        <div class="row">

            <div class="col-lg-12 mt-5">
                <div class="row mt-5">
                    <h1 class="">Résulat de la recherche</h1>
                    <br>
                </div>
                <div class="row mb-5">
                    <h5 class="text-secondary">{{ $cars->count()}} voitures trouvées</h5>
                </div>

                <div class="row mt-4">
                    @foreach ($cars as $car)
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <a href="{{ route('car', $car->id) }}">
                                            <img class="card-img-top" src="{{ $car->photo() }}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="card-title">
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('car', $car->id) }}">{{$car->name}}</a>
                                                <h5 class="text-right">{{$car->price}} <small>DH/Jour</small></h5>
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
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center my-5">
                    {{ $cars->links() }}
                </div>
            </div>

        </div>

    </div>


    @include('partials.footer')

@stop
