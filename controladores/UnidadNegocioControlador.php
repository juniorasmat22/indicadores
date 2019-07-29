<?php

namespace controladores;

class UnidadNegocioControlador extends Controlador
{
  public function __construct()
	{
		parent::__construct('UnidadNegocioModelo','UnidadNegocio','vistas/unidad_negocio/index.php');
	}
}
