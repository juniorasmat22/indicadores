<?php

namespace controladores;

class IndicadorControlador extends Controlador
{
  public function __construct()
	{
		parent::__construct('IndicadorModelo','Indicador','vistas/indicador/index.php');
	}
  public function listarIndicadores()//lista indicadores por cada subproceso
  {
    $this->entidad->idSubproceso=isset($_GET['idSubproceso'])?$_GET['idSubproceso']:null;
    $pagina=isset($_GET['p'])?$_GET['p']:1;
    $respuesta=$this->modelo->listar_indicadores($this->entidad);
    $vista=$this->vista;
    require_once 'vistas/plantilla/index.php';
  }
}
