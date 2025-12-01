<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("delete from titulos where id_titulo= '$id'");
    if ($sql==1) {
        echo '<div class="alert alert-danger">Registro eliminado</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar el registro</div>';
    }
}
?>


<!--Cambios necesarios para no joder el repositorio-->