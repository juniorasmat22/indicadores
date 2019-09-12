<?php

namespace controladores;

class PersonaControlador extends Controlador
{
	public function __construct()
	{
		parent::__construct('PersonaModelo','Persona','vistas/persona/index.php');
	}
	public function verPerfil()
	{
		$pagina=isset($_GET['p'])?$_GET['p']:1;
		$vista='vistas/persona/perfil.php';
		require_once 'vistas/plantilla/index.php';
	}
}
