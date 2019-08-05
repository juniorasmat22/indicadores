<table class="table table-striped table-advance table-hover">
  <h4><i class="fa fa-angle-right"></i> Listado de Data Fuente</h4>
  <hr>
  <thead>
    <tr>
      <th><i class="fa fa-bullhorn"></i> Periodo</th>
      <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param1; ?></th>
      <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param2; ?></th>
      <th class="hidden-phone"><i class="fa fa-bookmark"></i> <?php echo $dataModal->resultado->param3; ?></th>
      <th class="hidden-phone"><i class="fa fa-question-circle"></i>Resultado</th>
      <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Inicio</th>
      <th class="hidden-phone"><i class="fa fa-question-circle"></i>Fecha Fin</th>
      <th><i class=" fa fa-edit"></i> Estado</th>
      <th><i class=" fa fa-edit"></i> Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if($respuesta->respuesta){
       $filas=$respuesta->resultado;
       foreach ($filas as $fila) {
         ?>
    <tr>
      <td>
        <a href="#"><?php echo $fila->periodo; ?></a>
      </td>
      <td class="hidden-phone"><?php echo $fila->param1; ?></td>
      <td class="hidden-phone"><?php echo $fila->param2; ?></td>
      <td class="hidden-phone"><?php echo $fila->param3; ?></td>
      <td class="hidden-phone"><?php echo $fila->resultado; ?></td>
      <td class="hidden-phone"><?php echo $fila->inicio; ?></td>
      <td class="hidden-phone"><?php echo $fila->fin; ?></td>
      <?php if ($fila->estado==1): ?>
        <td><span class="label label-success label-mini">activo</span></td>
      <?php else: ?>
        <td><span class="label label-danger label-mini">inactivo</span></td>
      <?php endif; ?>

      <td>
        <a <?php echo "href='?c=unidadNegocio'"; ?> class="btn btn-primary btn-xs editar"><i class="fa fa-pencil"></i></a>
        <a <?php echo "href='?c=unidadNegocio&a=eliminar'"; ?>class="btn btn-danger btn-xs eliminar"><i class="fa fa-trash-o "></i></a>
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
