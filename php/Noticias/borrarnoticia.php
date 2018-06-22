<?php
$mysqli = new mysqli("localhost","root","1234","basededatos");
$ID = $_GET['ID_Comentario'];

$mysqli->query("DELETE FROM Noticias WHERE ID = '$ID'");

header('Location:http://localhost/Noticias.php');






?>
