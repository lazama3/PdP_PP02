<?php

require_once 'Usuario.php';

class Usuarios {
  private static $_nombre;
  private $_registrados = array();

  public function guardar_archivo($nuevo)
  {
    $manejador = fopen("data/usuarios.txt", "w");
    fwrite($manejador,serialize($this));
    fclose($manejador);
  }

  public function get_archivo()
  {
    $manejador = fopen("data/usuarios.txt","r");

    $usuario = (object)unserialize(fgets($manejador));
    $this->_registrados = $usuario->_registrados;
    
    fclose($manejador);
  }

  public function get_registrados()
  {
    $this->get_archivo();
    return $this->_registrados;
  }

  public function add_registrado(Usuario $nuevo)
  {
    array_push($_registrados, $nuevo);
    $this->guardar_archivo();
  }

  public function autenticar_login(Usuario $login) 
  {
    $_registrados = $this->get_registrados(); //guardo la info de los users ingresados en registrados y despues me fijo si hay coincidencias

    $tam = sizeof($_registrados);

    for ($i = 0; $i < $tam; $i++){
      
      if($login->get_nick == $Registrados[i]->get_nick && $login->get_pass == $Registrados[i]->get_pass){
        
        //para que en controlador_login me reconozca el nivel del usuario se lo asigno al user $login
        $login->set_level($Registrados[i]->get_level);

        return 0;
      } else {
        return 1;
      }

    }

  }

  public function autenticar(Usuario $login) 
  {
    $_registrados = $this->get_registrados();
    $tam = sizeof($_registrados);

    for ($i = 0; $i < $tam; $i++){
      
      if($login->get_nick == $_registrados[i]->get_nick){
        return 0;
      } else {
        return 1;
      }

    }

  }

}
?>
