<?php

namespace controladores;

class PersonaControlador extends Controlador
{
	public function __construct()
	{
		parent::__construct('PersonaModelo','Persona','vistas/persona/index.php');
	}

}
