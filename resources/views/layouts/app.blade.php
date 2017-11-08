<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina oficial del club huellas del siglo">
    <meta name="author" content="Alan R. Cuevas">

    <title>Huellas del siglo INC.</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/half-slider.css')}}" rel="stylesheet">

    <!--css propio-->
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="shortcut icon" href="{{asset('images/huellas-ico.ico')}}">
     <link href="{{asset('css/one-page-wonder.css')}}" rel="stylesheet">
     <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span><img src="{{asset('images/huellas-ico.ico')}}" alt="Huellas del Siglo" class="img-ico"></span> Huellas Del Siglo</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/acercade">Acerca de Nosotros</a>
                    </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jugadores <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/jugadores/benjamin/9/12">Mini-Benjamin</a></li>
                            <li><a href="/jugadores/minibasket/13/14">Mini-Basket</a></li>
                            <li><a href="/jugadores/intermedio/15/16">Intermedio</a></li>
                            <li><a href="/jugadores/infantil/17/18">Infantil</a></li>
                            <li><a href="/jugadores/juvenil/19/21">Juvenil</a></li>
                            <li><a href="/jugadores/presuperior/21/25">Pre-Superior</a></li>
                            <li><a href="/jugadores/superior/50">Superior</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/noticias">Noticias</a>
                    </li>
                    <li>
                        <a href="/contacto">Contactanos</a>
                    </li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
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
                        @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://lorempixel.com/1900/1080/sports/?'); background-size: cover; "></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://lorempixel.com/1900/1080/sports/?');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://lorempixel.com/1900/1080/sports/?');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container">
    <hr>
    @yield('content')

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Todos los derechos reservados &copy; Huellas del siglo 2017 <a href="https://www.facebook.com/Carmelo9" target="_blank">Alan R. Cuevas</a> <span>
                    <img src="images/huellas-ico.ico" alt="Huellas del Siglo" class="img-ico">
                    </span> 
                    <span class="pull-right social-icon">
                    <a href="https://www.facebook.com/huellas.delsiglo" class="icono" target="_blank"><span class="icon-facebook2"></span></a>
                    <a href="https://twitter.com/huellasdelsiglo" class="icono" target="_blank"><span class="icon-twitter"></span></a>
                    <a href="https://www.google.com/gmail/about/" class="icono" target="_blank"><span class="icon-google"></span></a>
                    <a href="http://huellasdelsiglo.blogspot.com/" class="icono" target="_blank"><span class="icon-blogger"></span></a>
                    <a href="http://huellasdelsiglo.blogspot.com/" class="icono" target="_blank"><span class="icon-instagram"></span></a>               
                    </p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/app.js') }}"></script>

     <!-- Scrolling Nav JavaScript -->
    <!--<script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script> -->

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    $('#flash-overlay-modal').modal();
    </script>

</body>

</html>
