<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>@yield('title', 'TOP10TER')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/owl-carousel/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/owl-carousel/owl.transitions.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/Lightbox/dist/css/lightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/Icons/et-line-font/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/animate.css/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
    <section class="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header" style="width:18%;">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/#')}}"><img src="{{asset('img/logo/logo-white.png')}}" class="img-responsive" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-9 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/#welcome')}}" class="page-scroll">Home</a></li>
                            <li><a href="{{url('/#articles')}}" class="page-scroll">Articles</a></li>
                            <li><a href="{{url('/#portfolio')}}" class="page-scroll">Polling</a></li>
                            <li><a href="{{url('/#team')}}" class="page-scroll">About</a></li>
                            <li><a href="{{url('/#contact')}}" class="page-scroll">Contact</a></li>
                            <!-- <li><a href="{{url('/login')}}" class="page-scroll">Login</a></li> -->
                            <!-- <li><a href="{{url('/register')}}" class="page-scroll">Register</a></li> -->
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div><!-- 
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </nav>
@yield('content')
    <!-- Footer
	============================================= -->
    <footer>
        <div class="container">
            <h1>Rise</h1>
            <div class="social">
                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa-dribbble fa-2x"></i></a>
            </div>
            <h6>&copy; 2015 Rise.Development By BootstrapDev</h6>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- JS PLUGINS -->
    <script src="{{asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/plugins/countTo/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/plugins/inview/jquery.inview.min.js')}}"></script>
    <script src="{{asset('assets/plugins/Lightbox/dist/js/lightbox.min.js')}}"></script>
    <script src="{{asset('assets/plugins/WOW/dist/wow.min.js')}}"></script>

    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</body>

</html>