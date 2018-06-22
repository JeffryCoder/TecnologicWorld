<?php
sesion_start();

//-----------------------Conectamos con la abse de datos------------------------------------------

    $mysqli = new mysqli("tecnologic-world.com.mysql","tecnologic_world_com","100tontos","tecnologic_world_com");



//-----------------------hacemos variables del formulário-----------------------------------------

    $NombreLogin = $_POST['NombreLogin'];

	  $PWLogin = $_POST['PWLogin'];


//-----------------------Metemos los datos---------------------------------------------------------
    
    
    	if($mysqli->query("SELECT * FROM Registro WHERE NombreBS='$NombreLogin' AND PWBS='$PWLogin'")){
        
      }

    
    header('Location:http://tecnologic-world.com/Registrarse.php');

//Enviamos al user a la web

	

?>






	

	
	

