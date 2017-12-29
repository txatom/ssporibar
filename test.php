<?php
date_default_timezone_set('Asia/Dhaka');

include("dbconnection.php");

/*$dt = new DateTime();
echo $dt->format('Y-m-d H:i:s');

	$dt = new DateTime();
	$time=$dt->format('d-m-Y H:i:s');
	mysql_query("INSERT INTO monitor(`cntnt`,`status`,`time`)VALUES('db_bckup','yes','$time')");


$password="987Asd456";
$hash = md5($password);
echo $hash;

$tr="1m";

$th=$tr+1;
echo $th;
*/

$dbsuchk=mysql_query("SELECT*FROM monitor WHERE cntnt='class_up'");
$dbcount=mysql_num_rows($dbsuchk);
		if($dbcount<1)
		{
			$stdload=mysql_query("SELECT*FROM profile");
			while($array=mysql_fetch_array($stdload))
				{
				$arrayid= $array['id'];
				$arrayclass=$array['class'];
				$arrayedu=$array['edu'];
		echo $arrayid.$arrayclass.$arrayedu."<br/>";
				
				}
		}
		

?>