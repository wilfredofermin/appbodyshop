<div class="container-fluid">
    <div class="col-lg-12 col-sm-12">
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#pend" data-toggle="tab"><span class="fa fa-pause" aria-hidden="true"></span>
                    <div class="hidden-xs">PENDIENTES &nbsp <span class="badge">{{$c_pendientes}} </span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default" href="#proc" data-toggle="tab"><span class="fa fa-play" aria-hidden="true"></span>
                    <div class="hidden-xs">EN PROCESO &nbsp <span class="badge">{{$c_en_proceso}}</span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default" href="#aten" data-toggle="tab"><span class="fa fa-check" aria-hidden="true"></span>
                    <div class="hidden-xs">ATENDIDAS &nbsp <span class="badge">{{$c_completo}}</span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default" href="#rech" data-toggle="tab"><span class="fa fa-stop" aria-hidden="true"></span>
                    <div class="hidden-xs">VENCIDAS &nbsp <span class="badge">{{$c_vencidos}}</span></div>
                </button>
            </div>
        </div>
        <div class="">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="pend">

                    {!! Form::open(array('url'=>'/incidencias','method'=>'GET','autocomplete'=>'off','role'=>'search','id'=>'search-form','class'=>'navbar-form navbar-right')) !!}
                    <div class="form-group  is-empty">
                        <input id="txtSearch"  class="form-control" type="text" name="searchText" value="{{$searchText}}" placeholder="Buscar...">
                        <span class="material-input"></span>
                    </div>
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i><div class="ripple-container"></div>
                    </button>
                    {!! Form::close() !!}

                @include('incidencias.solicitudes.table.tabla_lista_solicitudes')
                </div>
                <div class="tab-pane fade in" id="proc">

                    <h3>This is tab 2</h3>
                </div>
                <div class="tab-pane fade in" id="aten">
                    <h3>This is tab 3</h3>
                </div>
                <div class="tab-pane fade in" id="rech">
                    <h3>This is tab 4</h3>
                </div>
            </div>
        </div>

    </div>
</div>
