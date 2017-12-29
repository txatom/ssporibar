<?php  
date_default_timezone_set('Asia/Dhaka');
error_reporting("E_ALL");
include("dbconnection.php");
/*if($chk2=="add")
{include("add.php");}*/           

$pr=$_GET['pr'];
$indx=$_GET['ch'];
$chk2=$_GET['ad'];
//get ip address***
include("ip.php");
get_IP_address();
$IPaddress = $_SERVER['REMOTE_ADDR'];
///**** ip address
$date=date("j");
$year=date("Y");
$month=date("F");
$dt = new DateTime();
$time=$dt->format('d-m-Y H:i:s');
if(!($indx==NULL))
{ 
session_start();
$uname=$_POST['uname'];

	if (!($uname=="guest"))
{
	$pass=$_POST['pass'];
	$hash = md5($pass);

$_SESSION["$uname"]=$uname."+1aer45ty";
$dedar=$_SESSION["$uname"];
$sqlc="SELECT*FROM admin WHERE username='$uname' and password='$hash'";
$resultc=mysql_query($sqlc);
$countc=mysql_num_rows($resultc); 
			if($countc==1)
		{				$row=mysql_fetch_array($resultc);	
					if($row['session']==NULL)
					{                                      
				          mysql_query("UPDATE `admin` SET `log`='active',`ip`='$IPaddress',`session`='$dedar',`time`='$time' WHERE username='$uname' ");
   
   
/////*********database backup******   					   
	if($date=="15")
   {
	$db_bckup=mysql_query("SELECT*FROM monitor WHERE cntnt='db_bckup' AND status='yes'");
	$bckupcnt=mysql_num_rows($db_bckup);
		if($bckupcnt==0)
		{
	include("run.php");
	mysql_query("INSERT INTO monitor(`user_name`,`cntnt`,`status`,`time`,`ip_adrs`)VALUES('$uname','db_bckup','yes','$time','$IPaddress')");
		} //******** db_backups//
	}	
//*******Student class up auto...********
	
if(($month=="December"))
{
$dbsuchk=mysql_query("SELECT*FROM monitor WHERE cntnt='class_up'");
$dbcount=mysql_num_rows($dbsuchk);
		if($dbcount==0)
		{
			$stdload=mysql_query("SELECT id,edu,class FROM profile");
			while($array=mysql_fetch_array($stdload))
				{
				$arrayid= $array['id'];
				$arrayclass=$array['class'];
				$arrayedu=$array['edu'];
				if(!($arrayedu=="Madrasha"))
				        {    if($arrayclass==12)
				   			{mysql_query("UPDATE `profile` SET `class`='HSc' WHERE id='$arrayid' ");}
							else if($arrayclass==10)
				   			{mysql_query("UPDATE `profile` SET `class`='SSc' WHERE id='$arrayid' ");}
							else if($arrayclass=="n0")
							{mysql_query("UPDATE `profile` SET `class`='na' WHERE id='$arrayid' ");}
							else if($arrayclass=="na")
							{mysql_query("UPDATE `profile` SET `class`='nb' WHERE id='$arrayid' ");}
							else if($arrayclass=="nb")
							{mysql_query("UPDATE `profile` SET `class`='nc' WHERE id='$arrayid' ");}
							else if($arrayclass=="nc")
							{mysql_query("UPDATE `profile` SET `class`='nd' WHERE id='$arrayid' ");}
							else if($arrayclass=="nd")
							{mysql_query("UPDATE `profile` SET `class`='kg1' WHERE id='$arrayid' ");}
							else if($arrayclass=="kg1")
							{mysql_query("UPDATE `profile` SET `class`='kg2' WHERE id='$arrayid' ");}
							else if($arrayclass=="kg2")
							{mysql_query("UPDATE `profile` SET `class`='kg3' WHERE id='$arrayid' ");}
							else if($arrayclass=="kg3")
							{mysql_query("UPDATE `profile` SET `class`='kg4' WHERE id='$arrayid' ");}
							else if($arrayclass=="kg4")
							{mysql_query("UPDATE `profile` SET `class`='1' WHERE id='$arrayid' ");}
							else 
	            			{$a1=$arrayclass+1;
							 mysql_query("UPDATE `profile` SET `class`='$a1' WHERE id='$arrayid'");}		
				      }
			if($arrayedu=="Madrasha")			   
				   			{
							if($arrayclass=="12m")
				   			{mysql_query("UPDATE `profile` SET `class`='Alim' WHERE id='$arrayid' ");}
							else if($arrayclass=="10m")
				   			{mysql_query("UPDATE `profile` SET `class`='Dakhil' WHERE id='$arrayid' ");}
							else   {	
							$a1=$arrayclass+1;
							$a2=$a1."m";
							 mysql_query("UPDATE `profile` SET `class`='$a2' WHERE id='$arrayid'");
							 		}
							}
				}//while
		}//dbcount
}//month
	mysql_query("INSERT INTO monitor(`user_name`,`cntnt`,`status`,`time`,`ip_adrs`)VALUES('$uname','class_up','yes','$time','$IPaddress')");
////****** student class update
						  header("location:index2.php?rt=$uname");
					}
					else{
						  header("location:index2.php?rt=$uname&ra=active");
						}
		}
					else
	   					{ 
$arc_mage='<div style="float:left;width:50px;padding: 5 5 0 5"><img src="images/robot.gif"></div><div style="float:left;
width:300px;padding: 15 5 0 150"><h2>Stranger !!!! You are trying to access unethically.I can`t let you in.Take proper permission & come again.<br /></h2></div>';
$link='index.php';

include("noti.php");
				 exit;
						}
exit;	
}
else {
							  header("location:index2.php?rt=guest");
	}
}
	if($uname==NULL)
	{
	session_start();
	$uname=$_GET['rt'];
	$dedar=$_SESSION["$uname"];
	$rasqlc="SELECT*FROM admin WHERE username='$uname' and session='$dedar'";
	$raresultc=mysql_query($rasqlc);
	$racountc=mysql_num_rows($raresultc); 
	$rarow=mysql_fetch_array($raresultc);
			if($racountc==0)
				{
	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Stranger !!!! You are trying to access unethically.I can`t let you in.Take proper permission & come again.<br /></h2></div>';
				 exit;
 exit;				 }
}
if($pr=="ad")
{
	if($rarow['type']=="First Admin")
 {$arc_mage='<div style="float:left;width:30%;padding: 3 5 0 3"><img src="images/robot.gif"></div><div style="float:left;
width:65%;padding: 3 5 0 1"><h2>You are First Admin.You can`t Access This Page.Take proper permission & come again.<br /></h2></div>';
$link='index2.php?rt='.$uname.'&rflag=1';
include("noti.php");
				 exit;}
header("location:admin.php?rt=$uname");
exit;
}
if($pr=="st")
{
include("student.php");
exit;
}
?>