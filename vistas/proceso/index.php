<h3><i class="fa fa-angle-right"></i> Procesos</h3>
<button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal"><i class="fa fa-check"></i> Nuevo Proceso</button>
<a href="?c=mapaProcesos&a=ver_mapa&idMapaProcesos=<?php echo $_GET['idMapaProcesos']; ?>" type="button" class="btn btn-theme" ><i class="fa fa-eye"></i> Ver Mapa</a>

<div class="row mt">
  <div class="col-md-12">
    <div class="content-panel">
      <?php
          require 'tabla.php';
        ?>
    </div>
    <!-- /content-panel -->
  </div>
  <!-- /col-md-12 -->
</div>

  <!-- Modal Editar-->
  <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <?php require 'editar.php';?>
      </div>
    </div>
  </div>
  <!-- Modal Registrar-->
  <div class="modal fade" id="crearModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <?php require 'crear.php';?>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function funcionOpcionEditar(proceso){
      $('#formEditar input[name="idProceso"]').val(proceso.idProceso);
      $('#formEditar input[name="idMapaProcesos"]').val(proceso.idMapaProcesos);
      $('#formEditar input[name="codigo"]').val(proceso.codigo);
      $('#formEditar select[name="tipo"]').val(proceso.tipo);
      $('#formEditar input[name="nombre"]').val(proceso.nombre);
      $('#formEditar textarea[name="descripcion"]').val(proceso.descripcion);
      $('#formEditar select[name="estado"]').val(proceso.estado);
    }
  </script>
