@extends('layouts.admin')
@section('title','BSC Solictiudes')
@section('home','')
@section('solicitud','active')

<!-- Search Bar -->
@if ($c_solicitudes<>null)
    @section('buscador')
        {!! Form::open(array('url'=>'/solicitud','method'=>'GET','autocomplete'=>'off','role'=>'search','id'=>'search-form','class'=>'navbar-form navbar-right')) !!}
            <div class="form-group  is-empty">
                <input id="txtSearch"  class="form-control" type="text" name="searchText" value="{{$searchText}}" placeholder="Buscar...">
                <span class="material-input"></span>
            </div>
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i><div class="ripple-container"></div>
            </button>
    {!! Form::close() !!}
@endsection
@endif
<!-- End Search Bar -->

@section('content')
    
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6" id="completos">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">COMPLETO</p>
                            <h3 class="title">{{$c_completo}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> datos aqui
                            </div>
                        </div>
                    </div>
                </div>
                {{-- EN PROCESO --}}
                <div class="col-lg-3 col-md-6 col-sm-6" id="enproceso">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="purple">
                            <i class="material-icons">update</i>
                        </div>
                        <div class="card-content">
                            <p class="category">EN PROCESO</p>
                            <h3 class="title">{{$c_en_proceso}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> datos aqui
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" id="pendientes">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="fa fa-hourglass-start"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">PENDIENTES</p>
                            <h3 class="title">{{$c_pendientes}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                @if ($ultimo_pendiente<>null)
                                <i class="material-icons">update</i> Pendiente más antiguo {{$ultimo_pendiente->created_at->format('d-m-Y h:i a')}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" id="rechazados">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="fa fa-thermometer-quarter" aria-hidden="true"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">VENCIDOS</p>
                            <h3 class="title">{{$c_vencidos}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card" id="contenido">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">SOLICITUDES</h4>
                <p class="category">Lista general de solicitudes</p>
            </div>
            <div class="card-content table-responsive">
                {{--INCLUYENDO LAS TABLAS DE LAS SOLITUDES--}}
                @if($c_solicitudes<>null)
                    @include('solicitudes.table.tabla_lista_solicitudes')
                @else
                   <div align="center">
                       <h4><span class="tim-note"></span>AUN NO EXISTEN DATOS REGISTRADOS</h4>

                       <a href="#" id="tourIntro" class="btn btn-success btn-raised btn-lg" >
                           <i class="fa fa-bus"> </i>   Inicia un demo
                       </a>
                   </div>
                @endif
            </div>
        </div>
    </div>
    @section('modal')
    @include('modal.show_complit')
    @include('modal.add_solicitud')
    @endsection

@section('modal')

@endsection
@if ($sumar_condicion!=null)
    @include('solicitudes.table.tabla_lista_estados')
@endif

@include('solicitudes.include.button-float')



@endsection

