<?php


//-----------------------Conectamos con la abse de datos------------------------------------------

    $mysqli = new mysqli("tecnologic-world.com.mysql","tecnologic_world_com","100tontos","tecnologic_world_com");




//-----------------------hacemos variables del formulário-----------------------------------------

    $Titulo = $_POST["Titulo"];

    $Comentario = $_POST["Comentario"];





    $SegundoTitulo = $_POST["SegundoTitulo"];

    $SegundoComentario = $_POST["SegundoComentario"];



 //-----------------------foto---------------------------------------------------------------------

            $NombreFoto = $_FILES['PrimeraImagen']['name'];  //cojemos la foto y su nombre

            $Foto = $_FILES['PrimeraImagen']['tmp_name']; // la foto EN SI 

            $Ruta = "../../Imagenes/Noticias/";  //metemos la foto en su carpeta

            move_uploaded_file($Foto,$Ruta,$NombreFoto); // Y finalmente la copiamos en la carpeta

            $Ruta = "../../Imagenes/Noticias/".$NombreFoto;
       


 //-----------------------foto2---------------------------------------------------------------------
     
            $Foto2 = $_FILES['SegundaImagen']['name'];  //cojemos la foto y su nombre

            $Ruta2 = $_FILES['SegundaImagen']['tmp_name']; // la foto EN SI 

            $Imagen2 = "Imagenes/Noticias/".$Foto2;  //metemos la foto en su carpeta

            copy($Ruta2, $Imagen2); // Y finalmente la copiamos en la carpeta
        


    

//-----------------------Metemos los datos---------------------------------------------------------

    if($mysqli->query('INSERT INTO Noticias (TituloBS, ComentarioBS, PrimeraImagenBS, SegundaImagenBS, SegundoTituloBS, SegundoComentarioBS) VALUES ("'.$Titulo.'", "'.$Comentario.'", "'.$Ruta.'", "'. $Imagen2.'", "'.$SegundoTitulo.'",
        "'.$SegundoComentario.'");')){

      
	}


   

//Enviamos al user a la web

	 header('Location:http://tecnologic-world.com/Noticias.php');

?>