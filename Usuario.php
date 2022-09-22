<?php

require_once 'Persona.php';

class Usuario extends Persona {
  private $_nick;
  private $_pass;
  private $_level;

  public function __construct($name, $dni, $nick, $pass, $level)
  {
    parent::__construct($name, $dni);
    $this->_nick = $nick;
    $this->_pass = $pass;
    $this->_level = $level;
  }

  public function get_nick()
  {
    return $this->_nick;
  }

  public function get_pass()
  {
    return $this->_pass;
  }

  public function get_level()
  {
    return $this->_level;
  }

  public function set_level($level)
  {
    $this->_level = $level;
  }
  
  /*public function recuperar_sesion()
  {
    session_start();
   
    $this->nick = $_SESSION['nick'];
    $this->pass = $_SESSION['pass'];
    $this->level = $_SESSION['level'];
   
  }

  public function guardar_sesion()
  {
    session_start();
    $_SESSION['nick'] = $this->nick;
    $_SESSION['pass'] = $this->pass;
    $_SESSION['level'] = $this->level;
    
  }*/
  

  public function guardar_cookie()
  {
    setcookie("nick", $this->_nick, 0);
    setcookie("level", $this->_level, 0);

  }

  public function recuperar_cookie()
  {
    $this->_nick = $_COOKIE['nick'];
    $this->_level = $_COOKIE['level'];
    
  }

}
?>
