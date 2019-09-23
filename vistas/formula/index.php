<h3><i class="fa fa-angle-right"></i> Fórmula </h3>
<?php if ($respuesta->respuesta): ?>

<?php else: ?>
  <button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal" ><i class="fa fa-check"></i> Registrar Fórmula</button>
<?php endif; ?>

<a href="?c=indicador&a=listarIndicadores&idSubproceso=<?php echo $_GET['idSubproceso']; ?>&idMapaProcesos=<?php echo $_GET['idMapaProcesos']; ?>&proceso=<?php echo $_GET['proceso'] ?>" type="button" class="btn btn-theme" ><i class="fa fa-eye"></i> Ver Indicadores</a>
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
    function funcionOpcionEditar(formula){
      $('#formEditar input[name="idFormula"]').val(formula.idFormula);
      $('#formEditar input[name="idIndicador"]').val(formula.idIndicador);
      $('#formEditar input[name="tipo"]').val(formula.tipo);
      $('#formEditar input[name="param1"]').val(formula.param1);
      $('#formEditar input[name="param2"]').val(formula.param2);
      $('#formEditar input[name="param3"]').val(formula.param3);
      $('#formEditar select[name="estado"]').val(formula.estado);
    }
  </script>
