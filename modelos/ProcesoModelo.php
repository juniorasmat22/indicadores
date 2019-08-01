<?php
namespace modelos;

class ProcesoModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_proceso_crud(?,?,?,?,?,?,?,?)','Proceso');
	}
	public function listar_procesos($Proceso){
		$Proceso->opcion = 6;
		return $this->queryObjects($this->sp,$Proceso);
	}
}
