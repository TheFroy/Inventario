  <!-- Modal borrar -->
  <div class="modal fade" id="modal_del_nart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="./controllers/del_nart.php" method="post">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Borrar articulo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>¿Está seguro que desea eliminar articulo?</h5>
                <input type="text" class="d-none" name="id_delete_nart" id="id_delete_nart" placeholder="id a eliminar">
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
      </div>
    </div>
  </div>