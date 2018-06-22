<?php if(!isset($_SESSION)){session_start();}?>
<?php


include '../../PreHecho/Head.php';

$host = $_SERVER["HTTP_HOST"];



 ?>
<!--________________________________________________________________________________________________________________________________________-->

<!--____________________________________________________________________< BODY >____________________________________________________________-->

<!--________________________________________________________________________________________________________________________________________-->

<?php include '../../PreHecho/header-Principal.php';?>
	<body>





	<div class="container-fluid">
		<div class="row">





			<div class="Principal col-md-12">


					<div class="Hola">
						<input type="checkbox" id="check">
										<label id="icone" for="check"><hgroup><h4>Menú <span class=" glyphicon glyphicon-th-list"></span></h4></hgroup></label>

										<div class="barra">
											<nav>

												<br/><h2><div class="Titulo">Cursos</div></h2>
												<a href="http://tecnologic-world.com/Secciones/Diseño-Web/Cursos/Curso-HTML.php"><div class="link">Curso HTML para Principiantes</div></a>
												<a href="http://tecnologic-world.com/Secciones/Diseño-Web/Cursos/Curso-CSS.php"><div class="link">Curso CSS para Principiantes</div></a>
												<a href="http://tecnologic-world.com/Secciones/Diseño-Web/Cursos/Curso-JS.php"><div class="link">Curso JS para Principiantes</div></a>
												<a href="http://tecnologic-world.com/Secciones/Diseño-Web/Cursos/Curso-PHP.php"><div class="link">Curso PHP Y MYSQLI</div></a>


												<br/><h2><div class="Titulo">Colores En CSS</div></h2>
												<a href=""><div class="link">Colores</div></a>
												<a href=""><div class="link">Degardados</div></a>

												<br/><h2><div class="Titulo">Foro</div></h2>
												<a href="http://tecnologic-world.com/Foro/Foro.php"><div class="link">Foro De Tecnologic World</div></a>
												<a href="http://tecnologic-world.com/Preguntas.php"><div class="link">Preguntas De Tecnologic World</div></a>
											</nav>
										</div>
					</div>



			<div class="container">
			<div class="descripcion">
				<h1><b>Diseño Web</b></h1>

				<p>Diseño Web es una sección de la Web "Tecnologic World" la cual se orienta en como su nombre indica diseñar
				,programar Páginas Web desde un principiante que quiera iniciar en el mundo del Diseño Web asta gente que publique
				ayude o busque información de este estilo.<br/><br/>

				En esta sección Habra cursos tanto en vídeo como en escrito, estos cursos estan hechos para principiantes, que no
				tengan conocimiento de ese lenguaje en específico, cierto es que para seguir algunos cursos necesitarás saber otros
				lenguajes<br/><i>Les deseamos una buena estancia</i>. </p>
			</div>
				<section class="Visual">



							<div class="Notificaciones">
							<img src="../../Imagenes/Diseño Web/diseño.png"/>
							</div>



				</section>
			</div>
			</div>



		</div>

	</div>

















<!--________________________________________________________________________________________________________________________________________-->

<!--_____________________________________________< FOOTER O PIE DE PÁGINA >_________________________________________________________________-->

<!--________________________________________________________________________________________________________________________________________-->


<?php include'../../PreHecho/footer.php';?>


<!--________________________________________________________________________________________________________________________________________-->

<!--______________________________________________________< JAVA SCRIPT >___________________________________________________________________-->

<!--________________________________________________________________________________________________________________________________________-->



			<script src="../js/jquery.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>


<br><br><br><br><br><br><br><br><br>

	</body>
