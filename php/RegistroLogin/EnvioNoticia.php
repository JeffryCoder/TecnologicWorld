<?php

session_start();


/* CONEXIÓN */

$host = $_SERVER["HTTP_HOST"];
if($host == 'localhost'){$mysqli = new mysqli("localhost","root","1234","basededatos");}
if($host == 'tecnologic-world.com'){$mysqli = new mysqli("tecnologic-world.com.mysql","tecnologic_world_com","100tontos","tecnologic_world_com");}


/* CAMPOS DE TEXTO  */

  $PrimerTitulo = $_POST['Titulo'];
  $PrimerComentario = $_POST['Comentario'];

  $SegundoTitulo = $_POST['SegundoTitulo'];
  $SegundoComentario = $_POST['SegundoComentario'];


/* PRIMERA IMAGEN */



  $FotoPrimeraImagen = $_FILES['PrimeraImagen']['name'];
  $RutaPrimeraImagen = $_FILES['PrimeraImagen']['tmp_name'];

  $DestinoPrimeraImagen = "../../Imagenes/Noticias/".$FotoPrimeraImagen;

  move_uploaded_file($RutaPrimeraImagen,$DestinoPrimeraImagen);

/* SEGUNDA IMAGEN */

  $FotoSegundaImagen = $_FILES['SegundaImagen']['name'];
  $RutaSegundaImagen = $_FILES['SegundaImagen']['tmp_name'];

  $DestinoSegundaImagen = "../../Imagenes/Noticias/".$FotoSegundaImagen;

  move_uploaded_file($RutaSegundaImagen,$DestinoSegundaImagen);


/* INSERTAMAMOS LAS RUTAS */

  if($FotoPrimeraImagen == ''){
    $DestinoPrimeraImagen = "../../Imagenes/Noticias/nada.jpg";
  }


  if($RutaSegundaImagen == ''){
    $DestinoSegundaImagen = "../../Imagenes/Noticias/nada.jpg";
  }

  $mysqli->query("INSERT INTO Noticias (TituloBS, ComentarioBS, PrimeraImagenBS, SegundaImagenBS, SegundoTituloBS,  SegundoComentarioBS) VALUES ('$PrimerTitulo','$PrimerComentario','$DestinoPrimeraImagen','$DestinoSegundaImagen','$SegundoTitulo','$SegundoComentario')");



 if($host == 'localhost'){header('Location:http://localhost/Noticias.php');}
 if($host == 'tecnologic-world.com'){header('Location:http://tecnologic-world.com/Noticias.php');}


?>
