<div class="row">
  <div class="col-lg-8 col-lg-offset-2 detailed">
    <h4 class="mb">Información Personal</h4>
    <form role="form" class="form-horizontal" autocomplete="off">
      <div class="form-group last">
        <label class="control-label col-md-3">Imagen de Perfil</label>
        <div class="col-md-9">
          <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
              <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
            </div>
            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
            <div>
              <span class="btn btn-theme02 btn-file">
                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccione imagen</span>
              <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar</span>
              <input type="file" class="default" />
              </span>
              <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Eliminar</a>
            </div>
          </div>
          <span class="label label-info">NOTE!</span>
          <span>
            Attached image thumbnail is
            supported in Latest Firefox, Chrome, Opera,
            Safari and Internet Explorer 10 only
            </span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-2 control-label">Nombres</label>
        <div class="col-lg-6">
          <input type="text" placeholder=" " id="nombre" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-2 control-label">Apellidos</label>
        <div class="col-lg-6">
          <input type="text" placeholder=" " id="apellido" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
          <button class="btn btn-theme" type="submit">Guardar</button>
          <a href="?"class="btn btn-theme04" type="button" >Cancelar</a>
        </div>
      </div>
    </form>
  </div>
  <!-- /col-lg-8 -->
</div>
