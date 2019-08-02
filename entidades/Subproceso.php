<?php
namespace entidades;
use PDO;

class Subproceso extends Entidad
{
  public $idSubproceso;
  public $idProceso;
  public $nombre;
  public $descripcion;
  public $estado;
  public $idSubPro;
  public function setConsulta($filaConsulta){
    $this->idSubproceso=$this->obtenerColumna($filaConsulta,'id_sub_proceso');
    $this->idProceso=$this->obtenerColumna($filaConsulta,'id_proceso');
    $this->nombre=$this->obtenerColumna($filaConsulta,'nombre');
    $this->descripcion=$this->obtenerColumna($filaConsulta,'descripcion');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
    $this->idSubPro=$this->obtenerColumna($filaConsulta,'id_sub_nivel');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idSubproceso,PDO::PARAM_INT);
    $statement->bindValue(2,$this->idProceso,PDO::PARAM_INT);
    $statement->bindValue(3,$this->nombre,PDO::PARAM_STR);
    $statement->bindValue(4,$this->descripcion,PDO::PARAM_STR);
    $statement->bindValue(5,$this->estado,PDO::PARAM_INT);
    $statement->bindValue(6,$this->idSubPro,PDO::PARAM_INT);
    $statement->bindValue(7,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(8,$this->pagina,PDO::PARAM_INT);
    return $statement;
  }

  public function set($metodo){
    $this->idSubproceso 	   = $metodo('idSubproceso');
    $this->idProceso	       = $metodo('idProceso');
    $this->idSubPro	         = $metodo('idSubPro');
    $this->nombre            = $metodo('nombre');
    $this->descripcion	     = $metodo('descripcion');
    $this->estado 	         = $metodo('estado');
  }

}
