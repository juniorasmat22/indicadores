<?php
namespace entidades;
use PDO;
class Curso extends Entidad
{
  public $idCurso;
  public $nombre;
  public $ciclo;
  public $tipo_curso;
  public $estado;


  public function setConsulta($filaConsulta){
    $this->idCurso=$this->obtenerColumna($filaConsulta,'id_curso');
    $this->nombre=$this->obtenerColumna($filaConsulta,'nombre');
    $this->ciclo=$this->obtenerColumna($filaConsulta,'ciclo');
    $this->tipo_curso=$this->obtenerColumna($filaConsulta,'tipo_curso');
    $this->estado=$this->obtenerColumna($filaConsulta,'estado');
  }
  public function bindValues($statement){
    $statement->bindValue(1,$this->idCurso,PDO::PARAM_INT);
    $statement->bindValue(2,$this->nombre,PDO::PARAM_STR);
    $statement->bindValue(3,$this->ciclo,PDO::PARAM_STR);
    $statement->bindValue(4,$this->tipo_curso,PDO::PARAM_STR);
    $statement->bindValue(5,$this->estado,PDO::PARAM_INT);
    $statement->bindValue(6,$this->opcion,PDO::PARAM_INT);
		$statement->bindValue(7,$this->pagina,PDO::PARAM_INT);
    return $statement;
  }

  public function set($metodo){
    $this->idCurso	     = $metodo('idCurso');
    $this->nombre        = $metodo('nombre');
    $this->ciclo	       = $metodo('ciclo');
    $this->tipo_curso	   = $metodo('tipo_curso');
    $this->estado 	     = $metodo('estado');
  }

}
