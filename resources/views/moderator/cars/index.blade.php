@extends('layout-admin')

@section('title', 'Voitures')

@section('sidebar')
   @include('partials.sidebar-mod')
@stop

@section('content')

    <div class="container-fluid mt-3">

        <!-- Cars DataTables -->
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="mb-5"><i class="fas fa-car text-icon"></i>&nbsp;&nbsp;Voitures</h5>
                    <a href="{{route('mod.showCreateCar')}}" class="mb-4 btn btn-primary">Ajouter une voiture</a>
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
                            <tr>
                                <th scope="row">
                                    <a href="{{ route('mod.showUpdateCar', 1) }}">1</a>
                                </th>
                                <td>
                                    <img src="http://placehold.it/400x400" alt="" style="height:50px;">
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
                                        <a href="{{ route('mod.showUpdateCar', 1) }}" class="btn btn-sm btn-secondary">Modifier</a>
                                        <a href="{{ route('mod.deleteCar', 1) }}" class="btn btn-sm btn-danger">Supprimer</a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@stop
