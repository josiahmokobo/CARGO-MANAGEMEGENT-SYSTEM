
<?php
session_start();
require('fpdf.php');
$SN=$_REQUEST["cargoId"];
$username=$_REQUEST['username'];
mysql_connect("localhost","root","");
mysql_select_db("cargo");
$sql=mysql_query("select * from cargo_description where Serial_Number='$SN'");
$row=mysql_fetch_array($sql);

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.jpg',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','U',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->SetTextColor(0,0,255);
    $this->Cell(30,10,'CARGO LIMITED AGENCY',0,1,'C');
    $this->Ln(2);
     $this->Cell(80);
    $this->SetFont('Arial','i',13);
    $this->Cell(30,10,'(approved by ministry of transport and communication)',0,1,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class_id
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10," Your cargo has been received  for  transportation from $row[Sent_From] to $row[Sent_To], and the receiver is $row[Reciever_Name]  your cargo");
$pdf->Ln(5);
 $pdf->Cell(0,10,"confirmation number is $row[Serial_Number] you will be informed upon arrival ",0,1);
//$pdf->Cell(0,10,"you have been accused of  .faillure to do so you will be issued with a warrant of arrest ",0,1);

$pdf->Ln(50);
$pdf->Cell(0,10,"served by,$_REQUEST[username]",0,1);
$pdf->Ln(1);
$pdf->Image("sig.jpg");
$pdf->Ln(1);
$pdf->Cell(0,10, date(' F D jS Y '),0,1);
$pdf->Output();
?>