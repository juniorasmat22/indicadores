<?php

namespace controladores;

class FormulaControlador extends Controlador
{
  public function __construct()
	{
		parent::__construct('FormulaModelo','Formula','vistas/formula/index.php');
	}
  public function listarFormula()//lista formula por cada subproceso
  {
    $this->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
    $pagina=isset($_GET['p'])?$_GET['p']:1;
    $respuesta=$this->modelo->listar_formula($this->entidad);
    $vista=$this->vista;
    require_once 'vistas/plantilla/index.php';
  }
}
