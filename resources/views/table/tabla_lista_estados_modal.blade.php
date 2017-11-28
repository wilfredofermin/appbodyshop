@if($complit<>null)
<div class="col-md-12">
    <div class="card">
        <table class="table table-hover" style="height:20px; overflow:auto;">
                <thead class="text-primary">
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Condicion</th>
                        <th>Categoria</th>
                        <th>Sub Categoria</th>
                        <th>Tipo</th>
                        <th>Asignado a</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($complit as $com)
                    <tr>
                        {{--ID--}}
                        <td width="5%">{{$com->id}}</td>

                        {{--FECHA--}}
                        <td width="8%">{{$com->created_at->format('d-m-Y')}}</td>

                        {{--CONDICION--}}
                        @if($com->condicion==1)
                            <td width="7%"><span class="label label-success">Completo</span></td>
                        @elseif($com->condicion==2)
                            <td width="7%"><span class="label label-primary">En Proceso</span></td>
                            @else
                            <td width="7%"><span class="label label-danger">Rechazado</span></td>
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
@endif
