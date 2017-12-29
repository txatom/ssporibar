<?php 
session_start();
error_reporting("E_ALL");
include("dbconnection.php");
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$tcr=$_POST['tcr'];
$uname=$_POST['rt'];
/*$fp=fopen("idlog.txt","r");
	$count=fread($fp,1024);
	fclose($fp);
	$count=$count+1;
	$fp=fopen("idlog.txt","w");
	fwrite($fp,$count);
	fclose($fp);*/
$class=$_POST['class'];	
$roll=$_POST['roll'];
$id=$_POST['id'];
if($id==NULL)
{$arc_mage='<div style="float:left;width:auto;padding: 3 5 0 3"><img src="images/robot.gif"></div><div style="float:left;
width:auto;padding: 3 5 0 1"><h2>Something wrong sir !!!..<br /> Id field can not be blank.<br />sorry....</h2>
</div>';
$link='';
include("noti.php");
exit;}
if(!($id==NULL))
{
	if($tcr==NULL)
	{
	$sqlc="SELECT*FROM profile WHERE `id`='$id'";
	$resultc=mysql_query($sqlc);
	$rstcount=mysql_num_rows($resultc);
	
if ($rstcount>=1)
{$arc_mage='<div style="float:left;width:30%;"><img src="images/robot.gif" /></div><div style="float:right;width:65%;"><h3>Something wrong sir !!!..<br />This ID is Already exist in my database.<br />Id field can not be doubled.<br />sorry....</h3>
</div>';
$link='';
include("noti.php");

exit;}}
	if(!($tcr==NULL))
{	$sqlc="SELECT*FROM tprofile WHERE `id`='$id'";
	$resultc=mysql_query($sqlc);
	$rstcount=mysql_num_rows($resultc);
	
if ($rstcount>=1)
{$arc_mage='<div style="float:left;width:30%;"><img src="images/robot.gif" /></div><div style="float:right;width:65%;"><h3>Something wrong sir !!!..<br />This ID is Already exist in my database.<br />Id field can not be doubled.<br />sorry....</h3>
</div>';
$link='student.php?rt='.$uname.'&rflag=1';
include("noti.php");
exit;}}
}
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$adrs=$_POST['adrs'];
$padrs=$_POST['padrs'];
$edu=$_POST['edu'];
/*$ip_info=$_POST['ip_info'];
$otc=$_POST['otc'];
$type_con=$_POST['type_con'];*/
if($tcr==NULL)
{
mysql_query("INSERT INTO profile(`name`,`fname`,`mname`,`class`,`roll`,`id`,`mobile`,`email`,`adrs`,`edu`,`image`)
VALUES('$name','$fname','$mname','$class','$roll','$id','$mobile','$email','$adrs','$edu','img.png')");
header("location:image-upload.php?r=".$id."&rt=".$uname."");
}
if(!($tcr==NULL))
{
	$skl=$_POST['skl'];
$exp=$_POST['exp'];
mysql_query("INSERT INTO tprofile(`name`,`fname`,`mname`,`id`,`mobile`,`email`,`adrs`,`edu`,`skl`,`exp`,`image`)
VALUES('$name','$fname','$mname','$id','$mobile','$email','$adrs','$edu','$skl','$exp','img.png')");
header("location:image-upload.php?r=".$id."&rt=".$uname."&tcr=y");
}
?>
