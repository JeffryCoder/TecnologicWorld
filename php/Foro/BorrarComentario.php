<?php
$mysqli = new mysqli("localhost","root","1234","basededatos");}

$ID = $_GET['ID'];
$ID_POST = $_GET['ID_POST'];

$mysqli->query("DELETE FROM comentariosdelforo WHERE ID = '$ID'");

header('Location:http://localhost/Foro/Post.php?ID='.$ID_POST.'');
?>
