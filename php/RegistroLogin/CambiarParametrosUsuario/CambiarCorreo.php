<?php
session_start();
$mysqli = new mysqli("localhost","root","1234","basededatos");

if(!empty($_POST)){
	$NuevoCorreo = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['NuevoCorreo']));
	$ID = $_SESSION['ID'];
	$sql = "UPDATE usuarios SET Correo = '$NuevoCorreo' WHERE ID = '$ID'";
	$mysqli->query($sql);
}
header('Location:http://localhost/Perfil.php');
?>
