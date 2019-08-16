<h3><i class="fa fa-angle-right"></i> Tablero de Comando</h3>
<a href="?c=indicador&a=listarIndicadores&idSubproceso=<?php echo $_GET['idSubproceso']; ?>&idMapaProcesos=<?php echo $_GET['idMapaProcesos']; ?>&proceso=<?php echo $_GET['proceso'] ?>" type="button" class="btn btn-theme" ><i class="fa fa-eye"></i> Ver Indicadores</a>
<?php if ($respuesta->respuesta): ?>
  <div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
          <table class="table table-striped table-advance table-hover table-bordered">
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
            <th colspan="2" class="centered">Responsable</th>
            <th colspan="7"><?php echo $respuesta->resultado->responsable; ?></th>
          </tr>
          <tr class="centered">

                <td rowspan='2' colspan="2" style="padding-top: 25px;"><b>Fórmula</b></td>
                <td rowspan='2'style="padding-top: 25px;"><b>Linea Base</td>
                <td rowspan='2' style="padding-top: 25px;"><b>Fuente de Verificación</b></td>
                <td rowspan='2' style="padding-top: 25px;"><b>Frecuencia</b></td>
                <td colspan='3'><b>Semáforo</b></td>
          </tr>
          <tr style="color:white;" class="centered">
                <td style="background-color: #cc0000;"><b>ROJO</b></td>
                <td style="background-color: #ffcc00;"><b>AMARILLO</b></td>
                <td style="background-color: #006600;"><b>VERDE</b></td>
          </tr>
          <tr class="centered">

                    <td colspan="2" ><?php echo $formula->resultado->formula; ?></td>
                    <td ><?php echo $respuesta->resultado->lineaBase; ?></td>
                    <td ><?php echo $respuesta->resultado->fv; ?></td>
                    <td ><?php echo $respuesta->resultado->frecuencia; ?></td>
                    <td id="t_rojo"><?php echo "0-".$respuesta->resultado->rojo; ?></td>
                    <td id="t_amarillo"><?php echo $respuesta->resultado->rojo."-".$respuesta->resultado->amarillo; ?></td>
                    <td id="t_verde"><?php echo $respuesta->resultado->amarillo."-".$respuesta->resultado->verde; ?></td>
          </tr>
          <tr>
                    <td colspan="2"><b>INICIATIVAS</b></td>
                    <td colspan="7"><?php echo $respuesta->resultado->iniciativas; ?></td>
          </tr>
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
            <table class="table table-striped table-advance table-hover">

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
