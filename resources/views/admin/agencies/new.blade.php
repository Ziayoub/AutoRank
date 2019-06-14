@extends('layout-admin')

@section('title', 'agence')

@section('sidebar')
  @include('partials.sidebar-admin')
@stop

@section('content')
    <div id="content-wrapper">

        <div class="container-fluid mt-3">
            <div class="row">
                <form METHOD="post" action="{{route('admin.createAgency')}}">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                    <!-- Details de l'agence -->
                        <div class="card my-3">
                            <div class="card-body">
                                <h4 class="mb-5"><i class="fas fa-hotel text-icon"></i>&nbsp;&nbsp;Ajouter une agence</h4>
                                <h5><i class="fas fa-info text-icon"></i>&nbsp;&nbsp;Details de l'agence</h5>
                                <hr class="mb-4">
                                <div class="row">
                                    <div class="col-12">

                                        <div class="form-group">
                                            <label for="AgencyName" class="text-uppercase text-muted text-sm text-letter-spacing">Nom</label>
                                            <input type="text" class="form-control @error('AgencyName') is-invalid @enderror " id="AgencyName" name="AgencyName" placeholder="Nom de l'agence" value="">
                                            @error('AgencyName')
                                            <div class=" pt-1 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                            <div class="col-9">
                                                <label for="AgencyAddress" class="text-uppercase text-muted text-sm text-letter-spacing">Adresse</label>
                                                <input type="text" class="form-control  @error('AgencyAddress') is-invalid @enderror" id="AgencyAddress" name="AgencyAddress" placeholder="Adresse" value="">
                                                @error('AgencyAddress')
                                                <div class=" pt-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-3">
                                                <label for="AgencyCity" class="text-uppercase text-muted text-sm text-letter-spacing">Ville</label>
                                                <select class="form-control  @error('AgencyCity') is-invalid @enderror" id="AgencyCity" name="AgencyCity">
                                                    <option value="" selected>ville</option>
                                                    <option value="tanger">Tanger</option>
                                                    <option value="casablanca" >Casablanca</option>
                                                    <option value="rabat">Rabat</option>
                                                    <option value="marakech">Marakech</option>
                                                    <option value="agadir">Agadir</option>
                                                </select>
                                                @error('AgencyCity')
                                                <div class=" pt-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="AgencyPhone" class="text-uppercase text-muted text-sm text-letter-spacing">Telephone de contact</label>
                                            <input type="phone" class="form-control  @error('AgencyPhone') is-invalid @enderror" id="AgencyPhone" name="AgencyPhone" placeholder="Numero de telephone " value="">
                                            @error('AgencyPhone')
                                            <div class=" pt-1 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="facebook" class="text-uppercase text-muted text-sm text-letter-spacing">Facebook</label>
                                                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" value="">
                                                </div>
                                                <div class="col-4">
                                                    <label for="whatsapp" class="text-uppercase text-muted text-sm text-letter-spacing">WhatsApp</label>
                                                    <input type="phone" class="form-control" id="whatsapp" name="whatsapp" placeholder="WhatsApp" value="">
                                                </div>
                                                <div class="col-4">
                                                    <label for="instagram" class="text-uppercase text-muted text-sm text-letter-spacing">Instagram</label>
                                                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-60"></div>
                                        <h5><i class="fas fa-photo text-icon"></i>&nbsp;&nbsp;Photos de l'agence</h5>
                                        <hr class="mb-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                            <div class="file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                <label class="custom-file-label" for="inputGroupFile04"><i class="fas fa-cloud-upload-alt"></i>&nbsp;&nbsp;Ajouter
                                                des photos</label>
                                            </div>
                                            </div>
                                        </div>

                                        <p class="text-secondary">5 photos listées</p>
                                        <div class="d-flex flex-wrap">
                                            <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                            <img src="http://placehold.it/600x400" alt="..." class="img img-fluid" style="height: 150px;object-fit: cover">
                                            <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                            </button>
                                            </div>
                                            <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                            <img src="http://placehold.it/600x400" alt="..." class="img img-fluid" style="height: 150px;object-fit: cover">
                                            <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                            </button>
                                            </div>
                                            <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                            <img src="http://placehold.it/600x400" alt="..." class="img img-fluid" style="height: 150px;object-fit: cover">
                                            <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                            </button>
                                            </div>
                                            <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                            <img src="http://placehold.it/600x400" alt="..." class="img img-fluid" style="height: 150px;object-fit: cover">
                                            <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                            </button>
                                            </div>
                                            <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                            <img src="http://placehold.it/600x400" alt="..." class="img img-fluid" style="height: 150px;object-fit: cover">
                                            <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                            </button>
                                            </div>
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
                    <!-- ./ Details de l'agence -->
                    </div>
                </form>
            </div>

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
    </div>
    <!-- /.container-fluid -->

@stop
