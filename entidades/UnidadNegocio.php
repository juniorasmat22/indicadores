<?php
namespace entidades;
use PDO;
class UnidadNegocio extends Entidad
{
  private $idUnidadNegocio;
  private $idEmpresa;
  private $nombre;
  private $descripcion;
  private $estado;


  public function setConsulta($filaConsulta){
    $this->idUnidadNegocio=$this->obtenerColumna($filaConsulta,'idUnidadNegocio');
    $this->idEmpresa=$this->obtenerColumna($filaConsulta,'idEmpresa');
    $this->nombre=$this->obtenerColumna($filaConsulta,'nombre');
    $this->descripcion=$this->obtenerColumna($filaConsulta,'descripcion');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idUnidadNegocio,PDO::PARAM_INT);
    $statement->bindValue(2,$this->idEmpresa,PDO::PARAM_INT);
    $statement->bindValue(3,$this->nombre,PDO::PARAM_STR);
    $statement->bindValue(4,$this->descripcion,PDO::PARAM_STR);
    $statement->bindValue(5,$this->estado,PDO::PARAM_INT);
    $statement->bindValue(6,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(7,$this->pagina,PDO::PARAM_INT);
    return $statement;
  }

  public function set($metodo){
    $this->idUnidadNegocio	 = $metodo('idUnidadNegocio');
    $this->idEmpresa	       = $metodo('idEmpresa');
    $this->nombre            = $metodo('nombre');
    $this->descripcion	     = $metodo('descripcion');
    $this->estado 	         = $metodo('estado');
  }

}
