<table class="table table-striped table-advance table-hover">
  <h4><i class="fa fa-angle-right"></i> Listado de Usuarios</h4>
  <hr>
  <thead>
    <tr>
      <th><i class="fa fa-bullhorn"></i> persona</th>
      <th class="hidden-phone"><i class="fa fa-question-circle"></i>USUARIO</th>
      <th><i class="fa fa-bookmark"></i>Contraseña</th>
        <th><i class="fa fa-bookmark"></i>Rol</th>
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
        <a href="basic_table.html#"><?php echo $fila->idPersona; ?></a>
      </td>
      <td class="hidden-phone"><?php echo $fila->usuario ?></td>
      <td><?php echo $fila->pass; ?></td>
      <td><span class="label label-success label-mini">
      <?php switch ($fila->rol) {
        case '1':
          echo "Administrador";
          break;
        case '2':
          echo "Usuario 1";
          break;
        case '3':
          echo "Usuario 2";
         break;
        default:
          // code...
          break;
      } ?>
      </span></td>
      <?php if ($fila->estado==1): ?>
        <td><span class="label label-success label-mini">activo</span></td>
      <?php else: ?>
        <td><span class="label label-danger label-mini">inactivo</span></td>
      <?php endif; ?>

      <td>

        <a <?php echo "href='?c=persona&a=get&idPersona=$fila->idPersona'"; ?> class="btn btn-primary btn-xs editar"><i class="fa fa-pencil"></i></a>
        <a <?php echo "href='?c=persona&a=eliminar&idPersona=$fila->idPersona'"; ?>class="btn btn-danger btn-xs eliminar"><i class="fa fa-trash-o "></i></a>
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
