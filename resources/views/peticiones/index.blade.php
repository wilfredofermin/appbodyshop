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
    <h1>Esto en peticiones</h1>

@endsection