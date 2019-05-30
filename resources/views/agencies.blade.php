
@extends('layout')

@section('title', 'Agences')

@section('content')

    {{-- Navbar --}}
    @include('partials.navbar')


<div class="container">

    <div class="row ">

        <!-- <div class="col-lg-3">

          <h1 class="my-4">Agences</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Agence 1</a>
            <a href="#" class="list-group-item">Agence 2</a>
            <a href="#" class="list-group-item">Agence 3</a>
            <a href="#" class="list-group-item">Agence 4</a>
            <a href="#" class="list-group-item">Agence 5</a>
            <a href="#" class="list-group-item">Agence 6</a>
          </div>

        </div> -->
        <!-- /.col-lg-3 -->

        <div class="col-lg-3">

            <h1 class="my-4">Agences</h1>

            <p class="text-secondary text-uppercase text-letter-spacing text-sm">Par Ville</p>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tanger
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Rabat
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Casablanca
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </ul>

        </div>

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
                                    <a href="/agency">Agence 1</a>
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




@stop
@include('partials.footer')
