
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
</div>
<div class="modal-body">
  <div class="row mt">
    <div class="col-lg-12">
        <div class="form">
          <form class="cmxform form-horizontal style-form" method="post" action="?c=usuario&a=editar" id="formEditar" autocomplete="off">
            <input type="hidden" name="idUsuario">
            <input type="hidden" name="idPersona">
            <div class="form-group ">
              <label for="usuario" class="control-label col-lg-2">Nombre de usuario</label>
              <div class="col-lg-10">
                <input class=" form-control" required id="usuario" name="usuario" type="text" />
              </div>
            </div>
            <div class="form-group ">
              <label for="pass" class="control-label col-lg-2">Contraseña</label>
              <div class="col-lg-10">
                <input class=" form-control" required id="pass" name="pass" type="password" />
              </div>
            </div>
            <div class="form-group ">
              <label for="rol" class="control-label col-lg-2">Rol</label>
              <div class="col-lg-10">
                <select id="rol" name="rol" class="form-control" required>
                    <option value="1">Administrador</option>
                    <option value="2">Usuario 1</option>
                    <option value="3">Usuario 2</option>
                  </select>
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
