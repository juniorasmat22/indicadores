<?php
namespace entidades;
use PDO;

class Fuente extends Entidad
{
  public $idFuente;
  public $idIndicador;
  public $periodo;
  public $tipo;
  public $param1;
  public $param2;
  public $param3;
  public $resultado;
  public $inicio;
  public $fin;
  public $estado;
  public function setConsulta($filaConsulta){
    $this->idFuente=$this->obtenerColumna($filaConsulta,'id_fuente');
    $this->idIndicador=$this->obtenerColumna($filaConsulta,'id_indicador');
    $this->periodo=$this->obtenerColumna($filaConsulta,'periodo');
    $this->param1=$this->obtenerColumna($filaConsulta,'param1');
    $this->param2=$this->obtenerColumna($filaConsulta,'param2');
    $this->param3=$this->obtenerColumna($filaConsulta,'param3');
    $this->resultado=$this->obtenerColumna($filaConsulta,'resultado');
    $this->inicio=$this->obtenerColumna($filaConsulta,'inicio');
    $this->fin=$this->obtenerColumna($filaConsulta,'fin');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idFuente,PDO::PARAM_INT);
    $statement->bindValue(2,$this->idIndicador,PDO::PARAM_INT);
    $statement->bindValue(3,$this->periodo,PDO::PARAM_STR);
    $statement->bindValue(4,$this->param1,PDO::PARAM_STR);
    $statement->bindValue(5,$this->param2,PDO::PARAM_STR);
    $statement->bindValue(6,$this->param3,PDO::PARAM_STR);
    $statement->bindValue(7,$this->resultado,PDO::PARAM_STR);
    $statement->bindValue(8,date("Y-m-d H:i:s", strtotime($this->inicio)),PDO::PARAM_STR);
    $statement->bindValue(9,date("Y-m-d H:i:s", strtotime($this->fin)),PDO::PARAM_STR);
    $statement->bindValue(10,$this->estado,PDO::PARAM_INT);
    $statement->bindValue(11,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(12,$this->pagina,PDO::PARAM_INT);
    $statement->bindValue(13,$this->tipo,PDO::PARAM_INT);
    return $statement;
  }

  public function set($metodo){
    $this->idFuente 	  = $metodo('idFuente');
    $this->idIndicador  = $metodo('idIndicador');
    $this->periodo	    = $metodo('periodo');
    $this->resultado         = $metodo('resultado');
    $this->param1	      = $metodo('param1');
    $this->param2	      = $metodo('param2');
    $this->param3	      = $metodo('param3');
    $this->inicio 	    = $metodo('inicio');
    $this->fin 	        = $metodo('fin');
    $this->estado 	    = $metodo('estado');
    $this->tipo 	       = $metodo('tipo');
  }

}
