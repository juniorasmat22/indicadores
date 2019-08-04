<?php
namespace modelos;

class FuenteModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_fuente_crud(?,?,?,?,?,?,?,?,?,?,?,?,?)','Fuente');
	}
	public function listar_fuente($fuente){//para la tabla- listar indicadores
		$fuente->opcion = 6;
		return $this->queryObjects($this->sp,$fuente);
	}
}
