<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('/assets/img/brand/icon.png') }}" type="image/x-icon"  />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AutoRank - @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{asset('/css/main.css')}}" rel="stylesheet">

    @yield('styles')

</head>

<body id="page-top">

    @include('partials.navbar-admin')

    <div id="wrapper">

        <!-- Sidebar -->
        @yield('sidebar')

        <div id="content-wrapper">

            @yield('content')

            <!-- Footer -->
            @include('partials.footer')

        </div>

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/js/sb-admin.min.js') }}"></script>

    @yield('scripts')

    </body>

</html>
