  <!-- Modal anular retiro -->
  <div class="modal fade" id="modal_anular" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="./controllers/anular_retiro.php" method="POST">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Anular retiro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>¿Está seguro que desea anular este retiro?</h5>
                <input type="text" class="d-none" name="id_anular" id="id_anular" placeholder="id de retiro a anular">
                <input type="text" class="d-none" name="id_anular_art" id="id_anular_art" placeholder="id de art a anular">
                <input type="text" class="d-none" name="cant_anular" id="cant_anular" placeholder="cant a anular">
                <input type="text" class="d-none" name="cant_total_anular" id="cant_total_anular" placeholder="cant total">
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
      </div>
    </div>
  </div>