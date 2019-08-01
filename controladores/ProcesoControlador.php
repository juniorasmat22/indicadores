<?php

namespace controladores;

class ProcesoControlador extends Controlador
{
  public function __construct()
	{
		parent::__construct('ProcesoModelo','Proceso','vistas/proceso/index.php');
	}

}
