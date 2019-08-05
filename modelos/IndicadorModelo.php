<?php
namespace modelos;

class IndicadorModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_indicador_crud(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)','Indicador');
	}
	public function listar_indicadores($indicador){//para la tabla- listar indicadores
		$indicador->opcion = 6;
		return $this->queryObjects($this->sp,$indicador);
	}
	public function listar_indicador($indicador){//para la tabla- listar indicadores
		$indicador->opcion = 5;
		return $this->queryObjeto($this->sp,$indicador);
	}
}
