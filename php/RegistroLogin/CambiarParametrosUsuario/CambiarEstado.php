<?php
session_start();

$mysqli = new mysqli("localhost","root","1234","basededatos");
if(!empty($_POST)){

$NuevoEstado = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['NuevoEstado']));
$ID = $_SESSION['ID'];
$Estado = $mysqli->query("UPDATE usuarios SET Estado = '$NuevoEstado' WHERE ID = '$ID'");
}




					$_SESSION['Estado'] = $NuevoEstado;



		header('Location:http://localhost/Perfil.php');


?>
