<?php
namespace controladores;
$UnidadNegocios = new UnidadNegocioControlador();
$respuesta = $UnidadNegocios->modelo->listar();
 ?>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Editar Datos- MapaProcesos</h4>
</div>
<div class="modal-body">
  <div class="row mt">
    <div class="col-lg-12">
        <div class="form">
          <form class="cmxform form-horizontal style-form" method="post" action="?c=mapaProcesos&a=editar" id="formEditar" autocomplete="off">

              <input type="hidden" name="idMapaProcesos" id="idMapaProcesos">
              <input type="hidden" name="idEmpresa">
              <div class="form-group ">
                <label for="idUnidadNegocio" class="control-label col-lg-2">Unidad de Negocio</label>
                <div class="col-lg-10">
                  <select id="idUnidadNegocio" name="idUnidadNegocio" class="form-control" required>
                    <?php if($respuesta->respuesta): $fila=$respuesta->resultado->objetos ;?>
                      <?php foreach ($fila as $unidad): ?>
                        <option value="<?php echo $unidad->idUnidadNegocio; ?>"><?php echo $unidad->nombre; ?></option>
                      <?php endforeach ?>
                    <?php else: ?>
                      <option value="0" disabled >DEBE INGRESAR UNIDAD DE NEGOCIO</option>
                    <?php endif ?>
                    </select>
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
              <label for="fecha" class="control-label col-lg-2">Fecha</label>
              <div class="col-lg-7">
                <div  data-date-viewmode="year" data-date-format="yyyy-mm-dd" data-date="2019-07-01" class="input-append date dpYears">
                  <input type="text" id="fecha" name="fecha" required readonly="" class="form-control">
                  <span class="input-group-btn add-on">
                    <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                    </span>
                </div>
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
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
          </form>
        </div>

    </div>
    <!-- /col-lg-12 -->
  </div>
</div>
