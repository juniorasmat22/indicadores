<?php
namespace entidades;
use PDO;
class Usuario extends Entidad
{
	public $idUsuario;
	public $idPersona;
	public $usuario;
	public $pass;
	public $rol;
	public $estado;


	public function setConsulta($filaConsulta){
		$this->idUsuario=$this->obtenerColumna($filaConsulta,'id_usuario');
		$this->idPersona=$this->obtenerColumna($filaConsulta,'id_persona');
		$this->usuario=$this->obtenerColumna($filaConsulta,'usuario');
		$this->pass=$this->obtenerColumna($filaConsulta,'pass');
		$this->rol=$this->obtenerColumna($filaConsulta,'rol');
		$this->estado=$this->obtenerColumna($filaConsulta,'estado');
	}
	public function bindValues($statement){
		$statement->bindValue(1,$this->idUsuario,PDO::PARAM_INT);
		$statement->bindValue(2,$this->idPersona,PDO::PARAM_INT);
		$statement->bindValue(3,$this->usuario,PDO::PARAM_STR);
		$statement->bindValue(4,$this->pass,PDO::PARAM_STR);
		$statement->bindValue(5,$this->rol,PDO::PARAM_INT);
		$statement->bindValue(6,$this->estado,PDO::PARAM_INT);
		$statement->bindValue(7,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(8,$this->pagina,PDO::PARAM_INT);

		return $statement;
	}

	public function set($metodo){
		$this->idUsuario    = $metodo('idUsuario');
		$this->idPersona	 = $metodo('idPersona');
		$this->usuario = $metodo('usuario');
		$this->pass	 = $metodo('pass');
		$this->rol	 = $metodo('rol');
		$this->estado	 = $metodo('estado');
	}

	public function iniciarSesion(){
    $_SESSION['id_usuario'] = $this->idUsuario;
    $_SESSION['id_persona'] = $this->idPersona;
		$_SESSION['usuario'] = $this->usuario;
		$_SESSION['estado'] = $this->estado;
	}
}
