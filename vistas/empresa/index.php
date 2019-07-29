<h3><i class="fa fa-angle-right"></i> Empresas</h3>
<button type="button" class="btn btn-theme" data-toggle="modal" data-target="#regModal"><i class="fa fa-check"></i> Nueva Empresa</button>
<div class="row mt">
  <div class="col-md-12">
    <div class="content-panel">
      <table class="table table-striped table-advance table-hover">
        <h4><i class="fa fa-angle-right"></i> Listado de Empresas</h4>
        <hr>
        <thead>
          <tr>
            <th><i class="fa fa-bullhorn"></i> Empresa</th>
            <th class="hidden-phone"><i class="fa fa-question-circle"></i>RUC</th>
            <th><i class="fa fa-bookmark"></i>Rubro</th>
            <th><i class=" fa fa-edit"></i> Estado</th>
            <th><i class=" fa fa-edit"></i> Opciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a href="basic_table.html#">Company Ltd</a>
            </td>
            <td class="hidden-phone">Lorem Ipsum dolor</td>
            <td>12000.00$ </td>
            <td><span class="label label-info label-mini">Due</span></td>
            <td>
              <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /content-panel -->
  </div>
  <!-- /col-md-12 -->
</div>


  <!-- Modal Editar-->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Editar Datos de la Empresa</h4>
        </div>
        <div class="modal-body">
          <div class="row mt">
            <div class="col-lg-12">
                <div class="form">
                  <form class="cmxform form-horizontal style-form" id="signupForm" method="get" action="">
                    <div class="form-group ">
                      <label for="nombre" class="control-label col-lg-2">Nombre</label>
                      <div class="col-lg-10">
                        <input class=" form-control" required id="nombre" name="nombre" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ruc" class="control-label col-lg-2">RUC</label>
                      <div class="col-lg-10">
                        <input class=" form-control" required id="ruc" name="ruc" minlength="2" pattern="[0-9]+" type="number"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="rubro" class="control-label col-lg-2">Rubro</label>
                      <div class="col-lg-10">
                        <input class="form-control" required id="rubro" name="rubro" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="estado" class="control-label col-lg-2">Estado</label>
                      <div class="col-lg-10">
                        <select id="estado" class="form-control" required>
                            <option>activo</option>
                            <option>inactivo</option>
                          </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerar</button>
                      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                  </form>
                </div>

            </div>
            <!-- /col-lg-12 -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Registrar-->
  <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Registar Empresa</h4>
        </div>
        <div class="modal-body">
          <div class="row mt">
            <div class="col-lg-12">
                <div class="form">
                  <form class="cmxform form-horizontal style-form" id="signupForm" method="get" action="">
                    <div class="form-group ">
                      <label for="nombre" class="control-label col-lg-2">Nombre</label>
                      <div class="col-lg-10">
                        <input class=" form-control" required id="nombre" name="nombre" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ruc" class="control-label col-lg-2">RUC</label>
                      <div class="col-lg-10">
                        <input class=" form-control" required id="ruc" name="ruc" minlength="2" pattern="[0-9]+" type="number"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="rubro" class="control-label col-lg-2">Rubro</label>
                      <div class="col-lg-10">
                        <input class="form-control" required id="rubro" name="rubro" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="estado" class="control-label col-lg-2">Estado</label>
                      <div class="col-lg-10">
                        <select id="estado" class="form-control" required>
                            <option>activo</option>
                            <option>inactivo</option>
                          </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerar</button>
                      <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                  </form>
                </div>

            </div>
            <!-- /col-lg-12 -->
          </div>
        </div>
      </div>
    </div>
  </div>
