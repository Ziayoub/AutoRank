@extends('layout')

@section('title', 'Agence')

@section('content')

    @include('partials.navbar')


    <header class="bg-primary py-5">
        <div class="container h-100">

            <div class="row h-100 justify-content-between align-items-center">
                <div>
                    <h1 class="display-4 text-white mt-5 mb-2">{{ $agency->name }}</h1>

                    <div class="lead mb-5 text-white-50">
                        <i class="fa fa-map-marker-alt"></i>
                        <a class="text-white" href="{{ 'https://www.google.com/maps?q=' . urlencode($agency->address) }}">{{ $agency->address }}</a>
                    </div>
                </div>

                <div class="lead mb-5 text-white-50 mt-4">
                    @if ($agency->facebook && $agency->facebook != '')
                        <div>
                            <i class="fab text-white fa-facebook"></i>&nbsp;&nbsp;
                            <a class="text-white" href="{{ $agency->facebook }}">{{ $agency->facebook }}</a>
                        </div>
                    @endif

                    @if ($agency->instagram && $agency->instagram != '')
                        <div>
                            <i class="fab text-white fa-instagram"></i>&nbsp;&nbsp;
                            <a class="text-white" href="{{ $agency->instagram }}">{{ $agency->instagram}}</a>
                        </div>
                    @endif

                    @if ($agency->whastapp && $agency->whastapp != '')
                        <div>
                            <i class="fab fa-whatsapp text-white"></i>&nbsp;&nbsp;
                            <span class="p-0 m-0 text-white">{{ $agency->whastapp }}</span>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </header>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51804.57626272524!2d-5.8631899420999085!3d35.756063906798985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b875cf04c132d%3A0x76bfc571bfb4e17a!2sTangier%2C+Morocco!5e0!3m2!1sen!2sus!4v1563691756119!5m2!1sen!2sus" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

    <!-- Page Content -->
    <div class="container mt-4">

        <div class="space-50">
            <h2>Voiture offertes</h2>
            <p class="text-secondary">{{ $agency->cars()->get()->count() }} voitures.</p>
        </div>
        <br>
        <!-- Marketing Icons Section -->
        <div class="row">
            @foreach ($agency->cars()->get() as $car)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="min-height:380px" class="card">
                        <a href="{{ route('car', $car->id) }}">
                            <img style="height:300px;object-fit:cover;" class="card-img-top" src="{{ $car->photo() }}" alt="">
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

    </div>
    <!-- /.container -->

    @include('partials.footer')

@stop
