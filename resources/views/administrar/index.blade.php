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
    @include('administrar.css.css_tabs')
@endsection

{{--Incluyendo el Javascript--}}
@section('script')
    @include('administrar.js.script')
@endsection

{{--Incluyendo el contendo --}}
@section('content')
    @include('administrar.tabs.tabs')
@endsection
