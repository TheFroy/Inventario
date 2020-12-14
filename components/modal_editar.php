<!-- Modal editar -->
<div class="modal fade" id="modal_editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Editar artículo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <form action="./controllers/upd_articulo.php" method="post">
            <div class="modal-body">
                <div class="container">
                    <div class="row py-2">
                            <div class="col-4">
                                <label for="">ID de artículo</label>
                            </div>
                            <div class="col-7">
                                <input type="text"  id="id_modal" name="upd_id" class="form-control" >
                            </div>
                    </div>
                    <div class="row py-2">
                            <div class="col-4">
                                <label for="">Nombre</label>
                            </div>
                            <div class="col-7">
                                <input type="text" id="nombre_modal" name="upd_nombre" class="form-control" name="nombre">
                            </div>
                    </div>

                    <div class="row py-2">
                            <div class="col-4">
                                <label for="">Color</label>
                            </div>
                            <div class="col-7">
                                <input type="text" id="color_modal" name="upd_color" class="form-control" name="color">
                            </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Talla o forma</label>
                        </div>
                        <div class="col-7">
                            <input type="text" id="talla_forma_modal" name="upd_talla" class="form-control" name="talla_forma">
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Material</label>
                        </div>
                        <div class="col-7">
                            <input type="text" id="material_modal" name="upd_material" class="form-control" name="Material">
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Cantidad</label>
                        </div>
                        <div class="col-7">
                            <input type="number" id="cantidad_modal" name="upd_cantidad" class="form-control" name="cantidad">
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Nota</label>
                        </div>
                        <div class="col-7">
                            <textarea type="text" id="nota_modal" class="form-control" name="nota"></textarea>
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