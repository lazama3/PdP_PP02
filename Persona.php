<?php

require_once 'Catedra.php';

class Persona {
  private $_nombre;
  private $_dni;

  public function __construct($nombre, $dni)
  {
    $this->_nombre = $nombre;
    $this->_dni = $dni;
  }

  public function get_name()
  {
    return $this->_nombre;
  }

  public function get_dni()
  {
    return $this->_dni;
  }

  function set_nombre($nombre)
  {
    $this->nombre = $nom;
  }

  function set_dni($dni)
  {
    $this->dni = $dni;
  }

  /*public function guardar_catedra()
  {
  }

  public function add_alumno(Persona $alumno)
  {
  }
  */

}
?>
