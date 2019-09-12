<?php
require('fpdf/fpdf.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('fpdf/img/logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    //color de texto
    $this->SetTextColor(46, 92, 189);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'UNIVERSIDAD NACIONAL DE TRUJILLO',0,0,'C');
    // Salto de línea
    $this->Ln();
// Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'ESCUELA DE POSGRADO',0,0,'C');
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
$pdf->SetFont('Arial','I',12);
$pdf->Cell(160);
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'REGISTRO DE ASISTENCIA',0,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Ln(7);
$pdf->Cell(20,2,"DOCENTE: ",'C');
$pdf->Ln(7);
$pdf->Cell(20,2,"AULA : ");
$pdf->Ln(7);
$pdf->Cell(20,2,"FECHA : ");

$pdf->Ln(10);
//TABLA
$pdf->SetFontSize(10);
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(46, 92, 189);
$pdf->SetTextColor(255,255,255);
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(15);
$N=utf8_decode("N°");
$pdf->Cell(20,5,$N,1,0,'C',1);
$pdf->Cell(25,5,"DNI",1,0,'C',1);
$pdf->Cell(70,5,"APELLIDOS Y NOMBRES",1,0,'C',1);
$pdf->Cell(30,5,"GRADO",1,0,'C',1);
$pdf->Cell(28,5,"ASISTENCIA",1,0,'C',1);
//linea
//$pdf->SetDrawColor(61,174,233);
//mas ancha la linea
//$pdf->SetLineWidth(0.5);
//$pdf->Line(25,100,190,100);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
/*$pdf->SetDrawColor(0,0,0);
$num=0;
foreach ($alumnos->resultado as $alumno){
	$pdf->Cell(15);
$num+=1;
$pdf->Cell(20,5,$num,1,0,'C',1);
$pdf->Cell(25,5,$alumno->dni,1,0,'C',1);
$pdf->Cell(70,5,$alumno->apenom,1,0,'C',1);
$pdf->Cell(30,5,$alumno->grado,1,0,'C',1);
foreach ($asistencias->resultado as $value) {
	if ($value->alucodigo==$alumno->codigo){
		$pdf->Cell(28,5,$value->asistencia,1,0,'C',1);
		break;
	}
}

$pdf->Ln();
}*/
$pdf->Output();
?>
