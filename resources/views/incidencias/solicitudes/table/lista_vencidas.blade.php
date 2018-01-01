<div class="card">
    <div class="card-content table-responsive">
        <table class="table table-hover " data-toggle="dataTable" data-form="deleteForm">
            <thead class="text-primary">
                    <tr>
                        <th>Id</th>
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
                <tbody>
                    @foreach($vencidas as $venc)
                    <tr>
                        {{--ID--}}
                        <td width="3%">{{$venc->id}}</td>

                        {{--ESTADO--}}
                        {{--
                        @if($venc->condicion==3)
                            <td width="5%"><span class="label label-primary">En Proceso</span></td>
                        @else
                            <td width="5%"><span class="label label-success">Atendida</span></td>
                        @endif
                        --}}
                        <td width="5%"><span class="label label-danger">Vencida</span></td>

                        {{--FECHA--}}
                        <td width="10%">{{$venc->created_at->format('d-m-Y h:i a')}}</td>

                        {{--PRIORIDAD--}}
                        <td width="10%">{{$venc->prioridad}}</td>

                        {{--UBICACION--}}
                        <td width="10%">{{$venc->ubicacion}}</td>

                        {{--SERVICIO SOLICITADO--}}
                        @if($venc->servicio==1)
                            <td width="10%">Tecnologia</td>
                        @else
                            <td width="10%">Servicios generales</td>
                        @endif

                        {{--CATEGORIA--}}
                        @if($venc->category==1)
                            <td width="10%">Software</td>
                        @elseif($venc->category==2)
                            <td width="10%">Infraestructura IT</td>
                            @else
                            <td width="10%">Servicios Generales</td>
                        @endif

                        {{--SUB CATEGORIA--}}
                        <td width="10%">{{$venc->subcategory}}</td>

                        {{--TIPO--}}
                        @if($venc->type==1)
                            <td width="10%">Problema</td>
                        @elseif($venc->type==2)
                            <td width="10%">Solicutud</td>
                        @else
                            <td width="10%">Asistencia</td>
                        @endif

                        {{--ASIGNADO--}}

                        @if($venc->assign->id==1)
                            <td width="10%">Supervision</td>
                        @elseif($venc->assign->id==2)
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