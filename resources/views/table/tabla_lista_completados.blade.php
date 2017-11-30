
<div class="col-md-12">
    <div class="card">
        <table class="table table-hover" style="height:20px; overflow:auto;">
                <thead class="text-primary">
                    <tr>
                        <th>Estado</th>
                        <th>Fecha</th>
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
                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-placement="top" title="Ver todas las solicitudes completadas">
                            <i class="fa fa-eye" aria-hidden="true"></i> Completos</a>
                        </button>
                </tfoot>
                <tbody>
                    @foreach($completos as $com)
                    <tr>
                        {{--ESTADO--}}
                        @if($com->condicion==3)
                            <td width="5%"><span class="label label-primary">En Proceso</span></td>
                        @else
                            <td width="10%"><span class="label label-success">Completo</span></td>
                        @endif

                        {{--FECHA--}}
                        <td width="10%">{{$com->created_at->format('d-m-Y h:i a')}}</td>

                        {{--PRIORIDAD--}}
                        <td width="10%">{{$com->prioridad}}</td>

                        {{--UBICACION--}}
                        <td width="10%">{{$com->ubicacion}}</td>

                        {{--SERVICIO SOLICITADO--}}
                        @if($com->servicio==1)
                            <td width="10%">Tecnologia</td>
                        @else
                            <td width="10%">Servicios generales</td>
                        @endif

                        {{--CATEGORIA--}}
                        @if($com->category==1)
                            <td width="10%">Software</td>
                        @elseif($com->category==2)
                            <td width="10%">Infraestructura IT</td>
                            @else
                            <td width="10%">Servicios Generales</td>
                        @endif

                        {{--SUB CATEGORIA--}}
                        <td width="10%">{{$com->subcategory}}</td>

                        {{--TIPO--}}
                        @if($com->type==1)
                            <td width="10%">Problema</td>
                        @elseif($com->type==2)
                            <td width="10%">Solicutud</td>
                        @else
                            <td width="10%">Asistencia</td>
                        @endif

                        {{--ASIGNADO--}}
                        <td width="10%">Wilfredo Fermin</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>