<?php
namespace modelos;

class FuenteModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_fuente_crud(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)','Fuente');
	}
	public function listar_fuente($fuente){//para la tabla- listar indicadores
		$fuente->opcion = 6;
		return $this->queryObjects($this->sp,$fuente);
	}
	public function listar_fuente_sede($fuente){//para la tabla- listar fuentes por indicador y sede
		$fuente->opcion = 7;
		return $this->queryObjects($this->sp,$fuente);
	}
	public function listar_fuente_general($fuente){//para la tabla- listar fuentes por indicador y sede
		$fuente->opcion = 8;
		return $this->queryObjects($this->sp,$fuente);
	}
	public function listar_fuente_general_cursos($fuente){//para la tabla- listar fuentes por indicador periodo
		$fuente->opcion = 9;
		return $this->queryObjects($this->sp,$fuente);
	}
	public function listar_fuente_general_periodo($fuente){//para la tabla- listar fuentes por indicador  curso y periodo
		$fuente->opcion = 10;
		return $this->queryObjects($this->sp,$fuente);
	}
	public function listar_fuente_general_x_curso($fuente){//listar data fuente con curso
		$fuente->opcion = 11;
		return $this->queryObjects($this->sp,$fuente);
	}
	public function listar_periodos($fuente){//listar periodos
		$fuente->opcion = 12;
		return $this->queryObjects($this->sp,$fuente);
	}
	public function listar_fuente_x_sede($fuente){//listar data fuente con curso y sede
		$fuente->opcion = 13;
		return $this->queryObjects($this->sp,$fuente);
	}
}
