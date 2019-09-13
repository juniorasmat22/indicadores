<?php

namespace controladores;
use controladores\ProcesoControlador;
class IndicadorControlador extends Controlador
{
  private $Formula_Controlador;
  private $Data_fuente;
  public function __construct()
	{
    $this->Formula_Controlador=new FormulaControlador;
    $this->Data_fuente=new FuenteControlador;
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
  public function tablero()//lista tablero de comando para cada indicadores
  {
    $this->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
    $pagina=isset($_GET['p'])?$_GET['p']:1;
    $respuesta=$this->modelo->listar_indicador($this->entidad);
    $this->Formula_Controlador->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
    $formula=$this->Formula_Controlador->modelo->listar_formula_X($this->Formula_Controlador->entidad);
    $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
    $fuente=$this->Data_fuente->modelo->listar_fuente($this->Data_fuente->entidad);
    //$respuesta=$this->modelo->listar_indicadores($this->entidad);
    $vista='vistas/indicador/tablerocomando.php';
    require_once 'vistas/plantilla/index.php';
  }
  public function reporte()
  {
    $this->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
    $pagina=isset($_GET['p'])?$_GET['p']:1;
    $respuesta=$this->modelo->listar_indicador($this->entidad);
    $this->Formula_Controlador->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
    $formula=$this->Formula_Controlador->modelo->listar_formula_X($this->Formula_Controlador->entidad);
    require_once "vistas/indicador/reporte.php";
  }
  public function reporte2()
  {
    $this->entidad->idSubproceso=isset($_GET['idSubproceso'])?$_GET['idSubproceso']:null;
    $pagina=isset($_GET['p'])?$_GET['p']:1;
    $respuesta=$this->modelo->listar_indicadores($this->entidad);
    require_once "vistas/indicador/reporte2.php";
  }
}
