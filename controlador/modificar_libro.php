<?php
include "modelo/conexion.php";

if (!empty($_POST["btnregistrar"])){
    // Validacion de campos para que no estenc vacios
    if (!empty($_POST["titulo"]) and !empty($_POST["tipo"]) and !empty($_POST["id_pub"]) and !empty($_POST["precio"]) and !empty($_POST["avance"]) and !empty($_POST["total_ventas"]) and !empty($_POST["notas"]) and !empty($_POST["fecha_pub"]) and !empty($_POST["contrato"])) {
        
        //(Esto arregla el error "Syntax error near 's Database"
        $id_titulo = $conexion->real_escape_string($_POST["id"]);
        $titulo = $conexion->real_escape_string($_POST["titulo"]);
        $tipo = $conexion->real_escape_string($_POST["tipo"]);
        $id_pub = $conexion->real_escape_string($_POST["id_pub"]);
        $precio = $conexion->real_escape_string($_POST["precio"]);
        $avance = $conexion->real_escape_string($_POST["avance"]);
        $total_ventas = $conexion->real_escape_string($_POST["total_ventas"]);
        $notas = $conexion->real_escape_string($_POST["notas"]);
        $fecha_pub = $conexion->real_escape_string($_POST["fecha_pub"]);  
        $contrato = $conexion->real_escape_string($_POST["contrato"]);              
        

        $sql = $conexion->query("UPDATE titulos SET titulo='$titulo', tipo='$tipo', id_pub='$id_pub', precio='$precio', avance='$avance', total_ventas='$total_ventas', notas='$notas', fecha_pub='$fecha_pub', contrato='$contrato' WHERE id_titulo='$id_titulo' ");
        
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar producto</div>";
        }
        
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}
?>

