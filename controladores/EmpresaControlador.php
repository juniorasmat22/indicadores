<?php

namespace controladores;

class EmpresaControlador extends Controlador
{
  public function __construct()
	{
		parent::__construct('EmpresaModelo','Empresa','vistas/empresa/index.php');
	}
}
