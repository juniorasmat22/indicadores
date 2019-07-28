<?php
namespace entidades;
use PDO;

class Subproceso extends Entidad
{
  private $idSubproceso;
  private $idProceso;
  private $nombre;
  private $descripcion;
  private $estado;
  private $idSubPro;
  public function setConsulta($filaConsulta){
    $this->idSubproceso=$this->obtenerColumna($filaConsulta,'idSubproceso');
    $this->idProceso=$this->obtenerColumna($filaConsulta,'idProceso');
    $this->nombre=$this->obtenerColumna($filaConsulta,'nombre');
    $this->descripcion=$this->obtenerColumna($filaConsulta,'descripcion');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
    $this->idSubPro=$this->obtenerColumna($filaConsulta,'idSubPro');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idSubproceso,PDO::PARAM_INT);
    $statement->bindValue(2,$this->idProceso,PDO::PARAM_INT);
    $statement->bindValue(3,$this->nombre,PDO::PARAM_STR);
    $statement->bindValue(4,$this->descripcion,PDO::PARAM_STR);
    $statement->bindValue(5,$this->estado,PDO::PARAM_INT);
    $statement->bindValue(6,$this->idSubPro,PDO::PARAM_STR);
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
