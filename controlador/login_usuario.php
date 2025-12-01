<?php

session_start(); // Iniciar la sesión para guardar los datos del usuario

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        
        $usuario = $conexion->real_escape_string($_POST["usuario"]);
        $password = $_POST["password"];
        
        /
        $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");
        
        if ($datos = $sql->fetch_object()) {
            // Verificar la contraseña encriptada
            if (password_verify($password, $datos->password)) {
                
                $_SESSION["id"] = $datos->id_usuario;
                $_SESSION["usuario"] = $datos->usuario;
                
                header("location: index.php"); 
            } else {
                echo '<div class="alert alert-danger">Contraseña incorrecta</div>';
            }
        } else {
            echo '<div class="alert alert-danger">El usuario no existe</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>