<?php

require_once 'Persona.php';

class Catedra {
  private $_materia;
  private static $_archivo;
  private $Alumnos;
  private $Profesor;

  public function __constructor($materia, $archivo)
  {
    $this->_materia = $materia;
    $this->_archivo = $archivo;
  }

  public function get_materia()
  {
    return $this->_materia;
  }

  public function get_archivo()
  {
    return $this->_archivo;
  }

  public function guardar_catedra()
  {

  }

  public function add_alumno(Usuario $alumno)
  {
    
  }

  

}
?>
