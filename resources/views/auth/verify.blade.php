@extends('layout')


@section('content')

    @include('partials.navbar')

     <div class="container">
          <br><br>
          <div class="card card-login mx-auto mt-5">
            <div class="card-body">
              <h4 class="mb-4">Vérification de l'email</h4>
                 @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
              <div class="mb-4">
                <p>Nous venons de vous envoyer un e-mail de validation sur votre boite de réception.</p>
              </div>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                Veuillez cliquer sur le lien pour valider votre inscription, si vous n'avez pas reçu un email,
                vous pouvez , <a href="{{ route('verification.resend') }}">cliquer ici pour le renvoyer</a>.
                <br>

              <div class="d-flex justify-content-between align-items-center mt-2">
                <a class="d-block small" href="{{ route('register') }}">Créer un compte</a>
                <a class="d-block small" href="{{ route('login') }}">Se Connecter</a>
              </div>
            </div>
          </div>
      </div>

    @include('partials.footer')

@endsection