<?php
session_start();

$mysqli = new mysqli("localhost","root","1234","basededatos");


	$Foto = $_FILES['foto']['name'];
  $Tipo = $_FILES['foto']['type'];
	$Ruta = $_FILES['foto']['tmp_name'];

	$Destino = "../../../Imagenes/FotosDePerfilesUsuarios/".$Foto;


	if($Tipo == "image/jpg" || $Tipo == "image/png" || $Tipo == "image/gif" || $Tipo == "image/jpeg"){

            move_uploaded_file($Ruta,$Destino);

            $DestinoFinal = "Imagenes/FotosDePerfilesUsuarios/".$Foto;
            $ID = $_SESSION['ID'];

    	     $mysqli->query("UPDATE usuarios SET FotoPerfil = '$DestinoFinal' WHERE ID = '$ID'");

           $_SESSION['FotoUsuario'] = $DestinoFinal;

           header('Location:http://localhost/Perfil.php');

  }else{
    header('Location:http://localhost');
  }
?>
