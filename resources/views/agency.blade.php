@extends('layout')

@section('title', 'Agence')

@section('content')

    {{-- Navbar --}}
    @include('partials.navbar')


    <header class="bg-primary py-5">
    <div class="container h-100">

        <div class="row h-100 justify-content-between align-items-center">
            <div>
                <h1 class="display-4 text-white mt-5 mb-2">Agence Al Boughaz</h1>

                <div class="lead mb-5 text-white-50">
                    <i class="fa fa-map-marker-alt"></i>
                    Rue 4 Avenue Moulay Ismail 9000
                </div>
            </div>

            <div class="lead mb-5 text-white-50 mt-4">
                <div>
                    <i class="fab text-white fa-facebook"></i>&nbsp;&nbsp;
                    <a class="text-white" href="facebook.com/agency">facebook.com/agency</a>
                </div>
                <div>
                    <i class="fab text-white fa-instagram"></i>&nbsp;&nbsp;
                    <a class="text-white" href="instagram.com/agency">instagram.com/agency</a>
                </div>
                <div>
                    <i class="fab fa-whatsapp text-white"></i>&nbsp;&nbsp;
                    <span class="p-0 m-0 text-white">0664333223</span>
                </div>
            </div>
        </div>

    </div>
</header>

<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.6609362886848!2d-5.831068784244658!3d35.75913773330177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b8744150d6ef3%3A0x5e4669b241c9ed1b!2sAlia+Garden!5e0!3m2!1sen!2sus!4v1558651916083!5m2!1sen!2sus"
    width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

<!-- Page Content -->
<div class="container mt-4">

    <div class="space-50">
        <h2>Voiture offertes</h2>
        <p class="text-secondary">20 voitures, 3 marques.</p>
    </div>
    <br>
    <!-- Marketing Icons Section -->
    <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <a href="/agency">
                    <img class="card-img-top" src="http://placehold.it/500x400" alt="">
                </a>
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="d-flex justify-content-between">
                            <a href="/car">Fiat Panda</a>
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
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <a href="/agency">
                    <img class="card-img-top" src="http://placehold.it/500x400" alt="">
                </a>
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="d-flex justify-content-between">
                            <a href="/car">Fiat Panda</a>
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
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <a href="/agency">
                    <img class="card-img-top" src="http://placehold.it/500x400" alt="">
                </a>
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="d-flex justify-content-between">
                            <a href="/car">Fiat Panda</a>
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
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <a href="/agency">
                    <img class="card-img-top" src="http://placehold.it/500x400" alt="">
                </a>
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="d-flex justify-content-between">
                            <a href="/car">Fiat Panda</a>
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

</div>
<!-- /.container -->

    @include('partials.footer')

@stop
