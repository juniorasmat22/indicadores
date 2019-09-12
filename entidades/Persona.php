<?php
namespace entidades;
use PDO;
class Persona extends Entidad
{
	public $idPersona;
	public $nombre;
	public $apellido;
	public $dni;
	public $estado;
	public $persona;


	public function setConsulta($filaConsulta){
		$this->idPersona=$this->obtenerColumna($filaConsulta,'id_persona');
		$this->nombre=$this->obtenerColumna($filaConsulta,'nombre');
		$this->apellido=$this->obtenerColumna($filaConsulta,'apellido');
		$this->dni=$this->obtenerColumna($filaConsulta,'dni');
		$this->estado=$this->obtenerColumna($filaConsulta,'estado');
		$this->persona=$this->obtenerColumna($filaConsulta,'persona');
	}
	public function bindValues($statement){
		$statement->bindValue(1,$this->idPersona,PDO::PARAM_INT);
		$statement->bindValue(2,$this->nombre,PDO::PARAM_STR);
		$statement->bindValue(3,$this->apellido,PDO::PARAM_STR);
		$statement->bindValue(4,$this->dni,PDO::PARAM_STR);
		$statement->bindValue(5,$this->estado,PDO::PARAM_STR);
		$statement->bindValue(6,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(7,$this->pagina,PDO::PARAM_INT);

		return $statement;
	}

	public function set($metodo){
		$this->idPersona	 = $metodo('idPersona');
		$this->nombre      = $metodo('nombre');
		$this->apellido	   = $metodo('apellido');
		$this->dni 	       = $metodo('dni');
		$this->estado 	   = $metodo('estado');
	}

}
