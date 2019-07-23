<?php
namespace controladores;

class PlantillaControlador extends Controlador
{

	public function __construct()
	{

	}
	public function index(){
		require 'vistas/plantilla/index.php';
	}
	public function vista404(){
		require 'vistas/plantilla/404.php';
	}
}
