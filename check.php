<?php

// This is a sample code in case you wish to check the invoice from a mysql db table

if(isset($_POST['invoice']))
{
$invoice = $_POST['invoice'];
include("dbconnection.php");
$sql_check = mysql_query("SELECT invoice FROM statement WHERE invoice='$invoice'");
$count=mysql_num_rows($sql_check);
if($count==0)
{
echo 'OK';
}
else
{
echo 'false';
}
}

?>