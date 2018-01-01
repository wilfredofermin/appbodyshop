<div class="card">
    <div class="card-content table-responsive">
        <table class="table table-hover " data-toggle="dataTable" data-form="deleteForm">
    <thead class="text-primary">
    <tr>
        <th>Id</th>
        <th>Condicion</th>
        <th>Fecha registro</th>
        <th>Fecha compromiso</th>
        <th>Servicio</th>
        <th>Sub Categoria</th>
        <th>Tipo</th>
        <th>Asignacion</th>
        <th>Descripcion</th>
        <th>Accion</th>
    </tr>
    </thead>
    @foreach($solicitudes as $busc)
        <tr>
            {{--ID--}}
            <td width="3%">{{$busc->id}}</td>

            {{--CONDICION--}}
            @if($busc->condicion==1)
                <td width="10%"><span class="label label-success" rel="tooltip" title="Solicitud Atendido">Atendido</span></td>
            @elseif($busc->condicion==2)
                <td width="10%"><span class="label label-primary" rel="tooltip" title="Solicitud En Proceso">En proceso</span></td>
            @elseif($busc->condicion==3)
                <td width="10%"><span class="label label-warning" rel="tooltip" title="Solicitud Pendiente">Pendiente</span></td>
            @elseif($busc->condicion==4)
                <td width="10%"><span class="label label-warning" rel="tooltip" title="Solicitud rechazada">Rechazado</span></td>
            @else
                <td width="10%"><span class="label label-danger" rel="tooltip" title="Solicitud vencida">Vencido</span></td>
            @endif

            {{--FECHA REGISTRO--}}
            <td width="12%">{{$busc->created_at->format('d-m-Y h:i a')}}</td>

            {{--FECHA COMPROMISO--}}
            <td width="12%">{!! \Carbon\Carbon::parse($busc->fecha_compromiso)->format('d/m/Y h:i a') !!}</td>

            {{--SERVICIO SOLICITADO--}}
            @if($busc->servicio==1)
                <td width="10%">Tecnologia</td>
            @else
                <td width="10%">Servicios generales</td>
            @endif

            {{--SUB CATEGORIA--}}
            <td width="10%">{{$busc->subcategory}}</td>

            {{--TIPO--}}
            @if($busc->type==1)
                <td width="10%">Problema</td>
            @elseif($busc->type==2)
                <td width="10%">Solicutud</td>
            @else
                <td width="10%">Permiso</td>
            @endif

            {{--ASIGNACION PRIMARIA--}}

            @if($busc->assign->id==1)
                <td width="10%">Supervision</td>
                @elseif($busc->assign->id==2)
                <td width="10%">Soporte</td>
                @else
                <td width="10%">Desarrollo</td>
            @endif

            {{--DESCRIPCION con limitante de caracteres--}}
            <td width="30%">{{str_limit($busc->description, 70)}}</td>

            <td class="td-actions text-right">
                {{--EDITAR--}}
                @if($busc->condicion==3)
                <a href="{{URL::action('SolicitudController@edit',$busc->id )}}" type="button" rel="tooltip" title="Ver o Editar" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </a>
                <a>
                    {{--ELIMINAR--}}
                    {!! Form::model($busc, ['method' => 'delete', 'route' => ['solicitud.destroy', $busc->id], 'class' =>'form-inline form-delete']) !!}
                    {!! Form::hidden('id', $busc->id) !!}
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-simple btn-xs','rel'=>'tooltip','title'=>'Eliminar solicitud', 'name' => 'delete_modal'] ) !!}
                    {!! Form::close() !!}

                </a>
                @else
                    <a href="#" type="button" class="btn btn-danger btn-simple btn-xs disabled">
                        <i class="fa fa-times"></i>
                    </a>
                @endif
            </td>
        </tr>
        </tbody>
    @endforeach
</table>
    </div>
    <div class="team">
        <div align="center">
            {{ $solicitudes->links() }}
        </div>
    </div>

</div>



