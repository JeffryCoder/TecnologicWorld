<?php
session_start();
$mysqli = new mysqli("localhost","root","1234","basededatos");

$Titulo = $_POST['Titulo'];
$Noticia = $_POST['Noticia'];
$ID_Persona = $_SESSION['ID'];

$mysqli->query("INSERT INTO Noticias (Titulo, Noticia, ID_Persona) VALUES ('$Titulo','$Noticia','$ID_Persona')");

header('Location:http://localhost/Noticias.php');
?>
