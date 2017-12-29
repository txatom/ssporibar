<?php 
include("dbconnection.php");
$uname=$_POST['username'];
$uname1=$_GET['rt'];
if($uname1==!NULL)
{mysql_query("UPDATE `admin` SET `log`='',`ip`='',`session`='' WHERE username='$uname1' ");
}
else{
mysql_query("UPDATE `admin` SET `log`='',`ip`='',`session`='' WHERE username='$uname' ");}
session_destroy();
header("location:index.php");
?>