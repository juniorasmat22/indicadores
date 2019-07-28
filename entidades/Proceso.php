<?php
namespace entidades;
use PDO;

class Proceso extends Entidad
{
  private $idProceso;
  private $idMapaProcesos;
  private $tipo;
  private $nombre;
  private $descripcion;
  private $estado;
  public function setConsulta($filaConsulta){
    $this->idProceso=$this->obtenerColumna($filaConsulta,'idProceso');
    $this->idMapaProcesos=$this->obtenerColumna($filaConsulta,'idMapaProcesos');
    $this->tipo=$this->obtenerColumna($filaConsulta,'tipo');
    $this->nombre=$this->obtenerColumna($filaConsulta,'nombre');
    $this->descripcion=$this->obtenerColumna($filaConsulta,'descripcion');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idProceso,PDO::PARAM_INT);
    $statement->bindValue(2,$this->idMapaProcesos,PDO::PARAM_INT);
    $statement->bindValue(3,$this->tipo,PDO::PARAM_STR);
    $statement->bindValue(4,$this->nombre,PDO::PARAM_STR);
    $statement->bindValue(5,$this->descripcion,PDO::PARAM_STR);
    $statement->bindValue(6,$this->estado,PDO::PARAM_INT);
    return $statement;
  }

  public function set($metodo){
    $this->idProceso 	       = $metodo('idProceso');
    $this->idMapaProcesos	   = $metodo('idMapaProcesos');
    $this->tipo	             = $metodo('tipo');
    $this->nombre            = $metodo('nombre');
    $this->descripcion	     = $metodo('descripcion');
    $this->estado 	         = $metodo('estado');
  }
}
