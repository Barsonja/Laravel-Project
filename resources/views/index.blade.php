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
            <div class="col-sm-6">

                <h1 class="page-header text-white text-left animate-down animate-xs-step-0">
                    Powerful template <br>
                    Ideal for <span>your company</span>
                </h1>
                <p class="page-subheader text-white-muted text-left animate-down animate-xs-step-1">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quam sapiente ipsa expedita, autem veritatis. Unde expedita sit doloribus dolores beatae, debitis, perspiciatis.
                </p>
                <div class="text-left">
                    <a href="#section_services" class="btn btn-primary animate-down animate-xs-step-2">
                        Find out more
                    </a>
                </div>

            </div>
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
                            <input type="email" name="email" class="form-control" id="email" placeholder="Vaš email naslov">
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

<!-- SERVICES
================================================== -->
<section class="section_services" id="section_services">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h2 class="page-header text-center">
                    Our main <span>Services</span>
                </h2>

                <p class="page-subheader text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sed beatae maxime ducimus quaerat quibusdam perferendis quos nobis sint, reprehenderit iusto asperiores, unde repellat voluptatum distinctio consequuntur, veniam ut eveniet.
                </p>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-6">

                <div class="services__item animate-sm-step-0" data-animate="animate-up">
                    <h3 class="services__item__heading page-header text-center">
                        Develoment
                    </h3>
                    <div class="services__item__icon">
                        <i class="ion-social-android"></i>
                    </div>
                    <div class="services__item__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus sunt ipsum, aliquam recusandae velit, est mollitia. Tempore autem itaque, et accusantium deserunt adipisci repudiandae perferendis, non, iusto reiciendis possimus laboriosam.
                    </div>
                    <a href="#section_contact" class="services__item__btn btn btn-primary">
                        Contact Us
                    </a>
                </div> <!-- / .services__item -->

            </div>
            <div class="col-sm-6">

                <div class="services__item animate-sm-step-1" data-animate="animate-up">
                    <h3 class="services__item__heading page-header text-center">
                        Promotion
                    </h3>
                    <div class="services__item__icon">
                        <i class="ion-social-twitter"></i>
                    </div>
                    <div class="services__item__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus sunt ipsum, aliquam recusandae velit, est mollitia. Tempore autem itaque, et accusantium deserunt adipisci repudiandae perferendis, non, iusto reiciendis possimus laboriosam.
                    </div>
                    <a href="#section_contact" class="services__item__btn btn btn-primary">
                        Contact Us
                    </a>
                </div> <!-- / .services__item -->

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- FEATURES
================================================== -->
<section class="section_features" id="section_features">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h2 class="page-header text-center">
                    What's so <span>awesome</span> about us
                </h2>

                <p class="page-subheader text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora exercitationem quis atque ducimus, eveniet ipsam sunt numquam nobis, assumenda eum ipsa quam distinctio expedita, sequi, quibusdam animi! Pariatur, sed laboriosam.
                </p>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-4">

                <div class="features__item animate-sm-step-0" data-animate="animate-up">
                    <div class="features__item__icon">
                        <i class="ion-android-laptop"></i>
                    </div>
                    <h3 class="features__item__heading">
                        Fully responsive
                    </h3>
                    <div class="features__item__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius officiis temporibus dolor tempore blanditiis nulla amet atque repellendus fuga maxime.
                    </div>
                </div>

            </div>
            <div class="col-sm-4">

                <div class="features__item animate-sm-step-1" data-animate="animate-up">
                    <div class="features__item__icon">
                        <i class="ion-android-options"></i>
                    </div>
                    <h3 class="features__item__heading">
                        Multiple layout options
                    </h3>
                    <div class="features__item__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius officiis temporibus dolor tempore blanditiis nulla amet atque repellendus fuga maxime.
                    </div>
                </div>

            </div>
            <div class="col-sm-4">

                <div class="features__item animate-sm-step-2" data-animate="animate-up">
                    <div class="features__item__icon">
                        <i class="ion-android-color-palette"></i>
                    </div>
                    <h3 class="features__item__heading">
                        Multiple color schemes
                    </h3>
                    <div class="features__item__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius officiis temporibus dolor tempore blanditiis nulla amet atque repellendus fuga maxime.
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-4">

                <div class="features__item animate-sm-step-0" data-animate="animate-up">
                    <div class="features__item__icon">
                        <i class="ion-android-checkmark-circle"></i>
                    </div>
                    <h3 class="features__item__heading">
                        Built with LESS
                    </h3>
                    <div class="features__item__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius officiis temporibus dolor tempore blanditiis nulla amet atque repellendus fuga maxime.
                    </div>
                </div>

            </div>
            <div class="col-sm-4">

                <div class="features__item animate-sm-step-1" data-animate="animate-up">
                    <div class="features__item__icon">
                        <i class="ion-android-send"></i>
                    </div>
                    <h3 class="features__item__heading">
                        Functional contact form
                    </h3>
                    <div class="features__item__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius officiis temporibus dolor tempore blanditiis nulla amet atque repellendus fuga maxime.
                    </div>
                </div>

            </div>
            <div class="col-sm-4">

                <div class="features__item animate-sm-step-2" data-animate="animate-up">
                    <div class="features__item__icon">
                        <i class="ion-android-mail"></i>
                    </div>
                    <h3 class="features__item__heading">
                        Free support by email
                    </h3>
                    <div class="features__item__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius officiis temporibus dolor tempore blanditiis nulla amet atque repellendus fuga maxime.
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- TESTIMONIALS
================================================== -->
<section class="section_testimonials section_alt" id="section_testimonials">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h2 class="page-header text-center">
                    What <span>clients</span> say about us
                </h2>

                <p class="page-subheader text-center">
                    Effective and timely feedback is a critical component of a successful collaboration.
                </p>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-4">

                <blockquote class="testimonials__blockquote animate-sm-step-0" data-animate="animate-up">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nostrum delectus quod eligendi distinctio. Fugiat sequi ad dolor id est voluptas, ab, optio obcaecati, corporis dolore dignissimos accusantium hic ratione?
                    </p>
                    <footer>
                        <img src="{{ asset('img/avatar_3.png') }}" class="img-responsive" alt="...">
                        <div>
                            <h3 class="h5">John Doe</h3>
                            <cite>Lorem ipsum</cite>
                        </div>
                    </footer>
                </blockquote>

            </div>
            <div class="col-sm-4">

                <blockquote class="testimonials__blockquote animate-sm-step-1" data-animate="animate-up">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nostrum delectus quod eligendi distinctio. Fugiat sequi ad dolor id est voluptas, ab, optio obcaecati, corporis dolore dignissimos accusantium hic ratione?
                    </p>
                    <footer>
                        <img src="{{ asset('img/avatar_2.png') }}" class="img-responsive" alt="...">
                        <div>
                            <h3 class="h5">Richard Roe</h3>
                            <cite>Lorem ipsum</cite>
                        </div>
                    </footer>
                </blockquote>

            </div>
            <div class="col-sm-4">

                <blockquote class="testimonials__blockquote animate-sm-step-2" data-animate="animate-up">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nostrum delectus quod eligendi distinctio. Fugiat sequi ad dolor id est voluptas, ab, optio obcaecati, corporis dolore dignissimos accusantium hic ratione?
                    </p>
                    <footer>
                        <img src="{{ asset('img/avatar_1.png') }}" class="img-responsive" alt="...">
                        <div>
                            <h3 class="h5">Judy Doe</h3>
                            <cite>Lorem ipsum</cite>
                        </div>
                    </footer>
                </blockquote>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- NEWS
================================================== -->
<section class="section_news" id="section_news">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h2 class="page-header text-center">
                    Our latest <span>news</span>
                </h2>

                <p class="page-subheader text-center">
                    Recent news and announcements about our company.
                </p>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-4">

                <a href="#" class="news__item animate-sm-step-0" data-animate="animate-up">
                    <div class="news__item__img">
                        <img src="{{ asset('img/2.jpg') }}" class="img-responsive" alt="...">
                        <time datetime="2017-01-12" class="news__item__img__date">
                            Jan <span>12</span>
                        </time>
                    </div>
                    <div class="news__item__footer">
                        <h3 class="news__item__footer__heading">
                            Lorem ipsum dolor sit
                        </h3>
                        <div class="news__item__footer__content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis aliquam omnis.
                        </div>
                    </div>
                </a> <!-- / .news__item -->

            </div>
            <div class="col-sm-4">

                <a href="#" class="news__item animate-sm-step-1" data-animate="animate-up">
                    <div class="news__item__img">
                        <img src="{{ asset('img/5.jpg') }}" class="img-responsive" alt="...">
                        <time datetime="2017-02-17" class="news__item__img__date">
                            Jan <span>24</span>
                        </time>
                    </div>
                    <div class="news__item__footer">
                        <h3 class="news__item__footer__heading">
                            Lorem ipsum dolor sit
                        </h3>
                        <div class="news__item__footer__content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis aliquam omnis.
                        </div>
                    </div>
                </a> <!-- / .news__item -->

            </div>
            <div class="col-sm-4">

                <a href="#" class="news__item animate-sm-step-2" data-animate="animate-up">
                    <div class="news__item__img">
                        <img src="{{ asset('img/7.jpg') }}" class="img-responsive" alt="...">
                        <time datetime="2017-02-25" class="news__item__img__date">
                            Apr <span>30</span>
                        </time>
                    </div>
                    <div class="news__item__footer">
                        <h3 class="news__item__footer__heading">
                            Lorem ipsum dolor sit
                        </h3>
                        <div class="news__item__footer__content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis aliquam omnis.
                        </div>
                    </div>
                </a> <!-- / .news__item -->

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


<!-- CONTACT
================================================== -->
<section class="section_contact" id="section_contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h2 class="page-header text-center">
                    Get in touch <span>with us</span>
                </h2>

                <p class="page-subheader text-center">
                    Do not hesitate to drop us a couple of lines. 24/7 support guaranteed.
                </p>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-xs-12">

                <div class="contact__container">
                    <div class="row">
                        <div class="col-sm-8">
                            <!--

                                          <form class="contact__container__form" id="form_sendemail">


                                            <div class="form-group">
                                              <h3>Send us a message</h3>
                                            </div>


                                            <div class="alert" id="form_message" role="alert"></div>


                                            <div class="form-group">
                                              <label for="email" class="sr-only">Email address *</label>
                                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
                                              <span class="help-block"></span>
                                            </div>


                                            <div class="form-group">
                                              <label for="name" class="sr-only">Name *</label>
                                              <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                                              <span class="help-block"></span>
                                            </div>


                                            <div class="form-group">
                                              <label for="message" class="sr-only">Message *</label>
                                              <textarea name="message" class="form-control" id="message" placeholder="Enter your message"></textarea>
                                              <span class="help-block"></span>
                                            </div>


                                            <button type="submit" class="btn btn-primary">
                                              Send Message
                                            </button>

                                          </form> -->

                        </div>
                        <div class="col-sm-4">

                            <ul class="contact__container__info">
                                <li>
                                    <h3>Naš kontakt</h3>
                                </li>
                                <li>
                                    <i class="ion-android-pin"></i>
                                    <p>
                                        Ulica vseh ulic 89 <br>
                                        Ljubljana, Bohinj, Slovenija
                                    </p>
                                </li>
                                <li>
                                    <i class="ion-android-call"></i>
                                    <p>
                                        <a href="tel:00000000000">041 057 040</a>
                                    </p>
                                </li>
                                <li>
                                    <i class="ion-android-mail"></i>
                                    <p>
                                        <a href="mailto:admin@domain.com">mail@admin.si</a>
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div> <!-- / .row -->
                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

@endsection
