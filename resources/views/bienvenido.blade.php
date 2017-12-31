@extends('layouts.master')
@section('title','Bienvendio - BSConttrol')
@section('class-page','tutorial-page')
@section('class-page','section landing-section')
@section('class-page','section text-center section-landing')
@section('content')

    <div class="header header-filter" style="background-image: url('{{asset('img/bgbs2.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <br>
                    <br>
                    <h1 class="tim-note">BSCONTROL</h1>
                    <h5 class="description">Sistema de servicios variados</h5>
                    <!-- Button trigger modal -->
                    <a href="#" class="btn btn-danger btn-raised btn-lg" data-toggle="modal" data-target="#myModalTutorial" id="tourTutorial" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s" >
                        <i class="fa fa-play" ></i> Como funciona?
                    </a>
                    <!--
                    <a href="#" id="tourIntro" class="btn btn-success btn-raised btn-lg" >
                        <i class="fa fa-bus"></i> Inicia un demo
                    </a>
                    -->
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="main main-raised">
        <div class="section">
            {{--Mensaje de error--}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <div class="container-fluid">
                        <div class="alert-icon">
                            <i class="material-icons">error_outline</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>Alerta de error:</b>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="section text-center section-landing">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-primary">
                                <i class="material-icons">business</i>
                            </div>
                            <br>
                            <span class="label label-default">CBS</span>
                            <span class="label label-primary">SIMETRICA</span>
                            <span class="label label-success">ABC SOFT.</span>
                            <span class="label label-success">BSCONTROL</span>
                            <h4 class="info-title">Administrativo</h4>
                            <p>Solicita los que necesites. Creacion de usuario, permisos,reportes y otros .</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">important_devices</i>
                            </div>
                            <br>
                            <span class="label label-default">APLICACIONES</span>
                            <span class="label label-primary">IT</span>
                            <span class="label label-success">REDES</span>
                            <span class="label label-success">HARDWARE</span>
                            <h4 class="info-title">Infraestructura IT</h4>
                            <p>Reporta inconvenientes con equipos,creacion de acceso de windows,correo electronico,telefonia, permisos a paginas web y otras asistencias.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <br>
                            <span class="label label-default">LECTOR BIOMETRICO</span>
                            <span class="label label-primary">ACCESOS</span>
                            <span class="label label-success">SERVICIOS</span>
                            <h4 class="info-title">Permisos</h4>
                            <p>Podras reportar todo incovenientes relacionado con el acceso mediante al sistema de verificacion.</p>
                        </div>
                    </div>

                    <div class="section landing-section">
                        <hr width="50%">{{--Linea separador--}}
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h1><span class="tim-note">Estamos trabajamos para ti.</span></h1>
                                <h4 class="text-center description">Queremos ayudarte,no dejes de enviarnos tus inquietudes.</h4>
                                <form class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Tu nombre completo</label>
                                                <input type="email" class="form-control">
                                                <span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Tu correo electronico</label>
                                                <input type="email" class="form-control">
                                                <span class="material-input"></span></div>
                                        </div>
                                    </div>

                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Tu mensaje</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                        <span class="material-input"></span></div>

                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4 text-center">
                                            <button class="btn btn-primary btn-raised">
                                                Enviar mensaje
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script')
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
@endsection