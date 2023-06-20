<?php
require('fpdf/fpdf.php');
include('config.php');

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");
$pdf->Ln(15);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'SEMESTRALES',1,1,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,8,'No.',1);
$pdf->Cell(45,8,'Matricula',1);
$pdf->Cell(45,8,'Nombres',1);
$pdf->Cell(45,8,'Apellidos',1);
$pdf->Cell(45,8,'calificacion',1);


$query="SELECT * FROM semestral";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(10,8,$no,1);
	$pdf->Cell(45,8,$row['matricula'],1);
	$pdf->Cell(45,8,$row['nombres'],1);
	$pdf->Cell(45,8,$row['apellidos'],1);
	$pdf->Cell(45,8,$row['calificacion'],1);
}
$pdf->Output();
?>
