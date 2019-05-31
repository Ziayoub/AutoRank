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

@section('sidebar')
  @include('partials.sidebar-admin')
@stop

@section('content')
<div class="container-fluid mt-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Tableau de bord</a></li>
          </ol>
        </nav>

        <div class="row">

          <!-- Card 1 -->
          <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('admin.showModerators') }}" class="card bg-dark h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs text-white-50 text-uppercase mb-1">Nouvelles Inscriptions</div>
                    <div class="h5 mb-0 text-white font-weight-bold">4</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-users fa-2x text-white-50"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 2 -->
          <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('admin.showCars') }}" class="card bg-dark h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs text-white-50 text-uppercase mb-1">Total Voitures</div>
                    <div class="h5 mb-0 font-weight-bold text-white">102</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-car fa-2x text-white-50"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 3 -->
          <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('admin.showAgencies') }}" class="card bg-dark h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs text-white-50 text-uppercase mb-1">Total Agences</div>
                    <div class="h5 mb-0 font-weight-bold text-white">23</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-building fa-2x text-white-50"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 3 -->
          <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('admin.showCars') }}" class="card bg-dark h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs text-white-50 text-uppercase mb-1">Total Voitures</div>
                    <div class="h5 mb-0 font-weight-bold text-white">102</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-car fa-2x text-white-50"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>

        </div>

        <!-- Calendar -->
        <div class="card mb-4">
          <div class="card-body">
            <h4><i class="fas fa-calendar text-icon"></i>&nbsp;&nbsp;Disponibilité des voitures</h4>
            <br>
            <div id='calendar-index'></div>
          </div>
        </div>
        <!-- ./ Calendar -->
</div>
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
