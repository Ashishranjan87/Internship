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
    $stmt= $db->query('select * from three');
    $data = $stmt->fetch(PDO::FETCH_OBJ);
    $this->MultiCell(277,10,'Number of Ph.Ds registered per eligible teacher during the last five yaers',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->PhDs_Registered,0,0,'L');
    $this->Cell(246,10,'',0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'How many Ph.Ds Registered per eligible teacher within last five years',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->Eligible_teacher,0,0,'L');
    $this->Cell(246,10,'',0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'Number of teachers recognized as guides during the last five years',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->Guides,0,0,'L');
    $this->Cell(246,10,'',0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'Number of research papers per teachers in the journals notified on UGC website during the last five yaers',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->Research_paper,0,0,'L');
    $this->Cell(246,10,'',0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'Number of research papers in the journals notified on UGC website during the last five yaers',1,'L');
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
    $this->Cell(30,10,$data->Research_paper_2019,1,0,'L');
    $this->Cell(30,10,$data->Research_paper_2018,1,0,'L');
    $this->Cell(30,10,$data->Research_paper_2017,1,0,'L');
    $this->Cell(30,10,$data->Research_paper_2016,1,0,'L');
    $this->Cell(30,10,$data->Research_paper_2015,1,0,'L');
    $this->Ln(15);
    $this->MultiCell(277,10,'Number of books and chapters in edited volumes/books published and papers published in national/international conference proceedings per teacher during last five years',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->list_research,0,0,'L');
    $this->Cell(246,10,'',0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'Total number of books and chapters in edited volumes/books published and papers in national/international conference proceedings year-wise during last five years',1,'L');
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
    $this->Cell(30,10,$data->list_research_2019,1,0,'L');
    $this->Cell(30,10,$data->list_research_2018,1,0,'L');
    $this->Cell(30,10,$data->list_research_2017,1,0,'L');
    $this->Cell(30,10,$data->list_research_2016,1,0,'L');
    $this->Cell(30,10,$data->list_research_2015,1,0,'L');
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