@extends('layout')

@section('title', 'Agences')


<!-- Styles  -->
@section('styles')
    <!-- Fullcalendar -->
    <link href='vendor/fullcalendar/core/main.css' rel='stylesheet' />
    <link href='vendor/fullcalendar/list/main.css' rel='stylesheet' />
    <script src='vendor/fullcalendar/core/main.js'></script>
    <script src='vendor/fullcalendar/core/locales/fr.js'></script>
    <script src='vendor/fullcalendar/daygrid/main.js'></script>
@stop


<!-- Main content  -->
@section('content')

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Page Content -->
    <div class="space-100"></div>
    <div class="container">

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="http://placehold.it/1000x400" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://placehold.it/1000x400" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://placehold.it/1000x400" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <h4 class="mb-4 font-weight-light">Détails de la voiture : <b>Renault Clio 4 </b></h4>

        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <div class="text-uppercase text-letter-spacing text-sm text-muted">Année de production</div>
                    <div class="font-weight-bold">2019</div>
                </div>
                <div class="mb-3">
                    <div class="text-uppercase text-letter-spacing text-sm text-muted">Nombre de places</div>
                    <div class="font-weight-bold">6</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <div class="text-uppercase text-letter-spacing text-sm text-muted">Carburant</div>
                    <div class="font-weight-bold">Diesel</div>
                </div>
                <div class="mb-3">
                    <div class="text-uppercase text-letter-spacing text-sm text-muted">Transmission</div>
                    <div class="font-weight-bold">Auto</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <div class="text-uppercase text-letter-spacing text-sm text-muted">Kilométrage</div>
                    <div class="font-weight-bold">2000 <span class="font-weight-light">Km</span></div>
                </div>
                <div class="mb-3">
                    <div class="text-uppercase text-letter-spacing text-sm text-muted">Couleur</div>
                    <div class="font-weight-bold">Blanche </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="space-50"></div>
        <h4 class="mb-4 font-weight-light">Prix</h4>
        <div class="card mr-4 mb-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Basique</h5>
                <p class="card-text">
                    <div>1 jour</div>
                    <br>
                    <span class="display-4">350</span>
                    <span class="font-weight-light">Dh</span>
                </p>
                <button class="mt-3 w-100 btn btn-primary">
                    <i class="fas fa-phone"></i>&nbsp;&nbsp;Contacter l'agence
                </button>
            </div>
        </div>


        <div class="space-50"></div>
        <h4 class="mb-4 font-weight-light">Disponibilité</h4>
        <div class="card">
            <div class="card-body">
                <div id='calendar'></div>
            </div>
        </div>


    </div>
    <!-- /.container -->

    @include('partials.footer')

@stop

@section('scripts')
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar-index');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid'],
                defaultDate: '2019-04-12',
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                locale: 'fr',
                events: [
                    {
                        title: 'Mercedes AMG — Agence Al Boughaz',
                        start: '2019-05-25',
                        backgroundColor: 'blue',
                    },
                    {
                        title: 'Renault Clio 4 Rouge — Agence Al Boughaz',
                        start: '2019-05-19',
                        end: '2019-05-30'
                    },
                    {
                        groupId: 1,
                        title: 'Ford Fiesta — HMZ CAr',
                        start: '2019-04-09',
                        backgroundColor: '#28a745',
                    },
                    {
                        groupId: 1,
                        title: 'Ford Fiesta — HMZ CAr',
                        start: '2019-04-16',
                        backgroundColor: '#28a745',
                    },
                    {
                        title: 'Ford Fiesta — HMZ CAr',
                        start: '2019-04-11',
                        end: '2019-04-13',
                        backgroundColor: '#28a745',
                    },
                    {
                        title: 'Renault Clio 4 Blanche — HMZ CAr',
                        start: '2019-05-01',
                        end: '2019-05-05',
                        backgroundColor: '#28a745',
                    },
                    {
                        title: 'Renault Clio 4 Blanche — HMZ CAr',
                        start: '2019-05-14',
                        end: '2019-05-20',
                        backgroundColor: '#28a745',
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2019-04-28'
                    }
                ]
            });

            calendar.render();
        });

    </script>
@stop
