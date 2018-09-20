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
                <li><a href="../Peliculas/Insertar.php" id="primero">Peliculas</a></li>
                <li><a href="NuevaImagen.php">Nueva Imagen</a></li>
                <li><a href="../Peliculas/Insertar.php">Nueva Pelicula</a></li>
        </ul>
</div>
<center>
<br/><br/> <h2> Nueva Imagen</h2> <br/><br/>
</center>

 <?php		include("../Connections/Conexion.php");						
				
					
			        if(isset($_POST["crear"]))
                    {  
					$peliculas=$_POST["peliculas"];                 
					$nomimagen=$_FILES['Foto']['name'];
					$formato=$_FILES['Foto']['type'];
					$tamano=$_FILES['Foto']['size'];
					$destino=$_SERVER['DOCUMENT_ROOT'].'../Prueba/Imagenes/';
					move_uploaded_file($_FILES['Foto']['tmp_name'],$destino.$nomimagen);
					
					$isertar="INSERT INTO prueba.imagenes (Nombre, IdPeliculas) VALUES ('$nomimagen','$peliculas')";
					$base->query($isertar);
					header("location:../Peliculas/Listar.php");						
						 }
					?>
                    <center>
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                   
                  Pelicula: <select required="required" name="peliculas" >
                   <option value="">Seleccione la pelicula...</option>
                     <?php
					include("../Connections/Conexion.php");
					$sql="SELECT Id,Nombre from prueba.peliculas ORDER BY Id";
						$resultado=$base->prepare($sql);
						$resultado->execute();
						while($fila=$resultado->fetch(PDO::FETCH_ASSOC))
						{
							echo"<option value='".$fila["Id"]."'>".$fila["Nombre"]."</option>";
							}
					?>
                   </select><br />
                   Imagen:<input type="file" required="required" name="Foto" multiple="multiple">
                   <input type="submit" value="cargar" name="crear" >
                   

                 
                   </center>
                           
                   </form>  
                   
</body>
</html>