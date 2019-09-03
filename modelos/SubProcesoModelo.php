<?php
namespace modelos;

class SubProcesoModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_subproceso_crud(?,?,?,?,?,?,?,?)','SubProceso');
	}
	public function listar_subprocesos($SubProceso){//para el mapa de procesos
		$SubProceso->opcion = 6;
		return $this->queryObjects($this->sp,$SubProceso);
	}
	public function listar_subprocesos2($SubProceso){//listar de subprocesos dependiendo el proceso
		$SubProceso->opcion = 7;
		return $this->queryObjects($this->sp,$SubProceso);
	}
	public function listar_subprocesosNivel2($SubProceso){//listar de subprocesos dntro de cada subproceso tabla
		$SubProceso->opcion = 8;
		return $this->queryObjects($this->sp,$SubProceso);
	}
	public function listar_subprocesosNivel($SubProceso){//listar de subprocesos dntro de cada subproceso para el mapa
		$SubProceso->opcion = 9;
		return $this->queryObjects($this->sp,$SubProceso);
	}
}
