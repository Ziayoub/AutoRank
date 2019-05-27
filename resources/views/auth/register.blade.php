@extends('layout')

@section('content')
     <div class="container">
      <br><br>
      <div class="card card-register mx-auto">
        <!-- <div class="card-header">Créer un compte</div> -->
        <div class="card-body">
          <h4 class="mb-5">Créer un compte</h4>
            <form method="POST" action="{{ route('register') }}">
                @csrf

            <div class="mb-4">
              <h5 class="mb-3">Details personnels</h5>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" id="firstName" name="firstName" class="form-control @error('name') is-invalid @enderror" placeholder="Nom" value="{{ old('firstName') }}" required autocomplete="name" autofocus>
                      <label for="firstName">Nom</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" name="lastName" id="lastName" class="form-control @error('lastName') is-invalid @enderror" placeholder="Prénom" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
                      <label for="lastName">Prénom</label>
                        @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  <label for="inputEmail">Email address</label>
                     @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="tel" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Telephone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                  <label for="phone">Telephone</label>
                     @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      <label for="inputPassword">Mot de passe</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      <label for="confirmPassword">Confirmation de mot de passe</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <br>
            <div class="mb-4">
              <h5 class="mb-3">Details de votre agence</h5>

              <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="agencyName" name="agencyName" class="form-control @error('agencyName') is-invalid @enderror" placeholder="Nom de l'agence" value="{{ old('agencyName') }}" required autocomplete="agencyName" autofocus>
                      <label for="agencyName">Nom de l'agence</label>
                        @error('agencyName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-8">
                    <div class="form-label-group">
                        <input type="text" id="agencyAddress" name="agencyAddress" class="form-control @error('agencyAddress') is-invalid @enderror" placeholder="Adresse de l'agence" value="{{ old('agencyAddress') }}" required autocomplete="agencyAddress" autofocus>
                        <label for="agencyAddress">Adresse de l'agence</label>
                        @error('agencyAddress')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-4">

                    <select class="form-control form-control-lg" style="font-size:16px;height:50px" name="agencyCity">
                      <option selected>Ville</option>
                      <option>Tanger</option>
                      <option>Rabat</option>
                      <option>Tétouan</option>
                    </select>
                      @error('agencyCity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-label-group">
                    <input type="tel" id="agencyPhone" name="agencyPhone" class="form-control @error('agencyPhone') is-invalid @enderror" placeholder="Telephone de l'agence" value="{{ old('agencyPhone') }}" required autocomplete="agencyPhone" autofocus>
                    <label for="agencyPhone">Telephone de l'agence</label>
                     @error('agencyPhone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
              </div>

            </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Créer mon compte</button>
                </div>

          </form>

          <div class="mt-2 text-center">
            <a class="d-block small mt-3" href="{{ route('login') }}">Se Connecter</a>
          </div>
        </div>
      </div>
    </div>

    @include('partials.footer')

@endsection
