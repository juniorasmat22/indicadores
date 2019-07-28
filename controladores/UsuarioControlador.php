<?php

namespace controladores;

class UsuarioControlador extends Controlador
{
	public function __construct()
	{
		parent::__construct('UsuarioModelo','Usuario','vistas/usuarios/index.php');
	}

	public function login(){

		if (isset($_POST['usuario'], $_POST['pass'])){
			$this->entidad->setMetodoPost();
			$respuesta = $this->modelo->login($this->entidad);
			if($respuesta->respuesta){
				$respuesta->resultado->iniciarSesion();//entidad
				$this->respuesta($respuesta);
			}else{
				$respuesta->mensaje = "El usuario no existe!!";
				$this->respuesta($respuesta);
			}
		}else{
			require_once 'vistas/login/login.php';
		}
	}

	public function cerrarSesion(){
		session_destroy();
		header('Location: index.php');
		//require_once 'vistas/auth/login.php';
	}

}
