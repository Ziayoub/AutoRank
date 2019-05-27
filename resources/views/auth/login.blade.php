@extends('layout')


@section('content')

    @include('partials.navbar')

    <div class="container">
      <br><br>
      <div class="card card-login mx-auto">
        <div class="card-body">
          <h4 class="mb-5">Se Connecter</h4>
           <form method="POST" action="{{ route('login') }}">
                 @csrf
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email" autofocus>
                <label for="inputEmail">Email</label>
                  @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" required autocomplete="current-password">
                <label for="inputPassword">Mot de passe</label>
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  Garder ma session active
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Se Connecter</button>
          </form>
          <div class="d-flex justify-content-between align-items-center mt-2">
            <a class="d-block small" href="{{ route('password.request') }}">Mot de passe oublié?</a>
            <a class="d-block small" href="{{ route('register') }}">Créer un compte</a>
          </div>
        </div>
      </div>
    </div>

    @include('partials.footer')

@endsection
