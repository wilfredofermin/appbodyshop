<div class="card">
    <div class="card-header" data-background-color="orange">
        <h4 class="title">PENDIENTES</h4>
        <p class="category">Lista de solicitudes </p>
    </div>
    <div class="card-content table-responsive">
        <table class="table table-hover">
            <thead class="text-warning">
            <tr>
                <th>ID</th>
                <th>Fecha Compromiso</th>
                <th>Sub Cat.</th>
                <th>Tipo.</th>
                <th>Usuario</th>
                <th>imagen</th>
                <th>Accion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($s_pendientes as $pendiente)
            <tr>
                <td>{{$pendiente->id}}</td>
                <td>{{$pendiente->fecha_compromiso}}</td>
                <td>{{$pendiente->subcategory}}</td>
                @if($pendiente->type==1)
                    <td>Problema</td>
                    @elseif($pendiente->type==2)
                    <td>Solicitud</td>
                    @else
                    <td>Permiso</td>
                @endif
                <td>{{$pendiente->user->name}}</td>
                <td>Niger</td>
                <td>Niger</td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>