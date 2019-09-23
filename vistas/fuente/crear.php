<?php
namespace controladores;
$curso = new CursoControlador();
$respuesta = $curso->modelo->listar();
 ?>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Registar Data Fuente</h4>
</div>
<div class="modal-body">
  <div class="row mt">
    <div class="col-lg-12">
        <div class="form">
          <form class="cmxform form-horizontal style-form" method="post" action="?c=fuente&a=crear" id="formCrear" autocomplete="off">
              <input type="hidden" name="idIndicador" value="<?php echo $_GET['idIndicador']; ?>">
              <input type="hidden" name="tipo" value="<?php echo $dataModal->resultado->tipo; ?>">
              <div class="form-group ">
                <label for="estado" class="control-label col-lg-4">Sede</label>
                <div class="col-lg-8">
                  <select id="sede" name="sede" class="form-control" required>
                      <option value="1">TRUJILLO</option>
                      <option value="2">EL VALLE</option>
                      <option value="3">HUAMACHUCO</option>
                    </select>
                </div>
              </div>
              <?php if ($_GET['idIndicador']==26||$_GET['idIndicador']==27): ?>
                <div class="form-group ">
                  <label for="curso" class="control-label col-lg-4">Curso</label>
                  <div class="col-lg-8">
                    <select id="idCurso" name="idCurso" class="form-control" required>
                      <?php if($respuesta->respuesta): $fila=$respuesta->resultado->objetos ;?>
                        <?php foreach ($fila as $cur): ?>
                          <option value="<?php echo $cur->idCurso; ?>"><?php echo $cur->nombre; ?></option>
                        <?php endforeach ?>
                      <?php else: ?>
                        <option value="" disabled >DEBE REGISTRAR UN CURSO</option>
                      <?php endif ?>
                      </select>
                  </div>
                </div>
              <?php endif; ?>
              <div class="form-group" >
                <label for="periodo" class="control-label col-lg-4">Periodo</label>
                <div class="col-lg-8">
                  <input class=" form-control" required id="periodo" name="periodo" />
                </div>
              </div>
            <div class="form-group" >
              <label for="param1" class="control-label col-lg-4"> <?php echo $dataModal->resultado->param1; ?></label>
              <div class="col-lg-8">
                <input class=" form-control" required id="param1" name="param1" type="number" step="any" />
              </div>
            </div>
            <?php if ( $dataModal->resultado->param2=="0"): ?>
              <div class="form-group " style="display:none;" >
                <label for="param2" class="control-label col-lg-4"><?php echo $dataModal->resultado->param2; ?></label>
                <div class="col-lg-8">
                  <input class=" form-control" required id="param2" name="param2" value="0" type="number" step="any"  />
                </div>
              </div>
            <?php else: ?>
              <div class="form-group " >
                <label for="param2" class="control-label col-lg-4"><?php echo $dataModal->resultado->param2; ?></label>
                <div class="col-lg-8">
                  <input class=" form-control" required id="param2" name="param2" type="number" step="any"  />
                </div>
              </div>
            <?php endif; ?>

          <?php if ($dataModal->resultado->param3=="0"): ?>
            <div class="form-group" style="display:none;" >
              <label for="param3" class="control-label col-lg-4"><?php echo $dataModal->resultado->param3; ?></label>
              <div class="col-lg-8">
                <input class=" form-control" required id="param3" name="param3" value="0" type="number" step="any" />
              </div>
            </div>
          <?php else: ?>
            <div class="form-group " >
              <label for="param3" class="control-label col-lg-4"><?php echo $dataModal->resultado->param3; ?></label>
              <div class="col-lg-8">
                <input class=" form-control" required id="param3" name="param3" type="number" step="any" />
              </div>
            </div>
          <?php endif; ?>

            <div class="form-group ">
              <label for="inicio" class="control-label col-lg-4">Fecha Inicio</label>
              <div class="col-lg-6">
                <div  data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-7-2019" class="input-append date dpYears">
                  <input type="text" id="inicio" name="inicio" required readonly="" size="16" class="form-control">
                  <span class="input-group-btn add-on">
                    <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                    </span>
                </div>
              </div>
            </div>
            <div class="form-group ">
              <label for="fin" class="control-label col-lg-4">Fecha Fin</label>
              <div class="col-lg-6">
                <div  data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-7-2019" class="input-append date dpYears">
                  <input type="text" id="fin" name="fin" required readonly="" size="16" class="form-control">
                  <span class="input-group-btn add-on">
                    <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                    </span>
                </div>
              </div>
            </div>
            <div class="form-group ">
              <label for="estado" class="control-label col-lg-4">Estado</label>
              <div class="col-lg-8">
                <select id="estado" name="estado" class="form-control" required>
                    <option value="1">activo</option>
                    <option value="0">inactivo</option>
                  </select>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerar</button>
              <button type="submit" class="btn btn-primary">Registar</button>
            </div>
          </form>
        </div>

    </div>
    <!-- /col-lg-12 -->
  </div>
</div>
