<div class="container-fluid">
    <div class="col-lg-12 col-sm-12">
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#pend" data-toggle="tab"><span class="fa fa-pause" aria-hidden="true"></span>
                    <div class="hidden-xs">PENDIENTES &nbsp<span class="badge">5</span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default" href="#proc" data-toggle="tab"><span class="fa fa-play" aria-hidden="true"></span>
                    <div class="hidden-xs">EN PROCESO &nbsp<span class="badge">2</span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default" href="#aten" data-toggle="tab"><span class="fa fa-check" aria-hidden="true"></span>
                    <div class="hidden-xs">ATENDIDAS &nbsp<span class="badge">5</span></div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default" href="#rech" data-toggle="tab"><span class="fa fa-stop" aria-hidden="true"></span>
                    <div class="hidden-xs">RECHAZADAS &nbsp<span class="badge">4</span></div>
                </button>
            </div>
        </div>
        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="pend">
                    <div class="card-content table-responsive">

                        <table class="table">
                            <!--<button type="submit" class="btn btn-primary pull-left">Agregar</button>-->
                            <thead class="text-primary">
                            <tr><th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Salary</th>
                            </tr></thead>
                            <tbody>
                            <tr>
                                <td>Dakota Rice</td>
                                <td>Niger</td>
                                <td>Oud-Turnhout</td>
                                <td class="text-primary">$36,738</td>
                            </tr>
                            <tr>
                                <td>Minerva Hooper</td>
                                <td>Curaçao</td>
                                <td>Sinaai-Waas</td>
                                <td class="text-primary">$23,789</td>
                            </tr>
                            <tr>
                                <td>Sage Rodriguez</td>
                                <td>Netherlands</td>
                                <td>Baileux</td>
                                <td class="text-primary">$56,142</td>
                            </tr>
                            <tr>
                                <td>Philip Chaney</td>
                                <td>Korea, South</td>
                                <td>Overland Park</td>
                                <td class="text-primary">$38,735</td>
                            </tr>
                            <tr>
                                <td>Doris Greene</td>
                                <td>Malawi</td>
                                <td>Feldkirchen in Kärnten</td>
                                <td class="text-primary">$63,542</td>
                            </tr>
                            <tr>
                                <td>Mason Porter</td>
                                <td>Chile</td>
                                <td>Gloucester</td>
                                <td class="text-primary">$78,615</td>
                            </tr>
                            <tr>
                                <td>Minerva Hooper</td>
                                <td>Curaçao</td>
                                <td>Sinaai-Waas</td>
                                <td class="text-primary">$23,789</td>
                            </tr>
                            <tr>
                                <td>Sage Rodriguez</td>
                                <td>Netherlands</td>
                                <td>Baileux</td>
                                <td class="text-primary">$56,142</td>
                            </tr>
                            <tr>
                                <td>Sage Rodriguez</td>
                                <td>Netherlands</td>
                                <td>Baileux</td>
                                <td class="text-primary">$56,142</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
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
        @include('incidencias.solicitudes.include.button-float')
    </div>
</div>
