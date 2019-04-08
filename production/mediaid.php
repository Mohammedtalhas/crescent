<?php
if(isset($_COOKIE[$cookie_name])) {
	
	
require('fpdf17/fpdf.php');
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'crescent');
$query = mysqli_query($conn, "SELECT * from mediaid Where Application_No = '$_COOKIE[$cookie_name]';");
$id = mysqli_fetch_array($query);
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','b',18);
$pdf->SetXY( 45, 55 ) ; 
$pdf->Cell($pdf->GetStringWidth("CRESCENT WELFARE ASSOCIATION"), 0, "CRESCENT WELFARE ASSOCIATION", 0, "");
$pdf->Cell(189 ,10,'',0,1);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(80);
$pdf->Cell(20,10,'INVOICE',0,0,'C');
$pdf->Cell(-10 ,10,'',0,1);
$pdf->Cell(20,10,'----------------------------------------------------------------------------------------------------',0,0);
$pdf->Cell(189 ,10,'',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,'Applicant ID:',0,0);
$pdf->SetFont('Arial','u',12);
$pdf->Cell(30 ,5,$id['aadhar_id'],0,0);//end of line
$pdf->Cell(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,5,'Details',0,0);
$pdf->Cell(20,5,$id['Details'],0,1);//end of line
//head end

$pdf->Cell(189 ,10,'',0,1);

//head
//set font to arial, regular, 12pt

$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,'amount_sanctioned   :',0,0);
$pdf->SetFont('Arial','u',12);
$pdf->Cell(30 ,5,$id['Amount_Sanctioned'],0,0);//end of line
$pdf->Cell(5);

$pdf->SetFont('Arial','',12);
$pdf->Cell(30,5,'amount_sanctioned_words  :',0,0);
$pdf->SetFont('Arial','u',12);
$pdf->Cell(30,5,$id['Amount_Sanctioned_words'],0,1);//end of line
//head end
$pdf->Cell(189 ,10,'',0,1);

//head
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);
$pdf->Cell(20 ,5,'Date_of_transaction:',0,0);
$pdf->Cell(30 ,5,$id['Date_of_transaction'],0,0);
$pdf->Cell(2);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20 ,5,'Application_No:',0,0);
$pdf->Cell(30 ,5,$id['Application_No'],0,0);
$pdf->Cell(3);



$pdf->Output();
}
?>