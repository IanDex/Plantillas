 <?php include("../Connections/Conexion.php");	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="../style.css" rel="stylesheet">


</head>

<body>


	<div id="menuh">
        <ul>
                <li><a href="Listar.php" id="primero">Peliculas</a></li>
                <li><a href="../Imagenes/NuevaImagen.php">Nueva Imagen</a></li>
                <li><a href="Insertar.php">Nueva Pelicula</a></li>
        </ul>
</div>
<center>
<br/><br/> <h2> Nueva Pelicula</h2> <br/><br/>
</center>



                    <?php				            
                    if(isset($_POST["crear"]))
                    {
                    $nombre=$_POST["Nombre"];
                    $descripcion=$_POST["Descripcion"];   			
												
					$insert="INSERT INTO prueba.peliculas(Nombre,Descripcion) VALUES ('$nombre','$descripcion')";										
				    $base->query($insert);
					header("location:../Imagenes/NuevaImagen.php");
                    }					
					?>    
                                               <center>                             
				    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">                      
				   Nombre:  <input type="text" required="required" name="Nombre" >
                   Descripcion: <input type="text" required="required" name="Descripcion" >
                    <input type="submit" value="cargar" name="crear" >                                    	      
                    </form>   
                    </center>
                    
</body>
</html>