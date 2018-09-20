
<?php
	require ('fpdf/fpdf.php');
	class PDF extends FPDF{
		function Header(){
			$this->SetFont('Arial','B',20);
			$this->Cell(120,10,'Peliculas',0,0,'C');
			$this->Ln(40);
			}
			function Footer(){
				$this->SetY(-15);
				$this->SetFont('Arial','I',8);
				$this->Cell(0,10, utf8_decode('Pagina') . $this->PageNo(). '/{nb}' ,0,0,'C');
				}
		}

?>
