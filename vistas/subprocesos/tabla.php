<table class="table table-striped table-advance table-hover">
  <h4><i class="fa fa-angle-right"></i> Listado de Sub Procesos</h4>
  <hr>
  <thead>
    <tr>
      <th><i class="fa fa-bullhorn"></i> Nombre</th>
      <th><i class="fa fa-bookmark"></i>Descripción</th>
      <th><i class=" fa fa-edit"></i> Estado</th>
      <th><i class=" fa fa-edit"></i> Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php

     if($respuesta->respuesta){
       $filas=$respuesta->resultado;
       if (count($filas)>0) {//cuento los datos que trae
         foreach ($filas as $fila) {
           ?>
      <tr>
        <td>
          <a href=""><?php echo $fila->nombre; ?></a>
        </td>
        <td><?php echo $fila->descripcion; ?></td>
        <?php if ($fila->estado==1): ?>
          <td><span class="label label-success label-mini">activo</span></td>
        <?php else: ?>
          <td><span class="label label-danger label-mini">inactivo</span></td>
        <?php endif; ?>

        <td>
          <a <?php echo "href='?c=subproceso&a=get&idProceso=$fila->idProceso&idSubproceso=$fila->idSubproceso'"; ?> class="btn btn-primary btn-xs editar"><i class="fa fa-pencil"></i></a>
          <a <?php echo "href='?c=subproceso&a=eliminar&idSubproceso=$fila->idSubproceso'"; ?>class="btn btn-danger btn-xs eliminar"><i class="fa fa-trash-o "></i></a>
        </td>
      </tr>
      <?php
          }
       }else {
         ?>
         <tr>

           <td colspan="6"><div class="alert alert-danger"><b>Oh no!</b>Aún no existen datos para mostar.</div></td>

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
