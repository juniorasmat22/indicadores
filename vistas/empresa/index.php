<h3><i class="fa fa-angle-right"></i> Empresas</h3>
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
    function funcionOpcionEditar(empresa){
      $('#formEditar input[name="idEmpresa"]').val(empresa.idEmpresa);
      $('#formEditar input[name="idUsuario"]').val(empresa.idUsuario);
      $('#formEditar input[name="nombre"]').val(empresa.nombre);
      $('#formEditar input[name="ruc"]').val(empresa.ruc);
      $('#formEditar input[name="rubro"]').val(empresa.rubro);
      $('#formEditar select[name="estado"]').val(empresa.estado);
    }
  </script>
