<!--WF DEVELOPMENTS | wilfredofermin.github.io -->
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>@yield('title','BSCONTROL')</title>

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap core CSS     -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/css/bootstrap-dialog.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--  Material Dashboard CSS    -->
    <link href="{{asset('assets/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet">


    <!-- Toastr CSS-->
    <link rel="stylesheet" href="{{asset('dist/css/toastr.css')}}">


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet">

    <!-- SweetAlert2 |https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.css -->
    <link rel="stylesheet" href="{{asset('css/sweetalert2.css')}}">



    <!-- Wait Me Css -->
    <link rel="stylesheet" href="{{asset('material/plugins/waitme/waitMe.css')}}">

    <!--CSS MATERIAL WINZARD-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel="stylesheet" type="text/css">

    <!--Boton + de solicitudes-->
    <link rel="stylesheet" href="{{asset('css/button-float.css')}}">

    <!-- File Input Bootstrap | https://github.com/kartik-v/bootstrap-fileinput-->
    <link rel="stylesheet" href="{{asset('css/fileinput.min.css')}}">

@yield('css')

</head>

<body>

<div class="wrapper" >
    <div class="sidebar" data-color="purple" data-image="{{asset('img/basket.jpg')}}">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->
        <div class="logo">
            <div align="center"><img src="{{asset('img/logo-bodyshop.PNG')}}"  rel="tooltip" title=BSCONTROL data-placement="bottom" WIDTH="120px" data-html="true"></div>
            <a href="{{url('/home')}}" class="simple-text">
                <h4><span class="tim-note"></span>BSCONTROL</h4>
            </a>
            </a>
        </div>

        <div class="sidebar-wrapper" id="menu" >

            <ul class="nav">

                <li class="@yield('home','active')">
                    <a href="{{url('/home')}}">
                        <i class="material-icons">dashboard</i>
                        <p>DASHBOARD</p>
                    </a>
                <li class="@yield('solicitud')">
                    <a href="{{url('/solicitud')}}">
                        <i class="material-icons">assignment_turned_in</i>
                        <p>SOLICITUD</p>
                    </a>
                </li>

                @if (Auth::user()->is_support || Auth::user()->is_admin )
                    <li class="@yield('peticiones')">
                        <a href="{{url('/peticion')}}">
                            <i class="material-icons">assignment_ind</i>
                            <p>PETICIONES</p>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->is_admin)
                    <li class="@yield('administrar')">
                        <a href="{{url('/administrar')}}">
                            <i class="material-icons">build</i>
                            <p>ADMINISTRAR</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="mensajes" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Mike John responded to your email</a></li>
                                <li><a href="#">You have 5 new tasks</a></li>
                                <li><a href="#">You're now friend with Andrew</a></li>
                                <li><a href="#">Another Notification</a></li>
                                <li><a href="#">Another One</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="perfil" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="{{asset('img/'.Auth::user()->avatar)}}" id="avatarImage" width="24px" class="img-circle" alt="User Image" >
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{url('#')}}">
                                        <i class="material-icons">person</i> PERFIL
                                    </a>
                                </li>
                                {{--Linia de division--}}
                                <hr width="70%">
                                <li>
                                    <a id='salir' href="javascript:void(0)" class="btn btn-raised btn-danger">
                                        <i class="fa fa-power-off" aria-hidden="true">
                                        </i>  Salir<div class="ripple-container"></div>
                                    </a>
                                            <!--SweetAlert2-->
                                            <!--llamo a la ventana SweetAlert2-->
                                            <!--Cuando es confirmado llamo este formulario desde el SweetAlert mediante el id="logout-form"-->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    {{--AQUI EL BUSCADOR--}}
                    @yield('buscador')
                </div>
            </div>
        </nav>
            <div class="container-fluid">
                <div class="row">
                @yield('content')

                </div>
            </div>
    </div>

</div>
@yield('modal')

@include('include.notifications.sweet_alert')

<!-- SweetAlert | Condiciones para mensajes -->
</body>


<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('js/dknotus-tour.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js" type="text/javascript"></script>
<script src="{{asset('assets/js/chartist.min.js')}}"></script>
<!--  Charts Plugin -->
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps Plugin    -->
{{--SweeAlert2 | https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.js --}}
<script src="{{asset('js/sweetalert2.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/js/material-dashboard.js')}}"></script>
<!-- Toastr Notification | http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js -->
<script src="{{asset('dist/js/toastr.min.js')}}"></script>
<!--  Plugin for the Wizard -->
<script src="{{asset('assets/js/material-bootstrap-wizard.js')}}"></script>
<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>

    <!--  NOTIFICACIONES NOTIFY BIENVENIDA || http://bootstrap-notify.remabledesigns.com/ -->
@include('include.notifications.notify-bienvenido')

    <!--  NOTIFICACIONES TOASTR DEL SISTEMA-->
@include('include.notifications.toastr_notifications')

<!--  TOUR DEL SISTEMA -->
<script>
    $(function(){
        $('#tourIntro').click(function(){
            Tour.run([
                {
                    element: $('#main'),
                    content: 'Agrega una nueva solicitud.',
                    position: 'left'
                },
                {
                    element: $('#completos'),
                    content: 'Aqui tus solicitudes completadas.',
                    position: 'bottom'
                },

                {
                    element: $('#enproceso'),
                    content: 'Las que estan en proceso de ser completadas.',
                    position: 'bottom'
                },
                {
                    element: $('#pendientes'),
                    content: 'Las que aun no han sido verificadas',
                    position: 'bottom'
                },
                {
                    element: $('#rechazados'),
                    content: 'Las que te han recharzado',
                    position: 'bottom'
                },
                {
                    element: $('#mensajes'),
                    content: 'informacion variada del sistema',
                    position: 'bottom'
                },
                {
                    element: $('#perfil'),
                    content: 'Opciones de tu perfil y salida del sistema',
                    position: 'bottom'
                },
                {
                    element: $('#contenido'),
                    content: 'En esta area visualizaras todas tus solicitudes',
                    position: 'top'
                },
                {
                    element: $('#menu'),
                    content: 'Tus opciones disponibles.Estas varian en funcion al permiso que tengas.',
                    position: 'top'
                },

            ],{language:"es"});
        });
    });
</script>


<!--SELECT DINAMICOS -->
<script>
    $(function () {
        $('#select-service').on('change', onSelectServiceChange);

    });
    function onSelectServiceChange() {
        //Aqui tengo el ID del tipo
        var category_id=$(this).val();

        // AJAX
        $.get('/solicitud/'+category_id+'/category',function(data){
            var html_select='<option value="">Selectione la categoria</option>';
            for (var i=0;i<data.length;++i)
                html_select +='<option value="'+data[i].id+'">'+data[i].name+'</option>';
           // console.log(html_select);
            $('#select-category').html(html_select);
        });
    }
</script>
<script>
    $(function () {
        //CUANDO SELECCIONE LA CATEGORIA
        $('#select-category').on('change', onSelectCategoryChange);

    });
    function onSelectCategoryChange() {
        //Aqui tengo el ID del servicio
        var subcategory_id=$(this).val();
        var category = null;

        // AJAX
        $.get('/solicitud/'+subcategory_id+'/subcategory',function(data){
            var html_select='<option value="">Seleccione la subcategoria</option>';
            for (var i=0;i<data.length;++i)
                html_select +='<option value="'+data[i].name+'">'+data[i].name+'</option>';
             console.log(html_select);
            category = document.getElementsByName("category")[0].value;
           // alert(category);
            $('#select-subcategory').html(html_select);
        });

    }
</script>

<!--FIN SELECT DINAMICOS -->

{{--AUTOFOCUS EN UBICACION FORMULARIO SOLICITUD --}}
<script>
    $( "#tipo" ).select(function() {
        //$( "#cat" ).focus();
        alert( "Handler for .focus() called." );
    });
</script>


{{--AUTOFOCUS EN UBICACION FORMULARIO SOLICITUD --}}
<script>
    $('#ModalSoliciutd').on('shown.bs.modal', function () {
        // get the locator for an input in your modal. Here I'm focusing on
        // the element with the id of myInput
        $('#ubic').focus()
    })
</script>

{{--LLAMAR EL FORMULARIO PARA ELIMINAR MODAL --}}
<script>
    $('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
        e.preventDefault();
        var $form=$(this);
        $('#confirm').modal({ backdrop: 'static', keyboard: false })
            .on('click', '#delete-btn', function(){
                $form.submit();
            });
    })

</script>

{{--LIMITAR LA CANTIDAD DE CARACTERES EN UN TEXTAREA --}}
<script>
    $("#descrip").prop('maxlength', '140');
</script>

<script>
    $('#prox').click(function(){
        $("#select-category").focus();
    });
</script>
{{--TAB MENU ADMIN--}}
<script>
    $(document).ready(function() {
        $(".btn-pref .btn").click(function () {
            $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
            // $(".tab").addClass("active"); // instead of this do the below
            $(this).removeClass("btn-default").addClass("btn-primary");
        });
    });
</script>

<script type="text/javascript">

    $(function(){

        $('.imagen').click(function(){
            var imagen1=$(this).attr('src');
            var titleimagen=$(this).attr('title');

            if (imagen1==""){

                $('.recibir-imagen').attr('src','http://www.51allout.co.uk/wp-content/uploads/2012/02/Image-not-found.gif');
                $('#mimodal').modal();

            }else{
                $('.recibir-imagen').attr('src',imagen1);
                $('.texto-imagen').text(titleimagen);
                $('#mimodal').modal();
            }
        });

    });

</script>

@yield('script')

</html>

