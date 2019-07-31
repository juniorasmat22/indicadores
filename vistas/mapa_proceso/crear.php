<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Registar Mapa de Proceso</h4>
</div>
<div class="modal-body">
  <div class="row mt">
    <div class="col-lg-12">
        <div class="form">
          <form class="cmxform form-horizontal style-form" method="post" action="" id="formCrear" autocomplete="off">
              <input type="hidden" name="idEmpresa" value="<?php echo $_GET['idEmpresa']; ?>">
              <div class="form-group ">
                <label for="idUnidadNegocio" class="control-label col-lg-2">Unidad de Negocio</label>
                <div class="col-lg-10">
                  <select id="idUnidadNegocio" name="idUnidadNegocio" class="form-control" required>
                      <option value="1">activo</option>
                      <option value="0">inactivo</option>
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
                <div  data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2019" class="input-append date dpYears">
                  <input type="text" id="fecha" name="fecha" required readonly="" value="" size="16" class="form-control">
                  <span class="input-group-btn add-on">
                    <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                    </span>
                </div>
              </div>
            </div>
            <div class="form-group ">
              <label for="estado" class="control-label col-lg-2">Estado</label>
              <div class="col-lg-10">
                <select id="estado" class="form-control" required>
                    <option value="1">activo</option>
                    <option value="0">inactivo</option>
                  </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerar</button>
              <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
          </form>
        </div>

    </div>
    <!-- /col-lg-12 -->
  </div>
</div>
