<?php
include('db.php');
$classlist=$_POST['class'];
$s=$_POST['s'];
$t=$_POST['t'];
$sublist=$_POST['sub'];
$p=$_POST['p'];
$dt=$_POST['date22'];
setcookie('attddate',$dt);
setcookie('class',$classlist);
setcookie('subject',$sublist);
setcookie('semester',$s);
setcookie('type',$t);
setcookie('paper',$p);
$q2="select max(loginid) from login;";
$r3=mysql_fetch_row(mysql_query($q2));
echo $r3[0];
echo"success";
$q="select rn from student where classnm='".$classlist."';";
$q1=mysql_query($q);
while($rs=mysql_fetch_array($q1))
{
echo $rs[0];
$z=mysql_query("insert into class2(rollno,class,semester,type,subject,paper,loginid,date)values('$rs[0]','$classlist',$s,'$t','$sublist',$p,'$r3[0]','$dt');");
echo"sheet is";
}


header("location:http://localhost/sheet.php");
?>

