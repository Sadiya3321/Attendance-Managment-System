<html>
<head>
<script>
function pdf1()
{
alert("PDF is downloaded");
window.location="http://localhost/downloadpdf.php";
}
</script>

<style type="text/css">
.top-box {
 
    margin: 0;
    padding: 0;
}
.top-box h1{
    margin:0;
}
div.ex1 {
  height: 600px;
  overflow-y: scroll;
}
h1{
color:black;
font-family:verdona;
 font-size:60px;
}
body {
	background-image:  url('http://localhost/bgimage.jpg');
	background-repeat:  no-repeat;
  background-attachment:  fixed;
  background-size:  100% 100%;
}
table
{background-color:white;
border:2px solid black;
height:500px;
width:750px;
 margin:1px;
 padding:0px; cellspacing=5;
cellpadding=5;
}
td
{
font-size:20px;
}
th
{
font-size:30px;
}
</style>
</head>


<?php
include('db.php');
echo"<body>";

echo"<form name=ww method=post  action=http://localhost/login.html>";
echo"<center>";
echo"<table border=1>";
$sub22=$_POST['sub'];
$class22=$_POST['class'];
$date33=$_POST['d2'];
setcookie('a',$date33);
setcookie('c',$class22);
setcookie('s',$sub22);


$q22="select count(rollno) from class2 where subject='".$sub22."' and class='".$class22."' and date='".$date33."' and status='P';";
$p22=mysql_query($q22);
$ff22=mysql_fetch_row($p22);
echo"<tr>";
echo "<th>Total present students:</th>";
echo "<th>Present students:</th>";
echo "<th>Total absent students:</th>";
echo "<th>Absent students:</th>";
echo"</tr>";
echo"<tr rowspan=5>";
echo"<td>";
echo $ff22[0];
echo"</td>";
$q33="select rollno from class2 where subject='".$sub22."' and class='".$class22."' and date='".$date33."' and status='P';";
$p33=mysql_query($q33);
echo"<td>";
while($ff33=mysql_fetch_row($p33))
{

echo "<br>".$ff33[0];

}
echo"</td>";

$c33="select count(rollno) from class2 where subject='".$sub22."' and class='".$class22."' and date='".$date33."' and status='A';";
$d33=mysql_query($c33);
$e33=mysql_fetch_row($d33);

echo"<td>";
echo $e33[0];
echo"</td>";
$z33="select rollno from class2 where subject='".$sub22."' and class='".$class22."' and date='".$date33."' and status='A';";
$g33=mysql_query($z33);
echo"<td>";
while($hh33=mysql_fetch_row($g33))
{

echo "<br>".$hh33[0];
}
echo"</td>";
echo"</tr>";
echo"<td colspan=7 align=center><input type=button value=Download pdf onclick=pdf1()><input type=submit  value=LOGOUT>";
echo"</td></tr>";
echo"</form>";
echo"</center>";
echo"</body>";
?>