<?php
namespace modelos;

class EmpresaModelo extends Modelo{
	public function __construct(){
		parent::__construct('sp_empresa_crud(?,?,?,?,?,?,?,?)','Empresa');
	}
}
