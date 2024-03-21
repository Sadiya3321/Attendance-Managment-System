<?php
include('db.php');
$x=explode("-",$_GET['x']);

$p1=explode(";",$_GET['c']);

$p2=explode("=",$p1[0]);
$date2=$p2[1];
//echo $date2;
$p3=explode("=",$p1[1]);
$s1=$p3[1];
//echo $s1;
$p4=explode("=",$p1[2]);
$p=$p4[1];
//echo $p;
$p5=explode("=",$p1[3]);
$t1=$p5[1];
//echo $t1;
$p6=explode("=",$p1[4]);
$sub1=$p6[1];
//echo $sub1;

$p7=explode("=",$p1[5]);
$c1=$p6[1];
//echo $c1;




$m="update  class2  set status='".$x[1]."'  where  rollno='".$x[0]."' AND class='".$s1."'  and subject='".$p."' AND semester='".$t1."' AND paper='".$c1."'  
AND  type='".$sub1."' AND date='".$date2."';";
//echo $m;
$r=mysql_query($m);
if(!$r)
echo mysql_error();
//echo"updated";

?>



	
