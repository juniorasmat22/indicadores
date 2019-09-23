
    <div class="custom-box">
      <div class="servicetitle">
        <h4>Datos Por Sedes</h4>
        <hr>
      </div>
      <div class="row">
        <div class="panel-heading">
          <ul class="nav nav-tabs nav-justified">
            <li class="active">
              <a data-toggle="tab" href="#overview" aria-expanded="false">TRUJILLO</a>
            </li>
            <li class="">
              <a data-toggle="tab" href="#contact"  aria-expanded="false">VALLE</a>
            </li>
            <li class="">
              <a data-toggle="tab" href="#edit" aria-expanded="false">HUAMACHUCO</a>
            </li>
          </ul>
        </div>
        <!-- /panel-heading -->
        <div class="panel-body">
          <div class="tab-content">
            <div id="overview" class="tab-pane active">
              <div class="row">
                <div class="col-lg-12">
                  <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i> Listado de Data Fuente</h4>
                    <hr>
                    <thead>
                      <?php if ($dataModal->respuesta): ?>
                        <tr>
                          <th><i class="fa fa-bullhorn"></i> Periodo</th>
                          <?php if ($_GET['idIndicador']==26||$_GET['idIndicador']==27): ?>
                            <th><i class="fa fa-bookmark"></i> Curso</th>
                          <?php endif; ?>
                          <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param1; ?></th>
                          <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param2; ?></th>
                          <?php if ($dataModal->resultado->param3!="0"): ?>
                          <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param3; ?></th>
                          <?php endif; ?>

                          <th class="hidden-phone"><i class="fa fa-question-circle"></i>Resultado</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Inicio</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Fin</th>
                          <th><i class=" fa fa-edit"></i> Estado</th>
                          <th><i class=" fa fa-edit"></i> Opciones</th>
                        </tr>
                      <?php else: ?>
                        <tr>
                          <th>
                          <div class="alert alert-danger centered"><b>Debe registrar la fórmula para poder ingresar y visualizar los datos</b></div>
                          </th>
                        </tr>
                      <?php endif; ?>

                    </thead>

                    <tbody>
                      <?php
                       if($respuesta->respuesta){

                         $filas=$respuesta->resultado;
                         foreach ($filas as $fila) {
                           if ($fila->sede==1) {?>
                             <tr>
                               <td>
                                 <a href="#"><?php echo $fila->periodo; ?></a>
                               </td>
                               <?php if ($_GET['idIndicador']==26||$_GET['idIndicador']==27): ?>
                                 <td class="hidden-phone"><?php echo $fila->curso; ?></td>
                               <?php endif; ?>

                               <td class="hidden-phone"><?php echo $fila->param1; ?></td>
                               <td class="hidden-phone"><?php echo $fila->param2; ?></td>
                               <?php if ($fila->param3!="0"): ?>
                                 <td class="hidden-phone"><?php echo $fila->param3; ?></td>
                               <?php endif; ?>
                               <td class="hidden-phone"><?php echo $fila->resultado; ?></td>
                               <td class="hidden-phone"><?php echo $fila->inicio; ?></td>
                               <td class="hidden-phone"><?php echo $fila->fin; ?></td>
                               <?php if ($fila->estado==1): ?>
                                 <td><span class="label label-success label-mini">activo</span></td>
                               <?php else: ?>
                                 <td><span class="label label-danger label-mini">inactivo</span></td>
                               <?php endif; ?>

                               <td>
                                 <a <?php echo "href='?c=fuente&a=get&idFuente=$fila->idFuente'"; ?> class="btn btn-primary btn-xs editar "><i class="fa fa-pencil"></i></a>
                                 <a <?php echo "href='?c=fuente&a=eliminar&idFuente=$fila->idFuente'"; ?>class="btn btn-danger btn-xs eliminar"><i class="fa fa-trash-o "></i></a>
                               </td>
                             </tr>
                           <?php }
                           ?>


                      <?php
                          }
                        }else{
                          ?>
                          <tr>

                            <td colspan="6"><div class="alert alert-danger centered"><b> No existen datos para mostar sede TRUJILLO</b></div></td>

                          </tr>
                          <?php
                        }
                      ?>
                    </tbody>

                  </table>

                </div>
                <!--  /col-lg-12 -->
              </div>
            
              <!-- /OVERVIEW -->
            </div>
            <!-- /tab-pane -->
            <div id="contact" class="tab-pane">
              <div class="row">
                <div class="col-lg-12">
                  <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i> Listado de Data Fuente</h4>
                    <hr>
                    <thead>
                      <?php if ($dataModal->respuesta): ?>
                        <tr>
                          <th><i class="fa fa-bullhorn"></i> Periodo</th>
                          <?php if ($_GET['idIndicador']==26||$_GET['idIndicador']==27): ?>
                            <th><i class="fa fa-bookmark"></i> Curso</th>
                          <?php endif; ?>
                          <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param1; ?></th>
                          <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param2; ?></th>
                          <?php if ($dataModal->resultado->param3!="0"): ?>
                          <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param3; ?></th>
                          <?php endif; ?>

                          <th class="hidden-phone"><i class="fa fa-question-circle"></i>Resultado</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Inicio</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Fin</th>
                          <th><i class=" fa fa-edit"></i> Estado</th>
                          <th><i class=" fa fa-edit"></i> Opciones</th>
                        </tr>
                      <?php else: ?>
                        <tr>
                          <th>
                          <div class="alert alert-danger centered"><b>Debe registrar la fórmula para poder ingresar y visualizar los datos</b></div>
                          </th>
                        </tr>
                      <?php endif; ?>

                    </thead>

                    <tbody>
                      <?php
                       if($respuesta->respuesta){
                         $filas=$respuesta->resultado;
                         foreach ($filas as $fila) {
                           if ($fila->sede==2) {?>
                             <tr>
                               <td>
                                 <a ><?php echo $fila->periodo; ?></a>
                               </td>
                               <?php if ($_GET['idIndicador']==26||$_GET['idIndicador']==27): ?>
                                 <td class="hidden-phone"><?php echo $fila->curso;  ?></td>
                               <?php endif; ?>
                               <td class="hidden-phone"><?php echo $fila->param1; ?></td>
                               <td class="hidden-phone"><?php echo $fila->param2; ?></td>
                               <?php if ($fila->param3!="0"): ?>
                                 <td class="hidden-phone"><?php echo $fila->param3; ?></td>
                               <?php endif; ?>
                               <td class="hidden-phone"><?php echo $fila->resultado; ?></td>
                               <td class="hidden-phone"><?php echo $fila->inicio; ?></td>
                               <td class="hidden-phone"><?php echo $fila->fin; ?></td>
                               <?php if ($fila->estado==1): ?>
                                 <td><span class="label label-success label-mini">activo</span></td>
                               <?php else: ?>
                                 <td><span class="label label-danger label-mini">inactivo</span></td>
                               <?php endif; ?>

                               <td>
                                 <a <?php echo "href='?c=fuente&a=get&idFuente=$fila->idFuente'"; ?> class="btn btn-primary btn-xs editar "><i class="fa fa-pencil"></i></a>
                                 <a <?php echo "href='?c=fuente&a=eliminar&idFuente=$fila->idFuente'"; ?>class="btn btn-danger btn-xs eliminar"><i class="fa fa-trash-o "></i></a>
                               </td>
                             </tr>
                           <?php }
                           ?>


                      <?php
                          }
                        }else{
                          ?>
                          <tr>

                            <td colspan="6"><div class="alert alert-danger centered"><b> No existen datos para mostar sede EL VALLE</b></div></td>

                          </tr>
                          <?php
                        }
                      ?>
                    </tbody>

                  </table>
                </div>
                <!--  /col-lg-12 -->
              </div>
            </div>
            <!-- /tab-pane -->
            <div id="edit" class="tab-pane">
              <div class="row">
                <div class="col-lg-12">
                  <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i> Listado de Data Fuente</h4>
                    <hr>
                    <thead>
                      <?php if ($dataModal->respuesta): ?>
                        <tr>
                          <th><i class="fa fa-bullhorn"></i> Periodo</th>
                          <?php if ($_GET['idIndicador']==26||$_GET['idIndicador']==27): ?>
                            <th><i class="fa fa-bookmark"></i> Curso</th>
                          <?php endif; ?>
                          <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param1; ?></th>
                          <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param2; ?></th>
                          <?php if ($dataModal->resultado->param3!="0"): ?>
                          <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param3; ?></th>
                          <?php endif; ?>

                          <th class="hidden-phone"><i class="fa fa-question-circle"></i>Resultado</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Inicio</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Fin</th>
                          <th><i class=" fa fa-edit"></i> Estado</th>
                          <th><i class=" fa fa-edit"></i> Opciones</th>
                        </tr>
                      <?php else: ?>
                        <tr>
                          <th>
                          <div class="alert alert-danger centered"><b>Debe registrar la fórmula para poder ingresar y visualizar los datos</b></div>
                          </th>
                        </tr>
                      <?php endif; ?>

                    </thead>

                    <tbody>
                      <?php
                       if($respuesta->respuesta){
                         $filas=$respuesta->resultado;
                         foreach ($filas as $fila) {
                           if ($fila->sede==3) {?>
                             <tr>
                               <td>
                                 <a href="#"><?php echo $fila->periodo; ?></a>
                               </td>
                               <?php if ($_GET['idIndicador']==26||$_GET['idIndicador']==27): ?>
                                 <td class="hidden-phone"><?php echo $fila->curso;  ?></td>
                               <?php endif; ?>
                               <td class="hidden-phone"><?php echo $fila->param1; ?></td>
                               <td class="hidden-phone"><?php echo $fila->param2; ?></td>
                               <?php if ($fila->param3!="0"): ?>
                                 <td class="hidden-phone"><?php echo $fila->param3; ?></td>
                               <?php endif; ?>
                               <td class="hidden-phone"><?php echo $fila->resultado; ?></td>
                               <td class="hidden-phone"><?php echo $fila->inicio; ?></td>
                               <td class="hidden-phone"><?php echo $fila->fin; ?></td>
                               <?php if ($fila->estado==1): ?>
                                 <td><span class="label label-success label-mini">activo</span></td>
                               <?php else: ?>
                                 <td><span class="label label-danger label-mini">inactivo</span></td>
                               <?php endif; ?>

                               <td>
                                 <a <?php echo "href='?c=fuente&a=get&idFuente=$fila->idFuente'"; ?> class="btn btn-primary btn-xs editar "><i class="fa fa-pencil"></i></a>
                                 <a <?php echo "href='?c=fuente&a=eliminar&idFuente=$fila->idFuente'"; ?>class="btn btn-danger btn-xs eliminar"><i class="fa fa-trash-o "></i></a>
                               </td>
                             </tr>
                           <?php }
                           ?>


                      <?php
                          }
                        }else{
                          ?>
                          <tr>

                            <td colspan="6"><div class="alert alert-danger centered"><b> No existen datos para mostar sede HUAMACHUCO.</b></div></td>

                          </tr>
                          <?php
                        }
                      ?>
                    </tbody>

                  </table>

                </div>
                <!--  /col-lg-12 -->
              </div>
              <!-- /row -->
            </div>
            <!-- /tab-pane -->
          </div>
          <!-- /tab-content -->
        </div>
        <!-- /panel-body -->
      </div>
    </div>
