<div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Añadir artículo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <form action="./controllers/add_articulo.php" method="post">
            <div class="modal-body">
                <div class="container">
                    <div class="row py-2">
                            <div class="col-4">
                                <label for="">Nombre</label>
                            </div>
                            <div class="col-7">
                                <input type="text"  name="add_nombre" class="form-control" name="nombre">
                            </div>
                    </div>

                    <div class="row py-2">
                            <div class="col-4">
                                <label for="">Color</label>
                            </div>
                            <div class="col-7">
                                <input type="text"  name="add_color" class="form-control" name="color">
                            </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Talla o forma</label>
                        </div>
                        <div class="col-7">
                            <input type="text"  name="add_talla" class="form-control" name="talla_forma">
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Material</label>
                        </div>
                        <div class="col-7">
                            <input type="text"  name="add_material" class="form-control" name="Material">
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Cantidad</label>
                        </div>
                        <div class="col-7">
                            <input type="number"  name="add_cantidad" class="form-control" name="cantidad">
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Nota</label>
                        </div>
                        <div class="col-7">
                            <textarea type="text"  class="form-control" name="add_nota"></textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit"  class="btn btn-primary">Añadir producto</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  </div>