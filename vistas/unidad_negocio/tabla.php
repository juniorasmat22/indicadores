<table class="table table-striped table-advance table-hover">
  <h4><i class="fa fa-angle-right"></i> Listado de Unidades de Negocio</h4>
  <hr>
  <thead>
    <tr>
      <th><i class="fa fa-bullhorn"></i> Nombre</th>
      <th class="hidden-phone"><i class="fa fa-question-circle"></i>Descripción</th>
      <th><i class=" fa fa-edit"></i> Estado</th>
      <th><i class=" fa fa-edit"></i> Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if($respuesta->respuesta){
       $filas=$respuesta->resultado->objetos;
       foreach ($filas as $fila) {
         ?>
    <tr>
      <td>
        <a href="basic_table.html#"><?php echo $fila->nombre; ?></a>
      </td>
      <td class="hidden-phone"><?php echo $fila->descripcion; ?></td>
      <?php if ($fila->estado==1): ?>
        <td><span class="label label-success label-mini">activo</span></td>
      <?php else: ?>
        <td><span class="label label-danger label-mini">inactivo</span></td>
      <?php endif; ?>

      <td>
        <a <?php echo "href='?c=unidadNegocio&a=get&idUnidadNegocio=$fila->idUnidadNegocio&idEmpresa=$fila->idEmpresa'"; ?> class="btn btn-primary btn-xs editar"><i class="fa fa-pencil"></i></a>
        <a <?php echo "href='?c=unidadNegocio&a=eliminar&idUnidadNegocio=$fila->idUnidadNegocio'"; ?>class="btn btn-danger btn-xs eliminar"><i class="fa fa-trash-o "></i></a>
      </td>
    </tr>
    <?php
        }
      }else{
        ?>
        <tr>

          <td colspan="6"><div class="alert alert-danger"><b>Oh no!</b>Aún no existen datos para mostar.</div></td>

        </tr>


        <script type="text/javascript">alert('error al obtener datos')</script>
        <?php
      }
    ?>
  </tbody>
</table>
