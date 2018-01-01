<div class="container-fluid">
    <div class="col-lg-12 col-sm-12">
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#busc" data-toggle="tab"><span class="fa fa-search" aria-hidden="true"></span>
                    <div class="hidden-xs">BUSCAR&nbsp <span class="badge">{{count($solicitudes)}}</span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default" href="#pend" data-toggle="tab"><span class="fa fa-pause" aria-hidden="true"></span>
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
                <button type="button" id="following" class="btn btn-default" href="#venc" data-toggle="tab"><span class="fa fa-calendar-times-o" aria-hidden="true"></span>
                    <div class="hidden-xs">VENCIDAS &nbsp <span class="badge">{{$c_vencidos}}</span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default" href="#rech" data-toggle="tab"><span class="fa fa-times" aria-hidden="true"></span>
                    <div class="hidden-xs">RECHAZADAS &nbsp <span class="badge">{{$c_rechazados}}</span></div>
                </button>
            </div>
        </div>
        <div class="well">
            <div class="tab-content">
                {{--BUSCADOR--}}
                <div class="tab-pane fade in active" id="busc">
                    {{--BUSCADOR--}}
                    {!! Form::open(array('url'=>'/incidencias','method'=>'GET','autocomplete'=>'off','role'=>'search','id'=>'search-form','class'=>'navbar-form navbar-right')) !!}
                    <div class="form-group  is-empty">
                        <input id="txtSearch"  class="form-control" type="text" name="searchText" value="{{$searchText}}" placeholder="Buscar...">
                        <span class="material-input"></span>
                    </div>
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i><div class="ripple-container"></div>
                    </button>
                    {!! Form::close() !!}
                    @include('incidencias.solicitudes.table.lista_buscar')
                    <br>
                </div>

                {{--SOLICITUDES--}}
                <div class="tab-pane fade in " id="pend">
                @include('incidencias.solicitudes.table.lista_pendientes')
                </div>

                {{--EN PROCESO--}}
                <div class="tab-pane fade in" id="proc">
                    @include('incidencias.solicitudes.table.lista_en_proceso')
                </div>

                {{--ATENDIDAS--}}
                <div class="tab-pane fade in" id="aten">
                     @include('incidencias.solicitudes.table.lista_atendidas')
                </div>

                {{--VENCIDAS--}}
                <div class="tab-pane fade in" id="venc">
                    @include('incidencias.solicitudes.table.lista_vencidas')

                </div>

                {{--RECHAZADAS--}}
                <div class="tab-pane fade in" id="rech">
                    @include('incidencias.solicitudes.table.lista_rechazadas')
                </div>
            </div>
        </div>

    </div>
</div>
