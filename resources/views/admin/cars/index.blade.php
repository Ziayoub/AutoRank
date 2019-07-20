@extends('layout-admin')

@section('title', 'Voitures')
@section('sidebar')
@include('partials.sidebar')
@stop

@section('content')
    <div id="content-wrapper">

      <div class="container-fluid mt-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Voitures</a></li>
          </ol>
        </nav>

        <!-- Cars DataTables -->
        <div class="card mb-3">
          <div class="card-body">
            <h4 class="mb-5"><i class="fas fa-car text-icon"></i>&nbsp;&nbsp;Voitures</h5>
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
                      <th>Agence</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <a href="{{ route('admin.showUpdateCar', 1) }}">1</a>
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
                      <td>
                        <a href="{{ route('admin.showUpdateAgency', 1) }}">Agence Al Boughaz</a>
                      </td>
                      <td style="min-width: 170px">
                        <div>
                          <a href="{{ route('admin.showUpdateCar', 1) }}" class="btn btn-sm btn-secondary">Modifier</a>
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

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
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
