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
                    @foreach($rechazadas as $rech)
                    <tr>
                        {{--ID--}}
                        <td width="3%">{{$rech->id}}</td>

                        {{--ESTADO--}}
                        {{--
                        @if($rech->condicion==3)
                            <td width="5%"><span class="label label-primary">En Proceso</span></td>
                        @else
                            <td width="5%"><span class="label label-success">Atendida</span></td>
                        @endif
                        --}}
                        <td width="5%"><span class="label label-success">Atendida</span></td>

                        {{--FECHA--}}
                        <td width="10%">{{$rech->created_at->format('d-m-Y h:i a')}}</td>

                        {{--PRIORIDAD--}}
                        <td width="10%">{{$rech->prioridad}}</td>

                        {{--UBICACION--}}
                        <td width="10%">{{$rech->ubicacion}}</td>

                        {{--SERVICIO SOLICITADO--}}
                        @if($rech->servicio==1)
                            <td width="10%">Tecnologia</td>
                        @else
                            <td width="10%">Servicios generales</td>
                        @endif

                        {{--CATEGORIA--}}
                        @if($rech->category==1)
                            <td width="10%">Software</td>
                        @elseif($rech->category==2)
                            <td width="10%">Infraestructura IT</td>
                            @else
                            <td width="10%">Servicios Generales</td>
                        @endif

                        {{--SUB CATEGORIA--}}
                        <td width="10%">{{$rech->subcategory}}</td>

                        {{--TIPO--}}
                        @if($rech->type==1)
                            <td width="10%">Problema</td>
                        @elseif($rech->type==2)
                            <td width="10%">Solicutud</td>
                        @else
                            <td width="10%">Asistencia</td>
                        @endif

                        {{--ASIGNADO--}}

                        @if($rech->assign->id==1)
                            <td width="10%">Supervision</td>
                        @elseif($rech->assign->id==2)
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