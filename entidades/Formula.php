<?php
namespace entidades;
use PDO;

class Formula extends Entidad
{
  public $idFormula;
  public $idIndicador;
  public $formula;
  public $tipo;
  public $param1;
  public $param2;
  public $param3;
  public $estado;
  public function setConsulta($filaConsulta){
    $this->idFormula=$this->obtenerColumna($filaConsulta,'id_formula');
    $this->idIndicador=$this->obtenerColumna($filaConsulta,'id_indicador');
    $this->formula=$this->obtenerColumna($filaConsulta,'formula');
    $this->tipo=$this->obtenerColumna($filaConsulta,'tipo');
    $this->param1=$this->obtenerColumna($filaConsulta,'param1');
    $this->param2=$this->obtenerColumna($filaConsulta,'param2');
    $this->param3=$this->obtenerColumna($filaConsulta,'param3');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idFormula,PDO::PARAM_INT);
    $statement->bindValue(2,$this->idIndicador,PDO::PARAM_INT);
    $statement->bindValue(3,$this->formula,PDO::PARAM_STR);
    $statement->bindValue(4,$this->tipo,PDO::PARAM_INT);
    $statement->bindValue(5,$this->param1,PDO::PARAM_STR);
    $statement->bindValue(6,$this->param2,PDO::PARAM_STR);
    $statement->bindValue(7,$this->param3,PDO::PARAM_STR);
    $statement->bindValue(8,$this->estado,PDO::PARAM_INT);
    $statement->bindValue(9,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(10,$this->pagina,PDO::PARAM_INT);
    return $statement;
  }

  public function set($metodo){
    $this->idFormula 	  = $metodo('idFormula');
    $this->idIndicador  = $metodo('idIndicador');
    $this->formula	    = $metodo('formula');
    $this->tipo         = $metodo('tipo');
    $this->param1	      = $metodo('param1');
    $this->param2	      = $metodo('param2');
    $this->param3	      = $metodo('param3');
    $this->estado 	    = $metodo('estado');
  }

}
