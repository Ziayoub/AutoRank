@extends('layout-admin')

@section('title', 'agences')
@section('content')

    <div class="container-fluid mt-3">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./agencies.html">Agences</a></li>
        </ol>
      </nav>


      <!-- Cars DataTables Example -->
      <div class="card mb-3">
        <div class="card-body">
          <h4 class="mb-5"><i class="fas fa-building text-icon"></i>&nbsp;&nbsp;Agences</h5>
            <a href="agency.html" class="mb-4 btn btn-primary">Ajouter une agence</a>
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
                      <a href="./agency.html">2</a>
                    </th>
                    <td>
                      <img src="http://placehold.it/400x400" alt="" style="height:50px;">
                    </td>
                    <td>
                      <a href="./agency.html">Agence Al Boughaz</a>
                    </td>
                    <td>0534324244</td>
                    <td>Rue 4 Avenue Moulay Ismail 9000</td>
                    <td>Tanger</td>
                    <td>01-03-2019</td>
                    <td>
                      <a href="./moderator.html">Ayoub Modérateur</a>
                    </td>
                    <td style="min-width: 160px">
                      <div>
                        <a href="./agency.html" class="btn btn-sm btn-secondary">Modifier</a>
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
  @section('styles')
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
@stop
</body>

</html>