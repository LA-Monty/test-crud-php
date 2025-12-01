<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        
        $usuario = $conexion->real_escape_string($_POST["usuario"]);
        $password = $_POST["password"];
        
        // ENCRIPTAR LA CONTRASEÑA
        $password_encriptada = password_hash($password, PASSWORD_DEFAULT);
        
        
        $verificar = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");
        
        if ($verificar->num_rows > 0) {
            echo '<div class="alert alert-warning">El usuario ya existe, intenta con otro.</div>';
        } else {
            
            $sql = $conexion->query("INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$password_encriptada')");
            
            if ($sql == 1) {
                echo '<div class="alert alert-success">Usuario registrado correctamente</div>';
            } else {
                echo '<div class="alert alert-danger">Error al registrar usuario</div>';
            }
        }
        
    } else {
        echo '<div class="alert alert-warning">Por favor rellene todos los campos</div>';
    }
}
?>