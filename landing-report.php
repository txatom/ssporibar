<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
<div id="tooplate_main" align="center">
<p> &nbsp;</p>
<p> &nbsp;</p>

<?php 
include("dbconnection.php");
error_reporting("E_ALL"); 

$date=$_GET['d'];
$month=$_GET['m'];
$year=$_GET['y'];
$ttype=$_GET['tp'];
$stype=$_GET['sp'];
$r=$_GET['rr'];
if($r==NULL)
{$r=1;}
$cls=$_GET['cls'];
			echo '<table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0"> 
<tr align="center" style="background-color:#CFF" align="center">
<td>Sl no.</td>
<td>Name</td>
<td> Date</td>
<td>Paid Month</td>
<td>Paid Amount</td>
<td>Due</td>
</tr>';
	
$idclschk=mysql_query("SELECT*FROM profile WHERE class='$cls' AND edu='$stype' ORDER BY id ASC");
	$count1=mysql_num_rows($idclschk);
	echo "<div style=\"border-bottom:1px solid #F6F;padding-bottom:5px\"><h3> Payment Report For Class : ".$cls." - " .$stype. " </h3>
	
	<h4> Report Date :".$date.'-'.$month.'-'.$year."</h4><br/>
	
	</div><br/>";
	echo "<h4> Total Students :".$count1."</h4><br/>";
	while ($rtss=mysql_fetch_array($idclschk))
	{
	$id=$rtss['id'];
	$name=$rtss['name'];
	echo'	<tr align="center">
<td>'.$r.'</td>

<td><a href="profile.php?rt='.$uname.'&r='.$id.'">'.$name.'</a></td>';


if(!(($date&&$month&&$year)==NULL))
{
	$alrsch1=mysql_query("SELECT*FROM statement WHERE type='Income' AND stype='$stype' AND id='$id' AND day='$date' AND month='$month' AND year='$year'");}
if(($date==NULL)&&($month&&$year)==!NULL)
{$alrsch1=mysql_query("SELECT*FROM statement WHERE type='Income' AND stype='$stype' AND id='$id' AND month='$month' AND year='$year'");}	
	
	$rtss1=mysql_fetch_array($alrsch1);
	$p1=$rtss1['amount'];
	$p=$p+$p1;
	$du=$rtss1['due'];
	$du1=$du+$du1;
	$p1=0;
	$du1=0;
echo '<td>'.$rtss1['day'].'-'.$rtss1['month'].'-'.$rtss1['year'].'</td>';
	
	if($smonth==$tmonth)
      {      
  echo '<td>'.$rtss1['smonth'].'-'.$rtss1['year'].'</td>';
}
else{
  echo '<td>'.$rtss1['smonth'].'-'.$rtss1['tmonth'].'-'.$rtss1['year'].'</td>';

	 }
	
	
	if($p==NULL)
	{	$t++;
		echo '<td>0</td>';
}
else {	echo '<td>'.$p.'</td>';}

 if($du==NULL)
 {	$tr++;
	 echo '<td>0</td>';}
else {	echo '<td>'.$du.'</td>';
}
	echo '</tr>';
	$r++;
	
	$p=0;
	$du=0;
	
	
}


echo '</table>';
$ttt=$count1-$t;
echo '<br/> <h3> Total Pay - '.$ttt.' Student. Rest - '.$t;

?>
</div>