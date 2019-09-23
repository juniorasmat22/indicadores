<h3><i class="fa fa-angle-right"></i> Tablero de Comando</h3>

<a href="?c=indicador&a=listarIndicadores&idSubproceso=<?php echo $_GET['idSubproceso']; ?>&idMapaProcesos=<?php echo $_GET['idMapaProcesos']; ?>&proceso=<?php echo $_GET['proceso'] ?>" type="button" class="btn btn-theme" ><i class="fa fa-eye"></i> Ver Indicadores</a>
<a type="button" class="btn btn-theme04" href="?c=indicador&a=reporte&idIndicador=<?php echo $_GET['idIndicador']; ?>&proceso=<?php echo $_GET['proceso']; ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> Imprimir</a>
<?php if ($respuesta->respuesta): ?>
  <div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
          <table class="table table-advance table-hover table-bordered">
            <tbody>


          <tr>
            <th colspan="2" class="centered">Proceso</th>
            <th colspan="7"><?php echo $_GET['proceso'] ?></th>
          </tr>
          <tr>
            <th colspan="2" class="centered">Indicador</th>
            <th colspan="7"><?php echo $respuesta->resultado->descripcion; ?></th>
          </tr>
          <tr>
            <th colspan="2" class="centered">Objetivo</th>
            <th colspan="7"><?php echo $respuesta->resultado->meta; ?></th>
          </tr>
          <tr>
            <th colspan="2" class="centered">Código</th>
            <th colspan="7"><?php echo $respuesta->resultado->codigo; ?></th>
          </tr>
          <tr>
            <th colspan="2" class="centered" style="background:rgb(218,238,243);">Fórmula de Cálculo</th>
            <th colspan="7"><?php echo $retVal = ($formula->resultado==null) ? "<strong style=color:red;>NO ha registrado fórmula</strong>" : $formula->resultado->formula ; ?></th>
          </tr>

          <tr >
                <td  colspan="2" style="padding-top: 25px; background:rgb(218,238,243);" class="centered"><b>Responsable</b></td>
                <td style="padding-top: 25px;"><b><?php echo $respuesta->resultado->responsable; ?></td>
                <td  style="padding-top: 25px;background:rgb(218,238,243);" class="centered"><b>Tipo</b></td>
                <td  style="padding-top: 25px;"><b><?php echo $respuesta->resultado->tipo; ?></b></td>
                <td  style="padding-top: 25px;background:rgb(218,238,243);" class="centered" ><b>Unidad</b></td>
                <td  style="padding-top: 25px;"><b><?php echo $respuesta->resultado->unidad; ?></b></td>
          </tr>
          <tr>
            <th colspan="2" class="centered" style="background:rgb(218,238,243);">Fuente de Vericacion</th>
            <th colspan="7"><?php echo $respuesta->resultado->fv; ; ?></th>
          </tr>
          <tr>
            <th colspan="2" class="centered" style="background:rgb(218,238,243);">Frecuencia de Medicion</th>
            <th colspan="7"><?php echo $respuesta->resultado->frecuencia; ?></th>
          </tr>
          <tr>


            <th  class="centered" style="background:rgb(218,238,243);">Linea Base</th>
            <th ><?php echo $respuesta->resultado->lineaBase; ?></th>
          </tr>

          <tr class="centered">
                    <td colspan="2" style="background:rgb(218,238,243);"><b>INICIATIVAS</b></td>
                    <td colspan="7"><?php echo $respuesta->resultado->iniciativas; ?></td>
          </tr>
          <!--  -->
        <!--  <tr style="color:white;" class="centered">
                <td style="background-color: #cc0000;"><b>ROJO</b></td>
                <td style="background-color: #ffcc00;"><b>AMARILLO</b></td>
                <td style="background-color: #006600;"><b>VERDE</b></td>
          </tr>-->

        <!--  <tr class="centered">


                    <td ><?php echo $respuesta->resultado->lineaBase; ?></td>
                    <td ><?php echo $respuesta->resultado->fv; ?></td>
                    <td ><?php echo $respuesta->resultado->frecuencia; ?></td>
                    <td id="t_rojo"><?php echo "0-".$respuesta->resultado->rojo; ?></td>
                    <td id="t_amarillo"><?php echo $respuesta->resultado->rojo."-".$respuesta->resultado->amarillo; ?></td>
                    <td id="t_verde"><?php echo $respuesta->resultado->amarillo."-".$respuesta->resultado->verde; ?></td>
          </tr>-->

                </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>
  <?php endif; ?>
  <div class="row mt">
    <div class="col-lg-12">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="custom-box">
          <div class="servicetitle">
            <h4>Gráfico por Curso y Periodo</h4>
            <hr>
          </div>

          <div id="chart-container"></div>
        </div>
        <!-- end custombox -->
      </div>
      <!-- end col-4 -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="custom-box">
          <div class="servicetitle">
            <h4>Data Histórica-General Por Curso y Periodo</h4>
            <hr>
          </div>
          <?php $bool=false; ?>
          <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <table class="table table-striped table-advance table-hover table-responsive">
              <thead>
                <tr>
                  <th><i class="fa fa-bullhorn"></i> Periodo</th>
                  <th><i class="fa fa-bookmark"></i> Curso</th>
                  <th><i class="fa fa-bookmark"></i> Nro Sedes</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Resultado</th>
                  <th><i class=" fa fa-edit"></i> Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 if($fuente_general->respuesta){

                   $filas=$fuente_general->resultado;
                   foreach ($filas as $fila) {
                     ?>
                <tr>
                  <td>
                    <a><?php echo $fila->periodo; ?></a>
                  </td>
                  <td>
                    <?php echo $fila->curso; ?>
                  </td>
                  <td>
                    <?php if ($fila->param1<3): $bool=true;?>

                    <?php endif; ?>
                    <?php echo $fila->param1.$retVal = ($fila->param1<3) ? "<b class='text-danger'>*</b>": "" ; ?>
                  </td>

                  <td class="hidden-phone"><?php echo $fila->resultado; ?></td>
                  <td>
                      <button class="btn btn-info btn-xs" onclick="ver_grafico('chart-container','<?php echo $respuesta->resultado->descripcion; ?>','<?php echo $fila->periodo; ?>',<?php echo $fila->resultado; ?>,<?php echo $respuesta->resultado->rojo; ?>,<?php echo $respuesta->resultado->amarillo; ?>,<?php echo $respuesta->resultado->verde; ?>);"><i class="fa fa-dashboard"></i> semáforo</button >
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
            <?php if ($bool): ?>
                <div class="alert alert-danger"><b>*</b>Solo se contabilizan el numero de sedes registradas</div>
            <?php endif; ?>


        </div>
          </div>


        </div>
        <!-- end custombox -->
      </div>
      <!-- end col-4 -->

    </div>
    <!--  /col-lg-12 -->
  </div>

  <div class="row mt">
    <div class="col-lg-12">
      <div class="custom-box">
        <div class="servicetitle">
          <h4><?php echo $respuesta->resultado->descripcion.'-Por Curso y Periodo'; ?>
          </h4>  <span><select id="periodo" name="periodo" class="pull-right" required onchange="llenar_grafico(<?php echo $_GET['idIndicador'] ;?>);">
            <option value="" disabled selected >Seleccione una opción</option>
            <?php if ($periodo->respuesta):
              $filas=$periodo->resultado;
              foreach ($filas as $fila){
                ?>
                <option value="<?php echo $fila->periodo; ?>"><?php echo $fila->periodo; ?></option>

                <?php

              } ?>

            <?php else: ?>
                <option value="" disabled  >Debe Ingresar Datos</option>
            <?php endif; ?>
              </select></span>
          <hr>
        </div>

            <div class="custom-bar-chart" id="graficoUno">



              </div>
    </div>
  </div>

  </div>

  <div class="row mt">
    <div class="col-lg-12">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="custom-box">
          <div class="servicetitle">
            <h4>Gráfico-Por periodo</h4>
            <hr>
          </div>

          <div id="chart-container-2"></div>
        </div>
        <!-- end custombox -->
      </div>
      <!-- end col-4 -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="custom-box">
          <div class="servicetitle">
            <h4>Data Histórica-General Por Periodo</h4>
            <hr>
          </div>

          <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <table class="table table-striped table-advance table-hover table-responsive">
              <thead>
                <tr>
                  <th><i class="fa fa-bullhorn"></i> Periodo</th>
                  <th><i class="fa fa-bookmark"></i> Nro Curso</th>

                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Resultado</th>
                  <th><i class=" fa fa-edit"></i> Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 if($fuente_general_curso->respuesta){

                   $filas=$fuente_general_curso->resultado;
                   foreach ($filas as $fila) {
                     ?>
                <tr>
                  <td>
                    <a><?php echo $fila->periodo; ?></a>
                  </td>

                  <td>
                    <?php if ($fila->param1<3): $bool=true;?>

                    <?php endif; ?>
                    <?php echo $fila->param1.$retVal = ($fila->param1<3) ? "<b class='text-danger'>*</b>": "" ; ?>
                  </td>

                  <td class="hidden-phone"><?php echo $fila->resultado; ?></td>
                  <td>
                      <button class="btn btn-info btn-xs" onclick="ver_grafico('chart-container-2','<?php echo $respuesta->resultado->descripcion; ?>','<?php echo $fila->periodo; ?>',<?php echo $fila->resultado; ?>,<?php echo $respuesta->resultado->rojo; ?>,<?php echo $respuesta->resultado->amarillo; ?>,<?php echo $respuesta->resultado->verde; ?>);"><i class="fa fa-dashboard"></i> semáforo</button >
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


        </div>
        <!-- end custombox -->
      </div>
      <!-- end col-4 -->

    </div>
    <!--  /col-lg-12 -->
  </div>

  <div class="row mt">
    <div class="col-lg-12">
      <div class="custom-box">
        <div class="servicetitle">
          <h4><?php echo $respuesta->resultado->descripcion.'-Por Periodo'; ?></h4>
          <hr>
        </div>

          <?php if ($fuente_general_curso->respuesta){?>
            <div class="custom-bar-chart">
                <ul class="y-axis">
                  <li><span>100</span></li>
                  <li><span>80</span></li>
                  <li><span>60</span></li>
                  <li><span>40</span></li>
                  <li><span>20</span></li>
                  <li><span>0</span></li>
                </ul>
                <?php
                  $filas=$fuente_general_curso->resultado;
                  foreach ($filas as $fila) {
                  ?>
                <div class="bar">
                  <div class="title" ><?php echo $fila->periodo; ?></div>
                  <div class="value tooltips" data-original-title="<?php echo ($fila->resultado); ?>" data-toggle="tooltip" data-placement="top"><?php echo ($fila->resultado)."%"; ?></div>

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
  <div class="row">
    <div class="col-lg-12">
      <div class="custom-box">
        <div class="servicetitle">
          <h4>Datos Por Sedes</h4>
          <hr>
        </div>
        <div class="row">
          <div class="panel-heading">
            <ul class="nav nav-tabs nav-justified">
              <li class="active" >
                <a data-toggle="tab" href="#trujillo"  aria-expanded="true">TRUJILLO</a>
              </li>
              <li class="" >
                <a data-toggle="tab" href="#valle"   aria-expanded="true">VALLE</a>
              </li>
              <li class="">
                <a data-toggle="tab" href="#huamachuco"   aria-expanded="true">HUAMACHUCO</a>
              </li>
            </ul>
          </div>


            <script src="recursos/dashio/lib/xchart/d3.v3.min.js"></script>
            <script src="recursos/dashio/lib/xchart/xcharts.min.js"></script>
        <!-- /panel-heading -->
        <div class="panel-body">
          <div class="tab-content">
                <div id="trujillo" class="tab-pane active">


                      <?php require 'graficoTrujillo.php'; ?>

                </div>
                <div id="valle" class="tab-pane ">


                        <?php require 'graficosValle.php'; ?>
                </div>
                <div id="huamachuco" class="tab-pane">
                    <?php require 'graficoHuamachuco.php'; ?>


                </div>



            </div>
        </div>
      </div>  <!-- /tab-pane -->

            <!-- /tab-pane -->

            <!-- /tab-pane -->
    </div>
          <!-- /tab-content -->
  </div>
        <!-- /panel-body -->
</div>
  <script>
    function ver_grafico(id,nombre,periodo,resultado,rojo,amarillo,verde) {
    const dataSource = {
    chart: {
      caption: nombre,
      subcaption: periodo,
      lowerlimit: "0",
      upperlimit: "100",
      showvalue: "1",
      numbersuffix: "%",
      theme: "gammel",
      chartBottomMargin: "5",
      showtooltip: "0"
    },
    colorrange: {
      color: [
        {
          minvalue: "0",
          maxvalue: rojo,
          code: "#F2726F"
        },
        {
          minvalue:rojo,
          maxvalue: amarillo,
          code: "#FFC533"
        },
        {
          minvalue: amarillo,
          maxvalue: verde,
          code: "#62B58F"
        }
      ]
    },
    dials: {
      dial: [
        {
          value: resultado
        }
      ]
    }
    };
    var myChart = new FusionCharts({
      type: "angulargauge",
      renderAt: id,
      width: "100%",
      height: "100%",
      dataFormat: "json",
      dataSource
    }).render();

  }
  </script>
