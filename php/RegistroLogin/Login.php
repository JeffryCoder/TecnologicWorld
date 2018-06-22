<?php session_start();
 if(!empty($_POST)){
		$Nickname = $_POST['Nickname'];
		$Password = $_POST['Password'];
 }
 $mysqli = new mysqli("localhost","root","1234","basededatos");

 $sql = "SELECT * FROM usuarios WHERE (Nickname = '$Nickname' OR Correo = '$Nickname') AND Password='$Password'";
 $result = $mysqli->query($sql);
 $rows = $result->num_rows;
	if($rows > 0){
		$row = $result->fetch_assoc();

		$_SESSION['ID'] = $row['ID'];
		$_SESSION['Rango'] = $row['Rango'];
		$_SESSION['Nickname'] = $row['Nickname'];
		$_SESSION['Password'] = $row['Password'];
		$_SESSION['Correo'] = $row['Correo'];
		$_SESSION['FotoUsuario'] = $row['FotoPerfil'];
		$_SESSION['Estado'] = $row['Estado'];

		$error = '¡Ya Estás Logeado!';
		header("Location:http://localhost/Login.php?Error=$error");

		}else{

		$error = '¡Error Al Iniciar Sesión!';
		header("Location:http://localhost/Login.php?Error=$error");

	  }
?>
