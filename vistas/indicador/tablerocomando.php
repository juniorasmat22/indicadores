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
            <th colspan="7"><?php echo $respuesta->resultado->responsable; ?></th>
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
  <div class="row">
    <div class="col-lg-12">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="custom-box">
          <div class="servicetitle">
            <h4>Gráfico</h4>
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
            <h4>Data Histórica</h4>
            <hr>
          </div>
          <div class="icn-main-container">
            <table class="table table-striped table-advance table-hover table-responsive">

              <hr>
              <thead>
                <tr>
                  <th><i class="fa fa-bullhorn"></i> Periodo</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Inicio</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Fin</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Resultado</th>
                  <th><i class=" fa fa-edit"></i> Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 if($fuente->respuesta){
                   $filas=$fuente->resultado;
                   foreach ($filas as $fila) {
                     ?>
                <tr>
                  <td>
                    <a href="#"><?php echo $fila->periodo; ?></a>
                  </td>
                  <td class="hidden-phone"><?php echo $fila->inicio; ?></td>
                  <td class="hidden-phone"><?php echo $fila->fin; ?></td>
                  <td class="hidden-phone"><?php echo $fila->resultado; ?></td>
                  <td>
                      <button class="btn btn-info btn-xs" onclick="ver_grafico('<?php echo $respuesta->resultado->descripcion; ?>','<?php echo $fila->periodo; ?>',<?php echo $fila->resultado; ?>,<?php echo $respuesta->resultado->rojo; ?>,<?php echo $respuesta->resultado->amarillo; ?>,<?php echo $respuesta->resultado->verde; ?>);"><i class="fa fa-dashboard"></i> semáforo</button >
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
  <!--grafico de barra-->
  <div class="row">
    <div class="col-lg-12">
      <div class="custom-box">
        <div class="servicetitle">
          <h4>Gráfico de barras</h4>
          <hr>
        </div>


            <figure class="demo-xchart" id="chart"></figure>



      </div>
    </div>
  </div>
<div class="row">
  <div class="col-lg-12">
    <div class="custom-box">
      <div class="servicetitle">
        <h4><?php echo $respuesta->resultado->descripcion; ?></h4>
        <hr>

          <div class="custom-bar-chart">
            <ul class="y-axis">
              <li><span>100</span></li>
              <li><span>80</span></li>
              <li><span>60</span></li>
              <li><span>40</span></li>
              <li><span>20</span></li>
              <li><span>0</span></li>
            </ul>
            <?php if ($fuente->respuesta){
              $filas=$fuente->resultado;
              foreach ($filas as $fila) {
              ?>
            <div class="bar">
              <div class="title"><?php echo $fila->periodo; ?></div>
              <div class="value tooltips" data-original-title="<?php echo ($fila->resultado); ?>" data-toggle="tooltip" data-placement="top"><?php echo ($fila->resultado)."%"; ?></div>

            </div>


          <?php
              }

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
<?php else: ?>
  <div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
          <table class="table table-advance table-hover table-bordered cell-border" style="background-color: white;">
            <tr>

              <td colspan="6"><div class="alert alert-danger"><b>Oh no!</b>Aún no existen datos para mostar.</div></td>

            </tr>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>
<?php endif; ?>
<script src="recursos/dashio/lib/xchart/d3.v3.min.js"></script>
  <script src="recursos/dashio/lib/xchart/xcharts.min.js"></script>";
<script>
  function ver_grafico(nombre,periodo,resultado,rojo,amarillo,verde) {
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
    renderAt: "chart-container",
    width: "100%",
    height: "100%",
    dataFormat: "json",
    dataSource
  }).render();

}
</script>
<script>
<?php
  if ($fuente->respuesta) {
    $filas=$fuente->resultado;
    ?>
    (function() {
                var data = [{
              "xScale": "ordinal",
              "comp": [],
              "main": [{
                "className": ".main.l1",
                "data": [
                  <?php
                    foreach ($filas as $fila) {?>
                  {
                  "y": "<?php echo $fila->resultado; ?>",
                  "x": "<?php echo $fila->periodo; ?>-11-19T00:00:00"
                },
                  <?php } ?>
                ]
              }],
              "type": "line-dotted",
              "yScale": "linear"
            }, {
              "xScale": "ordinal",
              "comp": [],
              "main": [{
                "className": ".main.l1",
                "data": [
                  <?php
                    foreach ($filas as $fila) {?>
                      {
                      "y": "<?php echo $fila->resultado; ?>",
                      "x": "<?php echo $fila->periodo; ?>-11-20T00:00:00"
                    },
                  <?php } ?>
                ]
              }],
              "type": "cumulative",
              "yScale": "linear"
            }, {
              "xScale": "ordinal",
              "comp": [],
              "main": [{
                "className": ".main.l1",
                "data": [
                  <?php
                    foreach ($filas as $fila) {?>
                      {
                      "y": "<?php echo $fila->resultado; ?>",
                      "x": "<?php echo $fila->periodo; ?>-11-19T00:00:00"
                    },
                  <?php } ?>
                ]
              }],
              "type": "bar",
              "yScale": "linear"
            }];
            var order = [0, 1, 0, 2],
              i = 0,
              xFormat = d3.time.format('%Y'),
              chart = new xChart('line-dotted', data[order[i]], '#chart', {
                axisPaddingTop: 5,
                dataFormatX: function(x) {
                  return new Date(x);
                },
                tickFormatX: function(x) {
                  return xFormat(x);
                },
                timing: 1250
              }),
              rotateTimer,
              toggles = d3.selectAll('.multi button'),
              t = 3500;

            function updateChart(i) {
              var d = data[i];
              chart.setData(d);
              toggles.classed('toggled', function() {
                return (d3.select(this).attr('data-type') === d.type);
              });
              return d;
            }

            toggles.on('click', function(d, i) {
              clearTimeout(rotateTimer);
              updateChart(i);
            });

            function rotateChart() {
              i += 1;
              i = (i >= order.length) ? 0 : i;
              var d = updateChart(order[i]);
              rotateTimer = setTimeout(rotateChart, t);
            }
            rotateTimer = setTimeout(rotateChart, t);
          }());

        <?php

  } else {
echo "<div class='alert alert-danger'><b>Oh no!</b>Aún no existen datos para mostar.</div>";
  }
 ?>


//


</script>
