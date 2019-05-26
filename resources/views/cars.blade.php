@extends('layout')

@section('title', 'Index')

@section('content')

    {{-- Navbar --}}
    @include('partials.navbar')

<div class="container">
    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Voitures</h1>

            <p class="text-secondary text-uppercase text-letter-spacing text-sm">Par Agence</p>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Agence 1
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Agence 2
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Agence 3
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </ul>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-4">
                                <a href="agency.html">
                                    <img class="card-img-top" src="http://placehold.it/500x400" alt="">
                                </a>
                            </div>
                            <div class="col-md-8">
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
            </div>
            <!-- /.row -->

            <ul class="mt-5 pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->


    @include('partials.footer')

@stop
