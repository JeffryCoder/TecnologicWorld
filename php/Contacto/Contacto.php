<?php

	$destino = "contacto@tecnologic-world.com";

	$nombre = htmlspecialchars($_POST['nombre']);

	$asunto = htmlspecialchars($_POST["asunto"]);

	$correo = htmlspecialchars($_POST["correo"]);

	$texto = htmlspecialchars($_POST["texto"]);

	$contenido = "Nombre: " . $nombre . "\nAsunto: " . $asunto . "\nCorreo: " . $correo . "\nTexto: " . $texto;

	mail ($destino , $asunto , $contenido);

	header("Location:http://tecnologic-world.com/Contacto.php");


?>
