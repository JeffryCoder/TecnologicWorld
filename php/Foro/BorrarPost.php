<?php
$mysqli = new mysqli("localhost","root","1234","basededatos");

$ID = $_GET['ID'];
$ID_POST = $_GET['ID_POST'];

$mysqli->query("DELETE FROM foro WHERE ID = '$ID'");
$mysqli->query("DELETE FROM comentariosdelforo WHERE ID_Post = '$ID'");

header('Location:http://localhost/Foro/Foro.php');
?>
