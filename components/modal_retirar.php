 <!-- Modal retirar -->
 <div class="modal fade" id="modal_retirar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Retirar artículo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="./controllers/ret_articulo.php" method="post">
            <div class="modal-body">
                <div class="container">

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">ID de producto</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" id="id_retirar" name="id_retirar">
                        </div>
                    </div>
                    
                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Cantidad</label>
                        </div>
                        <div class="col-7">
                            <input type="number" class="form-control" name="cant_retirar">
                        </div>
                    </div>
                    
                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Cliente</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" name="cliente_retirar">
                        </div>
                    </div>
                            <input class="d-none" type="text" class="form-control" name="cant_total" id="cant_total">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit"  class="btn btn-primary">Realizar retiro</button>
            </div>
        </form>
      </div>
    </div>
  </div>