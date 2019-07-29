<table class="table table-striped table-advance table-hover">
  <h4><i class="fa fa-angle-right"></i> Listado de Empresas</h4>
  <hr>
  <thead>
    <tr>
      <th><i class="fa fa-bullhorn"></i> Empresa</th>
      <th class="hidden-phone"><i class="fa fa-question-circle"></i>RUC</th>
      <th><i class="fa fa-bookmark"></i>Rubro</th>
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
      <td class="hidden-phone"><?php echo $fila->ruc; ?></td>
      <td><?php echo $fila->rubro; ?></td>
      <?php if ($fila->estado==1): ?>
        <td><span class="label label-success label-mini">activo</span></td>
      <?php else: ?>
        <td><span class="label label-danger label-mini">inactivo</span></td>
      <?php endif; ?>

      <td>
        <a  class="btn btn-success btn-xs"><i class="fa fa-check"></i>gestionar</a >
        <a <?php echo "href='?c=empresa&a=get&idEmpresa=$fila->idEmpresa&idUsuario=$fila->idUsuario'"; ?> class="btn btn-primary btn-xs editar"><i class="fa fa-pencil"></i></a>
        <a <?php echo "href='?c=empresa&a=eliminar&idEmpresa=$fila->idEmpresa'"; ?>class="btn btn-danger btn-xs eliminar"><i class="fa fa-trash-o "></i></a>
      </td>
    </tr>
    <?php
        }
      }else{
        ?>
        <script type="text/javascript">alert('error al obtener datos')</script>
        <?php
      }
    ?>
  </tbody>
</table>
