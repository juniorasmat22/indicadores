<?php
namespace entidades;
use PDO;
class Empresa extends Entidad
{
  private $idEmpresa;
  private $idUsuario;
  private $nombre;
  private $ruc;
  private $rubro;
  private $estado;


  public function setConsulta($filaConsulta){
    $this->idEmpresa=$this->obtenerColumna($filaConsulta,'idEmpresa');
    $this->idUsuario=$this->obtenerColumna($filaConsulta,'idUsuario');
    $this->nombre=$this->obtenerColumna($filaConsulta,'nombre');
    $this->ruc=$this->obtenerColumna($filaConsulta,'ruc');
    $this->rubro=$this->obtenerColumna($filaConsulta,'rubro');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idEmpresa,PDO::PARAM_INT);
    $statement->bindValue(2,$this->idUsuario,PDO::PARAM_INT);
    $statement->bindValue(3,$this->nombre,PDO::PARAM_STR);
    $statement->bindValue(4,$this->ruc,PDO::PARAM_STR);
    $statement->bindValue(5,$this->rubro,PDO::PARAM_STR);
    $statement->bindValue(6,$this->estado,PDO::PARAM_INT);
    $statement->bindValue(7,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(8,$this->pagina,PDO::PARAM_INT);
    return $statement;
  }

  public function set($metodo){
    $this->idEmpresa	 = $metodo('idEmpresa');
    $this->idEmpresa	 = $metodo('idUsuario');
    $this->nombre      = $metodo('nombre');
    $this->ruc	       = $metodo('ruc');
    $this->rubro	     = $metodo('rubro');
    $this->estado 	   = $metodo('estado');
  }

}
