<?php
namespace controladores;
$Mapa = new MapaProcesosControlador();
$respuesta = $Mapa->modelo->listar();
 ?>
<table class="table table-striped table-advance table-hover">
  <h4><i class="fa fa-angle-right"></i> Listado de Mapa de Procesos</h4>
  <hr>
  <thead>
    <tr>
      <th><i class="fa fa-bullhorn"></i>Código</th>
      <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nombre</th>
      <th><i class="fa fa-bookmark"></i>Descripción</th>
      <th><i class="fa fa-bookmark"></i>Fecha</th>
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
        <?php echo $fila->idMapaProcesos; ?>
      </td>
      <td>
        <a href="basic_table.html#"><?php echo $fila->nombre; ?></a>
      </td>
      <td class="hidden-phone"><?php echo $fila->descripcion; ?></td>
      <td><?php echo $fila->fecha; ?></td>
      <?php if ($fila->estado==1): ?>
        <td><span class="label label-success label-mini">activo</span></td>
      <?php else: ?>
        <td><span class="label label-danger label-mini">inactivo</span></td>
      <?php endif; ?>

      <td>
        <a <?php echo "href='?c=mapaProcesos&a=get&idMapaProcesos=$fila->idMapaProcesos'"; ?> class="btn btn-primary btn-xs editar2"><i class="fa fa-pencil"></i></a>
        <a <?php echo "href='?c=mapaProcesos&a=eliminar&idMapaProcesos=$fila->idMapaProcesos'"; ?>class="btn btn-danger btn-xs eliminar"><i class="fa fa-trash-o "></i></a>
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
