<?php

	session_start();


	$host = $_SERVER["HTTP_HOST"];
	if($host == 'localhost'){$mysqli = new mysqli("localhost","root","1234","basededatos");}
	if($host == 'tecnologic-world.com'){$mysqli = new mysqli("tecnologic-world.com.mysql","tecnologic_world_com","100tontos","tecnologic_world_com");}


	$ID = $_GET['ID'];
	$Yo = $_SESSION['id'];


	$sql = "INSERT INTO Seguidores (ID_Seguidor,ID_PersonaSeguida) VALUES ('$Yo','$ID')";
	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM Seguidores WHERE ID_Seguidor = '$Yo' AND ID_PersonaSeguida = '$ID'";
	$result = $mysqli->query($sql);
	$rows = $result->num_rows;

	if($rows == 2){
		$sql = "DELETE FROM Seguidores WHERE ID_Seguidor = '$Yo' AND ID_PersonaSeguida = '$ID'";
		$result = $mysqli->query($sql);
	}
	if($host == 'localhost'){header('Location:http://localhost/Perfil.php');}
	if($host == 'tecnologic-world.com'){header('Location:http://tecnologic-world.com/Perfil.php');}
?>
