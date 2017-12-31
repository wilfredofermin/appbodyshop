<div class="container-fluid"> <!-- style="overflow:hidden" -->
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12" style="overflow:auto">
            <div id="MyAccountsTab" class="tabbable tabs-left">
                <!-- Account selection for desktop - I -->
                <ul  class="nav nav-tabs col-md-1 hidden-xs">
                    <li class="active">
                        <div data-target="#lA" data-toggle="tab">
                            <div class="ellipsis">
                                <span class="account-type">En Altas</span><br/>
                                <span class="account-amount">Vencidas</span><br/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div data-target="#lB" data-toggle="tab">
                            <div>
                                <span class="account-type">Pendientes</span><br/>
                                <span class="account-amount">$120,00</span><br/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div data-target="#lC" data-toggle="tab">
                            <div>
                                <span class="account-type">Atendidas</span><br/>
                                <span class="account-amount">$2.300,00</span><br/>
                                <a href="#" class="account-link">Investments</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="tab-content col-md-11">
                    <div class="tab-pane active" id="lA"><!--style="padding-left: 60px; padding-right:100px"-->
                        @include('incidencias.peticiones.table.vencidas_altas')
                    </div>
                    <div class="tab-pane" id="lB">
                        @include('incidencias.peticiones.table.pendientes')
                    </div>
                    <div class="tab-pane" id="lC">
                        @include('incidencias.peticiones.table.atendidas')
                    </div>

                </div>
                <!-- Account selection for desktop - F -->
            </div>
        </div>
    </div>
</div>


