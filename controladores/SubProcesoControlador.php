<?php

namespace controladores;

class SubProcesoControlador extends Controlador
{
  public function __construct()
	{
		parent::__construct('SubProcesoModelo','SubProceso','vistas/subprocesos/index.php');
	}
  public function listarSubprocesos()//lista subprocesos ppor cada subproceso
  {
    $this->entidad->idProceso=isset($_GET['idProceso'])?$_GET['idProceso']:null;
    $this->entidad->estado=1;
    $pagina=isset($_GET['p'])?$_GET['p']:1;
    $respuesta=$this->modelo->listar_subprocesos($this->entidad);
    $vista=$this->vista;
    require_once 'vistas/plantilla/index.php';
  }

}
