<?php
require('./FPDF/fpdf.php');
$nombre= $_POST['nombre'];

$apellidos =$_POST['apellidos'];

$sueldo = $_POST['sueldo'];

$puesto = $_POST['puesto'];

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(60,20,'Reporte de empleado',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,"Nombre:"." ".$nombre." ".$apellidos,2,'C');
$pdf->Ln();
$pdf->Cell(40,10,"Sueldo:"." ".$sueldo,2,'C');
$pdf->Ln();
$pdf->Cell(40,10,"Puesto:"." ".$puesto,2,'C');
$pdf->Output();
?>
