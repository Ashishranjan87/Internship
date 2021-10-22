<?php
require 'fpdf.php';
$db = new PDO('mysql:host=localhost;dbname=internship','root','');
class PDF extends FPDF
{
function Header()
{
    $this->Image('naac.png',10,6,30);
    $this->SetFont('Arial','B',15);
    $this->Cell(80);
    $this->Cell(80,10,'Self Study Report Generator',1,0,'C');
    $this->Ln();
    $this->SetFont('Times','',12);
    $this->Cell(78);
    $this->Cell(276,10,'National Assessment and Accreditation Council',0,0,'c');
    $this->Ln(20);
}

function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function ChapterTitle(){
    $this->SetFont('Times','B',15);
    $this->SetFillColor(200,220,255);
    $this->Cell(0,6,'Criterion 3 - Research, Innovations and Extension',0,10,'L',TRUE);
    $this->Ln(4);
    $this->y0 = $this->GetY();
}
function ChapterTitle1(){
    $this->SetFont('Times','B',15);
    $this->SetFillColor(200,200,200);
    $this->Cell(0,6,'Criterion 3.1: Resource Mobilization for Research',0,10,'L',TRUE);
    $this->Ln(4);
    $this->y0 = $this->GetY();
}
function headerTable($db){
    $this->SetFont('Times','B',12);
    $stmt= $db->query('select * from one');
    $data = $stmt->fetch(PDO::FETCH_OBJ);
    $this->MultiCell(277,10,'Grants received from Government and non-government agencies for research projects,endowments,chairs in the institution during the last five years (INR in lakhs)',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->avrage_grant,0,0,'L');
    $this->Cell(246,10,'',0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'Total Grants from Government and non-government agencies for research projects, endowments, chairs in the institution during last five years (INR in Lakhs)',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Ln();
    $this->Cell(30,10,'Years',1,0,'L');
    $this->Cell(30,10,'2019',1,0,'L');
    $this->Cell(30,10,'2018',1,0,'L');
    $this->Cell(30,10,'2017',1,0,'L');
    $this->Cell(30,10,'2016',1,0,'L');
    $this->Cell(30,10,'2015',1,0,'L');
    $this->Ln();
    $this->Cell(30,10,'Values',1,0,'L');
    $this->Cell(30,10,$data->Grant_Received_2019,1,0,'L');
    $this->Cell(30,10,$data->Grant_Received_2018,1,0,'L');
    $this->Cell(30,10,$data->Grant_Received_2017,1,0,'L');
    $this->Cell(30,10,$data->Grant_Received_2016,1,0,'L');
    $this->Cell(30,10,$data->Grant_Received_2015,1,0,'L');
    $this->Ln(15);
    $this->MultiCell(277,10,'Percentage of teachers recognized as research guide (latest completed academic year)',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->percentage,0,0,'L');
    $this->Cell(246,10,'',0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'Number of teachers recognized as research guides',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->noofteachers,0,0,'L');
    $this->Cell(246,10,'',0,0,'L');
    $this->Ln(15);
    $this->MultiCell(277,10,'Percentage of departments having research projects funded by government and non government agencies during last five yeras',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->percentageofdepartments,0,0,'L');
    $this->Cell(246,10,'',0,0,'L');
    $this->Ln(15);
    $this->MultiCell(277,10,'Number of departments having research projects funded by government and non government agencies during last five years',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Ln();
    $this->Cell(30,10,'Years',1,0,'L');
    $this->Cell(30,10,'2019',1,0,'L');
    $this->Cell(30,10,'2018',1,0,'L');
    $this->Cell(30,10,'2017',1,0,'L');
    $this->Cell(30,10,'2016',1,0,'L');
    $this->Cell(30,10,'2015',1,0,'L');
    $this->Ln();
    $this->Cell(30,10,'Values',1,0,'L');
    $this->Cell(30,10,$data->Research_Funded_2019,1,0,'L');
    $this->Cell(30,10,$data->Research_Funded_2018,1,0,'L');
    $this->Cell(30,10,$data->Research_Funded_2017,1,0,'L');
    $this->Cell(30,10,$data->Research_Funded_2016,1,0,'L');
    $this->Cell(30,10,$data->Research_Funded_2015,1,0,'L');
    $this->Ln(15);
    $this->MultiCell(277,10,'Number of departments offering academic programes',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Ln();
    $this->Cell(30,10,'Years',1,0,'L');
    $this->Cell(30,10,'2019',1,0,'L');
    $this->Cell(30,10,'2018',1,0,'L');
    $this->Cell(30,10,'2017',1,0,'L');
    $this->Cell(30,10,'2016',1,0,'L');
    $this->Cell(30,10,'2015',1,0,'L');
    $this->Ln();
    $this->Cell(30,10,'Values',1,0,'L');
    $this->Cell(30,10,$data->Academic_Programes_2019,1,0,'L');
    $this->Cell(30,10,$data->Academic_Programes_2018,1,0,'L');
    $this->Cell(30,10,$data->Academic_Programes_2017,1,0,'L');
    $this->Cell(30,10,$data->Academic_Programes_2016,1,0,'L');
    $this->Cell(30,10,$data->Academic_Programes_2015,1,0,'L');
    $this->Ln(15);
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('C','A4',0);
$pdf->ChapterTitle();
$pdf->ChapterTitle1();
$pdf->headerTable($db);
$pdf->Output();
?>