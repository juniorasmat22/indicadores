<h3><i class="fa fa-angle-right"></i> Curso</h3>
<button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal"><i class="fa fa-check"></i> Nuevo Curso</button>
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
<div class="card-footer  centered">
<?php require 'vistas/plantilla/paginacion.php'; ?>
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
    function funcionOpcionEditar(curso){
      $('#formEditar input[name="idCurso"]').val(curso.idCurso);
      $('#formEditar input[name="nombre"]').val(curso.nombre);
      $('#formEditar select[name="ciclo"]').val(curso.ciclo);
      $('#formEditar select[name="tipo_curso"]').val(curso.tipo_curso);
      $('#formEditar select[name="estado"]').val(curso.estado);
    }
  </script>
