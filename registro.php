<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/registro.css"> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registro de usuario</title>
  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
             </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Registrarme</h5>
            
            <form method="POST"> <?php
                include "modelo/conexion.php";
                include "controlador/registro_usuario.php";
                ?>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" name="usuario" placeholder="myusername" required autofocus>
                <label for="floatingInputUsername">Usuario</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
                </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit" name="btnregistrar" value="ok">Registrarme</button>
              </div>

            <hr class="my-4">
            <a class="d-block text-center mt-2 small" href="login.php">¿Ya tienes un usuario? Iniciar Sesion</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>