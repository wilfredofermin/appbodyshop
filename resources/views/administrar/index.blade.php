{{--Titulo de la pagina--}}
@extends('layouts.admin')

{{--Titulo de la pagina--}}
@section('title','BSC Administrar')

{{--Desactivar al opciones--}}
@section('home','')
@section('solicitud','')
@section('peticiones','')

{{--Activar al opcion Administrar--}}
@section('administrar','active')

{{--Incluyendo el CSS--}}
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/tabs_opciones.css')}}">
@endsection

@section('content')
<div class="container-fluid">{{--<div class="container-fluid">--}}
    <section id="fancyTabWidget" class="tabs t-tabs">
        <ul class="nav nav-tabs fancyTabs" role="tablist">

            <li class="tab fancyTab active">
                <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-tags"></span><span class="hidden-xs">SOLICITUDES</span></a>
                <div class="whiteBlock"></div>
            </li>

            <li class="tab fancyTab">
                <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-hand-paper-o"></span><span class="hidden-xs">ASIGNACIONES</span></a>
                <div class="whiteBlock"></div>
            </li>

            <li class="tab fancyTab">
                <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                <a id="tab2" href="#tabBody2" role="tab" aria-controls="tabBody2" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-check"></span><span class="hidden-xs">AUTORIZACIONES</span></a>
                <div class="whiteBlock"></div>
            </li>

            <li class="tab fancyTab">
                <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                <a id="tab3" href="#tabBody3" role="tab" aria-controls="tabBody3" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-lock"></span><span class="hidden-xs">ADMINISTRAR</span></a>
                <div class="whiteBlock"></div>
            </li>

            <li class="tab fancyTab">
                <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                <a id="tab4" href="#tabBody4" role="tab" aria-controls="tabBody4" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-cog"></span><span class="hidden-xs">CONFIGURACION</span></a>
                <div class="whiteBlock"></div>
            </li>
            {{--
            <li class="tab fancyTab">
                <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                <a id="tab5" href="#tabBody5" role="tab" aria-controls="tabBody5" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-question-circle"></span><span class="hidden-xs">Order</span></a>
                <div class="whiteBlock"></div>
            </li>
            --}}
        </ul>
        <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
            <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0" aria-hidden="false" tabindex="0">
                <div>
                    <div class="row">
                            <div class="col-md-11">
                                <form class="navbar-form navbar-right" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Buscar ..">
                                        <span class="material-input"></span>
                                        <span class="material-input"></span></div>
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i><div class="ripple-container"></div>
                                    </button>
                                </form>
                            </div>
                        <div class="col-md-12">
                          @include('administrar.tabs.solicitud')
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true" tabindex="0">
                <div class="row">

                    <div class="col-md-12">
                        <h2>This is the content of tab two.</h2>
                        <p>This field is a rich HTML field with a content editor like others used in Sitefinity. It accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics. Tilde meggings asymmetrical literally pork belly, heirloom food truck YOLO. Meh echo park lyft typewriter. </p>

                    </div>
                </div>
            </div>
            <div class="tab-pane  fade" id="tabBody2" role="tabpanel" aria-labelledby="tab2" aria-hidden="true" tabindex="0">
                <div class="row">
                    <div class="col-md-12">
                        <h2>This is the content of tab three.</h2>
                        <p>This field is a rich HTML field with a content editor like others used in Sitefinity. It accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics. Tilde meggings asymmetrical literally pork belly, heirloom food truck YOLO. Meh echo park lyft typewriter. </p>

                    </div>
                </div>
            </div>
            <div class="tab-pane  fade" id="tabBody3" role="tabpanel" aria-labelledby="tab3" aria-hidden="true" tabindex="0">
                <div class="row">
                    <div class="col-md-12">
                        <h2>This is the content of tab four.</h2>
                        <p>This field is a rich HTML field with a content editor like others used in Sitefinity. It accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics. Tilde meggings asymmetrical literally pork belly, heirloom food truck YOLO. Meh echo park lyft typewriter. </p>

                    </div>
                </div>
            </div>
            <div class="tab-pane  fade" id="tabBody4" role="tabpanel" aria-labelledby="tab4" aria-hidden="true" tabindex="0">
                <div class="row">
                    <div class="col-md-12">
                        <h2>This is the content of tab five.</h2>
                        <p>This field is a rich HTML field with a content editor like others used in Sitefinity. It accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics. Tilde meggings asymmetrical literally pork belly, heirloom food truck YOLO. Meh echo park lyft typewriter. </p>

                    </div>
                </div>
            </div>
            <div class="tab-pane  fade" id="tabBody5" role="tabpanel" aria-labelledby="tab5" aria-hidden="true" tabindex="0">
                <div class="row">
                    <div class="col-md-12">
                        <h2>This is the content of tab six.</h2>
                        <p>This field is a rich HTML field with a content editor like others used in Sitefinity. It accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics. Tilde meggings asymmetrical literally pork belly, heirloom food truck YOLO. Meh echo park lyft typewriter. </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
</div>

@endsection

{{--Incluyendo el Javascript--}}
@section('script')
    <script src="{{asset('assets/js/tabs_principal.js')}}"></script>

    {{--TAB MENU ADMIN SELECTION--}}
    <script>
        $(document).ready(function() {
            $(".btn-pref .btn").click(function () {
                $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
                // $(".tab").addClass("active"); // instead of this do the below
                $(this).removeClass("btn-default").addClass("btn-primary");
            });
        });
    </script>

@endsection