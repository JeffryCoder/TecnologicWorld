<?php
session_start();

$mysqli = new mysqli("localhost","root","1234","basededatos");

$ID_PERSONA = $_SESSION['ID'];
$Comentario = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['Comentario']));
$ID_POST = htmlspecialchars(mysqli_real_escape_string($mysqli,$_GET['ID']));

$mysqli->query("INSERT INTO comentariosdelforo (ID_Persona, ID_Post, Comentario) VALUES ('$ID_PERSONA', '$ID_POST', '$Comentario')");


header("Location:http://localhost/Foro/Post.php?ID=$ID_POST");
?>
