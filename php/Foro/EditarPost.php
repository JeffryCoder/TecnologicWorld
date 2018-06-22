<?php

session_start();

$mysqli = new mysqli("localhost","root","1234","basededatos");

$Titulo = mysqli_real_escape_string($mysqli,$_POST['Titulo']);
$Texto = mysqli_real_escape_string($mysqli,$_POST['Texto']);
$Apartado = mysqli_real_escape_string($mysqli,$_POST['Apartado']);
$ID = mysqli_real_escape_string($mysqli,$_GET['ID']);

$mysqli->query("UPDATE foro SET Titulo = '$Titulo' WHERE ID = '$ID'");
$mysqli->query("UPDATE foro SET Texto = '$Texto' WHERE ID = '$ID'");
$mysqli->query("UPDATE foro SET Apartado = '$Apartado' WHERE ID = '$ID'");

header('Location:http://localhost/Foro/Post.php?ID='.$ID.'');

?>
