<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="col-md-12">
                <div class="card" id="contenido">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">COMPLETOS</h4>
                            <p class="category">Solicitudes completas</p>
                        </div>
                        <div class="card-content table-responsive">
                            @if ($complit<>null)
                            @include('solicitudes.table.tabla_lista_estados_modal')
                            @endif
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>