<?php
	session_start();

	session_destroy();
	header('Location:http://tecnologic-world.com/Login.php');
?>