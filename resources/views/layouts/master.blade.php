<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('ico/favicon.ico') }}">

    <title>Working title</title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('plugins/ionicons/css/ionicons.min.css') }}">

    <!-- CSS Global -->
    <!--build:css static/css/theme.css-->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
    <!--endbuild-->

    <!-- Bootstrap CDN
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

</head>
<body data-spy="scroll" data-target="#navbar_main" data-offset="80">

<!-- PRELOADER
================================================== -->
<div class="preloader">
    <img src="{{ asset('img/spinner.svg') }}" alt="Loading..." class="preloader__spinner">
</div>

<!-- NAVBAR
================================================== -->
<nav class="navbar navbar-fixed-top navbar-default" style="background-color: #373a3c;">
    <div class="container">

        <!-- Brand name -->
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_main" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">Working title yo!</a>
        </div>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar_main">

            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="{{ route('index') }}#section_banner">Začetek</a>
                </li>
                <li><a href="{{ route('index') }}#section_services">O nas</a></li>
                <li><a href="{{ route('index') }}#section_features">Storitve</a></li>
                <li><a href="{{ route('index') }}#section_news">Novice</a></li>
                <li><a href="{{ route('index') }}#section_contact">Kontakt</a></li>
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

@yield('content')

<!-- FOOTER
================================================== -->
<footer class="section_footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">

                <p class="footer__copyright">
                    <span id="footer__year">2017</span> Rok in Žan, projekt št.1 haha</a>
                </p>

            </div>
            <div class="col-sm-3">

                <ul class="footer__social">
                    <li>
                        <a class="facebook" href="#">             <!-- Add facebook page link here -->
                            <i class="ion-social-facebook"></i>
                        </a>
                    </li>
                </ul>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</footer>

<!-- JAVASCRIPT
================================================== -->

<!-- JS Global -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

<!-- JS Plugins -->
<script src="{{ asset('plugins/smoothscroll/smoothscroll.min.js') }}"></script>
<script src="{{ asset('plugins/backstretch/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('plugins/contact-form/contact.js') }}"></script>
<script src="{{ asset('plugins/waypoints/jquery.waypoints.min.js') }}"></script>

<!-- JS Custom -->
<!--build:js /js/theme.js -->
<script src="{{ asset('js/theme.js') }}"></script>
<!-- endbuild -->
<script src="{{ asset('js/custom.js') }}"></script>


</body>
</html>
