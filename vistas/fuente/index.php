<h3><i class="fa fa-angle-right"></i> Listado de Data Fuente</h3>
<button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal"><i class="fa fa-check"></i> Nueva Data</button>
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
    function funcionOpcionEditar(fuente){
      $('#formEditar input[name="idFuente"]').val(fuente.idFuente);
      $('#formEditar input[name="idIndicador"]').val(fuente.idIndicador);
      $('#formEditar input[name="periodo"]').val(fuente.periodo);
      $('#formEditar input[name="param1"]').val(formula.param1);
      $('#formEditar input[name="param2"]').val(formula.param2);
      $('#formEditar input[name="param3"]').val(formula.param3);
      $('#formEditar input[name="resultado"]').val(formula.resultado);
      $('#formEditar input[name="inicio"]').val(formula.inicio);
      $('#formEditar input[name="fin"]').val(formula.fin);
      $('#formEditar select[name="estado"]').val(fuente.estado);
    }
  </script>
