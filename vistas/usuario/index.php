<h3><i class="fa fa-angle-right"></i> Usuarios</h3>
<button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal"><i class="fa fa-check"></i> Nuevo Usuario</button>
<a type="button" class="btn btn-theme04" href="?c=usuario&a=reporte" target="_blank"><i class="fa fa-file-pdf-o"></i> Imprimir</a>
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
    function funcionOpcionEditar(user){
      $('#formEditar input[name="idUsuario"]').val(user.idUsuario);
      $('#formEditar input[name="idPersona"]').val(user.idPersona);
      $('#formEditar input[name="usuario"]').val(user.usuario);
      $('#formEditar input[name="pass"]').val(user.pass);
      $('#formEditar select[name="rol"]').val(user.rol);
      $('#formEditar select[name="estado"]').val(user.estado);
    }
  </script>
