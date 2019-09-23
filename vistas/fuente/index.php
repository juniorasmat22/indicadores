<h3><i class="fa fa-angle-right"></i> Listado de Data Fuente</h3>
<?php if ($dataModal->respuesta): ?>
  <button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal" ><i class="fa fa-check"></i> Nueva Data</button>

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
    function funcionOpcionEditar(fuente){
      $('#formEditar input[name="idFuente"]').val(fuente.idFuente);
      $('#formEditar input[name="idIndicador"]').val(fuente.idIndicador);
      $('#formEditar select[name="sede"]').val(fuente.sede);
      $('#formEditar select[name="idCurso"]').val(fuente.idCurso);
      $('#formEditar input[name="periodo"]').val(fuente.periodo);
      $('#formEditar input[name="param1"]').val(fuente.param1);
      $('#formEditar input[name="param2"]').val(fuente.param2);
      $('#formEditar input[name="param3"]').val(fuente.param3);
      $('#formEditar input[name="resultado"]').val(fuente.resultado);
      $('#formEditar input[name="inicio"]').val(fuente.inicio);
      $('#formEditar input[name="fin"]').val(fuente.fin);
      $('#formEditar select[name="estado"]').val(fuente.estado);
    }
  </script>
