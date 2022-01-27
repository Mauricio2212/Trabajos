<!DOCTYPE html>
<html>
<head>
	<title>Bailanza</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="logo1.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, user-scable-no, initial-scale-1.0, maximum-scale-1.0, minimum-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-chrome">


</head>

<body>
	<header>
		<a href="#" class="logo">BAILANZA</a>
		<nav>
			<ul>
				<li><a href="Inicio.php">Inicio</a></li>
				<li><a href="Escuelas.php">Escuelas</a></li>
				<li><a href="Cursos.php">Cursos</a></li>
				<li><a href="Registro.php">Registro</a></li>
				<li><a href="Preguntas.php">Preguntas frecuentes </a></li>
			</ul>
		</nav>
	</header>



    <section class="zona1"></section>
<div class="separacion-registro"></div>

    <div class="container-registro">
        <div class="bienv"><h3>Registrate</h3></div>
        <div class="content">
          <form action="registrar.php" method="post">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Nombre:</span>
                <input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
              </div>
              <div class="input-box">
                <span class="details">Usuario:</span>
                <input type="text" name="usuario" placeholder="Ingresa tu usuario" required>
              </div>
              <div class="input-box">
                <span class="details">Email:</span>
                <input type="email" name="email" placeholder="Ingresa tu email" required>
              </div>
              <div class="input-box">
                <span class="details">Número de teléfono:</span>
                <input type="text" name="telefono" placeholder="Ingresa tu teléfono" required>
              </div>
              <div class="input-box">
                <span class="details">Contraseña:</span>
                <input type="password" name="contrasena" placeholder="Ingresa tu contraseña" required>
              </div>
              <div class="input-box">
                <span class="details">Confirmacion de contraseña:</span>
                <input type="password" name="contrasenaco" placeholder="Confirmacion de contraseña" required>
              </div>
            </div>
            <div class="gender-details">
              <input type="radio" name="gender" id="dot-1" value="alumno">
              <input type="radio" name="gender" id="dot-2" value="profesor">
              <input type="radio" name="gender" id="dot-3" value="academia">
              <span class="gender-title">Selecciona una opcion con la que deseas registrarte a Bailanza:</span>
              <div class="category">
                <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Alumno</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Profesor</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Academia/Ballet</span>
                </label>
              </div>
            </div>
            <div class="button">
              <input type="submit" name="registrar" value="Registrate">
            </div>
            <div class="cuenta">
                <p><a href="Sesion.php">Ya estoy registrado.</a></p>
            </div>
          </form>
        </div> 
        
      </div>
      <DIV></DIV>











      <footer class="footer">
        <div class="container">
            <p>© 2021 | Bailanza </p>
        </div>
    </footer>


	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
        })
        </script>

    </body>
    </html>
