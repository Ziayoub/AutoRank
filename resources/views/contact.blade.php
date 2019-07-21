@extends('layout')

@section('title', 'Agence')

@section('content')

    {{-- Navbar --}}
    @include('partials.navbar')


        <!-- Page Content -->
    <div class="container">

        <div class="space-200"></div>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51804.57626272524!2d-5.8631899420999085!3d35.756063906798985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b875cf04c132d%3A0x76bfc571bfb4e17a!2sTangier%2C+Morocco!5e0!3m2!1sen!2sus!4v1563691756119!5m2!1sen!2sus"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Addresse</h3>
                <p>
                    Autorank
                    <br>Tanger, Maroc 90000
                    <br>
                </p>
                <p>
                    <span title="Email">Email</span>:
                    <a href="mailto:contact@autorank.com">contact@autorank.com
                    </a>
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3 class="my-5">Contactez nous</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nom:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telephone:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    @include('partials.footer')

@stop
