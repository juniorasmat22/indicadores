<?php
namespace modelos;

class SubProcesoModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_subproceso_crud(?,?,?,?,?,?,?,?)','SubProceso');
	}
	public function listar_subprocesos($SubProceso){
		$SubProceso->opcion = 6;
		return $this->queryObjects($this->sp,$SubProceso);
	}
	public function listar_subprocesos2($SubProceso){
		$SubProceso->opcion = 7;
		return $this->queryObjects($this->sp,$SubProceso);
	}
	public function listar_subprocesosNivel2($SubProceso){
		$SubProceso->opcion = 8;
		return $this->queryObjects($this->sp,$SubProceso);
	}
}
