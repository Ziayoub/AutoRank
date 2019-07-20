@extends('layout-admin')

@section('title', 'agence')

@section('sidebar')
    @include('partials.sidebar')
@stop

@section('content')
    <div id="content-wrapper">
        <div class="container-fluid mt-3">
            <form method="POST" action="{{ route('admin.createAgency') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card my-3">
                            <div class="card-body">
                                <h4 class="mb-5"><i class="fas fa-hotel text-icon"></i>&nbsp;&nbsp;Ajouter une agence</h4>
                                <h5><i class="fas fa-info text-icon"></i>&nbsp;&nbsp;Details de l'agence</h5>
                                <hr class="mb-4">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name" class="text-uppercase text-muted text-sm text-letter-spacing">Nom</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nom de l'agence" value="{{ old('name') }}">
                                            @error('name')
                                                <div class=" pt-1 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-9">
                                                    <label for="address" class="text-uppercase text-muted text-sm text-letter-spacing">Adresse</label>
                                                    <input type="text" class="form-control  @error('address') is-invalid @enderror" id="address" name="address" placeholder="Adresse" value="{{ old('address') }}">
                                                    @error('address')
                                                        <div class=" pt-1 text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-3">
                                                    <label for="city" class="text-uppercase text-muted text-sm text-letter-spacing">Ville</label>
                                                    <select class="form-control @error('city') is-invalid @enderror" id="city" name="city">
                                                        <option value="null" selected>Ville</option>
                                                        @foreach ($cities as $city)
                                                            <option value="{{ $city }}">{{ ucfirst($city) }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('city')
                                                        <div class=" pt-1 text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="text-uppercase text-muted text-sm text-letter-spacing">Telephone de contact</label>
                                            <input type="phone" class="form-control  @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Numero de telephone " value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class=" pt-1 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="facebook" class="text-uppercase text-muted text-sm text-letter-spacing">Facebook</label>
                                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook" placeholder="Facebook" value="{{ old('facebook') }}">
                                                        @error('facebook')
                                                            <div class=" pt-1 text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="whatsapp" class="text-uppercase text-muted text-sm text-letter-spacing">WhatsApp</label>
                                                        <input type="phone" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp" placeholder="WhatsApp" value="{{ old('whatsapp') }}">
                                                        @error('whatsapp')
                                                            <div class=" pt-1 text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="instagram" class="text-uppercase text-muted text-sm text-letter-spacing">Instagram</label>
                                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" placeholder="Instagram" value="{{ old('instagram') }}">
                                                        @error('instagram')
                                                            <div class=" pt-1 text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-60"></div>
                                        <h5><i class="fas fa-photo text-icon"></i>&nbsp;&nbsp;Photos de l'agence</h5>
                                        <hr class="mb-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="file">
                                                    <input name="photos" type="file" class="custom-file-input @error('photos') is-invalid @enderror" id="photos" value="{{ old('photos') }}">
                                                    <label class="custom-file-label" for="photos"><i class="fas fa-cloud-upload-alt"></i>&nbsp;&nbsp;Ajouter des photos</label>
                                                    @error('photos')
                                                        <div class=" pt-1 text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
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
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
