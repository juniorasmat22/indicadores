<?php
namespace modelos;

class MapaProcesosModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_mapaprocesos_crud(?,?,?,?,?,?,?,?,?)','MapaProcesos');
	}
}
