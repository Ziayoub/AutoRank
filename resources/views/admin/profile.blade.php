@extends('layout-admin')

@section('title', 'Profile')
@section('sidebar')
    @include('partials.sidebar')
@stop

@section('content')

    <div id="content-wrapper">

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <!-- Details de l'agence -->
            <div class="card my-3">
              <div class="card-body">
                <form>
                  <h4 class="mb-5">
                    <i class="fas fa-user text-icon"></i>&nbsp;&nbsp; {{ auth()->user()->first_name .' '. auth()->user()->last_name  }}
                  </h4>

                  <div class="row">
                    <div class="col-md-8">
                      <h5><i class="fas fa-edit text-icon"></i>&nbsp;&nbsp;Données Personelles</h5>
                      <hr class="mb-4 mt-2" />
                      <div class="form-group">
                        <div class="row">
                          <div class="col-6">
                            <label class="text-uppercase text-letter-spacing text-sm text-secondary" for="formGroupExampleInput">Nom</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nom de moderateur" value="{{ auth()->user()->last_name }}">
                          </div>
                          <div class="col-6">
                            <label class="text-uppercase text-letter-spacing text-sm text-secondary"
                              for="formGroupExampleInput">Prenom</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Prenom de moderateur"
                              value="{{ auth()->user()->first_name }}">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-6">
                            <label class="text-uppercase text-letter-spacing text-sm text-secondary"
                              for="formGroupExampleInput2">Email</label>
                            <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email" value="{{ auth()->user()->email }}">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-6">
                            <label class="text-uppercase text-letter-spacing text-sm text-secondary" for="formGroupExampleInput2">Telephone de
                              contact</label>
                            <input type="phone" class="form-control" id="formGroupExampleInput2" placeholder="Numero de telephone" value="{{ auth()->user()->phone}}">
                          </div>
                          <div class="col-6">
                            <label class="text-uppercase text-letter-spacing text-sm text-secondary" for="formGroupExampleInput2">CIN</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="La carte d'identité nationale"
                              value="">
                          </div>
                        </div>
                      </div>

                      <h5 class="mt-5"><i class="fas fa-key text-icon"></i>&nbsp;&nbsp;Changer le mot de passe</h5>
                      <hr class="mb-4 mt-2" />

                      <div class="form-group">
                        <div class="row">
                          <div class="col-6">
                            <label class="text-uppercase text-letter-spacing text-sm text-secondary" for="formGroupExampleInput2">Mot de
                              passe</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Mot de passe"
                              value="{{ auth()->user()->password }}">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-6">
                            <label class="text-uppercase text-letter-spacing text-sm text-secondary" for="formGroupExampleInput2">Confirmation
                              de mot de passe</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="confirmation"
                              value="{{ auth()->user()->password }}">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <!-- <h5><i class="fas fa-key text-icon"></i>&nbsp;&nbsp;Photo de profil</h5> -->
                      <div class="mb-5"></div>
                      <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('/storage/' . auth()->user()->photo) }}" alt="" class="rounded-circle mb-4" style="width: 200px;height: 200px">
                        <div class="custom-file w-50">
                          <input type="file" class="custom-file-input" id="inputGroupFile02">
                          <label class="custom-file-label" for="inputGroupFile02"><i class="fa fa-upload"></i>&nbsp;&nbsp;Remplacer</label>
                        </div>
                        <a class="text-xs text-danger mt-3" href="#"><i class="fa fa-trash"></i>&nbsp;&nbsp;Supprimer</a>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-5">
                    <div class="col-12">
                      <button type="button" class="pull-right btn btn-primary">Enregistrer</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
            <!-- ./ Details de l'agence -->
          </div>
          <div class="col-md-6 col-sm-12">
            <!-- Agency Photos -->

            <!-- ./ Agency Photos -->
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@stop
