@extends('layout-admin')

@section('title', 'Agence')

@section('sidebar')
   @include('partials.sidebar')
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Details de l'agence -->
                <div class="card my-3">
                    <div class="card-body">
                        <h4 class="mb-5"><i class="fas fa-hotel text-icon"></i>&nbsp;&nbsp;Agence Salam</h4>
                        <h5><i class="fas fa-info text-icon"></i>&nbsp;&nbsp;Details de l'agence</h5>
                        <hr class="mb-4">
                        <div class="row">
                            <div class="col-12">
                                <form>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput"
                                            class="text-uppercase text-muted text-sm text-letter-spacing">Nom</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Nom de l'agence" value="Agence Salam">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-9">
                                                <label for="formGroupExampleInput2"
                                                    class="text-uppercase text-muted text-sm text-letter-spacing">Adresse</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput2"
                                                    placeholder="Another input" value="Rue 12 Avenue Moulay Ismail 90000 Tanger">
                                            </div>
                                            <div class="col-3">
                                                <label for="formGroupExampleInput2"
                                                    class="text-uppercase text-muted text-sm text-letter-spacing">Ville</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Tanger</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2"
                                            class="text-uppercase text-muted text-sm text-letter-spacing">Telephone de contact</label>
                                        <input type="phone" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Another input" value="066321321321">
                                    </div>

                                    <div class="space-60"></div>
                                    <h5><i class="fas fa-photo text-icon"></i>&nbsp;&nbsp;Photos de l'agence</h5>
                                    <hr class="mb-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                <label class="custom-file-label" for="inputGroupFile04"><i
                                                        class="fas fa-cloud-upload-alt"></i>&nbsp;&nbsp;Ajouter
                                                    des photos</label>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-secondary">5 photos listées</p>
                                    <div class="d-flex flex-wrap">
                                        <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                            <img src="http://placehold.it/600x400" alt="..." class="img img-fluid"
                                                style="height: 150px;object-fit: cover">
                                            <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                            </button>
                                        </div>
                                        <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                            <img src="http://placehold.it/600x400" alt="..." class="img img-fluid"
                                                style="height: 150px;object-fit: cover">
                                            <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                            </button>
                                        </div>
                                        <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                            <img src="http://placehold.it/600x400" alt="..." class="img img-fluid"
                                                style="height: 150px;object-fit: cover">
                                            <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                            </button>
                                        </div>
                                        <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                            <img src="http://placehold.it/600x400" alt="..." class="img img-fluid"
                                                style="height: 150px;object-fit: cover">
                                            <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                            </button>
                                        </div>
                                        <div class="d-flex flex-column align-items-center mr-2 mb-2 img-thumbnail">
                                            <img src="http://placehold.it/600x400" alt="..." class="img img-fluid"
                                                style="height: 150px;object-fit: cover">
                                            <button type="button" class="btn btn-link btn-sm text-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;&nbsp; Supprimer
                                            </button>
                                        </div>
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

    </div>

@stop

