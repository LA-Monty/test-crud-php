<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y html</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5ba0145862.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <h1 class="text-center p-3">Hola mundo</h1>

    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_persona.php";
    ?>

    <div class="container-fluid row">

        <!--Formulario de registro de personas-->
        <form class="col-4" p-3 method="POST">
            <h3 class="text-center text-secundary">Registro de personas</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido </label>
                <input type="text" class="form-control" name="apellido">
                
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cedula</label>
                <input type="text" class="form-control" name="dni">
                
            </div>

                        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nac">
                
            </div>

                        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
                
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

        <!--Tabla de personas registradas-->
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!--Conexion con la base de datos y mostrar los registros existentes-->
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from persona");
                    while($datos=$sql->fetch_object()){ ?>
                        <tr>
                            <td><?= $datos->id_persona?></td>
                            <td><?= $datos->nombre?></td>
                            <td><?= $datos->apellido?></td>
                            <td><?= $datos->dni?></td>
                            <td><?= $datos->fecha_nac?></td>
                            <td><?= $datos->correo?></td>
                            <td>
                            <!--Para tomar el id del registro que deseo eliminar o modificar se usa ?id=<?= $datos->id_persona?> dentro del href-->
                                <a href="modificar_producto.php?id=<?= $datos->id_persona ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="index.php?id=<?= $datos->id_persona ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>

                        </tr>
                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>