<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{{ config('app.name') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/material-kit.css') }}" rel="stylesheet">

</head>

<body class="@yield('body-class')"><!--index-page-->
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{url('/')}}">
                <div class="logo-container">
                    <div class="logo">
                        <img src="{{asset('img/shop-icon.png')}}"  rel="tooltip" title="APP SHOP" data-placement="bottom" data-html="true" width="48" height="48">
                    </div>
                    <div class="brand">
                        APP SHOP
                    </div>


                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="{{ route('login') }}">
                        <button class="btn btn-info btn-round">
                            <i class="material-icons">account_circle</i> Acceso
                        </button></a>

                <li><a href="{{ route('register') }}">
                        <button class="btn btn-success btn-round">
                            <i class="material-icons">person_add</i> Registrate
                        </button></a>
                </li>
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
        </div>
    </div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
@yield('content')
</div>


</body>
<!--   Core JS Files   -->
<!--   Core JS Files   -->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/material.min.js')}}"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="{{asset('js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{asset('js/material-kit.js')}}" type="text/javascript"></script>

<script type="text/javascript">

    $().ready(function(){
        // the body of this function is in assets/material-kit.js
        materialKit.initSliders();
        window_width = $(window).width();

        if (window_width >= 992){
            big_image = $('.wrapper > .header');

            $(window).on('scroll', materialKitDemo.checkScrollForParallax);
        }

    });
</script>
</html>
