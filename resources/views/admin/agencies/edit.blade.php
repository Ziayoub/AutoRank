@extends('layout-admin')

@section('title', 'Agence')

@section('sidebar')
    @include('partials.sidebar')
@stop

@section('content')

    <div id="content-wrapper">

        <div class="container-fluid mt-3">

            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./agencies.html">Agences</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $agency->name }}</li>
            </ol>
            </nav>


            <div class="row">
            <div class="col-md-12">
                <!-- Details de l'agence -->
                <div class="card my-3">
                <div class="card-body">
                    <h4 class="mb-5"><i class="fas fa-hotel text-icon"></i>&nbsp;&nbsp;Agence</h4>
                    <h5><i class="fas fa-info text-icon"></i>&nbsp;&nbsp;Details de l'agence</h5>
                    <hr class="mb-4">
                    <div class="row">
                    <div class="col-12">
                        <form method="POST" action="{{ route('admin.updateAgency', $agency->id) }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="formGroupExampleInput" class="text-uppercase text-muted text-sm text-letter-spacing">Nom</label>
                                <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nom de l'agence" value="{{ $agency->name }}">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                <div class="col-9">
                                    <label for="address" class="text-uppercase text-muted text-sm text-letter-spacing">Adresse</label>
                                    <input name="address" type="text" class="form-control" id="address" placeholder="Another input" value="{{ $agency->address }}">
                                </div>
                                <div class="col-3">
                                    <label for="city" class="text-uppercase text-muted text-sm text-letter-spacing">Ville</label>
                                    <select name="city" class="form-control" id="city">
                                        <option>{{ $agency->city }}</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="text-uppercase text-muted text-sm text-letter-spacing">Télephone de contact</label>
                                <input name="phone" type="phone" class="form-control" id="phone" placeholder="Numéro de Télephone" value="{{ $agency->phone }}">
                            </div>

                            <div class="space-60"></div>
                            <h5><i class="fas fa-photo text-icon"></i>&nbsp;&nbsp;Photos de l'agence</h5>
                            <hr class="mb-4">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="file">
                                        <input name="photos" type="file" class="custom-file-input" id="photos">
                                        <label class="custom-file-label" for="photos"><i class="fas fa-cloud-upload-alt"></i>&nbsp;&nbsp;Ajouter des photos</label>
                                    </div>
                                </div>
                            </div>
                            <p class="text-secondary">{{ count($attachments) }} photos listées</p>
                            <div class="d-flex flex-wrap">
                                @foreach ($attachments as $attachment)
                                    <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                        <img src="{{ $attachment->url }}" alt="..." class="img img-fluid" style="height: 150px;object-fit: cover">
                                        <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                            <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="row mt-5">
                    <div class="col-12">
                        <button type="button" class="pull-right btn btn-primary">Enregistrer</button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- ./ Details de l'agence -->
            </div>
            </div>

            <!-- Cars DataTables -->
            <div class="card mb-3">
            <div class="card-body">
                <h4 class="mb-5"><i class="fas fa-car text-icon"></i>&nbsp;&nbsp;Voitures</h5>
                @if (count($cars) == 0)
                    <p>Aucun voiture listée.</p>
                @else
                    <a href="{{ route('admin.showCreateCar') }}" class="mb-4 btn btn-primary">Ajouter une voiture</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Année de production</th>
                            <th>Prix par jour</th>
                            <th>Kilométrage</th>
                            <th>Nombre de places</th>
                            <th>Carburant</th>
                            <th>Boite de vitesse</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <th scope="row">
                                        <a href="{{ route('admin.showUpdateCar', 1) }}">{{ $car->id }}</a>
                                    </th>
                                    <td>
                                        <img src="{{ $car->photo }}" alt="" style="height:50px;">
                                    </td>
                                    <td>Ford</td>
                                    <td>Fiesta</td>
                                    <td>2018</td>
                                    <td>200</td>
                                    <td>200000</td>
                                    <td>5</td>
                                    <td>Diesel</td>
                                    <td>Manuelle</td>
                                    <td style="min-width: 170px">
                                        <div>
                                        <a href="{{ route('admin.showUpdateCar', 1) }}" class="btn btn-sm btn-secondary">Modifier</a>
                                        <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@stop

