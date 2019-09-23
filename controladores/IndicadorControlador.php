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
    if ($this->entidad->idIndicador==26 || $this->entidad->idIndicador==27) {
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $fuente_general=$this->Data_fuente->modelo->listar_fuente_general_periodo($this->Data_fuente->entidad);
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $fuente_general_curso=$this->Data_fuente->modelo->listar_fuente_general($this->Data_fuente->entidad);
      //listar periodos
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $periodo=$this->Data_fuente->modelo->listar_periodos($this->Data_fuente->entidad);
      //datos TRUJILLO
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $this->Data_fuente->entidad->sede=1;
      $fuente_trujillo=$this->Data_fuente->modelo->listar_fuente_x_sede($this->Data_fuente->entidad);

      //datos VALLE
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $this->Data_fuente->entidad->sede=2;
      $fuente_valle=$this->Data_fuente->modelo->listar_fuente_x_sede($this->Data_fuente->entidad);
      //datos HUAMACHUCO
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $this->Data_fuente->entidad->sede=3;
      $fuente_huamachuco=$this->Data_fuente->modelo->listar_fuente_x_sede($this->Data_fuente->entidad);
    } else {
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $this->Data_fuente->entidad->sede=1;
      $fuente=$this->Data_fuente->modelo->listar_fuente_sede($this->Data_fuente->entidad);
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $fuente_general=$this->Data_fuente->modelo->listar_fuente_general($this->Data_fuente->entidad);
      //datos TRUJILLO
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $this->Data_fuente->entidad->sede=1;
      $fuente_trujillo=$this->Data_fuente->modelo->listar_fuente_sede($this->Data_fuente->entidad);
      //datos VALLE
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $this->Data_fuente->entidad->sede=2;
      $fuente_valle=$this->Data_fuente->modelo->listar_fuente_sede($this->Data_fuente->entidad);
      //datos HUAMACHUCO
      $this->Data_fuente->entidad->idIndicador=isset($_GET['idIndicador'])?$_GET['idIndicador']:null;
      $this->Data_fuente->entidad->sede=3;
      $fuente_huamachuco=$this->Data_fuente->modelo->listar_fuente_sede($this->Data_fuente->entidad);

    }




    //$respuesta=$this->modelo->listar_indicadores($this->entidad);
    $vista='vistas/indicador/tablero.php';
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
  public function listar_valores_x_periodo()
{
  $this->Data_fuente->entidad->setMetodoPost();
  $respuesta = $this->Data_fuente->modelo->listar_fuente_general_periodo($this->Data_fuente->entidad);
  return $this->respuesta($respuesta);
}
public function listar_valores_x_sede()
{
$this->Data_fuente->entidad->setMetodoPost();
$respuesta = $this->Data_fuente->modelo->listar_fuente_x_sede($this->Data_fuente->entidad);
return $this->respuesta($respuesta);
}

}
