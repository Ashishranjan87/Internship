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
    $this->Cell(0,6,'Criterion 3.2: Innovation Ecosystem',0,10,'L',TRUE);
    $this->Ln(4);
    $this->y0 = $this->GetY();
}
function headerTable($db){
    $this->SetFont('Times','B',12);
    $stmt= $db->query('select * from four');
    $data = $stmt->fetch(PDO::FETCH_OBJ);
    $this->MultiCell(277,10,'Extension activities are carried out in the neighborhood community, sensitizing students to social issues, for their holistic development, and impact there of during the last five yaers',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Ln();
    $this->MultiCell(277,10,$data->Extension_activities,1,0,'L');
    $this->Cell(246,10,'',0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'Number of awards and recognitions received for extension activities from government/non government recognised bodies during the last five years',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->Number_awards,0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'Total number of workshops/seminar conducted on Research Methodology, Intellectual Property Rights(IPR) and Enterpreneurship year-wise during last five years',1,'L');
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
    $this->Cell(30,10,$data->Number_awards_2019,1,0,'L');
    $this->Cell(30,10,$data->Number_awards_2018,1,0,'L');
    $this->Cell(30,10,$data->Number_awards_2017,1,0,'L');
    $this->Cell(30,10,$data->Number_awards_2016,1,0,'L');
    $this->Cell(30,10,$data->Number_awards_2015,1,0,'L');
    $this->Ln(15);
    $this->MultiCell(277,10,'Number of extension and outreached progra  es conducted by the institution through NSS/ NCC / Red Cross/ YRC etc.. (Including the programmes such as swach bharat, AIDS awareness, Gender issues etc.) and/ or those organised in collaboration with industry, community and NGOs during the last five years',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->Extension_programs,0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'Total number of workshops/seminar conducted on Research Methodology, Intellectual Property Rights(IPR) and Enterpreneurship year-wise during last five years',1,'L');
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
    $this->Cell(30,10,$data->Extension_programs_2019,1,0,'L');
    $this->Cell(30,10,$data->Extension_programs_2018,1,0,'L');
    $this->Cell(30,10,$data->Extension_programs_2017,1,0,'L');
    $this->Cell(30,10,$data->Extension_programs_2016,1,0,'L');
    $this->Cell(30,10,$data->Extension_programs_2015,1,0,'L');
    $this->Ln(15);
    $this->MultiCell(277,10,'Average percentage of students participating in extension activities at 3.4.3 above during last five yaers',1,'L');
    $this->Cell(30,10,'Response : ',0,0,'L');
    $this->Cell(30,10,$data->Students_participating,0,0,'L');
    $this->Ln(10);
    $this->MultiCell(277,10,'Total number of students participating in extension activities conducted in collaboration with industry, community and non-government organizations such as Swachh Bharat, AIDS awareness, Gender issues etc. year-wise during last five years',1,'L');
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
    $this->Cell(30,10,$data->Students_participating_2019,1,0,'L');
    $this->Cell(30,10,$data->Students_participating_2018,1,0,'L');
    $this->Cell(30,10,$data->Students_participating_2017,1,0,'L');
    $this->Cell(30,10,$data->Students_participating_2016,1,0,'L');
    $this->Cell(30,10,$data->Students_participating_2015,1,0,'L');
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