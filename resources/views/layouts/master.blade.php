<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top10Ter</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"> --}}

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> --}}
    <link href="{{ asset('assets/css/jquery-ui-1.10.1.custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bucket-ico-fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-reset.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    <link href="{{ asset('assets/css/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-responsive.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/c3.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style-admin.css') }}" rel="stylesheet">
</head>
<body id="app-layout">    
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">

                <a href="{{ url('/admin') }}" class="logo">
                    <img src="{{asset('img/logo/logo-white.png')}}" width="130px"alt="">
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user-->
                    @if (Auth::guest())
                    <li>
                        <a href="{{ url('/admin/login') }}">
                            <i class="fa fa-key"></i>
                            <span class="username">Login</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/register') }}">
                            <i class="fa fa-key"></i>
                            <span class="username">Register</span>
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="{{ url('/admin/logout') }}">
                            <i class="fa fa-sign-out"></i>
                            {{-- <span class="username">Log Out</span> --}}
                        </a>
                    </li>
                    @endif
                    <!-- user logout ends -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li class="sub-menu">
                            {{-- <a class="active" href="{{ url('admin/') }}"> --}}
                            <a href="{{ url('admin/') }}">
                                <i class="fa fa-dashboard"></i>
                                <span>dashboard</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="{{ url('admin/article') }}">
                                <i class="fa fa-users"></i>
                                <span>article</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="{{ url('admin/polling') }}">
                                <i class="fa fa-newspaper-o"></i>
                                <span>polling</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="{{ url('admin/message') }}">
                                <i class="fa fa-envelope"></i>
                                <span>message</span>
                            </a>
                        </li>
                    </div>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    @yield('content')
                </section>
            </section>

            <!-- JavaScripts -->
            {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script> --}}
            <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/js/jquery-ui-1.10.1.custom.min.js') }}"></script>
            {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> --}}
            <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('assets/js/vue.js') }}"></script>
            
            <script src="{{ asset('assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
            {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> --}}
            {{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script> --}}
            <script src="{{ asset('assets/js/dashboard.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.customSelect.min.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
            <script src="{{ asset('assets/js/scripts-admin.js') }}"></script>
            {{-- <script src="{{ asset('assets/js/c3-chart.init.js') }}"></script> --}}
            <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>

            @yield('custom-js')
        </body>
        </html>
