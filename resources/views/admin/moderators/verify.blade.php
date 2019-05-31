@extends('layout-admin')

@section('title', 'Moderateur')
@section('content')
    <div id="content-wrapper">

      <div class="container-fluid mt-3">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="./moderators.html">Modérateurs</a></li>
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
                      <a href="./moderator.html">10</a>
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
                      <a href="./agency.html">Agence Al Boughaz</a>
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
@section('styles')
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('/js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('/js/demo/datatables-demo.js')}}"></script>
@stop