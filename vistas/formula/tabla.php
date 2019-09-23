<table class="table table-striped table-advance table-hover">
  <h4><i class="fa fa-angle-right"></i> Listado de Fórmula</h4>
  <hr>
  <thead>
    <tr>
      <th><i class="fa fa-bullhorn"></i> Formula</th>
      <th><i class="fa fa-bookmark"></i>Parámetro 1</th>
      <th><i class="fa fa-bookmark"></i>Parámetro 2</th>
      <th><i class="fa fa-bookmark"></i>Parámetro 3</th>
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
      <td class="hidden-phone">
        <a ><?php echo $fila->formula; ?></a>
      </td>
      <td class="hidden-phone"><?php echo $retVal = ($fila->param1=='0') ? "-" : $fila->param1 ;  ?></td>
      <td class="hidden-phone"><?php echo $retVal = ($fila->param2=='0') ? "-" : $fila->param2 ;  ?></td>
      <td class="hidden-phone"><?php echo $retVal = ($fila->param3=='0') ? "-" : $fila->param3 ;  ?></td>

      <?php if ($fila->estado==1): ?>
        <td><span class="label label-success label-mini">activo</span></td>
      <?php else: ?>
        <td><span class="label label-danger label-mini">inactivo</span></td>
      <?php endif; ?>

      <td>

        <a <?php echo "href='?c=formula&a=get&idFormula=$fila->idFormula'"; ?> class="btn btn-primary btn-xs editar"><i class="fa fa-pencil"></i></a>
        <a <?php echo "href='?c=formula&a=eliminar&idFormula=$fila->idFormula'"; ?>class="btn btn-danger btn-xs eliminar"><i class="fa fa-trash-o "></i></a>
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
