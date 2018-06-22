<?php

	$destino = "tecnologicworldweb@gmail.com";

	$nombre = $_POST['nombre'];

	$asunto = $_POST["asunto"];

	$correo = $_POST["correo"];

	$texto = $_POST["texto"];

	$contenido = "Nombre: " . $nombre . "\nAsunto: " . $asunto . "\nCorreo: " . $correo . "\nTexto: " . $texto;

	mail ($destino , $asunto , $contenido);

	header("Location:enviado.html");


?>
