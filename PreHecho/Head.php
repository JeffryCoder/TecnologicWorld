 <?php




$host = $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];
$UrlCompleta = "http://" . $host . $url;

$title = $url;

if($url == "/"){$title = "Tecnologic World";}
if($url == "/Login.php"){$title = "Inicio de Sesión";}
if($url == "/Foro.php"){$title = "Foro";}
if($url == "/Noticias.php"){$title = "Noticias";}
if($url == "/Registrarse.php"){$title = "Registro";}
if($url == "/Login.php"){$title = "Inicio de Sesión";}
if(strpos($url, '/Foro/') !== false){$title = "Foro";}
if(strpos($url, '/php/Buscador') !== false){$title = "Buscador";}
if(strpos($url, '/Perfil.php') !== false){$title = "Perfil";}

	if(strpos($url, '/Chats/Privado.php') !== false){$title = "Chats - Privado";}
	if($url == "/Chats/Chat.php"){$title = "Chats";}
	if($url == "/Chats/Diseno-Web.php"){$title = "Chats - Diseño Web";}
	if($url == "/Chats/Hardware.php"){$title = "Chats - Hardware";}
	if($url == "/Chats/Seguridad-Informatica.php"){$title = "Chats - Seguridad Informática";}


	$DW = '/Secciones/Diseno-Web/';
	$HW = '/Secciones/Hardware/';
	$SI = '/Secciones/Seguridad-Informatica/';

	 $DW = strpos($url, $DW);
	 $HW = strpos($url, $HW);
	 $SI = strpos($url, $SI);

	if($DW !== false){$title = "Diseño Web";}
	if($HW !== false){$title = "Hardware";}
	if($SI !== false){$title = "Seguridad Informática";}


?>

<!--__________________________________________________________________________________-->

<!--___________________________________< HEAD >_______________________________________-->

<!--__________________________________________________________________________________-->

<html lang="en">

	<head>




					<title><?php echo $title;?></title>


									<meta charset="UTF-8">

	                <meta name="Description" content="Tecnologic World es una Página Web basada en la comunidad , Los
	                Apartados de la comunidad son El Hardware,Seguridad Informática,Diseño Web y más." />

	                <meta name="Keywords" content="Tecnologic Worl, Web" />

									<meta http-equiv="Content-Language" content="es"/>

	                <meta name="distribution" content="global"/>

									<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">






<?php


//--------------------------------LOCALHOST-----------------------------
			if($host == 'localhost'){ echo '

			<link rel="stylesheet" href="http://localhost/css/User.css">
			<link rel="stylesheet" href="http://localhost/css/Buscador.css">
			<link rel="stylesheet" href="http://localhost/css/Comunidad.css">
			<link rel="stylesheet" href="http://localhost/css/RegistroLogin.css">
			<link rel="stylesheet" href="http://localhost/css/Foro/Foro.css">
			<link rel="stylesheet" href="http://localhost/css/index.css">
			<link rel="stylesheet" href="http://localhost/css/Menu-Desplegable.css">
			<link rel="stylesheet" href="http://localhost/css/Noticias.css">
			<link rel="stylesheet" href="http://localhost/css/Secciones.css">
			<link rel="stylesheet" href="http://localhost/css/Slider.css">
			<link rel="stylesheet" href="http://localhost/css/Perfil.css">
		  <link rel="stylesheet" href="http://localhost/css/Contacto.css">
      <link rel="stylesheet" href="http://localhost/css/Foro/NuevoTema.css">
			<link rel="stylesheet" href="http://localhost/css/Chat.css">
      <link rel="stylesheet" href="http://localhost/css/Foro/Post.css">
      <link rel="stylesheet" href="http://localhost/css/Foro/Comentarios.css">
      <link rel="stylesheet" href="http://localhost/css/CambiarParametros.css">
      <link rel="stylesheet" href="http://localhost/css/Foro/EditarPost.css">


			<script type="text/javascript" src="http://localhost/js/MenuHeaderUsuario.js"></script>

      <link rel="stylesheet" href="http://localhost/PreHecho/css/header.css">
		  <link rel="stylesheet" href="http://localhost/PreHecho/css/footer.css">
			<link rel="stylesheet" href="http://localhost/PreHecho/css/responsive.css">

';}


//----------------------------TECNOLOGIC-WORLD----------------------------------


			if($host == 'tecnologic-world.com'){ echo '

			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/User.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Bootstrap/bootstrap.min.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/header.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/usuario.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Buscador.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Chat.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Comunidad.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Contacto.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Foro.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/index.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Menu-Desplegable.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Noticias.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Secciones.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Slider.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/Perfil.css">
		  <link rel="stylesheet" href="http://www.tecnologic-world.com/css/Seguidores.css">
      <link rel="stylesheet" href="http://www.tecnologic-world.com/css/footer.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/responsive.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/User.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/header.css">
			<link rel="stylesheet" href="http://www.tecnologic-world.com/css/usuario.css">

			<script type="text/javascript" src="http://tecnologic-world.com/js/JQuery/jquery.js"></script>
			<script type="text/javascript" src="http://tecnologic-world.com/js/Ajax.js"></script>
			<script type="text/javascript" src="http://tecnologic-world.com/js/Responder.js"></script>
			<script type="text/javascript" src="http://tecnologic-world.com/js/Secciones.js"></script>
      <script type="text/javascript" src="http://tecnologic-world.com/js/Obstaculo.js"></script>
      <script type="text/javascript" src="http://tecnologic-world.com/js/push.min.js"></script>





';}

?>




</head>
