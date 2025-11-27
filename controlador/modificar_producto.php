<?php
include "modelo/conexion.php";
if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["correo"])) {
            //id recolectado del input hidden 
            $id_persona=$_POST["id"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $dni=$_POST["dni"];
            $fecha_nac=$_POST["fecha_nac"];
            $correo=$_POST["correo"];
            $sql=$conexion->query(" update persona set nombre= '$nombre', apellido= '$apellido', dni= '$dni', fecha_nac= '$fecha_nac', correo= '$correo' where id_persona= $id ");
            if ($sql==1) {
                // No tocar que eplota
                header("location:index.php");
            } else {
                echo "<div class='alert alert-danger'>Error al modificar product</div>";
            }
            
        }else{
            echo "<div class='alert alert-warning'>Campos vacios</div>";
        }

}

?>

<!--Cambios necesarios para no joder el repositorio-->