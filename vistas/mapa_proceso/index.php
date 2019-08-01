<h3><i class="fa fa-angle-right"></i> Mapa de proceso</h3>
<button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal2"><i class="fa fa-check"></i> Nuevo Mapa de Proceso</button>
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
  <div class="modal fade" id="editarModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <?php require 'editar.php';?>
      </div>
    </div>
  </div>
  <!-- Modal Registrar-->
  <div class="modal fade" id="crearModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <?php require 'crear.php';?>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function funcionOpcionEditar2(mapaProceso){
      $('#formEditar input[name="idMapaProcesos"]').val(mapaProceso.idMapaProcesos);
      $('#formEditar input[name="idEmpresa"]').val(mapaProceso.idEmpresa);
      $('#formEditar select[name="idUnidadNegocio"]').val(mapaProceso.idUnidadNegocio);
      $('#formEditar input[name="nombre"]').val(mapaProceso.nombre);
      $('#formEditar textarea[name="descripcion"]').val(mapaProceso.descripcion);
      $('#formEditar input[name="fecha"]').val(mapaProceso.fecha);
      $('#formEditar select[name="estado"]').val(mapaProceso.estado);
    }
  </script>
