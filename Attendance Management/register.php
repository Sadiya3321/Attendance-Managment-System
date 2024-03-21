<?php
include('db.php');
//session_start();
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$un=$_POST['un'];
setcookie('usernm',$un);
$pw=$_POST['pw'];
$rpw=$_POST['rpw'];
$e=$_POST['e'];
$no=$_POST['n'];
$add=$_POST['add'];

	echo $no;
$q="insert into user(firstnm,lastnm,usernm,password,c_pwd,email,m_num,adds)  values('$fn','$ln'
,'$un','$pw','$rpw','$e','$no','$add')";
echo $q;
		$result=mysql_query($q);
if(!$result)
echo mysql_error();
else
echo"success";
header("location:http://localhost/login.html");
?>

