 
<html>
<head>
<script>
function disp(str)
{

var p=document.cookie;
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("a").innerHTML=xmlhttp.responseText;
		}
	}
xmlhttp.open("GET","update.php?x="+str+"&c="+p,true);
	xmlhttp.send();
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
table
{background-color:white;
border:2px solid black;
height:600px;
width:1450px;
 margin:1px;
 padding:0px; cellspacing=5;
cellpadding=5;
}
td
{
font-size:40px;
}
th
{
font-size:40px;
}
</style>
</head>
<?php
include('db.php');
$t1=$_COOKIE['type'];
//echo $t1;
$p1=$_COOKIE['paper'];
//echo $p1;

echo"<body>";
echo"<form name=ff method=post action=http://localhost/report.html>";
echo"<center>";

echo"<div class=top-box>";
echo"<h1>Attendance Sheet</h1>";
echo"</div>";
echo"<div class=ex1>";

echo"<table border=1>";

echo"<tr>";

echo"<th>Date</th>";

echo"<td>";
$dt=$_COOKIE['attddate'];
echo $dt;
echo"</td>";
echo"<th>Class</th>";
echo"<td>";
//$classlist=$_GET['class'];
$c1=$_COOKIE['class'];
echo $c1;
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<th>Semester</th>";
echo"<td>";
$s1=$_COOKIE['semester'];
echo $s1;

echo"</td>";
echo"<th>Subject</th>";
echo"<td colspan=3>";
$sub1= $_COOKIE['subject'];
echo $sub1;
echo"</td>";
echo"</tr>";

echo"<tr>";
echo"<th>Rollno</th>";
echo"<th>Name</th>";
echo"<th colspan=4>P/A</th>";
echo"</tr>";
echo"<tr>";
 
$w=mysql_query("select rn,name from student where classnm='".$c1."';");
while($row=mysql_fetch_row($w))
{
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td colspan=4>";

echo"<input type=radio name=$row[0]  value=$row[0]-P  checked onclick=disp(this.value)> P";

echo"<input type=radio name=$row[0]  value=$row[0]-A  onclick=disp(this.value)>A</td>";
echo"</tr>";
}
echo"<tr>";
echo"<td colspan=6 align=center><input type=submit value=Next>";
echo"</tr>";
echo"</table>";

echo"</div>";

echo"</center>";


echo"<div  id=a>";
echo"</div>";
echo"</form>";
echo"</body>";
?>

</html>
