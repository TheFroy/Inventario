<!-- Modal editar -->
<div class="modal fade" id="modal_upd_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Editar usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <form action="./controllers/upd_usuario.php" method="post">
            <div class="modal-body">
                <div class="container">
                    <div class="row py-2">
                                <div class="col-4">
                                    <label for="">Nombre de usuario</label>
                                </div>
                                <div class="col-7">
                                    <input type="text"  name="upd_username" id="upd_username" class="form-control" placeholder="user01">
                                    <input type="text"  name="upd_id_user" id="id_user" class="form-control d-none" placeholder="userid">
                                </div>
                        </div>
                        <!-- <div class="row py-2">
                                <div class="col-4">
                                    <label for="">Nueva contraseña</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="upd_pwd" id="upd_pwd" class="form-control" placeholder="contraseña123">
                                </div>
                        </div> -->
                        <div class="row py-2">
                            <div class="col-4">
                                <label for="">Rol del usuario</label>
                            </div>
                            <div class="col-7">
                                <select type="text" name="upd_rol" id="upd_rol" class="form-control" placeholder="contraseña123">
                                    <option value="">...</option>
                                    <option value="1">Administrador</option>
                                    <option value="0">Empleado</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit"  class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  </div>