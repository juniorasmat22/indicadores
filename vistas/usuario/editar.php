<?php
namespace controladores;
$PersonaControlador = new PersonaControlador();
$respuesta = $PersonaControlador->modelo->listarPersonas($PersonaControlador->entidad);
?>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Registar Usuario</h4>
</div>
<div class="modal-body">
  <div class="row mt">
    <div class="col-lg-12">
        <div class="form">
          <form class="cmxform form-horizontal style-form" method="post" action="?c=usuario&a=editar" id="formEditar" autocomplete="off">
            <input type="hidden" name="idUsuario">
            <div class="form-group ">
              <label for="emp_id" class="control-label col-lg-2">Seleccione Empleado</label>
                  <div class="col-lg-10">
                      <select id="idPersona" name="idPersona" class="form-control" required>
                                <?php if($respuesta->respuesta): $fila=$respuesta->resultado ;?>
                                  <?php foreach ($fila as $empleado): ?>
                                    <option value="<?php echo $empleado->idPersona; ?>"><?php echo $empleado->nombre." ".$empleado->apellido; ?></option>
                                  <?php endforeach ?>
                                <?php else: ?>
                                  <option value="0" disabled >Todos los usuarios ya tiene una cuenta</option>
                                <?php endif ?>
                        </select>
                  </div>
            </div>
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
              <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
          </form>
        </div>

    </div>
    <!-- /col-lg-12 -->
  </div>
</div>
