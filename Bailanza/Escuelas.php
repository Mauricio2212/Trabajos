<!DOCTYPE html>
<html>
<head>
	<title>Bailanza</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="logo1.ico">
    <meta name="viewport" content="width-device-width, user-scable-no, initial-scale-1.0, maximum-scale-1.0, minimum-scale-1.0">


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
            <h1>¡Encuentra tu tema interes!</h1>
            <p>En esta sección puedes encontrar informacion sobre diferentes escuelas dentro de Bailanza.</p>
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
                    <img src="i7.jpg" alt="">
                </div>
                <h2>Ballet Folklórico "Aliyexal Real Azteca"</h2>
                <span>Lunes y miercoles</span>
                <span>De 8:00 pm a 11:00 pm</span>
                <ul class="ctn-tag">
                    <li>Folklore mexicano</li>
                </ul>
                <a href="https://goo.gl/maps/Zi2QuGx15GheEa3P7"><button>Ver ubicación</button></a>

            </div>

            <div class="post" data-category="Cumbia">

                <div class="ctn-img"><img src="i12.jpg" alt=""></div>
                <h2>Academia de cumbia "We are brothers"</h2>
                <span>Lunes y jueves</span>
                <span>De 7:00 pm a 10:00 pm</span>
                <ul class="ctn-tag">
                    <li>Cumbia</li>
                </ul>
                <a href="https://goo.gl/maps/TBXmFkM1hGwZGGBZ9"><button>Ver ubicación</button></a>

            </div>

            <div class="post" data-category="Bachata">

                <div class="ctn-img"><img src="i14.jpg" alt=""></div>
                <h2>Bachata House Monterrey Academia de baile</h2>
                <span>Martes y viernes</span>
                <span>De 7:30 pm a 10:30 pm</span>
                <ul class="ctn-tag">
                    <li>Bachata</li>
                </ul>
                <a href="https://g.page/bachatahousemty?share"><button>Ver ubicación</button></a>

            </div>

            <div class="post" data-category="Ballet">

                <div class="ctn-img"><img src="i8.jpg" alt=""></div>
                <h2>Escuela Rusa de Ballet Clásico</h2>
                <span>Lunes</span>
                <span>De 4:00 pm a 8:00 pm</span>
                <ul class="ctn-tag">
                    <li>Ballet</li>
                </ul>
                <a href="https://goo.gl/maps/S9mN9xJ5y5A5k8Vx8"><button>Ver ubicación</button></a>

            </div>

            <div class="post" data-category="Urbano">

                <div class="ctn-img"><img src="i5.jpg" alt=""></div>
                <h2>Comunidad de Danza Urbana, Mty</h2>
                <span>Lunes, martes y miercoles</span>
                <span>De 6:30 pm a 9:00 pm</span>
                <ul class="ctn-tag">
                    <li>Urbano</li>
                </ul>
                <a href="https://goo.gl/maps/9vGYcGUgMWyg59x57"><button>Ver ubicación</button></a>

            </div>

            <div class="post" data-category="Salsa">

                <div class="ctn-img"><img src="i16.jpg" alt=""></div>
                <h2>Academia de baile "La escuela de la danza"</h2>
                <span>Martes, jueves y viernes</span>
                <span>De 7:30 pm a 10:00 pm</span>
                <ul class="ctn-tag">
                    <li>Salsa</li>
                </ul>
                <a href="https://goo.gl/maps/jz4zE8xePKwE54hU7"><button>Ver ubicación</button></a>

            </div>

            <div class="post" data-category="FM">

                <div class="ctn-img"><img src="i6.jpg" alt=""></div>
                <h2>Compañía de Danza Folklórica "Citlali"</h2>
                <span>Sabado y domingo</span>
                <span>De 10:00 am a 3:00 pm</span>
                <ul class="ctn-tag">
                    <li>Folklore mexicano</li>

                </ul>
                <a href="https://goo.gl/maps/3Xo7zDmF1YokEuJbA"><button>Ver ubicación</button></a>

            </div>


            

        </div>

    </div>




</div>



    <script src="js/script.js"></script>
    <script src="js/script1.js"></script>

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