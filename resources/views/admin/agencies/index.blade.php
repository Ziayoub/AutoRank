@extends('layout-admin')

@section('title', 'agences')

@section('sidebar')
    @include('partials.sidebar')
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
                        @foreach($agencies as $agency)
                            <tr>
                                <th scope="row">
                                    <a href="{{ route('admin.showUpdateAgency', $agency->id ) }}">{{$agency->id}}</a>
                                </th>
                                <td>
                                    <img src="http://placehold.it/400x400" alt="" style="height:50px;">
                                </td>
                                <td>
                                    <a href="{{ route('admin.showUpdateAgency', $agency->id ) }}">{{$agency->name}}</a>
                                </td>
                                <td>{{ $agency->phone }}</td>
                                <td>{{ $agency->address }}</td>
                                <td>{{ $agency->city }}</td>
                                <td>{{ $agency->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.showUpdateModerator', $agency->id) }}">{{ $agency->moderator->first_name}}</a>
                                </td>
                                <td style="min-width: 160px">
                                    <div>
                                        <a href="{{ route('admin.showUpdateAgency', $agency->id ) }}" class="btn btn-sm btn-secondary">Modifier</a>
                                        <a href="{{ route('admin.deleteAgency', $agency->id ) }}" class="btn btn-sm btn-danger">Supprimer</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
      <!-- /.container-fluid -->
 @stop
