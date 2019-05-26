@extends('layout')

@section('title', 'About')

@section('content')



    {{-- Navbar --}}
    @include('partials.navbar')



        <!-- Page Content -->
        <div class="container">

            <br>
            <h1 class="mt-4 mb-3">À propos</h1>

            <!-- Intro Content -->
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
                </div>
                <div class="col-lg-6">
                    <h2>About Modern Business</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Team Members -->
            <h1 class="text-center space-100">Our Team</h1>

            <div class="row justify-content-center">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 text-center border-0">
                        <div class="text-center">
                            <img class="card-img-top rounded-circle" src="http://placehold.it/750x450" alt=""
                                 style="height: 200px;width:200px">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Team Member</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum
                                fugiat odio officiis odit.</p>
                            <a href="#">name@example.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 text-center border-0">
                        <div class="text-center">
                            <img class="card-img-top rounded-circle" src="http://placehold.it/750x450" alt="" style="height: 200px;width:200px">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Team Member</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                            <a href="#">name@example.com</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

            <div class="space-100"></div>

            <!-- Our Customers -->
            <h2 class="text-center mb-5">Nos clients</h2>

            <div class="d-flex justify-content-center">
                <img class="img-fluid rounded m-5" src="http://placehold.it/500x300" alt="" style="height: 100px;">
                <img class="img-fluid rounded m-5" src="http://placehold.it/500x300" alt="" style="height: 100px;">
                <img class="img-fluid rounded m-5" src="http://placehold.it/500x300" alt="" style="height: 100px;">
            </div>
            <!-- /.row -->
            <div class="space-100"></div>

        </div>
        <!-- /.container -->



    @include('partials.footer')

@stop
