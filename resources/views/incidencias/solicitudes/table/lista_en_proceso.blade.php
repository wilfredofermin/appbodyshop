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
                    @foreach($procesos as $en_proc)
                    <tr>
                        {{--ID--}}
                        <td width="3%">{{$en_proc->id}}</td>
                        {{--ESTADO--}}
                            <td width="5%"><span class="label label-primary">En Proceso</span></td>

                        {{--FECHA--}}
                        <td width="10%">{{$en_proc->created_at->format('d-m-Y h:i a')}}</td>

                        {{--PRIORIDAD--}}
                        <td width="10%">{{$en_proc->prioridad}}</td>

                        {{--UBICACION--}}
                        <td width="10%">{{$en_proc->ubicacion}}</td>

                        {{--SERVICIO SOLICITADO--}}
                        @if($en_proc->servicio==1)
                            <td width="10%">Tecnologia</td>
                        @else
                            <td width="10%">Servicios generales</td>
                        @endif

                        {{--CATEGORIA--}}
                        @if($en_proc->category==1)
                            <td width="10%">Software</td>
                        @elseif($en_proc->category==2)
                            <td width="10%">Infraestructura IT</td>
                            @else
                            <td width="10%">Servicios Generales</td>
                        @endif

                        {{--SUB CATEGORIA--}}
                        <td width="10%">{{$en_proc->subcategory}}</td>

                        {{--TIPO--}}
                        @if($en_proc->type==1)
                            <td width="10%">Problema</td>
                        @elseif($en_proc->type==2)
                            <td width="10%">Solicutud</td>
                        @else
                            <td width="10%">Asistencia</td>
                        @endif

                        {{--ASIGNADO--}}
                        @if($en_proc->assign->id==1)
                            <td width="10%">Supervision</td>
                        @elseif($en_proc->assign->id==2)
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