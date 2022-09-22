<html> 
    <head> 
        <title> PdP_PP02 </title> 
    </head> 
    
    <body> 

        <form method="post" action="controlador_nuevo-user.php"> 
        
        <!-- este es el vista de agregar un nuevo usuario -->

            nombre:
            <input type = "text" name = "name">
            <br>

            documento:     
            <input type = "text" name = "dni">
            <br>
        
            usuario:     
            <input type = "text" name = "nick">
            <br>
            
            contraseña:
            <input type = "password" name = "pass">
            <br>

            nivel: 
            <select name="nivel">
                <option value="level1"> alumno </option>
                <option value="level2"> profesor </option>
                <option value="level3"> administrador </option>
            </select>
            
            <br>
            <input type = "submit" name = "ingreso_user" value = "ingresar">
            <br>

        </form>


</body>

</html> 