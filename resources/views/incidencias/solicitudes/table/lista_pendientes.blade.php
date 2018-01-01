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
    @foreach($pendientes as $pend)
        <tr>
            {{--ID--}}
            <td width="3%">{{$pend->id}}</td>

            {{--CONDICION--}}
            @if($pend->condicion==1)
                <td width="10%"><span class="label label-success">Completo</span></td>
            @elseif($pend->condicion==2)
                <td width="10%"><span class="label label-primary">En proceso</span></td>
            @elseif($pend->condicion==3)
                <td width="10%"><span class="label label-warning">Pendiente</span></td>
            @else
                <td width="10%"><span class="label label-danger">Rechazado</span></td>
            @endif

            {{--FECHA REGISTRO--}}
            <td width="12%">{{$pend->created_at->format('d-m-Y h:i a')}}</td>

            {{--FECHA COMPROMISO--}}
            <td width="12%">{!! \Carbon\Carbon::parse($pend->fecha_compromiso)->format('d/m/Y h:i a') !!}</td>

            {{--SERVICIO SOLICITADO--}}
            @if($pend->servicio==1)
                <td width="10%">Tecnologia</td>
            @else
                <td width="10%">Servicios generales</td>
            @endif

            {{--SUB CATEGORIA--}}
            <td width="10%">{{$pend->subcategory}}</td>

            {{--TIPO--}}
            @if($pend->type==1)
                <td width="10%">Problema</td>
            @elseif($pend->type==2)
                <td width="10%">Solicutud</td>
            @else
                <td width="10%">Permiso</td>
            @endif

            {{--ASIGNACION PRIMARIA--}}

            @if($pend->assign->id==1)
                <td width="10%">Supervision</td>
                @elseif($pend->assign->id==2)
                <td width="10%">Soporte</td>
                @else
                <td width="10%">Desarrollo</td>
            @endif

            {{--DESCRIPCION con limitante de caracteres--}}
            <td width="30%">{{str_limit($pend->description, 70)}}</td>

            <td class="td-actions text-right">
                {{--EDITAR--}}
                <a href="{{URL::action('SolicitudController@edit',$pend->id )}}" type="button" rel="tooltip" title="Ver o Editar" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </a>
                <a>
                    {{--ELIMINAR--}}
                    {!! Form::model($pend, ['method' => 'delete', 'route' => ['solicitud.destroy', $pend->id], 'class' =>'form-inline form-delete']) !!}
                    {!! Form::hidden('id', $pend->id) !!}
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-simple btn-xs','rel'=>'tooltip','title'=>'Eliminar solicitud', 'name' => 'delete_modal'] ) !!}
                    {!! Form::close() !!}

                </a>
            </td>
        </tr>
        </tbody>
    @endforeach
</table>
    </div>
    <div class="row">
        <div align="center">
            {{ $pendientes->links() }}

        </div>
    </div>

</div>



