<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Editar Fórmula</h4>
</div>
<div class="modal-body">
  <div class="row mt">
    <div class="col-lg-12">
        <div class="form">
          <form class="cmxform form-horizontal style-form" method="post" action="?c=formula&a=editar" id="formEditar" autocomplete="off" >
            <input type="hidden" name="idIndicador">
            <input type="hidden" name="idFormula">
          <div class="form-group ">
            <label  class="control-label col-lg-2">Fórmulas</label>
            <div class="col-lg-10">
              <div class="radio">
                <label>
                  <input type="radio" name="tipo" id="tipo" value="1"  required> <span><img width="100%" src="recursos/img/formula1.jpg" alt="de"></span>
                  </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="tipo" id="tipo" value="2" required>
                  <span><img width="100%" src="recursos/img/formula2.jpg" alt="de"></span>
                  </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="tipo" id="tipo" value="3" required>
                  <span><img width="100%" src="recursos/img/formula3.jpg" alt="de"></span>
                  </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="tipo" id="tipo" value="4" required >
                  <span><img width="100%" src="recursos/img/formula4.jpg" alt="de"></span>
                  </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="tipo" id="tipo" value="5" required>
                  <span><img width="100%" src="recursos/img/formula5.jpg" alt="de"></span>
                  </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="tipo" id="tipo" value="6" required>
                  <span><img width="100%" src="recursos/img/formula6.jpg" alt="de"></span>
                  </label>
              </div>
            </div>
          </div>
          <div class="form-group" >
            <label for="param1" class="control-label col-lg-2">Parametro 1</label>
            <div class="col-lg-10">
              <input class=" form-control" required  name="param1" />
            </div>
          </div>
          <div class="form-group " >
            <label for="param2" class="control-label col-lg-2">Parametro 2</label>
            <div class="col-lg-10">
              <input class=" form-control" required  name="param2"   />
            </div>
          </div>
          <div class="form-group " >
            <label for="param3" class="control-label col-lg-2">Parametro 3</label>
            <div class="col-lg-10">
              <input class=" form-control" required  name="param3" />
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
