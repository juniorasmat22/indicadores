<?php
namespace modelos;

class UnidadNegocioModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_unidadnegocio_crud(?,?,?,?,?,?,?)','UnidadNegocio');
	}
}
