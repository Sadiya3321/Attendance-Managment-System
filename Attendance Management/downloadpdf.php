<?php
include('db.php');
require('fpdf.php');
class PDF extends FPDF
{
function Header()
{
$this->SetFont('Arial','B',15);//arial bold
$this->Cell(50);//move to the right
$this->Cell(100,10,'St Miras College For Girls,Pune',1,0,'C');//title
$this->Ln(20);//line break
}
function Footer()
{
$this->SetY(-15);//position at 1.5 cm from bottom
$this->SetFont('Arial','I',15);//arial italic
$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
}
}



$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','','24');
$a=$_COOKIE['a'];
$c=$_COOKIE['c'];
$s2=$_COOKIE['s'];
$s="select firstnm,lastnm from user where userid in(select userid from login where loginid in(select  max(loginid) from login));";
$s1=mysql_fetch_row(mysql_query($s));


$pdf->Cell(0,10,'Teacher Name:'.$s1[0].$s1[1],0,1);

$pdf->Cell(0,10,'Class:'.$c,0,1);

$pdf->Cell(0,10,'Subject:'.$s2,0,1);

$pdf->Cell(0,10,'Date:'.$a,0,1);

$q33="select rollno from class2 where subject='".$s2."' and class='".$c."' and date='".$a."' and status='P';";
$p33=mysql_query($q33);
$pdf->Cell(0,10,'Present Rollno:',0,1);
while($ff33=mysql_fetch_row($p33))
{

$pdf->Cell(0,10,''.$ff33[0],0,1);

}
$z33="select rollno from class2 where subject='".$s2."' and class='".$c."' and date='".$a."' and status='A';";
$g33=mysql_query($z33);

$pdf->Cell(0,10,'Absent Rollno:',0,1);
while($hh33=mysql_fetch_row($g33))
{
$pdf->Cell(0,10,''.$hh33[0],0,1);
}


$pdf->Output();
?>
