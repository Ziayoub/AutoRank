<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link href='vendor/fullcalendar/core/main.css' rel='stylesheet' />
    <link href='vendor/fullcalendar/list/main.css' rel='stylesheet' />
    <script src='vendor/fullcalendar/core/main.js'></script>
    <script src='vendor/fullcalendar/core/locales/fr.js'></script>
    <script src='vendor/fullcalendar/daygrid/main.js'></script>
  <title>Autorank — @yield('title')</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ asset('/css/main.css') }}" rel="stylesheet">


</head>

<body>

  <div class="container-fluid p-0" style="margin-top: 73px">

    @yield('content')

  </div>

  <!-- jQuery -->
  <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
