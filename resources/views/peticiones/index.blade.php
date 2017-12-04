@extends('layouts.admin')
@section('title','BSC Peticiones')
@section('home','')
@section('solicitud','')
@section('peticiones','active')

<!-- Search Bar -->
@section('buscador')
    {!! Form::open(array('url'=>'/peticion','method'=>'GET','autocomplete'=>'off','role'=>'search','id'=>'search-form','class'=>'navbar-form navbar-right')) !!}
    <div class="form-group  is-empty">
        <input id="txtSearch"  class="form-control" type="text" name="searchText" value="{{$searchText}}" placeholder="Buscar...">
        <span class="material-input"></span>
    </div>
    <button type="submit" class="btn btn-white btn-round btn-just-icon">
        <i class="material-icons">search</i><div class="ripple-container"></div>
    </button>
    {!! Form::close() !!}
@endsection
<!-- End Search Bar -->
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="fa fa-hourglass-start"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">PENDIENTES</p>
                            <h3 class="title">49/50<small>GB</small></h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-hourglass-start"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">COMPLETAS</p>
                            <h3 class="title">$34,245</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-check-square-o"></i> Last 24 Hours
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">EN ATENCION</p>
                            <h3 class="title">75</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Tracked from Github
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="fa fa-thermometer-quarter" aria-hidden="true"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">EN ALTA | VENCIDAS</p>
                            <h3 class="title">+245</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="red">
                            <h4 class="title">EN ALTAS Y VENCIDAS</h4>
                            <p class="category">Lista de solicitudes </p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha Reg.</th>
                                    <th>Fecha Compromiso</th>
                                    <th>Sub Cat.</th>
                                    <th>Usuario</th>
                                    <th>Descripcion</th>
                                    <th>imagen</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dakota Rice</td>
                                        <td>$36,738</td>
                                        <td>Niger</td>
                                        <td>Niger</td>
                                        <td>Niger</td>
                                        <td>Niger</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection