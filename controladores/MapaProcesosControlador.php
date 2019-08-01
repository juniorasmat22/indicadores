<?php

namespace controladores;

class MapaProcesosControlador extends Controlador
{
  public function __construct()
	{
		parent::__construct('MapaProcesosModelo','MapaProcesos','vistas/mapa_proceso/index.php');
	}
}
