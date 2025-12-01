<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5ba0145862.js" crossorigin="anonymous"></script>
    <title>Solicitudes</title>
</head>


<body>
 <body class="bg-light">

    <div class="offcanvas offcanvas-start show d-flex flex-column flex-shrink-0 p-3 bg-dark text-white d-none d-md-block" 
         tabindex="-1" id="sidebar" style="width: 250px;">

        <h4 class="text-center mb-4">Panel Admin</h4>

        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-white"><i class="fa-solid fa-book"></i> Libreria</a>
            </li>
            <li>
                <a href="autores.php" class="nav-link text-white"><i class="fa-solid fa-user"></i> Autores</a>
            </li>
            <li>
                <a href="contacto.php" class="nav-link text-white"><i class="fa-solid fa-address-book"></i> Contacto</a>
            </li>
            <li>
                <a href="solicitudes.php" class="nav-link text-white"><i class="fa-solid fa-envelope-open-text"></i> Solicitudes</a>
            </li>
        </ul>

    </div>

    <main class="container" style="margin-left: 260px;">
        <h1 class="mt-4">Lista de Autores</h1>

                <div class="col-11 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Asunto</th>
                        <th scope="col">Comentario</th>
                        <th scope="col">Fecha</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!--Conexion con la base de datos y mostrar los registros existentes-->
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from contacto");
                    while($datos=$sql->fetch_object()){ ?>
                        <tr>
                            <td><?= $datos->id_solicitud?></td>
                            <td><?= $datos->nombre?></td>
                            <td><?= $datos->apellido?></td>
                            <td><?= $datos->correo?></td>
                            <td><?= $datos->asunto?></td>
                            <td><?= $datos->comentario?></td>
                            <td><?= $datos->fecha?></td>
                            
                        </tr>
                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </main>

</body>
</html>