@extends('layout-admin')

@section('title', 'Index')

@section('styles')
    <!-- Fullcalendar -->
    <link href="{{ asset('/vendor/fullcalendar/core/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('/vendor/fullcalendar/list/main.css') }}" rel='stylesheet' />
    <script src="{{ asset('/vendor/fullcalendar/core/main.js') }}"></script>
    <script src="{{ asset('/vendor/fullcalendar/core/locales/fr.js') }}"></script>
    <script src="{{ asset('/vendor/fullcalendar/daygrid/main.js') }}"></script>
@stop

@section('content')
    <div class="container-fluid">

        <!-- Icon Cards-->
        <div class="row mt-3">
            <div class="col-xl-6 col-sm-12 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-car"></i>
                        </div>
                        <div class="mr-5 d-flex align-items-center">
                            <h1 class="mr-3">26</h1>
                            <p>
                                Voitures enregistrés
                            </p>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Gérer mes voitures</span>
                        <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-unlock"></i>
                        </div>
                        <div class="mr-5 d-flex align-items-center">
                            <h1 class="mr-3">5</h1>
                            <p>
                                Voitures Disponibles Aujourd'hui
                            </p>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Plus d'information</span>
                        <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                    </a>
                </div>
            </div>
        </div>


        <!-- Calendar -->
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="mb-5"><i class="fas fa-calendar text-icon"></i>&nbsp;&nbsp;Calendrier de disponibilité des voitures</h4>
                <div id='calendar-index'>


                </div>
            </div>
        </div>
        <!-- ./ Calendar -->
    </div>
    <!-- /.container-fluid -->
@stop

@section('scripts')

    <!-- Fullcalendar setup script -->
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
                         title: 'Mercedes AMG',
                         start: '2019-05-25'
                     },
                     {
                         title: 'Renault Clio 4 Rouge',
                         start: '2019-05-19',
                         end: '2019-05-30'
                     },
                     {
                         title: 'Ford Fiesta',
                         start: '2019-05-20',
                         end: '2019-05-22'
                     },
                     {
                         title: 'Ford Fiesta',
                         start: '2019-05-20',
                         end: '2019-05-21'
                     },
                     {
                         title: 'Ford Fiesta',
                         start: '2019-05-20',
                         end: '2019-05-24'
                     },
                     {
                         title: 'Audi A3',
                         start: '2019-05-21',
                         start: '2019-05-23'
                     },
                     {
                         title: 'Renault Clio 4 Blanche',
                         start: '2019-05-01',
                         end: '2019-05-05'
                     },
                     {
                         title: 'Renault Clio 4 Blanche',
                         start: '2019-05-14',
                         end: '2019-05-20',
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


