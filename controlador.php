<?php 
    //verificacion de cookie y redireccionamiento a vista login o menu

    if (isset($_COOKIE['nick'])){
        header("Location: vista_menu.php");
    } else {
        header("Location: vista_login.php");
    }

?> 