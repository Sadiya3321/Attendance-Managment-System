<?php
include('db.php');
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$ch=$_POST['r'];
switch($ch)
{
	case '1':$x=mysql_query("insert into student(rn,name,classnm) values($a,'$b','$c');");
		echo "inserted";
		break;

	case '2':	
		$y=mysql_query("delete from student where rn='".$d."' and name='".$e."' and classnm='".$f."';");
			
	echo "deleted";
		break;
		
	
}
header("location:http://localhost/adddetails.html");
?>