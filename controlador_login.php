<?php 
   
    if(isset($_POST["nuevo_user"])) 
    {  
        header('Location: vista_nuevo-user.php'); 
    }

   
    //controlador de vista_login

    require_once 'Catedra.php';
    require_once 'Persona.php';
    require_once 'Usuario.php';
    require_once 'Usuarios.php';
    
    $user_c3 = new Usuario(NULL, NULL, $_POST['nick'], $_POST['pass'], NULL);

    //HACER: tenemos que recuperar la lista de usuarios del archivo en este caso llamada reg_usuario y 
    //verificar si existe el user_c3 a partir del metodo autenticar

    $reg_usuarios = new Usuarios();

    if ($reg_usuarios->autenticar_login($user_c3) == 1){ //recupero la lista de registrados dentro del atr _registrados y autentico
        
        //aca necesitamos recuperar el nivel del usuario con el que coincide el nombre y lo hacemos mediante la funcion autenticar

        $user_c3->guardar_cookie();
        header("Location: vista_menu.php");
    } else {
        echo "<script> alert('user no registrado'); </script>";
        //header("Location: vista_login.php");
    }

 ?> 

