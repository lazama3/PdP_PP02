<?php 
         
    //controlador de vista_nuevo-user

    require_once 'Catedra.php';
    require_once 'Persona.php';
    require_once 'Usuario.php';
    require_once 'Usuarios.php';
    
    if($_POST["nivel"] == "level1"){
    $level_c2 = 1;
} 

    if($_POST["nivel"] == "level2"){
        $level_c2 = 2;
    }

    if($_POST["nivel"] == "level3"){
        $level_c2 = 3;
    } 
    
    $name_c2 = $_POST['name'];
    $pass_c2 = $_POST['pass'];
    $nick_c2 = $_POST['nick'];
    $dni_c2 = $_POST['dni'];

    $user_c2 = new Usuario($name_c2, $dni_c2, $nick_c2, $pass_c2, $level_c2);

    //HACER: tenemos que recuperar la lista de usuarios del archivo en este caso llamada reg_usuarios y 
    //verificar si existe el user_c2 a partir del metodo autenticar

    $reg_usuarios = new Usuarios();  

    if ($reg_usuarios->autenticar($_POST['nick']) == 1){ //recupero la lista de registrados dentro del atr _registrados y a partir de esa lista autentico
        
        $user -> guardar_cookie();
        $reg_usuarios -> add_registrado($user_c2); //agrego registrado al array
        //y se guarda en el archivo
        
        header("Location: vista_menu.php");
        
    } else {

        header("Location: vista_nuevo-user.php")->withMessage("Nick ya registrado");
   
    }

 ?> 

