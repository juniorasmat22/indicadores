<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Editar Datos del Sub Proceso</h4>
</div>
<div class="modal-body">
  <div class="row mt">
    <div class="col-lg-12">
        <div class="form">
          <form class="cmxform form-horizontal style-form" method="post" action="?c=subproceso&a=editar" id="formEditar" autocomplete="off" >
              <input type="hidden" name="idSubproceso" >
              <input type="hidden" name="idProceso">

              <div class="form-group ">
                <label for="codigo" class="control-label col-lg-2">Código</label>
                <div class="col-lg-10">
                  <input class=" form-control" required id="codigo" name="codigo" type="text" />
                </div>
              </div>
              <div class="form-group ">
                <label for="nombre" class="control-label col-lg-2">Nombre</label>
                <div class="col-lg-10">
                  <input class=" form-control" required id="nombre" name="nombre" type="text" />
                </div>
              </div>
              <div class="form-group ">
                <label for="descripcion" class="control-label col-lg-2">Descripción</label>
                <div class="col-lg-10">
                    <textarea class="form-control " required id="descripcion" name="descripcion"></textarea>
                </div>
              </div>
              <div class="form-group ">
                <label for="estado" class="control-label col-lg-2">Estado</label>
                <div class="col-lg-10">
                  <select id="estado" name="estado" class="form-control" required>
                      <option value="1">activo</option>
                      <option value="0">inactivo</option>
                    </select>
                </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
          </form>
        </div>

    </div>
    <!-- /col-lg-12 -->
  </div>
</div>
