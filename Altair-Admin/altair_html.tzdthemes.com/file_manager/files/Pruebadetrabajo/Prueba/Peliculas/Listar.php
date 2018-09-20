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
<br/><br/> <h2> Peliculas</h2> <br/><br/>
</center>
   <?php
					include("../Connections/Conexion.php");
		
				$sql="SELECT peliculas.Id, peliculas.Nombre As nom, peliculas.Descripcion, imagenes.Nombre
 FROM prueba.imagenes INNER JOIN  prueba.peliculas ON imagenes.IdPeliculas=peliculas.Id GROUP BY peliculas.Id " ;									
					 
					$cnx=$base->query($sql);
					$registros=$cnx->fetchAll( PDO::FETCH_OBJ);
					$resultado=$base->prepare($sql);
					$resultado->execute();
				
					
?>

			       
                       <center>
                        <center>
                           <table width="732"     width:60%;>
                             <?php foreach($registros as $fila){ ?>
                             <tr >
                               <td height="21" colspan="8"><center>
                               <font size="+3" color="#0033CC" face="Comic Sans MS,arial,verdana">
                               Codigo Pelicula:  <?php echo "$fila->Id";?></font>                               
                               </center></td>
                               <td width="93" height="21"></td>
                             </tr>
                             <tr >
                               <td colspan="6"><?php $imagenbd= "$fila->Nombre";
				   			   echo"<img src='../Imagenes/". $imagenbd . "'all='' width='240' height='180'>"; ?></td>
                               <td width="342"><font size="+4" color="#0033CC" face="Times New Roman">
							   <?php echo "$fila->nom";?></font></td>
                               <td width="1">&nbsp;</td>
                             </tr>
                             <tr >
                               <td width="188"></td>
                               <td width="76"></td>
                               <td colspan="8"></td>
                             </tr>
                             <tr>
                               <td width="188">Descripcion Pelicula:</td>
                             </tr>
                             <tr  width="1000" >
                               <td colspan="8"><?php echo "$fila->Descripcion";?><br />
                                 <br />
                                 <br />
                                 <br />
                                 <br /></td>
                             </tr>
                             <?php } ?>
                           </table>
                         </center></td>
                        
</center>
</body>
</html>