<h3><i class="fa fa-angle-right"></i> Usuarios</h3>
<button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal"><i class="fa fa-check"></i> Nuevo Usuario</button>
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
    function funcionOpcionEditar(usuario){
      $('#formEditar input[name="idUsuario"]').val(usuario.idUsuario);
      $('#formEditar input[name="idPersona"]').val(usuario.idPersona);
      $('#formEditar input[name="usuario"]').val(usuario.usuario);
      $('#formEditar input[name="pass"]').val(usuario.pass);
      $('#formEditar select[name="rol"]').val(usuario.rol);
      $('#formEditar select[name="estado"]').val(usuario.estado);
    }
  </script>
