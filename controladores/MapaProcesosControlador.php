<?php

namespace controladores;
use controladores\ProcesoControlador;
class MapaProcesosControlador extends Controlador
{
  private $Proceso_Controlador;
  public function __construct()
	{
    $this->Proceso_Controlador=new ProcesoControlador;
		parent::__construct('MapaProcesosModelo','MapaProcesos','vistas/mapa_proceso/index.php');
	}
  public function ver_mapa(){
    $this->Proceso_Controlador->entidad->idMapaProcesos=$_GET['idMapaProcesos'];
    $this->Proceso_Controlador->entidad->tipo="Estrátegico";
    $this->Proceso_Controlador->entidad->estado=1;
    $estrategicos=$this->Proceso_Controlador->modelo->listar_procesos($this->Proceso_Controlador->entidad);


    $this->Proceso_Controlador->entidad->idMapaProcesos=$_GET['idMapaProcesos'];;
    $this->Proceso_Controlador->entidad->tipo="Apoyo";
    $this->Proceso_Controlador->entidad->estado=1;
    $apoyo=$this->Proceso_Controlador->modelo->listar_procesos($this->Proceso_Controlador->entidad);

    $this->Proceso_Controlador->entidad->idMapaProcesos=$_GET['idMapaProcesos'];;
    $this->Proceso_Controlador->entidad->tipo="Misional";
    $this->Proceso_Controlador->entidad->estado=1;
    $misional=$this->Proceso_Controlador->modelo->listar_procesos($this->Proceso_Controlador->entidad);

      $pagina=isset($_GET['p']) ?$_GET['p']:1;
      $vista = "vistas/mapa_proceso/mapa.php";
      require_once "vistas/plantilla/index.php";
   	}
}
