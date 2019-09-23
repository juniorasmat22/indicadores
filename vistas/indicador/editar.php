<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Editar Datos del Indicador</h4>
</div>
<div class="modal-body">
  <div class="row mt">
    <div class="col-lg-12">
        <div class="form">
          <form class="cmxform form-horizontal style-form" method="post" action="?c=indicador&a=editar" id="formEditar" autocomplete="off" >
            <input type="hidden" name="idIndicador">
            <input type="hidden" name="idSubproceso">
            <div class="form-group ">
              <label for="codigo" class="control-label col-lg-2">Código</label>
              <div class="col-lg-10">
                <input class=" form-control" required id="codigo" name="codigo" type="text"  />
              </div>
            </div>
            <div class="form-group ">
              <label for="descripcion" class="control-label col-lg-2">Nombre</label>
              <div class="col-lg-10">
                  <textarea class="form-control " required id="descripcion" name="descripcion"></textarea>
              </div>
            </div>
          <div class="form-group ">
            <label for="meta" class="control-label col-lg-2">Objetivo</label>
            <div class="col-lg-10">
              <textarea class=" form-control" required id="meta" name="meta" ></textarea>
            </div>
          </div>
          <div class="form-group ">
            <label for="iniciativas" class="control-label col-lg-2">Iniciativas</label>
            <div class="col-lg-10">
                <textarea class="form-control " required id="iniciativas" name="iniciativas"></textarea>
            </div>
          </div>
          <div class="form-group ">
            <label for="responsable" class="control-label col-lg-2">Responsable</label>
            <div class="col-lg-10">
              <input class=" form-control" required id="responsable" name="responsable" type="text"  />
            </div>
          </div>
          <div class="form-group ">
            <label for="lineaBase" class="control-label col-lg-2">Linea Base</label>
            <div class="col-lg-10">
              <input class=" form-control" required id="lineaBase" name="lineaBase"  type="text"  />
            </div>
          </div>
          <div class="form-group ">
            <label for="frecuencia" class="control-label col-lg-2">Frecuencia</label>
            <div class="col-lg-10">
              <input class=" form-control" required id="frecuencia" name="frecuencia"  type="text"  />
            </div>
          </div>
          <div class="form-group ">
            <label for="tipo" class="control-label col-lg-2">Tipo</label>
            <div class="col-lg-10">
              <input class=" form-control" required id="tipo" name="tipo" type="text"  />
            </div>
          </div>
          <div class="form-group ">
            <label for="unidad" class="control-label col-lg-2">Unidad</label>
            <div class="col-lg-10">
              <input class="form-control" required id="unidad" name="unidad" type="text"  />
            </div>
          </div>
          <div class="form-group ">
            <label for="fv" class="control-label col-lg-2">Fuente(s) de Verificación</label>
            <div class="col-lg-10">
                <textarea class="form-control " required id="fv" name="fv"></textarea>
            </div>
          </div>

          <div class="form-group ">
            <label for="rojo" class="control-label col-lg-2">Rango Rojo</label>
            <div class="col-lg-10">
                 <input type="number" class="form-control " required id="rojo" name="rojo" min="1" max="100"  pattern="[0-9]+"  >
            </div>
          </div>
          <div class="form-group ">
            <label for="amarillo" class="control-label col-lg-2">Rango Amarillo</label>
            <div class="col-lg-10">
                 <input type="number" class="form-control " required id="amarillo" name="amarillo" min="1" max="100" pattern="[0-9]+"  >
            </div>
          </div>
          <div class="form-group ">
            <label for="verde" class="control-label col-lg-2">Rango Verde</label>
            <div class="col-lg-10">
                 <input type="number" class="form-control " required id="verde" name="verde" min="1" max="100" pattern="[0-9]+"  >
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
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
          </form>
        </div>

    </div>
    <!-- /col-lg-12 -->
  </div>
</div>
