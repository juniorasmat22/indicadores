<h3><i class="fa fa-angle-right"></i> Unidades de Negocio</h3>
<button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal"><i class="fa fa-check"></i> Nueva Empresa</button>
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
    function funcionOpcionEditar(unidaNegocio){
      $('#formEditar input[name="idEmpresa"]').val(unidaNegocio.idEmpresa);
      $('#formEditar input[name="idUsuario"]').val(unidaNegocio.idUsuario);
      $('#formEditar input[name="nombre"]').val(unidaNegocio.nombre);
      $('#formEditar input[name="ruc"]').val(unidaNegocio.ruc);
      $('#formEditar input[name="rubro"]').val(unidaNegocio.rubro);
      $('#formEditar input[name="estado"]').val(unidaNegocio.estado);
    }
  </script>
