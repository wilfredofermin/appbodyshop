@extends('layouts.admin')
@section('content')
@section('title','BSC Editar')
@section('home','')
@section('solicitud','active')
<div class="col-md-8">
    <div class="card">
        <div class="card-header" data-background-color="purple">

            <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
                {{ csrf_field() }}
            <h5><span class="tim-note"></span>DATOS DE LA SOLICITUD</h5>
            </div>
            <div class="card wizard-card" data-color="purple" id="wizard">
            {!!Form::model($solicitud,['id'=>'profile-form','method'=>'PATCH','files' => true,'route'=>['solicitud.update',$solicitud->id]])!!}
                <div class="wizard-header">
                    <h3 class="wizard-title">
                        <h3><span class="tim-note"></span>SOLICITUD</h3>
                        EDITAR SERVICIO
                    </h3>
                </div>
                <ul>
                        <li><a href="#info" data-toggle="tab">Ubicacion</a></li>
                        <li><a href="#tipo" data-toggle="tab">Solicitud</a></li>
                        <li><a href="#description" data-toggle="tab">Descripcion</a>
                    </li>
                </ul>
                {{--DATOS DEL EQUIPO--}}
                <div class="tab-content">
                    <div class="tab-pane" id="info">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="info-text"> LUGAR DE LA SOLICITUD</h4>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><i class="material-icons">home</i> Sucursal</label>
                                    <select required id="ubic" name="ubicacion" class="form-control" >
                                        <option value="{{$solicitud->ubicacion}}">{{$solicitud->ubicacion}} </option>
                                        @foreach($sucursales as $sucursal)
                                            <option value="{{$sucursal->name}}">{{$sucursal->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="control-label"><i class="material-icons">assignment_late</i> Servicio</label>
                                    <select required name="servicio" class="form-control" id="select-service">
                                        @if($solicitud->servicio==1)
                                        <option value="1">Tecnologia</option>
                                        @foreach($services as $service)
                                            <option value="{{$service->id}}">{{$service->name}}</option>
                                        @endforeach
                                          @else
                                                <option value="2">Servicio Generales</option>
                                                @foreach($services as $service)
                                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                                @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><i class="material-icons">place</i> Area de referencia</label>
                                    <select required name="area" class="form-control" id="select-tipo">
                                        <option value="{{$solicitud->area}}">{{$solicitud->area}} </option>
                                        @foreach($areas as $area)
                                            <option value="{{$area->name}}">{{$area->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label"><i class="material-icons">low_priority</i> Nivel de urgencia</label>
                                    <select name="prioridad" class="form-control">
                                        <option value="{{$solicitud->prioridad}}">{{$solicitud->prioridad}} </option>
                                        <option value="Normal"> Normal</option>
                                        <option value="Baja">Baja</option>
                                        <option value="Alta">Alta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--TIPO DE SERVICIO--}}
                    <div class="tab-pane" id="tipo">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><i class="material-icons">flip_to_back</i> Categoria</label>
                                    <select required name="category" class="form-control" id="select-category" >
                                        @if($solicitud->category==1)
                                            <option value="1">Software</option>
                                        @elseif($solicitud->category==2)
                                            <option value="2">Infraestructura</option>
                                         @else
                                            <option value="2">Servicio Generales</option>
                                        @endif
                                        <option id="cat" value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><i class="material-icons">flip_to_front</i> Sub Categoria</label>
                                    <select required name="subcategory" class="form-control" id="select-subcategory">
                                        <option value="{{$solicitud->subcategory}}">{{$solicitud->subcategory}} </option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Averia, error o mal funciomiento.">

                                        <input required type="radio" name="type" value="1" id="radio_1" >
                                        <div class="icon">
                                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                        </div>
                                        <h6>PROBLEMA</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Asistencia, informacion, tutoria y màs. ">
                                        <input type="radio" name="type" value="2">
                                        <div class="icon">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </div>
                                        <h6>SOLICITUD</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Creacion,modificacion o eliminacion de permisos.">
                                        <input type="radio" name="type" value="3">
                                        <div class="icon">
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        </div>
                                        <h6>PERMISOS</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--DESCRIPCION--}}
                    <div class="tab-pane" id="description">
                        <div class="row">
                            <h4 class="info-text"> DESCRIPCION BREVE DEL SERVICIO.</h4>
                            <div class="col-sm-6 col-sm-offset-1">
                                <div class="form-group">
                                    <label>Aqui su description</label>
                                    <textarea required name="description" class="form-control"  id="descrip" placeholder="" rows="6">{{$solicitud->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Ejemplo</label>
                                    <p class="description">"Incluya información más detallada del servicio que esta solicitando. De tener posibilidad, adjunte una imagen de la pantalla."</p>
                                </div>
                                {{--IMAGEN DEL SERVICIO--}}

                                <div class="picture-container">
                                    <div class="picture">
                                        <img src="{{asset('img/file_upload.gif')}}" class="picture-src" id="wizardPicturePreview" title="">
                                        <input name="imagen" type="file" accept=".png, .jpg, .jpeg"  id="wizard-picture">
                                    </div>
                                    <h6>SUBIR IMAGEN</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="wizard-footer">
                    <div class="pull-right">
                        <input type='button'  class='btn btn-next btn-fill btn-primary btn-wd' id="prox" value='Proximo'/>
                        <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd'  value='Finalizado' />
                    </div>
                    <div class="pull-left">
                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' value='Anterior' />

                    </div>
                    <div class="clearfix"></div>
                </div>
                {{--AQUI INDICO LE TIPO DE CONDICION--}}
                <input type="hidden" name="condicion" value="3">
            {!!Form::close()!!}
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h5><span class="tim-note"></span>RESUMEN DE LA SOLICITUD</h5>
        </div>
        <div class="content">
            <div class="card card-profile">
                <div align="center">
                    <a href="{{url('/img/solicitudes/'.$solicitud->imagen)}}">
                        <img src="{{asset('/img/solicitudes/'.$solicitud->imagen)}}"  class="img-responsive" alt="imagen" style="width:auto;  height:240px;" >
                    </a>
                </div>
            </div>
            <div class="row" align="center" style="overflow-y: scroll; height:220px;">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <label class="control-label"><i class="material-icons">home</i> Sucursal</label>
                        <p class="card-content">
                            {{$solicitud->ubicacion}}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label"><i class="material-icons">place</i> Area de referencia</label>
                        <p class="card-content">
                            {{$solicitud->area}}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label"><i class="material-icons">assignment_late</i> Servicio</label>
                            @if($solicitud->servicio==1)
                                <p class="card-content">
                                    Tecnologia
                                </p>
                            @else
                                <p class="card-content">
                                    Servicios Generales
                                </p>
                            @endif
                    </div>
                    <div class="col-md-6">
                        <label class="control-label"><i class="material-icons">low_priority</i>Prioridad</label>
                        <p class="card-content">
                            {{$solicitud->prioridad}}
                        </p>
                    </div>
                    <hr width="20%"><!--separdor-->
                    <div class="col-md-6">
                        <label class="control-label"><i class="material-icons">flip_to_back</i> Categoria</label>
                        <p class="card-content">
                            @if($solicitud->category==1)
                               Software
                            @elseif($solicitud->category==2)
                               Infraestructura
                            @else
                                Servicio Generales
                            @endif
                            <option id="cat" value=""></option>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label"><i class="material-icons">home</i> Sucursal</label>
                        <p class="card-content">
                            {{$solicitud->subcategory}}
                        </p>
                    </div>
                    <div class="col-md-12">
                        <label class="control-label"><i class="material-icons">date_range</i> Fecha compromiso</label>
                        <p class="card-content">
                            {{$solicitud->fecha_compromiso}}
                        </p>
                    </div>
                    <div class="col-md-12">
                        <label class="control-label"><i class="material-icons">textsms</i> Descripcion</label>
                        <p class="card-content">
                            {{$solicitud->description}}
                        </p>
                    </div>
                </div>
            </div>

            <div  align="center">
                <div class="col-md-12">
                <hr width="90%"><!--separdor-->
                    <div class="col-md-6">
                        @if(($solicitud->type)===1)
                            <img src="{{asset('img/warning.png')}}" class="img-responsive" alt="Cinque Terre" style="width:32px;">
                            PROBLEMA
                        @elseif(($solicitud->type)===2)
                            <img src="{{asset('img/solicitud.png')}}" class="img-responsive" alt="Cinque Terre" style="width:32px;">
                            SOLICITUD
                        @else
                            <img src="{{asset('img/success.png')}}" class="img-responsive" alt="Cinque Terre" style="width:32px;">
                            PERMISO
                        @endif
                    </div>
                    <div class="col-md-6">
                      @foreach($asignado as $as)
                            <img src="{{asset('img/hand.png')}}" class="img-responsive" alt="Cinque Terre" style="width:32px;">
                            {{$as->name}}
                       @endforeach
                    </div>
                </div>
                <hr width="90%"><!--separdor-->
                <a href="{{url('/incidencias')}}" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i>   Regresar</a>
            </div>
        </div>
    </div>
</div>
@endsection