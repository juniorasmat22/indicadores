<?php
namespace entidades;
use PDO;
class Persona extends Entidad
{
	private $idPersona;
	private $nombre;
	private $apellido;
	private $dni;


	public function setConsulta($filaConsulta){
		$this->idPersona=$this->obtenerColumna($filaConsulta,'idPersona');
		$this->nombre=$this->obtenerColumna($filaConsulta,'nombre');
		$this->apellido=$this->obtenerColumna($filaConsulta,'apellido');
		$this->dni=$this->obtenerColumna($filaConsulta,'dni');
	}
	public function bindValues($statement){
		$statement->bindValue(1,$this->idPersona,PDO::PARAM_INT);
		$statement->bindValue(2,$this->nombre,PDO::PARAM_STR);
		$statement->bindValue(3,$this->apellido,PDO::PARAM_STR);
		$statement->bindValue(4,$this->dni,PDO::PARAM_INT);

		return $statement;
	}

	public function set($metodo){
		$this->idPersona	 = $metodo('idPersona');
		$this->nombre      = $metodo('nombre');
		$this->apellido	   = $metodo('apellido');
		$this->dni 	       = $metodo('dni');
	}

}
