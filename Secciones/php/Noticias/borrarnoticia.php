<?php



//-----------------------Conectamos con la abse de datos------------------------------------------

    $mysqli = new mysqli("tecnologic-world.com.mysql","tecnologic_world_com","tecnologic_world_com","100tontos"); //introducimos el user, contra y demas//


// Se recoge la variable GET con el ID del comentario para eliminarlo

    $id = $_GET['idcomentario']; // Cogemos el ID del comentario de la Base de Datos

    if($mysqli->query('DELETE FROM Noticias WHERE id = '.$id.';')){ 

    	header('Location:http://tecnologic-world.com/Noticias.php'); // Si funciona, nos lleva devuelta a la pagina de Noticias
      
	}




?>