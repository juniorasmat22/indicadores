<?php
namespace controladores;
$subProcesoControlador = new SubProcesoControlador();
$subProcesoControlador->entidad->estado=1;
$verifica_subprocesos=false;
 ?>
<div class="row mt">
          <div class="col-lg-12">
            <?php if ($estrategicos->respuesta) {$filas=$estrategicos->resultado;?>
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
                                  <h5><i class="fa fa-tasks"></i> Sub Procesos <span class="badge bg-theme">nivel 1</span></h5>
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
                                            <div class="accordion-group">
                                              <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" type="button" class=""href="faq.html#<?php echo $c.$fila->idSubproceso;  ?>">
                                                  <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em><?php echo $fila->nombre; ?>
                                                  </a>
                                              </div>
                                              <div id="<?php echo $c.$fila->idSubproceso; ?>" class="accordion-body collapse">
                                                <div class="panel-heading">
                                                  <div class="pull-left">
                                                    <h5><i class="fa fa-tasks"></i> Sub Procesos <span class="badge bg-theme">nivel 2</span></h5>
                                                  </div>
                                                  <br>
                                                </div>
                                                <div class="accordion-inner">
                                                  <div class="panel-body">
                                                    <div class="task-content">
                                                      <ul class="task-list">
                                                  <?php

                                                    $subProcesoControlador->entidad->idSubPro=$fila->idSubproceso;
                                                    $subPorcesosSubnivel = $subProcesoControlador->modelo->listar_subprocesosNivel($subProcesoControlador->entidad);
                                                    //var_dump($subPorcesosSubnivel);
                                                    if ($subPorcesosSubnivel->respuesta) {
                                                      $verifica_subprocesos=true;
                                                      $filas3=$subPorcesosSubnivel->resultado;
                                                    foreach ($filas3 as $fila3): ?>
                                                    <li>
                                                    <div class="task-title">
                                                      <div class="accordion-group">
                                                        <div class="accordion-heading">
                                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" type="button" class=""href="faq.html#<?php echo $c.$fila3->idSubproceso.$fila3->idSubPro ; ?>">
                                                            <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em><?php echo $fila3->nombre; ?>
                                                            </a>
                                                        </div>
                                                        <div id="<?php echo $c.$fila3->idSubproceso.$fila3->idSubPro; ?>" class="accordion-body collapse">
                                                          <div class="accordion-inner">
                                                            <p><?php echo $fila3->descripcion; ?></p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="pull-right hidden-phone">
                                                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                      </div>
                                                    </div>
                                                  </li>
                                                      <?php endforeach;
                                                    }else {
                                                      $verifica_subprocesos=false;
                                                    echo "<div class='alert alert-danger'>Aun no tiene subprocesos de nivel 2 para este subproceso</div>";
                                                    }
                                                   ?>

                                                  <p><?php echo $fila->descripcion; ?></p>

                                                  </ul>
                                                </div>
                                              </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="pull-right hidden-phone">
                                              <?php echo $retVal = (!$verifica_subprocesos) ? "<a href='?c=indicador&a=listarIndicadores&idSubproceso=$fila->idSubproceso&idMapaProcesos=$_GET[idMapaProcesos]&proceso=$fila->nombre' class='btn btn-success btn-xs'><i class='fa fa-check'></i></a >" :  ""  ;?>

                                              <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </div>
                                          </div>
                                        </li>
                                        <?php $verifica_subprocesos=false; endforeach;
                                      }else{
                                        echo "<div class='alert alert-danger'>Aun no tiene subprocesos para este Proceso</div>";
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
                          <div class="col-sm-6 col-xs-6">
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
                  <div class="alert alert-danger"><b>Oh no!</b> Aun no tiene procesos Estratégicos Registrados</div>
              <?php endif; ?>

            <?php  } else {?>
                <div class="alert alert-danger"><b>Oh snap!</b> ocurrio un eror al traer los datos.</div>
            <?php   }
             ?>
            <!-- CHART PANELS -->


          </div>
</div>
