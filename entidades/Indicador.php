<?php
namespace entidades;
use PDO;

class Indicador extends Entidad
{
  public $idIndicador;
  public $idSubproceso;
  public $descripcion;
  public $meta;//objetivo
  public $iniciativas;
  public $responsable;
  public $lineaBase;
  public $frecuencia;
  public $estado;
  public $tipo;
  public $unidad;
  public $fv;
  public $rojo;
  public $amarillo;
  public $verde;
  public function setConsulta($filaConsulta){
    $this->idIndicador=$this->obtenerColumna($filaConsulta,'id_indicador');
    $this->idSubproceso=$this->obtenerColumna($filaConsulta,'id_sub_proceso');
    $this->descripcion=$this->obtenerColumna($filaConsulta,'descripcion');
    $this->meta=$this->obtenerColumna($filaConsulta,'meta');
    $this->iniciativas=$this->obtenerColumna($filaConsulta,'iniciativas');
    $this->responsable=$this->obtenerColumna($filaConsulta,'responsable');
    $this->lineaBase=$this->obtenerColumna($filaConsulta,'linea_base');
    $this->frecuencia=$this->obtenerColumna($filaConsulta,'frecuencia');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
    $this->tipo=$this->obtenerColumna($filaConsulta,'tipo');
    $this->unidad=$this->obtenerColumna($filaConsulta,'unidad');
    $this->fv=$this->obtenerColumna($filaConsulta,'fv');
    $this->rojo=$this->obtenerColumna($filaConsulta,'rojo');
    $this->amarillo=$this->obtenerColumna($filaConsulta,'amarillo');
    $this->verde=$this->obtenerColumna($filaConsulta,'verde');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idIndicador,PDO::PARAM_INT);
    $statement->bindValue(2,$this->idSubproceso,PDO::PARAM_INT);
    $statement->bindValue(3,$this->descripcion,PDO::PARAM_STR);
    $statement->bindValue(4,$this->meta,PDO::PARAM_STR);
    $statement->bindValue(5,$this->iniciativas,PDO::PARAM_STR);
    $statement->bindValue(6,$this->responsable,PDO::PARAM_STR);
    $statement->bindValue(7,$this->lineaBase,PDO::PARAM_STR);
    $statement->bindValue(8,$this->frecuencia,PDO::PARAM_STR);
    $statement->bindValue(9,$this->estado,PDO::PARAM_INT);
    $statement->bindValue(10,$this->tipo,PDO::PARAM_STR);
    $statement->bindValue(11,$this->unidad,PDO::PARAM_STR);
    $statement->bindValue(12,$this->fv,PDO::PARAM_STR);
    $statement->bindValue(13,$this->rojo,PDO::PARAM_INT);
    $statement->bindValue(14,$this->amarillo,PDO::PARAM_INT);
    $statement->bindValue(15,$this->verde,PDO::PARAM_INT);
    $statement->bindValue(16,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(17,$this->pagina,PDO::PARAM_INT);
    return $statement;
  }

  public function set($metodo){
    $this->idIndicador 	  = $metodo('idIndicador');
    $this->idSubproceso   = $metodo('idSubproceso');
    $this->descripcion	  = $metodo('descripcion');
    $this->meta           = $metodo('meta');
    $this->iniciativas	  = $metodo('iniciativas');
    $this->responsable	  = $metodo('responsable');
    $this->lineaBase	    = $metodo('lineaBase');
    $this->frecuencia 	  = $metodo('frecuencia');
    $this->estado 	      = $metodo('estado');
    $this->tipo 	        = $metodo('tipo');
    $this->unidad 	      = $metodo('unidad');
    $this->fv 	          = $metodo('fv');
    $this->rojo 	        = $metodo('rojo');
    $this->amarillo 	    = $metodo('amarillo');
    $this->verde 	        = $metodo('verde');
  }
}
