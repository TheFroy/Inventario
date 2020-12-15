

 <div class="modal fade" id="modal_upd_nart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="./controllers/upd_nart.php" method="post">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Añadir usuario</h4>
            </div>
                <div class="modal-body">
                <div class="container">
                    <div class="row py-2">
                                <div class="col-4">
                                    <label for="">ID</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" readonly name="upd_id_nart" id="upd_id_nart" class="form-control" placeholder="">
                                </div>
                        </div>
                        <div class="row py-2">
                                <div class="col-4">
                                    <label for="">Nombre</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="upd_nom_nart" id="upd_nom_nart" class="form-control" placeholder="">
                                </div>
                        </div>
                        <div class="row py-2">
                                <div class="col-4">
                                    <label for="">Marca</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="upd_marca_nart" id="upd_marca_nart" class="form-control" placeholder="">
                                </div>
                        </div>
                        <div class="row py-2">
                                <div class="col-4">
                                    <label for="">Modelo</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="upd_modelo_nart" id="upd_modelo_nart"class="form-control" placeholder="">
                                </div>
                        </div>
                        <div class="row py-2">
                                <div class="col-4">
                                    <label for="">Descripcion</label>
                                </div>
                                <div class="col-7">
                                    <textarea type="text" name="upd_desc_nart" id="upd_desc_nart"class="form-control" placeholder=""></textarea>
                                </div>
                        </div>
                        <div class="row py-2">
                                <div class="col-4">
                                    <label for="">Cantidad</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="upd_cant_nart" id="upd_cant_nart" class="form-control" placeholder="">
                                </div>
                        </div>
                        <div class="row py-2">
                                <div class="col-4">
                                    <label for="">Precio</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="upd_precio_nart" id="upd_precio_nart"class="form-control" placeholder="">
                                </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-4">
                                <label for="">Oficina </label>
                            </div>
                            <div class="col-7">
                                <select type="text" name="upd_ofi_nart" id="upd_ofi_nart"class="form-control" placeholder="">
                                    <option value="1"><?php getOficina(1) ?></option>
                                    <option value="2"><?php getOficina(2) ?></option>
                                    <option value="3"><?php getOficina(3) ?></option>
                                    <option value="4"><?php getOficina(4) ?></option>
                                    <option value="5"><?php getOficina(5) ?></option>
                                    <option value="6"><?php getOficina(6) ?></option>
                                    <option value="7"><?php getOficina(7) ?></option>
                                    <option value="8"><?php getOficina(8) ?></option>
                                    <option value="9"><?php getOficina(9) ?></option>
                                    <option value="10"><?php getOficina(10) ?></option>
                                    <option value="11"><?php getOficina(11) ?></option>
                                    <option value="12"><?php getOficina(12) ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
      </div>
    </div>
