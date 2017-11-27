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
                            @include('table.tabla_lista_completadosModal')
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>