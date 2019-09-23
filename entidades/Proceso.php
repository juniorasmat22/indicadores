<?php
namespace entidades;
use PDO;

class Proceso extends Entidad
{
  public $idProceso;
  public $idMapaProcesos;
  public $codigo;
  public $tipo;
  public $nombre;
  public $descripcion;
  public $estado;
  public function setConsulta($filaConsulta){
    $this->idProceso=$this->obtenerColumna($filaConsulta,'id_proceso');
    $this->idMapaProcesos=$this->obtenerColumna($filaConsulta,'id_mapa_procesos');
    $this->codigo=$this->obtenerColumna($filaConsulta,'codigo');
    $this->tipo=$this->obtenerColumna($filaConsulta,'tipo');
    $this->nombre=$this->obtenerColumna($filaConsulta,'nombre');
    $this->descripcion=$this->obtenerColumna($filaConsulta,'descripcion');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idProceso,PDO::PARAM_INT);
    $statement->bindValue(2,$this->idMapaProcesos,PDO::PARAM_INT);
    $statement->bindValue(3,$this->codigo,PDO::PARAM_STR);
    $statement->bindValue(4,$this->tipo,PDO::PARAM_STR);
    $statement->bindValue(5,$this->nombre,PDO::PARAM_STR);
    $statement->bindValue(6,$this->descripcion,PDO::PARAM_STR);
    $statement->bindValue(7,$this->estado,PDO::PARAM_INT);
    $statement->bindValue(8,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(9,$this->pagina,PDO::PARAM_INT);
    return $statement;
  }

  public function set($metodo){
    $this->idProceso 	       = $metodo('idProceso');
    $this->idMapaProcesos	   = $metodo('idMapaProcesos');
    $this->codigo	           = $metodo('codigo');
    $this->tipo	             = $metodo('tipo');
    $this->nombre            = $metodo('nombre');
    $this->descripcion	     = $metodo('descripcion');
    $this->estado 	         = $metodo('estado');
  }
}
