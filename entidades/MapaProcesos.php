<?php
namespace entidades;
use PDO;
class MapaProcesos extends Entidad{
  private $idMapaProcesos;
  private $idEmpresa;
  private $idUnidadNegocio;
  private $nombre;
  private $descripcion;
  private $fecha;
  private $estado;
  public function setConsulta($filaConsulta){
    $this->idMapaProcesos=$this->obtenerColumna($filaConsulta,'idMapaProcesos');
    $this->idEmpresa=$this->obtenerColumna($filaConsulta,'idEmpresa');
    $this->idUnidadNegocio=$this->obtenerColumna($filaConsulta,'idUnidadNegocio');
    $this->nombre=$this->obtenerColumna($filaConsulta,'nombre');
    $this->descripcion=$this->obtenerColumna($filaConsulta,'descripcion');
    $this->fecha=$this->obtenerColumna($filaConsulta,'fecha');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idMapaProcesos,PDO::PARAM_INT);
    $statement->bindValue(2,$this->idEmpresa,PDO::PARAM_INT);
    $statement->bindValue(3,$this->idUnidadNegocio,PDO::PARAM_INT);
    $statement->bindValue(4,$this->nombre,PDO::PARAM_STR);
    $statement->bindValue(5,$this->descripcion,PDO::PARAM_STR);
    $statement->bindValue(6,date("Y-m-d H:i:s", strtotime($this->fecha)),PDO::PARAM_STR);
    $statement->bindValue(7,$this->estado,PDO::PARAM_INT);
    $statement->bindValue(8,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(9,$this->pagina,PDO::PARAM_INT);
    return $statement;
  }

  public function set($metodo){
    $this->idMapaProcesos 	 = $metodo('idMapaProcesos');
    $this->idEmpresa	       = $metodo('idEmpresa');
    $this->idUnidadNegocio	 = $metodo('idUnidadNegocio');
    $this->nombre            = $metodo('nombre');
    $this->descripcion	     = $metodo('descripcion');
    $this->fecha	           = $metodo('fecha');
    $this->estado 	         = $metodo('estado');
  }
}
