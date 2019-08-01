<div class="row mt">
          <div class="col-lg-12">
            <?php if ($misional->respuesta) {$filas=$misional->resultado;?>
              <?php if (count($filas)>0):  ?>
              <div class="row">
                <?php foreach ($filas as $fila): ?>

                    <div class="col-md-3 col-sm-3 mb">
                      <div class="grey-panel pn donut-chart">
                        <div class="grey-header">
                          <h5><?php echo $fila->nombre; ?></h5>
                        </div>

                        <div class="row">
                          <div class="col-sm-6 col-xs-6 goleft">
                            <p>Codigo:</p>
                          </div>
                          <div class="col-sm-6 col-xs-6">
                            <h2><?php echo $fila->idProceso; ?></h2>
                          </div>
                        </div>
                      </div>
                      <!-- /grey-panel -->
                    </div>
                    <!-- /col-md-4-->


                <?php endforeach; ?>
                </div>
              <?php else: ?>
                  <div class="alert alert-danger"><b>Oh no!</b> Aun no tiene procesos Misionales Registrados</div>
              <?php endif; ?>

            <?php  } else {?>
                <div class="alert alert-danger"><b>Oh snap!</b> ocurrio un eror al traer los datos.</div>
            <?php   }
             ?>
            <!-- CHART PANELS -->


          </div>
</div>
