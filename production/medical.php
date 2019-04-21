<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
header('Content-Type: text/html; charset=utf-8');
//call the FPDF library
require('fpdf17/fpdf.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'crescent');
$query = mysqli_query($con, "SELECT * FROM mediaid ORDER BY Application_No DESC LIMIT 1;");
$id = mysqli_fetch_array($query);
$Adhaar = $id['aadhar_id'];
$query1 = mysqli_query($con, "SELECT * From medinew Where aadhar_id = '$Adhaar';");
$i = mysqli_fetch_array($query1);
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//output the result
$pdf->SetFont('Arial','b',18);
$pdf->Cell( 190, 265, '', 1);


$pdf->SetFont('Arial','b',24);

//Cell(width , height , text , border , end line , [align] )


$pdf->SetXY( 30, 35 ) ; $pdf->Cell($pdf->GetStringWidth("CRESCENT WELFARE ASSOCIATION"), 0, "CRESCENT WELFARE ASSOCIATION", 0, "");
$pdf->SetFont('Arial','',12);
$pdf->SetXY( 65, 45 ) ; $pdf->Cell($pdf->GetStringWidth("No.255,Anna Saalai,Melvisharam,632509"), 0, "No.255,Anna Saalai,Melvisharam,632509", 0, "");
$pdf->Cell(189 ,10,'',0,1);

//sample
// Set font
$pdf->SetFont('Arial','B',16);
// Move to 8 cm to the right
$pdf->Cell(80);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(20,10,'MEDICAL AID FORM',0,0,'C');

//sample ends
$pdf->Cell(-10 ,10,'',0,1);


$pdf->Cell(20,10,'____________________________________________________________',0,0);
$pdf->Cell(189 ,10,'',0,1);



//head
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,5,'Applicant ID:',0,0);
$pdf->SetFont('Arial','u',12);
$pdf->Cell(30 ,5,$id['Application_No'],0,0);//end of line
$pdf->Cell(70);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,5,'Date:',0,0);
$pdf->Cell(20,5,$id['Date_of_transaction'],0,1);//end of line
//head end

$pdf->Cell(189 ,10,'',0,1);

//head
//set font to arial, regular, 12pt
//Cell(width , height , text , border , end line , [align] )
$pdf->SetFont('Arial','',12);
$pdf->Cell(30 ,4,'Name   :',0,0);
$pdf->SetFont('Arial','u',12);
$pdf->Cell(25 ,4,$i['First_Name'],0,0);//end of line
$pdf->Cell(2);

$pdf->SetFont('Arial','u',12);
$pdf->Cell(20,4,$i['Last_Name'],0,1);//end of line
//head end
$pdf->Cell(189 ,10,'',0,1);

//head
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);
$pdf->Cell(14 ,4,'mobile:',0,0);
$pdf->Cell(10 ,4,$i['Mobile_No'],0,0);
$pdf->Cell(20);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20 ,4,'Age:',0,0);
$pdf->Cell(30 ,4,$i['Age'],0,0);//end of line
$pdf->Cell(3);

//head end


$pdf->Cell(189 ,10,'',0,1);
//head
//set font to arial, regular, 12pt

//head end
$pdf->Cell(50 ,4,'Details of Medical Report:',0,0);
$pdf->Cell(189 ,4,$id['Details'],0,1);
$pdf->MultiCell( 185, 7, 'DECLARATION:', 1);


$pdf->Cell(189 ,10,'எனக்கு',0,1);
$pdf->SetFont('Arial','b',12);
$pdf->multiCell(40 ,4,'',0,1);

$pdf->MultiCell( 185, 5, 'எனக்கு ', 1);
$pdf->Cell(-10 ,10,'',0,1);

$pdf->Cell(20,10,'________________________________________________________________________________',0,0);
$pdf->Cell(189 ,10,'',0,1);


$pdf->SetFont('Arial','B',12);
$pdf->Cell(55 ,4,'Sanctioned a Sum of Rs: ₹',0,0);
$pdf->SetFont('Arial','u',12);
$pdf->Cell(15 ,4,$id['Amount_Sanctioned'],0,0);//end of line


$pdf->SetFont('Arial','B',12);
$pdf->Cell(15 ,4,'in words :',0,0);
$pdf->Cell(3);
$pdf->SetFont('Arial','u',12);
$pdf->Cell(60 ,4,$id['Amount_Sanctioned_words'],0,0);//end of line



$pdf->SetXY( 30, 250 ) ; $pdf->Cell($pdf->GetStringWidth("Secratary"), 0, "Secratary", 0, "");
$pdf->SetXY( 145, 250 ) ; $pdf->Cell($pdf->GetStringWidth("receiver's signature"), 0, "receiver's signature", 0, "");
//make a dummy empty cell as a vertical spacer


ob_end_clean();
$pdf->Output();

?>