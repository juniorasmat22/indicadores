<h3><i class="fa fa-angle-right"></i> Indicadores</h3>
<button type="button" class="btn btn-theme" data-toggle="modal" data-target="#crearModal"><i class="fa fa-check"></i> Nuevo Indicador</button>
<a href="?c=mapaProcesos&a=ver_mapa&idMapaProcesos=<?php echo $_GET['idMapaProcesos']; ?>" type="button" class="btn btn-theme" ><i class="fa fa-eye"></i> Ver Mapa</a>

<div class="row mt">
  <div class="col-md-12 ">
    <div class="content-panel ">
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
    function funcionOpcionEditar(indicador){
      $('#formEditar input[name="idIndicador"]').val(indicador.idIndicador);
      $('#formEditar input[name="idSubproceso"]').val(indicador.idSubproceso);
      $('#formEditar input[name="descripcion"]').val(indicador.descripcion);
      $('#formEditar input[name="meta"]').val(indicador.meta);
      $('#formEditar input[name="iniciativas"]').val(indicador.iniciativas);
      $('#formEditar input[name="responsable"]').val(indicador.responsable);
      $('#formEditar input[name="lineaBase"]').val(indicador.lineaBase);
      $('#formEditar input[name="frecuencia"]').val(indicador.frecuencia);
      $('#formEditar input[name="tipo"]').val(indicador.tipo);
      $('#formEditar input[name="unidad"]').val(indicador.unidad);
      $('#formEditar input[name="fv"]').val(indicador.fv);
      $('#formEditar input[name="rojo"]').val(indicador.rojo);
      $('#formEditar input[name="amarillo"]').val(indicador.amarillo);
      $('#formEditar input[name="verde"]').val(indicador.verde);
      $('#formEditar select[name="estado"]').val(indicador.estado);
    }
  </script>
