 <!-- Modal agregar usuario -->
 <div class="modal fade" id="modal_add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="./controllers/add_usuario.php" method="post">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Añadir usuario</h4>
            </div>
                <div class="modal-body">
                <div class="container">
                    <div class="row py-2">
                                <div class="col-4">
                                    <label for="">Nombre de usuario</label>
                                </div>
                                <div class="col-7">
                                    <input type="text"  name="add_username" class="form-control" placeholder="user01">
                                </div>
                        </div>
                        <div class="row py-2">
                                <div class="col-4">
                                    <label for="">Contraseña</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="add_pwd" class="form-control" placeholder="contraseña123">
                                </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-4">
                                <label for="">Rol del usuario</label>
                            </div>
                            <div class="col-7">
                                <select type="text" name="add_rol" class="form-control" placeholder="contraseña123">
                                    <option value="">...</option>
                                    <option value="1">Administrador</option>
                                    <option value="0">Empleado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>