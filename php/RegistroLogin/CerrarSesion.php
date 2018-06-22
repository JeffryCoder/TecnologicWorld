<?php
	session_start();
	session_destroy();

	$host = $_SERVER["HTTP_HOST"];

	if($host == 'localhost'){header('Location:http://localhost/Login.php');}
	if($host == 'tecnologic-world.com'){header('Location:http://tecnologic-world.com/Login.php');}
?>
