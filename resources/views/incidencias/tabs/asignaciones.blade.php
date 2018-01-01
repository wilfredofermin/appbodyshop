<div class="container-fluid">
    <div class="col-lg-12 col-sm-12">
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#atent1" data-toggle="tab"><span class="fa fa-pause" aria-hidden="true"></span>
                    <div class="hidden-xs">SIN ATENDER &nbsp <span class="badge">{{$c_pendientes}} </span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default" href="#atent2" data-toggle="tab"><span class="fa fa-play" aria-hidden="true"></span>
                    <div class="hidden-xs">ATENDIEDO &nbsp <span class="badge">{{$c_en_proceso}}</span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default" href="#atent3" data-toggle="tab"><span class="fa fa-check" aria-hidden="true"></span>
                    <div class="hidden-xs">ATENDIDAS &nbsp <span class="badge">{{$c_completo}}</span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default" href="#atent4" data-toggle="tab"><span class="fa fa-stop" aria-hidden="true"></span>
                    <div class="hidden-xs">VENCIDAS &nbsp <span class="badge">{{$c_vencidos}}</span></div>
                </button>
            </div>
        </div>
        <div class="well">
            <div class="tab-content">
                {{--PENDIENTES--}}
                <div class="tab-pane fade in active" id="atent1">

                    {!! Form::open(array('url'=>'/incidencias','method'=>'GET','autocomplete'=>'off','role'=>'search','id'=>'search-form','class'=>'navbar-form navbar-right')) !!}
                    <div class="form-group  is-empty">
                        <input id="txtSearch"  class="form-control" type="text" name="searchText" value="{{$searchText}}" placeholder="Buscar...">
                        <span class="material-input"></span>
                    </div>
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i><div class="ripple-container"></div>
                    </button>
                    {!! Form::close() !!}

                @include('incidencias.solicitudes.table.lista_pendientes')
                </div>
                {{--EN PROCESO--}}
                <div class="tab-pane fade in" id="atent2">
                    @include('incidencias.solicitudes.table.lista_pendientes')
                </div>
                {{--ATENDIDAS--}}
                <div class="tab-pane fade in" id="atent3">
                    @include('incidencias.solicitudes.table.lista_atendidas')
                </div>
                <div class="tab-pane fade in" id="atent4">
                    <h3>This is tab 4</h3>
                </div>
            </div>
        </div>

    </div>
</div>
