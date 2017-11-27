<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<!-- <title>{{ config('app.name') }}</title>-->
    <title>@yield('title','BSCONTROL')</title>

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
            <a href="{{url('/')}}" id="tourInicio">
                <div class="logo-container" >
                    <div class="logo">
                        <img src="{{asset('img/logo-bodyshop-white.png')}}"  rel="tooltip" title="BSCONTROL " data-placement="bottom" data-html="true" width="120" height="">
                    </div>
                    <div class="brand">
                    </div>
                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-index" >
            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="{{ route('login') }}" >
                        <button class="btn btn-default btn-round" id="tourAcceso" >
                            <i class="material-icons">verified_user</i> Acceso
                        </button>
                    </a>

                <li><a href="{{ route('register') }}" >
                        <button class="btn btn-default btn-round" id="tourRegistro" >
                            <i class="material-icons">person_add</i> Registrate
                        </button>
                    </a>
                </li>
                @else
                    <li><a href="{{ url('/home') }}" >
                            <button class="btn btn-default btn-round" id="tourRegistro" >
                                <i class="material-icons">dashboard</i> Dashboard
                            </button>
                        </a>
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
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <div class="container-fluid">
                    <div class="alert-icon">
                        <i class="material-icons">error_outline</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <b>Alerta de error:</b><li>{{ $error }}</li>
                </div>
            </div>
        @endforeach
    </ul>
@endif
</body>
<!-- Modal Tutorial -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">BS CONTROL | Tutorial</h4>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/UQJMWRcinxU" frameborder="0" allowfullscreen=""></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Tutorial -->
<!--   Core JS Files   -->
<!--   Core JS Files   -->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/material.min.js')}}"></script>
<script src="{{asset('js/dknotus-tour.js')}}" type="text/javascript"></script>

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
<script>
    $(document).ready(function(){
        autoPlayYouTubeModal();
    });
</script>
<script type="text/javascript">
    function autoPlayYouTubeModal() {
        var trigger = $("body").find('[data-toggle="modal"]');
        trigger.click(function () {
            var theModal = $(this).data("target"),
                videoSRC = $(this).attr("data-theVideo"),
                videoSRCauto = videoSRC + "?autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal + ' button.close').click(function () {
                $(theModal + ' iframe').attr('src', videoSRC);
            });
        });
    }
</script>
{{--CONVERTIR A MAYUSCULAS--}}
<script>
    $('input[type=text]').keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });
</script>


</html>
