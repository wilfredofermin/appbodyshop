<!-- Modal -->
<div class="modal fade" id="ModalSoliciutd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="container">
            <div class="row">
                        <div class="col-sm-8">
                            <!--      Wizard container        -->
                            <div class="wizard-container">
                                <div class="card wizard-card" data-color="purple" id="wizard">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {!! Form::open(['method'=>'POST','action'=>'SolicitudController@store','class'=>'','files' => 'true']) !!}
                                        <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
                                        {{ csrf_field() }}
                                        <div class="wizard-header">
                                            <h3 class="wizard-title">
                                                <h3><span class="tim-note"></span>BSCONTROL</h3>
                                               SOLICITUD DE SERVICIOS
                                            </h3>
                                        </div>
                                        <div class="">
                                            <ul>
                                                <li><a href="#info" data-toggle="tab">Ubicacion</a></li>
                                                <li><a href="#tipo" data-toggle="tab">Solicitud</a></li>
                                                <li><a href="#description" data-toggle="tab">Descripcion </a></li>
                                            </ul>
                                        </div>
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
                                                                <option value="">Sucursal</option>
                                                                @foreach($sucursales as $sucursal)
                                                                    <option value="{{$sucursal->name}}">{{$sucursal->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label"><i class="material-icons">assignment_late</i> Servicio</label>
                                                            <select required name="servicio" class="form-control" id="select-service">
                                                                <option value="">Tipo de servicio</option>
                                                                @foreach($services as $service)
                                                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                                                @endforeach
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label class="control-label"><i class="material-icons">place</i> Area de referencia</label>
                                                            <select required name="area" class="form-control" id="select-tipo">
                                                                <option value="">Indique el area</option>
                                                                @foreach($areas as $area)
                                                                    <option value="{{$area->name}}">{{$area->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label"><i class="material-icons">low_priority</i> Nivel de urgencia</label>
                                                            <select name="prioridad" class="form-control">
                                                                <option value="Normal"> Normal</option>
                                                                <option value="Bajo">Baja</option>
                                                                <option value="Alto">Alta</option>
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
                                                                <option id="cat" value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label"><i class="material-icons">flip_to_front</i> Sub Categoria</label>
                                                            <select required name="subcategory" class="form-control" id="select-subcategory">
                                                                <option  value="">Seleccione la subcategoria </option>
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-10 col-sm-offset-1">
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Averia, error o mal funciomiento de sistemas.">
                                                                <input required type="radio" name="type" value="1">
                                                                <div class="icon">
                                                                    <i class="material-icons">report_problem</i>
                                                                </div>
                                                                <h6>PROBLEMA</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Asistencia, informacion, tutoria y màs. ">
                                                                <input type="radio" name="type" value="2">
                                                                <div class="icon">
                                                                    <i class="material-icons">record_voice_over</i>
                                                                </div>
                                                                <h6>SOLICITUD</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Creacion,modificacion o eliminacion de permisos.">
                                                                <input type="radio" name="type" value="3">
                                                                <div class="icon">
                                                                    <i class="material-icons">verified_user</i>
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
                                                            <textarea required name="description" class="form-control"  id="descrip" placeholder="" rows="6"></textarea>
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
                                    {{--AQUI INDICO LE TIPO DE CONDICION | PENDIENTE POR DEFAULT--}}
                                    <input type="hidden" name="condicion" value="3">
                                    {!!Form::close()!!}
                                </div>
                            </div> <!-- wizard container -->
                        </div>
                    </div> <!-- row -->
        </div> <!--  big container -->
    </div>
</div>