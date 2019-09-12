<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Editar Empleado</h4>
</div>
<div class="modal-body">
  <div class="row mt">
    <div class="col-lg-12">
        <div class="form">
          <form class="cmxform form-horizontal style-form" method="post" action="?c=persona&a=editar" id="formEditar" autocomplete="off">
            <input type="hidden" name="idPersona"  >
            <div class="form-group ">
              <label for="dni" class="control-label col-lg-2">D.N.I</label>
              <div class="col-lg-10">
                <input class="form-control" required id="dni" name="dni" type="text"length="8" pattern="[0-9]+" />
              </div>
            </div>
            <div class="form-group ">
              <label for="nombre" class="control-label col-lg-2">Nombre</label>
              <div class="col-lg-10">
                <input class=" form-control" required id="nombre" name="nombre" type="text" />
              </div>
            </div>
            <div class="form-group ">
              <label for="apellidos" class="control-label col-lg-2">Apellidos</label>
              <div class="col-lg-10">
                <input class=" form-control" required id="apellido" name="apellido" type="text" />
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
