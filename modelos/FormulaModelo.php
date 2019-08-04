<?php
namespace modelos;

class FormulaModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_formula_crud(?,?,?,?,?,?,?,?,?,?)','Formula');
	}
	public function listar_formula($indicador){//para la tabla- listar formulas
		$indicador->opcion = 6;
		return $this->queryObjects($this->sp,$indicador);
	}
	public function listar_formula_X($indicador){//para la tabla- listar formulas
		$indicador->opcion = 6;
		return $this->queryObjeto($this->sp,$indicador);
	}
}
