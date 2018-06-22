<?php
session_start();
$mysqli = new mysqli("localhost","root","1234","basededatos");

	$NuevoNickname = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['NuevoNickname']));
	$ID = $_SESSION['ID'];
	$sql = "UPDATE usuarios SET Nickname = '$NuevoNickname' WHERE ID = '$ID'";
	$mysqli->query($sql);
	$_SESSION['Nickname'] = $NuevoNickname;

header('Location:http://localhost/Perfil.php');
?>
