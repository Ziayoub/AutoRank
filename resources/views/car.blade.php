@extends('layout')

@section('title', 'Agences')

@section('content')

    {{-- Navbar --}}
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
    <h4 class="mb-4 font-weight-light">Détails de la voiture</h4>

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

<script>

    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid'],
            defaultDate: '2019-04-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            locale: 'fr',
            events: [
                {
                    title: 'Réservé',
                    backgroundColor: 'red',
                    rendering: 'background',
                    start: '2019-05-19',
                    end: '2019-05-30'
                },
                {
                    groupId: 1,
                    title: 'Réservé',
                    backgroundColor: 'red',
                    rendering: 'background',
                    start: '2019-05-10'
                },
                {
                    groupId: 1,
                    title: 'Réservé',
                    backgroundColor: 'red',
                    rendering: 'background',
                    start: '2019-06-01',
                    end: '2019-06-05'
                }
            ]
        });

        calendar.render();
    });

</script>



@include('partials.footer')

@stop
