<?php
session_start();
$mysqli = new mysqli("localhost","root","1234","basededatos");

$Titulo = $_POST['Titulo'];
$Noticia = $_POST['Noticia'];
$ID = $_GET['ID'];

$mysqli->query("UPDATE Noticias SET Titulo = '$Titulo' WHERE ID = '$ID'");
$mysqli->query("UPDATE Noticias SET Noticia = '$Noticia' WHERE ID = '$ID'");

header('Location:http://localhost/Noticias.php');
?>
