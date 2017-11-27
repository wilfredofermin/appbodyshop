
<table class="table table-hover" data-toggle="dataTable" data-form="deleteForm">
    <thead class="text-primary">
    <tr>
        <th>Id</th>
        <th>Fecha</th>
        <th>Servicio</th>
        <th>Sub Categoria</th>
        <th>Tipo</th>
        <th>Condicion</th>
        <th>Descripcion</th>
        <th>Accion</th>
    </tr>
    </thead>
    @foreach($solicitudes as $solicitud)
        <tr>
            {{--ID--}}
            <td width="3%">{{$solicitud->id}}</td>

            {{--FECHA--}}
            <td width="10%">{{$solicitud->created_at->format('d-m-Y h:i a')}}</td>

            {{--SERVICIO SOLICITADO--}}
            @if($solicitud->servicio==1)
                <td width="10%">Tecnologia</td>
            @else
                <td width="10%">Servicios generales</td>
            @endif

            {{--SUB CATEGORIA--}}
            <td width="10%">{{$solicitud->subcategory}}</td>

            {{--TIPO--}}
            @if($solicitud->type==1)
                <td width="10%">Problema</td>
            @elseif($solicitud->type==2)
                <td width="10%">Solicutud</td>
            @else
                <td width="10%">Asistencia</td>
            @endif

            {{--CONDICION--}}
            @if($solicitud->condicion==1)
                <td width="10%"><span class="label label-success">Completo</span></td>
            @elseif($solicitud->condicion==2)
                <td width="10%"><span class="label label-primary">En proceso</span></td>
            @elseif($solicitud->condicion==3)
                <td width="10%"><span class="label label-warning">Pendiente</span></td>
            @else
                <td width="10%"><span class="label label-danger">Rechazado</span></td>
            @endif

            {{--DESCRIPCION con limitante de caracteres--}}
            <td width="40%">{{str_limit($solicitud->description, 100)}}</td>

            <td class="td-actions text-right">
                {{--EDITAR--}}
                <a href="{{URL::action('SolicitudController@edit',$solicitud->id )}}" type="button" rel="tooltip" title="Editar solicitud" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </a>
                <a>
                    {{--ELIMINAR--}}
                    {!! Form::model($solicitud, ['method' => 'delete', 'route' => ['solicitud.destroy', $solicitud->id], 'class' =>'form-inline form-delete']) !!}
                    {!! Form::hidden('id', $solicitud->id) !!}
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-simple btn-xs','rel'=>'tooltip','title'=>'Eliminar solicitud', 'name' => 'delete_modal'] ) !!}
                    {!! Form::close() !!}

                </a>
            </td>
        </tr>
        </tbody>
    @endforeach
</table>

<div align="center">
    {{ $solicitudes->links() }}

</div>

