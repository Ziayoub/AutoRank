
@extends('layout')

@section('title', 'Agences')

@section('content')

    @include('partials.navbar')

    <div class="container">
        <div class="row ">

            <div class="col-lg-12 mt-5">
                <div class="row">
                    <h1 class="mt-5 mb-5">Agences</h1>
                </div>

                <div class="row mt-4">
                    @foreach ($agencies as $agency)
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body row">
                                    <div class="col-md-4">
                                        <a href="{{ route('agency', $agency->id) }}">
                                            <img class="card-img-top" src="{{ $agency->photo() }}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="card-title">
                                            <a href="{{ route('agency', $agency->id )}}">{{ $agency->name }}</a>
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
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center my-5">
                    {{ $agencies->links() }}
                </div>

            </div>

        </div>

    </div>


    @include('partials.footer')

@stop
