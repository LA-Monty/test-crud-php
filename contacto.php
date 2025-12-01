<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5ba0145862.js" crossorigin="anonymous"></script>
    <title>Contacto</title>
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
        <h1 class="mt-4">Contacto</h1>

        <div class="col-11 p-4">
                 <!--Formulario de registro de solicitudes-->
            <form class="" p-3 method="POST">
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_solicitud.php";
            ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido </label>
                    <input type="text" class="form-control" name="apellido">
                    
                </div>

<!---   Verificar si no es necesario, prueba de timestamp
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nac">
                    
                </div>
-->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo">
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Asunto</label>
                    <input type="text" class="form-control" name="asunto"> <!--Antes dni-->
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Comentario</label>
                    <textarea class="form-control" name="comentario"></textarea> <!--Antes dni-->
                    
                </div>

                <button type="submit" class="btn btn-primary" name="btnsolicitar" value="ok">Solicitar</button><!--Antes btn registrar-->
            </form>
        </div>
    </main>

    <script src="js/sidebar.js"></script>
</body>
</html>