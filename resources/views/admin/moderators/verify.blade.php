@extends('layout-admin')

@section('title', 'Moderateur')

@section('sidebar')
  @include('partials.sidebar-admin')
@stop

@section('content')
    <div id="content-wrapper">

      <div class="container-fluid mt-3">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="{{ route('admin.showModerators') }}">Modérateurs</a></li>
        </ol>
      </nav>

      <!-- Moderators DataTables -->
      <div class="card mb-3">
        <div class="card-body">
          <h4 class="mb-5"><i class="fas fa-users text-icon"></i>&nbsp;&nbsp;Modérateurs</h5>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Validé</th>
                    <th>Agence</th>
                    <th>Date d'inscriptions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <a href="{{ route('admin.showUpdateModerator', 10) }}">10</a>
                    </th>
                    <td>
                      <img src="http://placehold.it/400x400" alt="" class="rounded-circle" style="height:50px;">
                    </td>
                    <td>Ayoub</td>
                    <td>Moderator</td>
                    <td>ayoub.moderator@gmail.com</td>
                    <td>0658932032</td>
                    <td>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitches')}}">
                        <label class="custom-control-label" for="customSwitches')}}"></label>
                      </div>
                    </td>
                    <td>
                      <a href="{{ route('showUpdateAgency', 1)}}">Agence Al Boughaz</a>
                    </td>
                    <td>22-05-2019</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      </div>
      </div>
      <!-- /.container-fluid -->
@stop
