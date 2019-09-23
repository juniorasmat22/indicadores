<?php
namespace modelos;
/**
 *
 */
class CursoModelo extends Modelo
{

  function __construct()
  {
    	parent::__construct('sp_curso_crud(?,?,?,?,?,?,?)','Curso');
  }
}
