
<div class="col-md-12">
    <div class="card">
        <table class="table table-hover" style="height:20px; overflow:auto;">
                <thead class="text-primary">
                    <tr>
                        <th>Id</th>
                        <th>Fecha solicitud</th>
                        <th>Fecha compromiso</th>
                        <th>Fecha atencion</th>
                        <th>Condicion</th>
                        <th>Prioridad</th>
                        <th>Ubicacion</th>
                        <th>Servicio</th>
                        <th>Categoria</th>
                        <th>Sub Categoria</th>
                        <th>Tipo</th>
                        <th>Asignado a</th>
                    </tr>
                </thead>
                <tfoot>
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-placement="right" rel="tooltip" title="Solicitudes recientes atendidas">
                            <i class="fa fa-eye" aria-hidden="true"></i> Estados recientes</a>
                        </button>
                        <!-- Button trigger modal -->
                        <button class="btn btn-success btn-xs"  data-placement="right" rel="tooltip" title="Ver todas tu solicitudes atendidas">
                            <i class="fa fa-list" aria-hidden="true"></i> Ver todas</a>
                        </button>
                </tfoot>
                <tbody>
                    @foreach($completos as $com)
                    <tr>

                        {{--ID--}}
                        <td width="3%">{{$com->id}}</td>

                        {{--FECHA SOLICITUD--}}
                        <td width="9%">{{$com->created_at->format('d-m-Y h:i a')}}</td>

                        {{--FECHA COMPROMISO--}}
                        <td width="9%">{!! \Carbon\Carbon::parse($com->fecha_compromiso)->format('d/m/Y h:i a') !!}</td>

                        {{--FECHA ATENCION--}}
                        <td width="9%">{{$com->updated_at->format('d-m-Y h:i a')}}</td>

                        {{--CONDICION--}}
                        @if($com->condicion==1)
                            <td width="5%"><span class="label label-success">Completo</span></td>
                        @elseif($com->condicion==2)
                            <td width="5%"><span class="label label-primary">En Proceso</span></td>
                        @elseif($com->condicion==5)
                            <td width="5%"><span class="label label-warning">Vencido</span></td>
                        @else
                            <td width="5%"><span class="label label-danger">Rechazado</span></td>
                        @endif

                        {{--PRIORIDAD--}}
                        <td width="5%">{{$com->prioridad}}</td>

                        {{--UBICACION--}}
                        <td width="5%">{{$com->ubicacion}}</td>

                        {{--SERVICIO SOLICITADO--}}
                        @if($com->servicio==1)
                            <td width="5%">Tecnologia</td>
                        @else
                            <td width="5%">Servicios generales</td>
                        @endif

                        {{--CATEGORIA--}}
                        @if($com->category==1)
                            <td width="7%">Software</td>
                        @elseif($com->category==2)
                            <td width="7%">Infraestructura IT</td>
                            @else
                            <td width="7%">Servicios Generales</td>
                        @endif

                        {{--SUB CATEGORIA--}}
                        <td width="7%">{{$com->subcategory}}</td>

                        {{--TIPO--}}
                        @if($com->type==1)
                            <td width="5%">Problema</td>
                        @elseif($com->type==2)
                            <td width="5%">Solicutud</td>
                        @else
                            <td width="5%">Asistencia</td>
                        @endif

                        {{--ASIGNADO--}}

                        @if($com->assign->id==1)
                            <td width="10%">Supervision</td>
                        @elseif($com->assign->id==2)
                            <td width="10%">Soporte</td>
                        @else
                            <td width="10%">Desarrollo</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>