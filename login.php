<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Login de usuario</h3>

              <form method="POST">
                
                <?php
                include "modelo/conexion.php";
                include "controlador/login_usuario.php";
                ?>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="usuario" placeholder="Usuario">
                  <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <label for="password">Contraseña</label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-dark btn-login text-uppercase fw-bold mb-2" type="submit" name="btningresar" value="ok">Entrar</button>
                  <div class="text-center">
                    <a class="small text-secondary" href="registro.php">Registrate Aqui</a>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>