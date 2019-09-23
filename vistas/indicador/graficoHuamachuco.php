
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="custom-box">
          <div class="servicetitle">
            <h4>Gráfico</h4>
            <hr>
          </div>

          <div id="chart-container-huamachuco"></div>
        </div>
        <!-- end custombox -->
      </div>
      <!-- end col-4 -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="custom-box">
          <div class="servicetitle">
            <h4>Data Histórica</h4>
            <hr>
          </div>
          <div class="icn-main-container">
            <table class="table table-striped table-advance table-hover table-responsive">

              <hr>
              <thead>
                <tr>
                  <th><i class="fa fa-bullhorn"></i> Periodo</th>
                  <?php if ($_GET['idIndicador']==26||$_GET['idIndicador']==27): ?>
                      <th class="hidden-phone"><i class="fa fa-question-circle"></i>Curso</th>
                  <?php endif; ?>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Inicio</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Fin</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Resultado</th>
                  <th><i class=" fa fa-edit"></i> Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 if($fuente_huamachuco->respuesta){
                   $filas=$fuente_huamachuco->resultado;
                   foreach ($filas as $fila) {
                     ?>
                <tr>
                  <td>
                    <a href="#"><?php echo $fila->periodo; ?></a>
                  </td>
                  <?php if ($_GET['idIndicador']==26||$_GET['idIndicador']==27): ?>
                      <td class="hidden-phone"><?php echo $fila->curso; ?></td>
                  <?php endif; ?>
                  <td class="hidden-phone"><?php echo $fila->inicio; ?></td>
                  <td class="hidden-phone"><?php echo $fila->fin; ?></td>
                  <td class="hidden-phone"><?php echo $fila->resultado; ?></td>
                  <td>
                      <button class="btn btn-info btn-xs" onclick="ver_grafico('chart-container-huamachuco','<?php echo $respuesta->resultado->descripcion; ?>','<?php echo $fila->periodo; ?>',<?php echo $fila->resultado; ?>,<?php echo $respuesta->resultado->rojo; ?>,<?php echo $respuesta->resultado->amarillo; ?>,<?php echo $respuesta->resultado->verde; ?>);"><i class="fa fa-dashboard"></i> semáforo</button >
                  </td>
                </tr>
                <?php
                    }
                  }else{
                    ?>
                    <tr>

                      <td colspan="6"><div class="alert alert-danger"><b>Oh no!</b>Aún no existen datos para mostar.</div></td>

                    </tr>
                    <?php
                  }
                ?>
              </tbody>
            </table>

          </div>


        </div>
        <!-- end custombox -->
      </div>
      <!-- end col-4 -->

    </div>

    <!--  /col-lg-12 -->

  </div>


  <div class="row">
    <div class="col-lg-12">
      <div class="custom-box">
        <div class="servicetitle">
          <h4><?php echo $respuesta->resultado->descripcion; ?>-SEDE HUAMACHUCO</h4>
          <span><select id="periodo3" name="periodo3" class="pull-right" required onchange="llenar_grafico_sede(<?php echo $_GET['idIndicador'] ;?>,3);">
            <option value="" disabled selected >Seleccione una opción</option>
            <?php if ($fuente_huamachuco->respuesta):
              $filas=$fuente_huamachuco->resultado;
              $periodo_anterior='';
              foreach ($filas as $fila){
                ?>
                <?php if ($periodo_anterior==$fila->periodo): ?>

                <?php else: ?>
                  <option value="<?php echo $fila->periodo; ?>"><?php echo $fila->periodo; ?></option>
                <?php endif; ?>


                <?php
                $periodo_anterior=$fila->periodo;
              } ?>

            <?php else: ?>
                <option value="" disabled  >Debe Ingresar Datos</option>
            <?php endif; ?>
              </select></span>
          <hr>
  <?php if ($fuente_huamachuco->respuesta){?>
            <div class="custom-bar-chart" id="3">
              <ul class="y-axis">
                <li><span>100</span></li>
                <li><span>80</span></li>
                <li><span>60</span></li>
                <li><span>40</span></li>
                <li><span>20</span></li>
                <li><span>0</span></li>
              </ul>
              <?php
                $filas=$fuente_huamachuco->resultado;
                foreach ($filas as $fila) {
                ?>
              <div class="bar">

                <div class="value tooltips" data-original-title="<?php echo $fila->periodo; ?>" data-toggle="tooltip" data-placement="top"><?php echo ($fila->resultado)."%"; ?></div>
                <div class="title"><?php echo $fila->curso."-".$fila->periodo; ?></div>
              </div>


            <?php
                }
                ?>
              </div>
              <?php

              }else{
                ?>


                  <div class="alert alert-danger"><b>Oh no!</b>Aún no existen datos para mostar.</div>


                <?php
              }

            ?>

    </div>
    </div>
  </div>


  </div>
  <?php// require 'prueba.php'; ?>
