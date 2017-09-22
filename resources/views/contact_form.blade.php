@extends('layouts.master')

@section('content')
    <!-- BANNER
================================================== -->
    <section class="section_banner" id="section_banner">

        <!-- Images -->
        <div class="banner__carousel__img"
             data-images="{{ asset('img/5.jpg') }}">
        </div>

        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-lg-4 col-lg-offset-1">

                    <div class="banner__form">


                        <!-- Contact form on top of page -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="contact__container__form" action="{{ url('contact') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <!-- Header -->
                            <div class="form-group">
                                <h3>Kontaktirajte nas! </h3>
                            </div>

                            <!-- Alert message -->
                            <div class="alert" id="form_message" role="alert"></div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       @guest placeholder="Vaš email naslov">
                                @else value="{{ Auth::user()->email }}">
                                @endguest
                                <span class="help-block"></span>
                            </div>

                            <!-- Name -->
                            <div class="form-group">
                                <label for="name" class="sr-only">Ime</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Vnesite vaše ime">
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group">
                                <label for="subject" class="sr-only">Vaše sporočilo</label>
                                <textarea name="subject" class="form-control" id="subject" placeholder="Vnesite zadevo"></textarea>
                                <span class="help-block"></span>
                            </div>

                            <!-- Message -->
                            <div class="form-group">
                                <label for="message" class="sr-only">Vaše sporočilo</label>
                                <textarea name="message" class="form-control" id="message" placeholder="Vnesite vaše sporočilo"></textarea>
                                <span class="help-block"></span>
                            </div>

                            <!-- Submit -->
                            <input type="submit" class="btn btn-primary" value="Submit"/>

                        </form>

                    </div> <!-- / .banner__form -->

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->

    </section>

@endsection