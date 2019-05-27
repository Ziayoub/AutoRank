<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Autorank — @yield('title')</title>


  <!-- Custom fonts for this template-->
  <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

  @yield('styles')


</head>

<body>

  <div class="container-fluid p-0" style="margin-top: 73px">

    @yield('content')

  </div>


  <!-- jQuery -->
  <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  @yield('scripts')


</body>

</html>
