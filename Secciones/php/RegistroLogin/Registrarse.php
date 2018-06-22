<?php


//-----------------------Conectamos con la abse de datos------------------------------------------

    $mysqli = new mysqli("tecnologic-world.com.mysql","tecnologic_world_com","100tontos","tecnologic_world_com");


    if ($mysqli->connect_errno) {
        printf("Falló la conexión: %s\n", $mysqli->connect_error);
        exit();
}
//-----------------------hacemos variables del formulário-----------------------------------------

    $Nombre = $_POST["Nombre"];

    $Correo = $_POST['Correo'];

	$PW = $_POST['PW'];


    $PW2 = $_POST['PW2'];


//-----------------------Metemos los datos---------------------------------------------------------
    if($PW == $PW2){

    	if($mysqli->query('INSERT INTO Registro (NombreBS, CorreoBS, PWBS) VALUES ("'.$Nombre.'", "'.$Correo.'", "'.$PW.'");')){

      }
    }


   

//Enviamos al user a la web

	 header('Location:http://tecnologic-world.com/Registrarse.php');

?>






	

	
	

