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
    $this->Cell(30,10,utf8_decode('PROGRAMA DE ENFERMERÍA'),0,0,'C');
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
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(160);
$pdf->Ln();
$pdf->Cell(15);
$pdf->SetFillColor(255, 255, 255);//Fondo verde de celda
$titulo="INDICADORES DEL PROCESO DE ".utf8_decode(strtoupper($_GET['proceso'])) ."(CONTROLES)";
$pdf->MultiCell(150,10,$titulo,0,1,'C');

$c=0;
if($respuesta->respuesta){
  $filas=$respuesta->resultado;
  foreach ($filas as $fila) {
    $c=$c+1;
    $pdf->Ln(10);
    $pdf->Cell(10);
    $pdf->Cell(50,10,"Proceso",1,0,'C');
    $pdf->Cell(130,10,utf8_decode($_GET['proceso']),1,0,'C');
    $pdf->Ln();
    $pdf->Cell(10);
    $pdf->Cell(50,10,"Indicador",1,0,'C');
    $pdf->MultiCell(130,10,utf8_decode($fila->descripcion),1,1,'L');
    $pdf->Cell(10);
    $pdf->Cell(50,10,"Objetivo",1,0,'C');
    $pdf->MultiCell(130,10,utf8_decode($fila->meta),1,1,'L');

    //$pdf->Cell(10);
    //$pdf->Cell(50,10,utf8_decode("Fórmula"),1,0,'C');
    //$pdf->Cell(130,10,utf8_decode($retVal = ($formula->resultado==null) ? 'NO ha registrado fórmula' : $formula->resultado->formula),1,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(50,10,utf8_decode("Responsable"),1,0,'C');
    $pdf->Cell(70,10,utf8_decode( $fila->responsable),1,0,'L');
    $pdf->Cell(15,10,utf8_decode("Tipo"),1,0,'C');
    $pdf->Cell(10,10,utf8_decode( $fila->tipo),1,0,'C');
    $pdf->Cell(15,10,utf8_decode("Unidad"),1,0,'C');
    $pdf->Cell(20,10,utf8_decode( $fila->unidad),1,0,'C');
    $pdf->Ln();
    $pdf->Cell(10);
    $pdf->Cell(50,10,utf8_decode("Fuente de Verificación"),1,0,'C');
    $pdf->MultiCell(130,10,utf8_decode($fila->fv),1,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(50,10,utf8_decode("Frecuencia de Medición"),1,0,'C');
    $pdf->Cell(130,10,utf8_decode($fila->frecuencia),1,1,'L');
    if ($c%2==0) {
      $pdf->AddPage();
    }

  }
}



$pdf->Output();
?>
