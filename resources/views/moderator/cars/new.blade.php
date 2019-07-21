@extends('layout-admin')

@section('title', 'Voiture')

@section('styles')
    <!-- Fullcalendar -->
    <link href="{{asset('/vendor/fullcalendar/core/main.css') }}" rel='stylesheet' />
    <link href="{{asset('/vendor/fullcalendar/daygrid/main.css') }}" rel='stylesheet' />
    <link href="{{asset('/vendor/fullcalendar/timegrid/main.css') }}" rel='stylesheet' />
    <link href="{{asset('/vendor/fullcalendar/list/main.css') }}" rel='stylesheet' />

    <script src="{{asset('/vendor/fullcalendar/core/main.js') }}"></script>
    <script src="{{asset('/vendor/fullcalendar/core/locales/fr.js') }}"></script>
    <script src="{{asset('/vendor/fullcalendar/interaction/main.js') }}"></script>
    <script src="{{asset('/vendor/fullcalendar/daygrid/main.js') }}"></script>
    <script src="{{asset('/vendor/fullcalendar/timegrid/main.js') }}"></script>
    <script src="{{asset('/vendor/fullcalendar/list/main.js') }}"></script>
@stop

@section('sidebar')
   @include('partials.sidebar')
@stop

@section('content')
    <div class="container-fluid">
        <form method="post" action="{{ route('admin.showCreateCar') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-12">

                    <!-- Details de la voiture -->
                    <div class="card my-3">
                        <div class="card-body">
                            <h4 class="mb-5"><i class="fas fa-car text-icon"></i>&nbsp;&nbsp;Ford Fiesta 2018</h4>

                            <h5><i class="fas fa-edit text-icon"></i>&nbsp;&nbsp;Details de la voiture</h5>
                            <hr class="mb-4">
                            <div class="row">
                                <div class="col-12">

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="brand">Marque</label>
                                                    <select class="form-control" @error('brand') is-invalid @enderror  id="brand" name="brand">
                                                        <option selected>Choisir</option>
                                                    </select>
                                                    @error('brand')
                                                    <div class=" pt-1 text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="model">Modèle</label>
                                                    <select class="form-control" id="model"  @error('model') is-invalid @enderror name="model">
                                                        <option selected>Choisir</option>
                                                        <option >Fiesta</option>
                                                    </select>
                                                    @error('model')
                                                    <div class=" pt-1 text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="production_year">Année de production</label>
                                                    <select class="form-control" id="production_year" name="production_year" @error('production_year') is-invalid @enderror>
                                                        <option selected>Choisir</option>
                                                        <option>2019</option>
                                                    </select>
                                                    @error('production_year')
                                                    <div class=" pt-1 text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="seats">Nombre de place</label>
                                                    <input type="number" class="form-control" id="seats"  name="seats" @error('seats') is-invalid @enderror placeholder="Nombre de places">
                                                    @error('seats')
                                                    <div class=" pt-1 text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="price">Prix par jour (DH)</label>
                                                    <input type="number" class="form-control" id="price" name="price" @error('price') is-invalid @enderror placeholder="Prix par jour" value="">
                                                    @error('price')
                                                    <div class=" pt-1 text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Carburant</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="fuel" id="diesel" value="diesel" @error('diesel') is-invalid @enderror>
                                                <label for="diesel" class="form-check-label" name="fuel"> Diesel </label>
                                                @error('diesel')
                                                <div class=" pt-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="fuel" id="gasoline" value="gasoline" @error('gasoline') is-invalid @enderror>
                                                <label for="gasoline" class="form-check-label" > Essence    </label>
                                                @error('gasoline')
                                                <div class=" pt-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Transmission</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="speed" id="manual" value="manual" @error('manual') is-invalid @enderror>
                                                <label class="form-check-label" for="manual">  Manuelle </label>
                                                @error('manual')
                                                <div class=" pt-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="speed" id="automatic" value="automatic" @error('automatic') is-invalid @enderror>
                                                <label class="form-check-label" for="automatic">  Automatique </label>
                                                @error('automatic')
                                                <div class=" pt-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                </div>
                            </div>

                            <br>
                            <h5><i class="fas fa-photo text-icon"></i>&nbsp;&nbsp;Photos</h5>
                            <hr class="mb-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04"><i
                                                class="fas fa-cloud-upload-alt"></i>&nbsp;&nbsp;Ajouter
                                            des photos</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <button type="submit" class="pull-right btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Calendar -->
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="mb-5">
                    <i class="fas fa-calendar text-icon"></i>&nbsp;&nbsp;Disponibilité de la voiture
                </h4>
                <div id='external-events' class="mb-5">
                    <p>Faites glisser ce bloc vers le calendrier pour indiquer que la voiture est réservée.</p>
                    <div id='external-events-list'>
                        <div class='fc-event'>Réservé</div>
                    </div>
                </div>

                <div id='calendar-car'></div>

                <div class="row mt-5">
                    <div class="col-12">
                        <button type="button" class="pull-right btn btn-primary">Enregistrer</button>
                    </div>
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
            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendarInteraction.Draggable

            /* initialize the external events
            -----------------------------------------------------------------*/

            var containerEl = document.getElementById('external-events-list');
            new Draggable(containerEl, {
                itemSelector: '.fc-event',
                eventData: function (eventEl) {
                    return {
                        title: eventEl.innerText.trim()
                    }
                }
            });

            /* initialize the calendar
            -----------------------------------------------------------------*/

            var calendarEl = document.getElementById('calendar-car');
            var calendar = new Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid', 'list'],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,listWeek'
                },
                locale: 'fr',
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar
                drop: function (arg) {
                    // is the "remove after drop" checkbox checked?

                },
                eventClick: function (arg) {
                    if (confirm('Êtes-vous certain de vouloir supprimer cette réservation?')) {
                        arg.event.remove()
                    }
                }
            });
            calendar.render();

        });

    </script>
@stop
