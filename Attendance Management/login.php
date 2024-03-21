 <?php
//session_start();
include('db.php');
$un1=$_POST['un'];
$p=$_POST['p'];
$rpw=$_POST['rpw'];
$loginas=$_POST['r'];
switch($loginas)
{
case 1:
$q="select userid from user where usernm='$un1' and password='$p';";

$r2=mysql_num_rows(mysql_query($q));
echo $r2;
if($r2==0)
{
header("location:http://localhost/register.html");
}
else
{
$r=mysql_fetch_row(mysql_query($q));
$x=mysql_query("insert into login(loginas,username,pwd,con_pwd,userid)values($loginas,'$un1','$p','$rpw','$r[0]');");
header("location:http://localhost/class.html");
}
break;
case 2:
$q="select userid from user where usernm='$un1' and password='$p';";

$r2=mysql_num_rows(mysql_query($q));
echo $r2;
if($r2==0)
{
header("location:http://localhost/register.html");
}
else
{
$r=mysql_fetch_row(mysql_query($q));
$x=mysql_query("insert into login(loginas,username,pwd,con_pwd,userid)values($loginas,'$un1','$p','$rpw','$r[0]');");
header("location:http://localhost/adddetails.html");
}
}
?>