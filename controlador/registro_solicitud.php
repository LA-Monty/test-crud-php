<?php
     if(!empty($_POST['btnsolicitar'])){
        //Mediante este if verifico de que los campos no esten vacios
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["asunto"]) and !empty($_POST["comentario"])) {
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $correo=$_POST["correo"];
            $asunto=$_POST["asunto"];
            $comentario=$_POST["comentario"];
            // Aqui obtengo la fecha actual al momento en que se envie el formulario
            $fecha_actual = date("Y-m-d H:i:s");

            $sql=$conexion->query(" insert into contacto(nombre,apellido,correo,asunto,comentario,fecha)values('$nombre','$apellido','$correo','$asunto','$comentario','$fecha_actual') ");
            if ($sql==1){
                echo '<div class="alert alert-success">Solicitud registrada correctamente</div>';
        
            } else {
                echo '<div class="alert alert-danger">Error al registrar la solicitud</div>';
            } 
        
    }else {
            echo '<div class="alert alert-warning">alguno de los campos esta vacio</div>';
        }
     }
?>

<!--Cambios necesarios para no joder el repositorio-->