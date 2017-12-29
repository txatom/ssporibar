<?php

// This is a sample code in case you wish to check the id from a mysql db table

if(isset($_POST['id']))
{
$id = $_POST['id'];
include("dbconnection.php");
$sql_check = mysql_query("SELECT id FROM profile WHERE id='$id'");
$count=mysql_num_rows($sql_check);
if($count<=0)
{$sql_check = mysql_query("SELECT id FROM tprofile WHERE id='$id'");
$count=mysql_num_rows($sql_check);
}

if($count==0)
{
echo 'false';

}
else
{echo 'OK';

}
}

?>