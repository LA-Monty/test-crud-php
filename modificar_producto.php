<?php
    // Conexion con la base de datos
    include "modelo/conexion.php";
    $id=$_GET["id"];
    $sql= $conexion->query("select * from persona where id_persona= $id");

    if ($sql === false) {
        die("Error en la consulta SQL: " . $conexion->error);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5ba0145862.js" crossorigin="anonymous"></script>
</head>
<body>
    <form class="col-4 p-3 m-auto" p-3 method="POST">
        <h3 class="text-center text-secundary">Modificar registro de personas</h3>
<!--Mediante este input recojo el ID del registro de la base de datos-->
        <input type="hidden" name="id" value="<?= $_GET["id"]?>" >
        <?php
        
        include "controlador/modificar_producto.php";
        $sql= $conexion->query("select * from persona where id_persona= $id");
        while($datos = $sql->fetch_object()) {?>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido </label>
                <input type="text" class="form-control" name="apellido"  value="<?= $datos->apellido?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cedula</label>
                <input type="text" class="form-control" name="dni" value="<?= $datos->dni?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nac" value="<?= $datos->fecha_nac?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" value="<?= $datos->correo?>">
            </div>
        <?php }
        ?>
        <div class="d-grid gap-1">
            <button type="submit" class="btn btn-primary " name="btnregistrar" value="ok"><i class="fa-solid fa-floppy-disk"></i></button>
            <a href="./index.php" class="btn btn-primary btn-warning"><i class="fa-solid fa-arrow-left"></i></a>
            
        </div>
        </form>
</body>
</html>

<!--Cambios necesarios para no joder el repositorio-->