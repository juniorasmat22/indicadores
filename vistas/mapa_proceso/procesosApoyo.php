<?php
namespace controladores;
$subProcesoControlador = new SubProcesoControlador();
$subProcesoControlador->entidad->estado=1
 ?>
<div class="row mt">
          <div class="col-lg-12">
            <?php if ($apoyo->respuesta) {$filas=$apoyo->resultado;?>
              <?php if (count($filas)>0):  ?>
              <div class="row">
                <?php foreach ($filas as $fila): ?>

                    <div class="col-md-4 col-sm-4 mb">
                      <div class="grey-panel">
                        <div class="grey-header">
                          <h5><?php echo $fila->nombre; ?></h5>
                        </div>
                        <div class="row mt">
                          <div class="col-md-12">
                            <section class="task-panel tasks-widget">
                              <div class="panel-heading">
                                <div class="pull-left">
                                  <h5><i class="fa fa-tasks"></i> Sub Procesos <span class="badge bg-theme">nivel 2</span></h5>
                                </div>
                                <br>
                              </div>
                              <div class="panel-body">
                                <div class="task-content">
                                  <ul class="task-list">
                                    <?php
                                      $subProcesoControlador->entidad->idProceso=$fila->idProceso;
                                      $subPorcesos = $subProcesoControlador->modelo->listar_subprocesos($subProcesoControlador->entidad);
                                      if ($subPorcesos->respuesta) {
                                        $c=0;
                                        $filas2=$subPorcesos->resultado;
                                        foreach ($filas2 as $fila) :$c=$c+1;?>
                                        <li>
                                          <div class="task-title">
                                            <span class="task-title-sp"><?php echo $fila->nombre; ?></span>

                                            <div class="pull-right hidden-phone">
                                              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </div>
                                          </div>
                                        </li>
                                        <?php endforeach;
                                      }
                                     ?>
                                  </ul>
                                </div>
                              </div>
                            </section>
                          </div>
                          <!-- /col-md-12-->
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-xs-6 goleft">
                            <p>Código:<?php echo $fila->idProceso; ?></p>
                          </div>
                        </div>
                      </div>
                      <!-- /grey-panel -->
                    </div>
                    <!-- /col-md-4-->


                <?php endforeach; ?>
                </div>
              <?php else: ?>
                  <div class="alert alert-danger"><b>Oh no!</b> Aun no tiene procesos Estrátegico Registrados</div>
              <?php endif; ?>

            <?php  } else {?>
                <div class="alert alert-danger"><b>Oh snap!</b> Change a few things up and try submitting again.</div>
            <?php   }
             ?>
            <!-- CHART PANELS -->


          </div>
</div>
