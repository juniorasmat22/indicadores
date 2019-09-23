<?php
namespace controladores;
/**
 *
 */
class CursoControlador extends Controlador
{

  function __construct()
  {
  parent::__construct('CursoModelo','Curso','vistas/curso/index.php');
  }
}
