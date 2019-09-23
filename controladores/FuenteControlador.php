<?php

namespace controladores;
use controladores\ProcesoControlador;
class FuenteControlador extends Controlador
{
  private $Formula_Controlador;
  public function __construct()
	{

    $this->Formula_Controlador=new FormulaControlador;
		parent::__construct('FuenteModelo','Fuente','vistas/fuente/index.php');
	}
  public function listarFuente()//lista indicadores por cada subproceso
  {
    $this->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
    $pagina=isset($_GET['p'])?$_GET['p']:1;
      if ($this->entidad->idIndicador==26 || $this->entidad->idIndicador==27) {
        $respuesta=$this->modelo->listar_fuente_general_x_curso($this->entidad);
      }
      else {
        $respuesta=$this->modelo->listar_fuente($this->entidad);
      }

    $this->Formula_Controlador->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
    $dataModal=$this->Formula_Controlador->modelo->listar_formula_X($this->Formula_Controlador->entidad);
    $vista=$this->vista;
    require_once 'vistas/plantilla/index.php';
  }
}
