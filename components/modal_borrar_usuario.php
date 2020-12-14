  <!-- Modal borrar -->
  <div class="modal fade" id="modal_borrar_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="./controllers/del_usuario.php" method="post">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Borrar usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>¿Está seguro que desea eliminar este usuario?</h5>
                <input type="text" class="d-none" name="id_delete_user" id="id_delete_user" placeholder="id a eliminar">
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
      </div>
    </div>
  </div>