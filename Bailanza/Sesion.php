<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="logo1.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/normalize.css" />
    <title>Bailanza</title>
  </head>
  <body>
    <main class="login-design">
      <div class="waves">
        <img src="assets/loginPerson.png" alt="" />
      </div>
      <div class="login">
        <div class="login-data">
          <img src="assets/collab.png" alt="" />
          <h1>Inicio de Sesión</h1>
          <br>
          <form action="registrar.php" method="post" class="login-form">
            <div class="input-group">
              <label class="input-fill">
                <input type="text" name="usuario" id="email" required />
                <span class="input-label">Usuario</span>
                <i class="fas fa-envelope"></i>
              </label>
            </div>
            <div class="input-group">
              <label class="input-fill">
                <input type="password" name="contrasena" id="password" required />
                <span class="input-label">Contraseña</span>
                <i class="fas fa-lock"></i>
              </label>
            </div>
            <br>
            <a href="Registro.php">¿Necesitas una Cuenta?</a>
            <br>
            <input type="submit" name="Login" value="Iniciar Sesion" class="btn-login" />
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
