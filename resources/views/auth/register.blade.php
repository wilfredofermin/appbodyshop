@extends('layouts.master')
@section('title','Nuevo registro - BSControl')
@section('content')
@section('body-class','signup-page')
<div class="header header-filter" style="background-image: url('{{asset('img/bodyshop.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
                            <img src="{{asset('img/add-user.png')}}"  rel="tooltip" title="" data-placement="bottom" data-html="true" width="32" height="">
                            <h4>BSCONTROL - REGISTRO</h4>
                            <!--   <div class="social-line">
                                   <a href="#pablo" class="btn btn-simple btn-just-icon">
                                       <i class="fa fa-facebook-square"></i>
                                   </a>
                                   <a href="#pablo" class="btn btn-simple btn-just-icon">
                                       <i class="fa fa-twitter"></i>
                                   </a>
                                   <a href="#pablo" class="btn btn-simple btn-just-icon">
                                       <i class="fa fa-google-plus"></i>
                                   </a>
                               </div>-->
                        </div>
                        <p class="text-divider">Ingresa tus datos</p>
                        <div class="content">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <div class="form-group is-empty">
                                    <input type="text" name="name" value="{{ old('name') }}"  class="form-control" placeholder="Nombre completo..." required autofocus><span class="material-input"></span>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Correo electronico..." value="{{ old('email') }}" required >
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">account_balance</i>
                                </span>
                                <input id="email" type="text" class="form-control" name="sucursal" placeholder="Socursal..." value="{{ old('socursal') }}" required >
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">assignment_ind</i>
                                </span>
                                <input id="email" type="text" class="form-control" name="departament" placeholder="Departamento..." value="{{ old('departamento') }}" required >
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña..."  required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password_confirmation"  placeholder="Confirmar contraseña..."  required>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit"  class="btn btn-success"><i class="material-icons">check</i> REGISTRAR</button>
                            <a href="{{url('/')}}" type="submit"  class="btn btn-danger"><i class="material-icons">close</i> CANCELAR</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
