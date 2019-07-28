<?php
namespace entidades;
use PDO;
class Usuario extends Entidad
{
	private $idUsuario;
	private $idPersona;
	private $usuario;
	private $pass;
	private $estado;


	public function setConsulta($filaConsulta){
		$this->idUsuario=$this->obtenerColumna($filaConsulta,'idUsuario');
		$this->idPersona=$this->obtenerColumna($filaConsulta,'idPersona');
		$this->usuario=$this->obtenerColumna($filaConsulta,'usuario');
		$this->pass=$this->obtenerColumna($filaConsulta,'pass');
		$this->estado=$this->obtenerColumna($filaConsulta,'estado');
	}
	public function bindValues($statement){
		$statement->bindValue(1,$this->idUsuario,PDO::PARAM_INT);
		$statement->bindValue(2,$this->idPersona,PDO::PARAM_INT);
		$statement->bindValue(3,$this->usuario,PDO::PARAM_STR);
		$statement->bindValue(4,$this->pass,PDO::PARAM_STR);
		$statement->bindValue(5,$this->estado,PDO::PARAM_INT);
		$statement->bindValue(6,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(7,$this->pagina,PDO::PARAM_INT);

		return $statement;
	}

	public function set($metodo){
		$this->idUsuario    = $metodo('idUsuario');
		$this->idPersona	 = $metodo('idPersona');
		$this->usuario = $metodo('usuario');
		$this->pass	 = $metodo('pass');
		$this->estado 	 = 1;
	}

	public function iniciarSesion(){
    $_SESSION['idUsuario'] = $this->idUsuario;
    $_SESSION['idPersona'] = $this->idPersona;
		$_SESSION['usuario'] = $this->usuario;
	}
}
