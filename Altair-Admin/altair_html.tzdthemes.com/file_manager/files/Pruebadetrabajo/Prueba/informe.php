

<?php
	require('plantillas_informes.php');
	require ('Connections/Conexion.php');
	$sql="SELECT peliculas.Id, peliculas.Nombre As nom, peliculas.Descripcion, imagenes.Nombre
 FROM prueba.imagenes INNER JOIN  prueba.peliculas ON imagenes.IdPeliculas=peliculas.Id GROUP BY peliculas.Id";
	$resultado=$base->prepare($sql);
	$resultado->execute(array());
	
	$pdf= new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	
	
	$pdf->SetFont('Arial','',10);
	$pdf->SetFillColor(210,255,77);
	
	while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
		$pdf->Cell(50,6,utf8_decode($fila['nom']), 1,0,'C');
		$pdf->Cell(200,58,utf8_decode($fila['Descripcion']), 100,200,700);
		$pdf->Ln();

		}
		$pdf->Output();
		$resultado->closeCursor();
				
?>                     



