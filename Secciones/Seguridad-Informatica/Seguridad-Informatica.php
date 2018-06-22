<?php if(!isset($_SESSION)){session_start();}?>

<?php

include '../../PreHecho/Head.php';

$host = $_SERVER["HTTP_HOST"];





  ?>
<!--________________________________________________________________________________________________________________________________________-->

<!--____________________________________________________________________< BODY >____________________________________________________________-->

<!--________________________________________________________________________________________________________________________________________-->


	<body>

							<?php include '../../PreHecho/header-Principal.php';?>



	<div class="container-fluid">
		<div class="row">





			<div class="Principal col-md-12">


					<div class="Hola">
						<input type="checkbox" id="check">
										<label id="icone" for="check"><hgroup><h4>Menú <span class=" glyphicon glyphicon-th-list"></span></h4></hgroup></label>

										<div class="barra">
											<nav>

												<br/><h2><div class="Titulo">Presupuestos</div></h2>
												<a href=""><div class="link">PCs Gaming</div></a>
												<a href=""><div class="link">PCs Sobremesa</div></a>
												<a href=""><div class="link">PCs para Producción</div></a>

												<br/><h2><div class="Titulo">¿Qué és Hardware?</div></h2>
												<a href=""><div class="link">Introducción</div></a>
												<a href=""><div class="link">partes de un PC</div></a>
												<a href=""><div class="link">Consolas</div></a>

												<br/><h2><div class="Titulo">Empresas</div></h2>
												<a href=""><div class="link">¿Qué empresas dominan?</div></a>

												<br/><h2><div class="Titulo">Foro</div></h2>
												<a href=""><div class="link">Foro De Tecnologic World</div></a>
												<a href=""><div class="link">Preguntas De Tecnologic World</div></a>
											</nav>
										</div>
					</div>



			<div class="container">
			<div class="descripcion">
				<h1><b>Seguridad Informática</b></h1>

				<p>Hardware es una sección de la comunidad "Tecnologic World" la cual se centra en el hardware sobretodo de
				PCs, tambien tocaremos temas de consolas, pero de telefonos y tablets muy poco.<br/><br/>

				En esta sección Habra presupuestos de PCs opiniones de componentes empresas, tutoriales de limpieza de PCs y mas.<br/><i>Les deseamos una buena estancia</i>. </p>
			</div>
				<section class="Visual">



							<div class="Notificaciones">
							<img src="../../Imagenes/Hardware/hardware.png"/>
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
