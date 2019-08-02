<h3><i class="fa fa-angle-right"></i> Subprocesos</h3>
<button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal"><i class="fa fa-check"></i> Nueva Sub Proceso</button>
<a href="?c=proceso&idMapaProcesos=<?php echo $_GET['idMapaProcesos']; ?>" type="button" class="btn btn-theme" ><i class="fa fa-eye"></i> Ver lista de Procesos</a>

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
  <!-- Modal Registrar subNiveles-->
  <div class="modal fade" id="crearModalSubnivel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <?php require 'crearSubnivel.php';?>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function funcionOpcionEditar(subproceso){
      $('#formEditar input[name="idSubproceso"]').val(subproceso.idSubproceso);
      $('#formEditar input[name="idProceso"]').val(subproceso.idProceso);
      $('#formEditar input[name="nombre"]').val(subproceso.nombre);
      $('#formEditar textarea[name="descripcion"]').val(subproceso.descripcion);
      $('#formEditar select[name="estado"]').val(subproceso.estado);
      $('#formEditar select[name="idSubPro"]').val(subproceso.idSubPro);
    }
  </script>
  <script type="text/javascript">
    function funcionPasarProceso(subproceso){
      $('#formCrear input[name="idSubPro"]').val(subproceso.idSubproceso);
      $('#formCrear input[name="idProceso"]').val(subproceso.idProceso);
    }
  </script>
