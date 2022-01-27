<!DOCTYPE html>
<html>
<head>
	<title>Bailanza</title>
    <link rel="stylesheet" href="estilos.css">
	<link rel="shortcut icon" href="logo1.ico">

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

    <div class="blog-container-cover">
        <div class="container-info-cover">
            <h1>Aprende, disfruta y baila</h1>
            <p>Adquiere y practica conocimientos en danza con nuestros cursos.</p>
        </div>
    </div>


    <div class="container-post">

        <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
        <input type="radio" id="FM" name="categories" value="FM">
        <input type="radio" id="Ballet" name="categories" value="Ballet">
        <input type="radio" id="Cumbia" name="categories" value="Cumbia">
        <input type="radio" id="Bachata" name="categories" value="Bachata">
        <input type="radio" id="Salsa" name="categories" value="Salsa">
        <input type="radio" id="Urbano" name="categories" value="Urbano">

        <div class="container-category">
            <label for="TODOS">TODOS</label>
            <label for="FM">Folklore mexicano</label>
            <label for="Ballet">Ballet</label>
            <label for="Cumbia">Cumbia</label>
            <label for="Bachata">Bachata</label>
            <label for="Salsa">Salsa</label>
            <label for="Urbano">Urbano</label>
        </div>

	<div class="posts">

		<div class="post" data-category="FM">

			<div class="ctn-img">
				<img src="i15.jpg" alt="">
			</div>
			<h2>Curso de repertorio Tlacotalpan, Veracruz</h2>
			<span>26 febrero 2020 - 1:32 am</span>
			<span>Impartida por: Salma Ahtziri</span>
			<ul class="ctn-tag">
				<li>Folklore mexicano</li>
			</ul>
			<a href="Curso1.html"><button>Leer más</button></a>
		</div>
		<div class="post" data-category="FM">

			<div class="ctn-img">
				<img src="i13.jpg" alt="">
			</div>
			<h2>Conceptos básicos de danza folklórica mexicana</h2>
			<span>26 febrero 2020 - 1:32 am</span>
			<span>Impartida por: Bailanza</span>
			<ul class="ctn-tag">
				<li>Folklore mexicano</li>
			</ul>
			<a href="Curso2.php"><button>Leer más</button></a>
		</div>



</div>
</div>













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