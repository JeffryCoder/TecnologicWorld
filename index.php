<?php if(!isset($_SESSION)){session_start();}?>
<?php if(!empty($_GET)){$Buscador = $_GET["Buscador"];}?>
<?php include 'PreHecho/Head.php';?>
<?php include 'PreHecho/header.php'; ?>




	
		<div class="Información">
				<div class="LogoDescripción">
					<img src="Imagenes/Logos/LogoDescripción.png" alt="LogoTecnologicWorld">
				</div>

			  <div class="Descripción">
					<p>Tecnologic World es una comunidad de Informática
					donde podrás encontrar información sobre Seguridad Informática
					la Programación el Hardware y el Diseño Web podrás aprender,
					opinar,devatir sobre estos campos que predominan en esta
					comunidad.</p>
				</div>
		</div>

<?php include'PreHecho/footer.php';?>
