<?php

session_start();

$mysqli = new mysqli("localhost","root","1234","basededatos");

$Titulo = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['Titulo']));
$Texto = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['Texto']));
$Apartado = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['Apartado']));
$ID = $_SESSION['ID'];

$mysqli->query("INSERT INTO foro (ID, Titulo, Texto, Apartado, ID_Persona, Data) VALUES (NULL, '$Titulo', '$Texto', '$Apartado', '$ID', CURRENT_TIMESTAMP)");


 header("Location:http://localhost/Foro/Foro.php");

?>
