<?php
namespace modelos;

class PersonaModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_persona_crud(?,?,?,?,?,?,?)','Persona');
	}
	public function listarPersonas($persona){//lista empledos que no tienen un usuario asignado
		$persona->opcion = 6;
		return $this->queryObjects($this->sp,$persona);
	}
}
