@extends('layout-admin')

@section('title', 'agences')

@section('sidebar')
  @include('partials.sidebar-admin')
@stop

@section('content')

    <div class="container-fluid mt-3">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.showAgencies') }}">Agences</a></li>
            </ol>
        </nav>


        <!-- Cars DataTables Example -->
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="mb-5"><i class="fas fa-building text-icon"></i>&nbsp;&nbsp;Agences</h5>
                <a href="{{ route('admin.showCreateAgency') }}" class="mb-4 btn btn-primary">Ajouter une agence</a>
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Telephone</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>Date Ajoutée</th>
                        <th>Modérateur</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                        <a href="{{ route('admin.showUpdateAgency', 2) }}">2</a>
                        </th>
                        <td>
                        <img src="http://placehold.it/400x400" alt="" style="height:50px;">
                        </td>
                        <td>
                        <a href="{{ route('admin.showUpdateAgency', 2) }}">Agence Al Boughaz</a>
                        </td>
                        <td>0534324244</td>
                        <td>Rue 4 Avenue Moulay Ismail 9000</td>
                        <td>Tanger</td>
                        <td>01-03-2019</td>
                        <td>
                        <a href="{{ route('admin.showUpdateModerator', 1) }}">Ayoub Modérateur</a>
                        </td>
                        <td style="min-width: 160px">
                        <div>
                            <a href="{{ route('admin.showUpdateAgency', 2) }}" class="btn btn-sm btn-secondary">Modifier</a>
                            <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
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
