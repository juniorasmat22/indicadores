<h3><i class="fa fa-angle-right"></i> Mapa de proceso</h3>
<div class="row">
  <div class="col-md-8" style="margin: 15px;">
    <div class="row content-panel">
      <h2 class="centered"><i class="fa fa-angle-right"></i> Leyenda</h2>
      <div class="col-md-10 col-md-offset-1 mt mb">
        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" type="button" class=""href="faq.html#collapseOne">
                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Gestionar
                </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse in">
              <div class="accordion-inner">
                <p>Permite gestionar las actividades, mapa de procesos, indicadores y tablero de mando del proceso.</p>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Editar
                </a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
              <div class="accordion-inner">
                <p>Editar la información de un proceso.</p>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Eliminar
                </a>
            </div>
            <div id="collapseThree" class="accordion-body collapse">
              <div class="accordion-inner">
                <p>Elimina un Proceso o Sub Proceso.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end accordion -->
      </div>
      <!-- col-md-10 -->
    </div>


  </div>

  <div class="col-md-3">
    <h5><i class="fa fa-angle-right"></i> Opciones</h5>
    <a type="button"  href="?c=proceso&idMapaProcesos=<?php echo $_GET['idMapaProcesos']; ?>" class="btn btn-theme"><i class="fa fa-check"></i> Gestionar Procesos</a>
      <br><br>

    <a type="button" class="btn btn-theme04"><i class="fa fa-file-pdf-o"></i> Imprimir</a>
  </div>
</div>
<section>
  <section class="wrapper site-min-height">
    <div class="row">
      <div class="col-lg-12">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
          <div class="custom-box">

            <ul class="pricing">
              <li>R E Q U E R I M I E N T O S </li>

              <li>D E L</li>

              <li>C L .I E N T E</li>
            </ul>
          </div>
          <!-- end custombox -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <div class="custom-box">
            <div class="row mt">
              <div class="col-xs-12 col-sm-12 col-md-12"  >
                <h4><i class="fa fa-angle-right white"></i>PROCESOS ESTRÁTEGICOS</h4>
                <?php
                    require 'procesosEstratégicos.php';
                  ?>
              </div>
              <br>
              <label for=""></label>
              <br>
              <div class="col-xs-12 col-sm-12 col-md-12"  >
                <h4><i class="fa fa-angle-right"></i>PROCESOS MISIONALES</h4>
                <?php
                    require 'procesosMisionales.php';
                  ?>
              </div>
              <br>
              <label for=""></label>
              <br>
              <div class="col-xs-12 col-sm-12 col-md-12" >
                <h4><i class="fa fa-angle-right"></i>PROCESOS DE APOYO</h4>
                <?php
                    require 'procesosApoyo.php';
                  ?>
              </div>
            </div>
          </div>
          <!-- end custombox -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
          <div class="custom-box">
            <ul class="pricing">
              <li>S A T I S F A C I Ó N</li>
              <li>D E L</li>
              <li>C L .I E N T E </li>
            </ul>
          </div>
          <!-- end custombox -->
        </div>
        <!-- end col-4 -->
      </div>
      <!--  /col-lg-12 -->
    </div>
    <!--  /row -->
  </section>
  <!-- /wrapper -->
</section>
