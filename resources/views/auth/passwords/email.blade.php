@extends('layout')

@section('content')

    @include('partials.navbar')

     <div class="container">
          <br><br>
          <div class="card card-login mx-auto mt-5">
            <div class="card-body">
              <h4 class="mb-4">Réinitialiser le mot de passe</h4>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              <div class="mb-4">
                <p>Entrez votre adresse email pour vous envoyer le lien de réinitialisation de mot de passe.</p>
              </div>
              <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                  <div class="form-label-group">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="email">Email</label>
                       @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                </div>
                <button type="submit" class="mt-4 btn btn-primary btn-block">Réinitialiser</button>
              </form>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <a class="d-block small" href="{{ route('register') }}">Créer un compte</a>
                <a class="d-block small" href="{{ route('login') }}">Se Connecter</a>
              </div>
            </div>
          </div>
      </div>

    @include('partials.footer')

@endsection
