<?php 
session_start();
error_reporting("E_ALL"); 
include("dbconnection.php");
$uname=$_GET['rt'];
$id=$_POST['r'];
if ($id==NULL)
{$id=$_GET['i'];}
if($uname==NULL)
{$uname=$_POST['uname'];
}
$dedar=$_SESSION["$uname"];
$rasqlc="SELECT*FROM admin WHERE username='$uname' AND session='$dedar' AND log='active'";
	$raresultc=mysql_query($rasqlc);
	$racountc=mysql_num_rows($raresultc); 
			if($racountc==0)
				{
	$arc_mage='<div style="float:left;width:30%;"><img src="images/robot.gif"></div><div style="float:left;
width:65%;"><h3>Stranger !!!! You are trying to access unethically.I can`t let you in.Take proper permission & come again.<br /></h3></div>';
$link='index.php';
include("noti.php");
				 exit;
				 }
$rarow=mysql_fetch_array($raresultc);
$date=$_POST['date'];
$year=$_POST['year'];
$month=$_POST['month'];
$ttype=$_POST['ttype'];
$stype=$_POST['stype'];
if ($stype==NULL)
{$stype=$_GET['stype'];}
$r=$_POST['rr'];
if($r==NULL)
{$r=$_GET['rr'];}
$invoice=$_GET['d'];
if($invoice==NULL)
{$invoice=$_POST['d'];}
$del=$_GET['del'];
if($del==NULL)
{$del=$_POST['del'];}
if(($del=="y")&&(!($stype=="Store")))
{mysql_query("DELETE FROM statement WHERE invoice='$invoice'");}
$sl=$_GET['sl'];
if(($del=="y")&&($stype=="Store"))
{
	$sls=$_POST['sl'];
	mysql_query("DELETE FROM store WHERE sl='$sls'");}
if($r==NULL)
{$r=0;}
$lt=$r+100;
$update=$_GET['u'];
$prt=$_GET['prt'];
if($prt==NULL)
{$prt=$_POST['prt'];
}
$prd=$_GET['prd'];
if($prd==NULL)
{$prd=$_POST['prd'];
}
if($prt==NULL)
{$prt=0;}
if($prd==NULL)
{$prd=0;}
if(($ttype=="All")&(!($stype=="All")))
{echo '<div style="float:left;width:30%;"><img src="images/robot.gif"></div><div style="float:left;
width:65%;"><h2>Transaction Type & Source Type both need to be All. </h2></div>';
exit;}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shamim Shikhya Poribar</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico"  type="image/x-icon" />
<style>
.dedar1{color: #039;font-family: 'Times New Roman', Times, serif ; font-size:21px;}
</style>
</head>
<body>
<div align="center">
<div id="fp_body">
		<div id="tooplate_header">
		  <div id="site_title">
            <a href="index2.php?rt=<?php echo $uname?>">
            <p align="right"><img src="images/logo1.png"/></p></a>
            <a href="index2.php?rt=<?php echo $uname?>"><p align="right"><img src="images/slogo.png" height="45" width="200"/></p></a></div>
          <p>&nbsp;</p>
          <div style="float:right;padding:10px 10px 0 0;">

        <a href="log-out.php?rt=<?php echo $uname?>"><img src="images/log-out.png" /></a></div>
			<div id="tooplate_menu">
		  </div> 
		  <p>&nbsp;</p>
        </div> <!-- end of forever header -->
			<div id='DEDAR'>
<?php include("menu.php"); ?>
</div>
</div> 
<!-- end of forever header --><!-- end of middle -->
<div id="tooplate_main">
		  <p><!-- end of tooplate_menu -->
			  <img src="images/shadow.png" width="100%"/></p>
		  <div class="col_w9002 col_w900_last">
<div  align="center">
    <?php
	/////////////////////////////////////////  All report\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
	if(($ttype=="All")&($stype=="All"))
	{			$ttype="Income";
		echo '<div align="center">';
		echo '<div>
    <h1>Total report</h1>
  <img src="images/section-shadow.png" width="900px" /> <br />
     <p class="dedar1">Transaction type :All </p>
 <p class="dedar1"> Report Date :  '.$date.' '.$month.' '.$year.' </p>
  </div>';
	for($i=1;$i<=2;$i++)
	{
  echo '<div> <br />
    <h1>'.$ttype.'</h1>
  <img src="images/section-shadow.png" width="900px" /><p> &nbsp;</p> </div>';
	if(!(($date&&$month&&$year)==NULL))
	{$alrsch1=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='School' AND day='$date' AND month='$month' AND year='$year'");
	$alrsch2=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Coaching' AND day='$date' AND month='$month' AND year='$year'");
	$alrsch3=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Madrasha' AND day='$date' AND month='$month' AND year='$year'");
						if($ttype=="Income")
			{$alrsch4=mysql_query("SELECT*FROM store WHERE day='$date' AND month='$month' AND year='$year'");}
									if($ttype=="Expense")
	{$alrsch5=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Extra' AND day='$date' AND month='$month' AND year='$year'");}
	}
if((($date==NULL)&&($month&&$year)==!NULL)&(!($rarow['type']=="First Admin")))
{
$alrsch1=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='School' AND month='$month' AND year='$year'");
$alrsch2=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Coaching' AND month='$month' AND year='$year'");
$alrsch3=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Madrasha' AND month='$month' AND year='$year'");

			if($ttype=="Income")
			{$alrsch4=mysql_query("SELECT*FROM store WHERE month='$month' AND year='$year'");}
			if($ttype=="Expense")
			
{$alrsch5=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Extra'AND month='$month' AND year='$year'");}
}
if((($date==NULL) && ($month==NULL)&&($year==!NULL))&(!($rarow['type']=="First Admin")))
{
$alrsch1=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='School' AND year='$year'");
$alrsch2=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Coaching' AND year='$year'");
$alrsch3=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Madrasha' AND year='$year'");

if($ttype=="Income")
			{$alrsch4=mysql_query("SELECT*FROM store WHERE year='$year'");}
			if($ttype=="Expense")
			
	{$alrsch5=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Extra' AND year='$year'");
	}
			
}

			while($alrsch=mysql_fetch_array($alrsch1))
			{
			$sam1=$alrsch['amount'];
			$sam=$sam+$sam1;
			$sdu1=$alrsch['due'];
			$sdu=$sdu+$sdu1;
			}
			while($alrch=mysql_fetch_array($alrsch2))
			{
			$cam1=$alrch['amount'];
			$cam=$cam+$cam1;
			$cdu1=$alrch['due'];
			$cdu=$cdu+$cdu1;
			}
			
			while($alrms=mysql_fetch_array($alrsch3))
			{
			$msam1=$alrms['amount'];
			$msam=$msam+$msam1;
			$msdu1=$alrms['due'];
			$msdu=$msdu+$msdu1;
			}
			
			
		if($ttype=="Income")
{	
			while($alrst=mysql_fetch_array($alrsch4))
			{
			$stam1=$alrst['amount'];
			$stam=$stam+$stam1;
			$stdu1=$alrst['due'];
			$stdu=$stdu+$stdu1;
			}
			
	}
			if($ttype=="Expense")
{	
	while($alrchx=mysql_fetch_array($alrsch5))
			{
			$xam1=$alrchx['amount'];
			$xam=$xam+$xam1;
			$xdu1=$alrchx['due'];
			$xdu=$xdu+$xdu1;
			}
			
}
			
		if($sam==NULL){$sam=0;}if($cam==NULL){$cam=0;}if($stam==NULL){$stam=0;}if($msam==NULL){$msam=0;}if($xam==NULL){$xam=0;}
		if($sdu==NULL){$sdu=0;}if($cdu==NULL){$cdu=0;}if($stdu==NULL){$stdu=0;}if($msdu==NULL){$msdu=0;}if($xdu==NULL){$xdu=0;}
		
			echo '<table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0"> 

			
<tr align="center" style="background-color:#CFF" align="center">
			<td>
			Source
			</td>
			<td>Amount</td>
			<td>Due</td>
			</tr>
			<tr align="center">
			<td>School</td>
			<td>'.$sam.'</td>
			<td>'.$sdu.'</td>
			</tr>
			
			<tr align="center">
			<td>Coaching</td>
			<td>'.$cam.'</td>
			<td>'.$cdu.'</td>
			</tr>
			<tr align="center">
			<td>Madrasha</td>
			<td>'.$msam.'</td>
			<td>'.$msdu.'</td>
			</tr>
			<tr align="center">
			<td>Store</td>
			<td>'.$stam.'</td>
			<td>'.$stdu.'</td>
			</tr>
			<tr align="center">
			<td>Extra</td>
			<td>'.$xam.'</td>
			<td>'.$xdu.'</td>
			</tr>
			<tr align="center" style="background-color:#CFF">
			<td>Total</td>';
			$pall=($sam+$cam+$stam+$msam+$xam);
			$pald=($sdu+$cdu+$stdu+$msdu+$xdu);
			if($i==1)
			{$pzx1=$pall;
			$psx1=$pald	;	
			}
			if($i==2)
			{$pzx2=$pall;
			$psx2=$pald	;	
			}
			echo'
			<td>'.$pall.'</td>
			<td>'.$pald.'</td></tr>
			
			</table>
			
			 </div>';   



			$ttype="Expense";
				$sam=0;$cam=0;$stam=0;
				$msam=0;$xam=0;
				$sdu=0;$cdu=0;
				$stdu=0;
				$msdu=0;$xdu=0;



}		
echo'</div>';
	  	echo '<div> <br />
    	<h1>Your Net Balance is '.($pzx1-$psx1-$psx2-$pzx2).' Tk.</h1>
	     </div>';
echo'	<div class="cleaner"></div>
</div>
<div id="tooplate_footer_wrapper">

	<div id="tooplate_footer">

    	

		<p>Copyright © 2048 <a href="#"> Shamim Shikhya Poribar</a> Developed and managed by: <a href="http://facebook.com/dedar.mithu">Dedar Hossain</a>

        

        </p>

		<p>&nbsp;</p>

</div>

	<div class="cleaner"></div>

</div>

</div>

</div>

</body>

</html>';
exit;






}	
	
	/////////////////////  all for income /expense////////////////////////
	if(($stype=="All"))

	{	 
	
	echo '<div  style="min-height:800px;" align="center">';
		echo '<div>
    <h1>Total report</h1>
  <img src="images/section-shadow.png" width="900px" />
     <p class="dedar1">Transaction type :'. $ttype.' </p>
 <p class="dedar1"> Report Date :  '.$date.' '.$month.' '.$year.' </p>
  </div>';
  
  
	
	if(!(($date&&$month&&$year)==NULL))
	
	{$alrsch1=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='School' AND day='$date' AND month='$month' AND year='$year'");
	$alrsch2=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Coaching' AND day='$date' AND month='$month' AND year='$year'");
	$alrsch3=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Madrasha' AND day='$date' AND month='$month' AND year='$year'");
	
						if($ttype=="Income")
			{$alrsch4=mysql_query("SELECT*FROM store WHERE day='$date' AND month='$month' AND year='$year'");}
									if($ttype=="Expense")
			
	{$alrsch5=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Extra' AND day='$date' AND month='$month' AND year='$year'");
	}
	
	}
if((($date==NULL)&&($month&&$year)==!NULL)&(!($rarow['type']=="First Admin")))
{
$alrsch1=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='School' AND month='$month' AND year='$year'");
$alrsch2=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Coaching' AND month='$month' AND year='$year'");
$alrsch3=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Madrasha' AND month='$month' AND year='$year'");

			if($ttype=="Income")
			{$alrsch4=mysql_query("SELECT*FROM store WHERE month='$month' AND year='$year'");}
			if($ttype=="Expense")
			
	{$alrsch5==mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Extra' AND month='$month' AND year='$year'");
	}
			
}
if((($date==NULL) && ($month==NULL)&&($year==!NULL))&(!($rarow['type']=="First Admin")))
{
$alrsch1=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='School' AND year='$year'");
$alrsch2=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Coaching' AND year='$year'");
$alrsch3=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Madrasha' AND year='$year'");

if($ttype=="Income")
			{$alrsch4=mysql_query("SELECT*FROM store WHERE year='$year'");}
			if($ttype=="Expense")
			
	{$alrsch5=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='Extra' AND year='$year'");
	}
			
}

			while($alrsch=mysql_fetch_array($alrsch1))
			{
			$sam1=$alrsch['amount'];
			$sam=$sam+$sam1;
			$sdu1=$alrsch['due'];
			$sdu=$sdu+$sdu1;
			}
			while($alrch=mysql_fetch_array($alrsch2))
			{
			$cam1=$alrch['amount'];
			$cam=$cam+$cam1;
			$cdu1=$alrch['due'];
			$cdu=$cdu+$cdu1;
			}
			
			while($alrms=mysql_fetch_array($alrsch3))
			{
			$msam1=$alrms['amount'];
			$msam=$msam+$msam1;
			$msdu1=$alrms['due'];
			$msdu=$msdu+$msdu1;
			}
			
			
		if($ttype=="Income")
{	
			while($alrst=mysql_fetch_array($alrsch4))
			{
			$stam1=$alrst['amount'];
			$stam=$stam+$stam1;
			$stdu1=$alrst['due'];
			$stdu=$stdu+$stdu1;
			}
			
	}
			if($ttype=="Expense")
{	
	while($alrchx=mysql_fetch_array($alrsch5))
			{
			$xam1=$alrchx['amount'];
			$xam=$xam+$xam1;
			$xdu1=$alrchx['due'];
			$xdu=$xdu+$xdu1;
			}
			
}
			
		if($sam==NULL){$sam=0;}if($cam==NULL){$cam=0;}if($stam==NULL){$stam=0;}if($msam==NULL){$msam=0;}if($xam==NULL){$xam=0;}
		if($sdu==NULL){$sdu=0;}if($cdu==NULL){$cdu=0;}if($stdu==NULL){$stdu=0;}if($msdu==NULL){$msdu=0;}if($xdu==NULL){$xdu=0;}
		
			echo '<table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0"> 

			
<tr align="center" style="background-color:#CFF" align="center">
			<td>
			Source
			</td>
			<td>Amount</td>
			<td>Due</td>
			</tr>
			<tr align="center">
			<td>School</td>
			<td>'.$sam.'</td>
			<td>'.$sdu.'</td>
			</tr>
			
			<tr align="center">
			<td>Coaching</td>
			<td>'.$cam.'</td>
			<td>'.$cdu.'</td>
			</tr>
			<tr align="center">
			<td>Madrasha</td>
			<td>'.$msam.'</td>
			<td>'.$msdu.'</td>
			</tr>
			<tr align="center">
			<td>Store</td>
			<td>'.$stam.'</td>
			<td>'.$stdu.'</td>
			</tr>
			<tr align="center">
			<td>Extra</td>
			<td>'.$xam.'</td>
			<td>'.$xdu.'</td>
			</tr>
			<tr align="center" style="background-color:#CFF">
			<td>Total</td>
			<td>'.($sam+$cam+$stam+$msam+$xam).'</td>
			<td>'.($sdu+$cdu+$stdu+$msdu+$xdu).'</td></tr>
			
			</table></div>
			
			 ';   

		
		
		
				//<td></td>
	
		
		
		
		
		
		
		echo'</div>



		  </div>

			

	<div class="cleaner"></div>
</div>
<div id="tooplate_footer_wrapper">

	<div id="tooplate_footer">

    	

		<p>Copyright © 2048 <a href="#"> Shamim Shikhya Poribar</a> Developed and managed by: <a href="http://facebook.com/dedar.mithu">Dedar Hossain</a>

        

        </p>

		<p>&nbsp;</p>

</div>

	<div class="cleaner"></div>

</div>

</div>

</div>

</body>

</html>';
		exit;
		
		
		}
	

	
	/////////////////update////////////////////////////////////update///////////////update///////////////////////////
	
	if($update=="y"&&(!($stype=="Store")))
{
	
	if (isset($_POST['submitry']))
	{ 	$amountry=$_POST['amountry'];
	$duery=$_POST['duery'];
	if($amountry==!NULL)
	{	mysql_query("UPDATE statement SET amount='$amountry' WHERE id='$id' AND invoice='$invoice'");}
	if($duery==!NULL)
	{	mysql_query("UPDATE statement SET due='$duery' WHERE id='$id' AND invoice='$invoice'");}
	header("location:report2.php?rt=$uname&i=$id&stype=$stype");
	exit;	}
	
	
	echo '<div><h2>Update Payment Informations for ID '.$id.'</h2>
	  <img src="images/section-shadow.png" width="900px" />
</div>';
$sqp=mysql_query("SELECT*FROM statement WHERE id='$id' AND invoice='$invoice'");

 echo' 
 <form action="" method="post">
<table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0" >     
<tr align="center" style="background-color:#CFF"><br />
<td>Date</td>
<td>Invoice Number</td>
<td>Paid Month</td>
<td>Amount</td>
<td>Due</td>
<td>Action</td>
</tr>';
while($rqp=mysql_fetch_array($sqp))
			{
$r++;
echo '
<tr align="center">
<td>'.$rqp['day'].'-'.$rqp['month'].'-'.$rqp['year'].'</td>
<td>'.$rqp['invoice'].'</td>';
$smonth=$rqp['smonth'];
$tmonth=$rqp['tmonth'];
	 if($smonth==$tmonth)
      {      
  echo '<td>'.$rqp['smonth'].'-'.$rqp['year'].'</td>';
		}
else	{
  echo '<td>'.$rqp['smonth'].'-'.$rqp['tmonth'].'-'.$rqp['year'].'</td>';

	 	}

$idR=$rqp['invoice'];
echo '<td><input type="text" name="amountry" id="amountry" placeholder="'.$rqp['amount'].'" /></td>
<td><input type="text" name="duery" id="duery" placeholder="'.$rqp['due'].'" /></td>
<input type="hidden" name="stype" id="stype" value="'.$stype.'" />
<input type="hidden" name="uname" id="uname" value="'.$uname.'" />


<td><input type="submit" name="submitry" id="submitry" value="submit"></td>';
	}

echo '</table></form>';


		}

///////////////////////////************store update////////////***************

	if($update=="y"&&($stype=="Store"))
	{
			if (isset($_POST['submitst']))
	{ 	$amountst=$_POST['amountst'];
		$duest=$_POST['duest'];
		$slpp=$_POST['slpp'];
	if($amountst>0)
	{	mysql_query("UPDATE store SET amount='$amountst' WHERE id='$id' AND sl='$slpp'");}
	if($duest>=0)
	{	mysql_query("UPDATE store SET due='$duest' WHERE id='$id' AND sl='$slpp'");}
		header("location:report2.php?rt=$uname&i=$id&stype=$stype");
	exit;	}
	

		
		$sqp=mysql_query("SELECT*FROM store WHERE id='$id' AND sl='$sl'");

		 echo' <form action="" method="post">
 <table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0" >     
<tr align="center" style="background-color:#CFF"><br />
<td>Date</td>
<td>Item</td>
<td>Amount</td>
<td>Due</td>
<td>Action</td>
</tr>';
while($rqp=mysql_fetch_array($sqp))
{echo '

<tr align="center">
<td>'.$rqp['day'].'-'.$rqp['month'].'-'.$rqp['year'].'</td>
<td>'.$rqp['item'].'</td>
';
echo '<td><input type="text" name="amountst" id="amountst" placeholder="'.$rqp['amount'].'" /></td>
<td><input type="text" name="duest" id="duest" placeholder="'.$rqp['due'].'" /></td>
<input type="hidden" name="stype" id="stype" value="'.$stype.'" />
<input type="hidden" name="uname" id="uname" value="'.$uname.'" />
<input type="hidden" name="slpp" id="slpp" value="'.$sl.'" />

<td><input type="submit" name="submitst" id="submitst" value="submit"></td>';
}
echo '</table></form>';

echo '
		</div>
		  </div>
	<div class="cleaner"></div>
</div>
<div id="tooplate_footer_wrapper">

	<div id="tooplate_footer">
		<p>Copyright © 2048 <a href="#"> Shamim Shikhya Poribar</a> Developed and managed by: <a href="http://facebook.com/dedar.mithu">Dedar Hossain</a>
        </p>

		<p>&nbsp;</p>
</div>
	<div class="cleaner"></div>
</div>
</div>
</body>
</html>';


exit;

}




//////////////////////////////////////generate record based on id/////////////////////////////////////////////	
	 
	if($id==!NULL)
	{
	if(!($stype=="Store"))
	{ echo '<div><h2>Payment Informations for ID '.$id.'</h2>
	  <img src="images/section-shadow.png" width="900px" />
</div>';
                
$sqp=mysql_query("SELECT*FROM statement WHERE id='$id' AND stype='$stype' ORDER BY sl DESC  LIMIT $r,$lt ");
$rt=mysql_num_rows($sqp);
if($rt==0)
{
	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div>
	<div style="float:left;width:600px;padding: 30 5 0 10"><h2>No record found for your query sir.Thank you.<br /></h2></div>';
				 exit;
}	

 echo' <table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0" >     
<tr align="center" style="background-color:#CFF"><br />
<td>Date</td>
<td>Invoice Number</td>
<td>Paid Month</td>
<td>Amount</td>
<td>Due</td>
<td>Item</td>
<td>Note</td>
<td>Action</td>
</tr>';
while($rqp=mysql_fetch_array($sqp))
{
$r++;
echo '
<tr align="center">
<td>'.$rqp['day'].'-'.$rqp['month'].'-'.$rqp['year'].'</td>
<td>'.$rqp['invoice'].'</td>';
$smonth=$rqp['smonth'];
$tmonth=$rqp['tmonth'];
	 if($smonth==$tmonth)
      {      
  echo '<td>'.$rqp['smonth'].'-'.$rqp['year'].'</td>';
}
else{
  echo '<td>'.$rqp['smonth'].'-'.$rqp['tmonth'].'-'.$rqp['year'].'</td>';

	 }

$idR=$rqp['invoice'];
echo '<td>'.$p=$rqp['amount'].'</td>
<td>'.$pd=$rqp['due'].'</td>
<td>'.$rqp['item'].'</td>
<td>'.$rqp['note'].'</td>';
if($rarow['type']=="First Admin")
{echo '<td><img src="images/block.png" /></a></td>';}
else {echo '<td><a href="report2.php?rt='.$uname.'&i='.$id.'&d='.$idR.'&del=y&stype='.$stype.'"><img src="images/delete.gif" /></a><a href="report2.php?rt='.$uname.'&i='.$id.'&d='.$idR.'&u=y&stype='.$stype.'"><img src="images/upd.png"/></a></td>';
}
$p1=$p1+$p;
$pd1=$pd1+$pd;
$p=0;
$pd=0;

}
echo '<tr align="center" style="background-color:#CFF">
<td colspan="3">Total</td>
<td>'.$p1.'</td>
<td>'.$pd1.'</td>
</tr>
<tr align="center" style="background-color:#CFF">
<td colspan="3">Previous</td>
<td>'.$prt.'</td>
<td>'.$prd.'</td>
</tr>
<tr align="center" style="background-color:#CFF">
<td colspan="3">NET</td>
<td>'.($nt=$p1+$prt).'</td>
<td>'.($nd=$pd1+$prd).'</td>
</tr>



</table><br />';
 echo '<a href="report2.php?rt='.$uname.'&i='.$id.'&rr='.$r.'&stype='.$stype.'&prt='.$nt.'&prd='.$nd.'"><p><img src="images/more.png" /></p></a>'; 
	echo'	</div>
		  </div>
	<div class="cleaner"></div>
</div>
<div id="tooplate_footer_wrapper">

	<div id="tooplate_footer">
		<p>Copyright © 2048 <a href="#"> Shamim Shikhya Poribar</a> Developed and managed by: <a href="http://facebook.com/dedar.mithu">Dedar Hossain</a>

        </p>

		<p>&nbsp;</p>
</div>
	<div class="cleaner"></div>
</div>
</div>
</div>
</body>
</html>

';

exit;}
	
	///*****************************************STORE based id//*************************/////////////////
	
	
	
		if($stype=="Store")
{
	echo '<div><h2>Store Informations for id '.$id.'</h2>
	  <img src="images/section-shadow.png" width="900px" />
</div>';
                
$sqp=mysql_query("SELECT*FROM store WHERE id='$id' ORDER BY sl DESC  LIMIT $r,$lt");
$rt=mysql_num_rows($sqp);
if($rt==0)
{
	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div>
	<div style="float:left;width:600px;padding: 30 5 0 10"><h2>No record found for your query sir.Thank you.<br /></h2></div>
</div>
		  </div>
	<div class="cleaner"></div>

<br /></div>
</div>
<div id="tooplate_footer_wrapper">

	<div id="tooplate_footer">
		<p>Copyright © 2048 <a href="#"> Shamim Shikhya Poribar</a> Developed and managed by: <a href="http://facebook.com/dedar.mithu">Dedar Hossain</a>
        </p>

		<p>&nbsp;</p>
</div>
	<div class="cleaner"></div>
</div>
</div>
</div>
</body>
</html>	
	
	';
				 exit;
}	

 echo' <table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0" >     
<tr align="center" style="background-color:#CFF"><br />
<td>Sl No.</td>
<td>Date</td>
<td>Item</td>
<td>Amount</td>
<td>Due</td>
<td>Action</td>
</tr>';

while($rqp=mysql_fetch_array($sqp))
{
$r++;
$idR=$rqp['sl'];
echo '
<tr align="center">
<td>'.$r.'</td>
<td>'.$rqp['day'].'-'.$rqp['month'].'-'.$rqp['year'].'</td>
<td>'.$rqp['item'].'</td>
<td>'.$p=$rqp['amount'].'</td>
<td>'.$pd=$rqp['due'].'</td>';
if($rarow['type']=="First Admin")
{echo '<td><img src="images/block.png" /></a></td>';}
else {
echo '<td><a href="report2.php?rt='.$uname.'&i='.$id.'&sl='.$idR.'&del=y"><img src="images/delete.gif" /></a>
<a href="report2.php?rt='.$uname.'&i='.$id.'&sl='.$idR.'&u=y&stype='.$stype.'"><img src="images/upd.png"/></a></td>';
}$p1=$p1+$p;
$pd1=$pd1+$pd;
$p=0;
$pd=0;

}
echo '<tr align="center" style="background-color:#CFF">
<td colspan="3">Total</td>
<td>'.$p1.'</td>
<td>'.$pd1.'</td>
</tr>
<tr align="center" style="background-color:#CFF">
<td colspan="3">Previous</td>
<td>'.$prt.'</td>
<td>'.$prd.'</td>
</tr>
<tr align="center" style="background-color:#CFF">
<td colspan="3">NET</td>
<td>'.($nt=$p1+$prt).'</td>
<td>'.($nd=$pd1+$prd).'</td>
</tr>


</table>
<br />';
 echo '<a href="report2.php?rt='.$uname.'&i='.$id.'&rr='.$r.'&stype='.$stype.'&prt='.$nt.'&prd='.$nd.'"><p><img src="images/more.png" /></p></a>'; 
echo '
		</div>
		  </div>
	<div class="cleaner"></div>
</div>
</div>
<div id="tooplate_footer_wrapper">

	<div id="tooplate_footer">
		<p>Copyright © 2048 <a href="#"> Shamim Shikhya Poribar</a> Developed and managed by: <a href="http://facebook.com/dedar.mithu">Dedar Hossain</a>
        </p>

		<p>&nbsp;</p>
</div>
	<div class="cleaner"></div>
</div>
</div>
</div>
</body>
</html>
';
exit;}
	}




/////////////////////////////////////////////////////normal//////////////////////////////////////////
	
	
	
	echo '<div>
    <h1>'. $stype.' report</h1>
  <img src="images/section-shadow.png" width="900px" />
     <p class="dedar1">Transaction type : '. $ttype.' </p>
 <p class="dedar1"> Report Date :  '.$date.' '.$month.' '.$year.' </p>
  </div>
  <p>';
  //////////////////////////////  NOT Store //////////////////////////
if(!($stype=="Store"))
			{ 
if(!(($date&&$month&&$year)==NULL))
{ 

$sqd=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='$stype' AND day='$date' AND month='$month' AND year='$year' ORDER BY sl DESC LIMIT $r,$lt");
$rqd=mysql_num_rows($sqd);
$rqm=1;
$rqy=1;
}
if(($date==NULL)&&($month&&$year)==!NULL)
{
		if($rarow['type']=="First Admin")
			 {$arc_mage='<div style="float:left;width:30%;padding: 3 5 0 3"><img src="images/robot.gif"></div><div style="float:left;
width:65%;padding: 30 5 0 1"><h3>You are First Admin.You can`t Access This Page.Take proper permission & come again.<br /></h3></div>';
$link='index2.php?rt='.$uname.'';
include("noti.php");

				 exit;}
	

$sqm=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='$stype' AND month='$month' AND year='$year' ORDER BY sl DESC LIMIT $r,$lt");
$rqm=mysql_num_rows($sqm);
$rqy=1;
$rqd=1;
}
if(($date==NULL) && ($month==NULL)&&($year==!NULL))
{
	
		if($rarow['type']=="First Admin")
			 {$arc_mage='<div style="float:left;width:30%;padding: 3 5 0 3"><img src="images/robot.gif"></div><div style="float:left;
width:65%;padding: 3 5 0 1"><h3>You are First Admin.You can`t Access This Page.Take proper permission & come again.<br /></h3></div>';
$link='index2.php?rt='.$uname.'';
include("noti.php");

				 exit;}
		
$sqy=mysql_query("SELECT*FROM statement WHERE type='$ttype' AND stype='$stype' AND year='$year'  ORDER BY sl DESC LIMIT $r,$lt");
$rqy=mysql_num_rows($sqy);
$rqd=1;
$rqm=1;

}

if(($rqd==NULL)||($rqm==NULL)||($rqy==NULL))
{echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>No record found for your query sir.Thank you.<br /></h2></div>';
				 exit;}	
				 
 echo ' </p>
  <p>&nbsp; </p>
  <div> 
    
  <table width="950" style="color:#309;font-size:21px" border="1" cellspacing="0" >     
<tr align="center" style="background-color:#CFF"><br />
<td>Sl No.</td>
<td>Date</td>
<td>ID</td>
<td>Invoice Number</td>
<td>Paid Month</td>
<td>Amount</td>
<td>Due</td>
<td>PM</td>
<td>Note</td>
<td>Action</td>
</tr>';

 
if(!($sqd==NULL))
	{

while($rqp=mysql_fetch_array($sqd))
{
	$r++;

$idR=$rqp['invoice'];
$idd=$rqp['id'];
echo '
<tr align="center">
<td>'.$r.'</td>
<td>'.$rqp['day'].'-'.$rqp['month'].'-'.$rqp['year'].'</td>';
if($ttype=="Expense")
{echo '<td><a href="profile.php?rt='.$uname.'&r='.$idd.'&tcr=y" target="_new">'.$idd.'</a></td>';}
else{echo'<td><a href="profile.php?rt='.$uname.'&r='.$idd.'" target="_new">'.$idd.'</a></td>';}
echo '
<td>'.$rqp['invoice'].'</td>';
$smonth=$rqp['smonth'];
$tmonth=$rqp['tmonth'];
	 if($smonth==$tmonth)
      {      
  echo '<td> '.$rqp['smonth'].'-'.$rqp['year'].'</td>';
}
else{
  echo '<td> '.$rqp['smonth'].'-'.$rqp['tmonth'].'-'.$rqp['year'].'</td>';
  }

echo'
<td>'.$p=$rqp['amount'].'</td>
<td>'.$pd=$rqp['due'].'</td>
 <td>'.$rqp['item'].'</td>
    <td>'.$rqp['note'].'</td>

';
		if($rarow['type']=="Master Admin")
{
echo'

<td>
<form action="report2.php" method="post">

<input type="hidden" name="uname" id="uname" value="'.$uname.'" />
<input type="hidden" name="d" id="d" value="'.$idR.'" />
<input type="hidden" name="del" id="del" value="y" />
<input type="hidden" name="stype" id="stype" value="'.$stype.'" />
<input type="hidden" name="ttype" id="ttype" value="'.$ttype.'" />
<input type="hidden" name="date" id="date" value="'.$date.'" />
<input type="hidden" name="month" id="month" value="'.$month.'" />
<input type="hidden" name="year" id="year" value="'.$year.'" />
<input type="image" src="images/delete.gif" /></form>
</td>';}
else {
	echo'

<td><img src="images/block.png" /></td>
';
}


echo'
</tr>
';
$p1=$p1+$p;
$pd1=$pd1+$pd;
$p=0;
$pd=0;
}
}




if($sqm==!NULL)
{
while($rqp=mysql_fetch_array($sqm))
{
$r++;
$idd=$rqp['id'];

echo '
<tr align="center">
<td>'.$r.'</td>

<td>'.$rqp['day'].'-'.$rqp['month'].'-'.$rqp['year'].'</td>';
if($ttype=="Expense")
{echo '<td><a href="profile.php?rt='.$uname.'&r='.$idd.'&tcr=y" target="_new">'.$idd.'</a></td>';}
else{echo'<td><a href="profile.php?rt='.$uname.'&r='.$idd.'" target="_new">'.$idd.'</a></td>';}
echo '
<td>'.$rqp['invoice'].'</td>
';
$smonth=$rqp['smonth'];
$tmonth=$rqp['tmonth'];
	 if($smonth==$tmonth)
      {      
  echo '<td>'.$rqp['smonth'].'-'.$rqp['year'].'</td>';
}
else{
  echo '<td>'.$rqp['smonth'].'-'.$rqp['tmonth'].'-'.$rqp['year'].'</td>';
  }
  $idR=$rqp['invoice'];
  echo '<td>'.$p=$rqp['amount'].'</td>
  <td>'.$pd=$rqp['due'].'</td>
 <td>'.$rqp['item'].'</td>
    <td>'.$rqp['note'].'</td>
  <td>
  <form action="report2.php" method="post">

<input type="hidden" name="uname" id="uname" value="'.$uname.'" />
<input type="hidden" name="d" id="d" value="'.$idR.'" />
<input type="hidden" name="del" id="del" value="y" />
<input type="hidden" name="stype" id="stype" value="'.$stype.'" />
<input type="hidden" name="ttype" id="ttype" value="'.$ttype.'" />
<input type="hidden" name="date" id="date" value="'.$date.'" />
<input type="hidden" name="month" id="month" value="'.$month.'" />
<input type="hidden" name="year" id="year" value="'.$year.'" />
<input type="image" src="images/delete.gif" /></form>
</td>
</tr>
';
$p1=$p1+$p;
$pd1=$pd1+$pd;
$p=0;
$pd=0;
}
}

if($sqy==!NULL)
{
while($rqp=mysql_fetch_array($sqy))
{
$idd=$rqp['id'];
$r++;
echo '
<tr align="center">
<td>'.$r.'</td>

<td>'.$rqp['day'].'-'.$rqp['month'].'-'.$rqp['year'].'</td>';
if($ttype=="Expense")
{echo '<td><a href="tprofile.php?rt='.$uname.'&r='.$idd.'&tcr=y" target="_new">'.$idd.'</a></td>';}
else{echo'<td><a href="profile.php?rt='.$uname.'&r='.$idd.'" target="_new">'.$idd.'</a></td>';}
echo '
<td>'.$rqp['invoice'].'</td>
';
$smonth=$rqp['smonth'];
$tmonth=$rqp['tmonth'];
	 if($smonth==$tmonth)
      {      
  echo '<td>'.$rqp['smonth'].'-'.$rqp['year'].'</td>';
}
else{
  echo '<td>'.$rqp['smonth'].'-'.$rqp['tmonth'].'-'.$rqp['year'].'</td>';
  }
  $idR=$rqp['invoice'];
  echo '<td>'.$p=$rqp['amount'].'</td>
  <td>'.$pd=$rqp['due'].'</td>
  <td>'.$rqp['item'].'</td>
    <td>'.$rqp['note'].'</td>

    <td><form action="report2.php" method="post">

<input type="hidden" name="uname" id="uname" value="'.$uname.'" />
<input type="hidden" name="d" id="d" value="'.$idR.'" />
<input type="hidden" name="del" id="del" value="y" />
<input type="hidden" name="stype" id="stype" value="'.$stype.'" />
<input type="hidden" name="ttype" id="ttype" value="'.$ttype.'" />
<input type="hidden" name="date" id="date" value="'.$date.'" />
<input type="hidden" name="month" id="month" value="'.$month.'" />
<input type="hidden" name="year" id="year" value="'.$year.'" />
<input type="image" src="images/delete.gif" /></form>
</td>

</tr>
';
$p1=$p1+$p;
$pd1=$pd1+$pd;
$p=0;
$pd=0;
}
}

mysql_close($con);

echo '<tr align="center" style="background-color:#CFF">
<td colspan="5">Total</td>
<td>'.$p1.'</td>
<td>'.$pd1.'</td>
</tr>


<tr align="center" style="background-color:#CFF">
<td colspan="5">Previous</td>
<td>'.$prt.'</td>
<td>'.$prd.'</td>
</tr>
<tr align="center" style="background-color:#CFF">
<td colspan="5">NET</td>
<td>'.($nt=$p1+$prt).'</td>
<td>'.($nd=$pd1+$prd).'</td>
</tr>



</table>
<p>&nbsp;</p>
<p>&nbsp;</p>';
echo '

<form action="report2.php" method="post">
<input type="hidden" name="uname" id="uname" value="'.$uname.'" />
<input type="hidden" name="date" id="date" value="'.$date.'" />
<input type="hidden" name="month" id="month" value="'.$month.'" />
<input type="hidden" name="year" id="year" value="'.$year.'" />
<input type="hidden" name="rr" id="rr" value="'.$r.'" />
<input type="hidden" name="ttype" id="ttype" value="'.$ttype.'" />
<input type="hidden" name="stype" id="stype" value="'.$stype.'" />
<input type="hidden" name="prt" id="stype" value="'.$nt.'" />
<input type="hidden" name="prd" id="stype" value="'.$nd.'" />
<input type="submit" name="submit" value="More" style="font-size:22px" />
</form>';


	}
?>



					<!---------------------------     Store  ------------------------------>




<?php if($stype=="Store")
{
	if(!(($date&&$month&&$year)==NULL))
{ 
$sqd=mysql_query("SELECT*FROM store WHERE day='$date' AND month='$month' AND year='$year'  ORDER BY sl DESC LIMIT $r,$lt");
$rqd=mysql_num_rows($sqd);
$rqm=1;
$rqy=1;

}
	
if(($date==NULL)&&($month&&$year)==!NULL)
{$sqm=mysql_query("SELECT*FROM store WHERE month='$month' AND year='$year'  ORDER BY sl DESC LIMIT $r,$lt");
$rqm=mysql_num_rows($sqm);
$rqd=1;
$rqy=1;
}
if(($date==NULL) && ($month==NULL)&&($year==!NULL))
{$sqy=mysql_query("SELECT*FROM store WHERE year='$year'  ORDER BY sl DESC LIMIT $r,$lt");
$rqy=mysql_num_rows($sqy);
$rqm=1;
$rqd=1;
}

if(($rqd==NULL)||($rqm==NULL)||($rqy==NULL))
{echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>No record found for your query sir.Thank you.<br /></h2></div>';
				 exit;}	

 echo '<table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0" >     
<tr align="center" style="background-color:#CFF"><br />
<td>Sl No.</td>
<td>Date</td>
<td>ID</td>
<td>Item</td>
<td>Amount</td>
<td>Due</td>
<td>Action</td>

</tr>';

	 


	 
	 
if($sqd==!NULL)
{	 while($rqp=mysql_fetch_array($sqd))

{
	$r++;

$idR=$rqp['id'];
$sll=$rqp['sl'];
	echo '
<tr align="center">
<td>'.$r.'</td>
<td>'.$rqp['day'].'-'.$rqp['month'].'-'.$rqp['year'].'</td>
<td><a href="profile.php?rt='.$uname.'&r='.$idR.'" target="_new">'.$idR.' </a></td>
<td>'.$rqp['item'].'</td>
<td>'.$p=$rqp['amount'].'</td>
<td>'.$pd=$rqp['due'].'</td>';

if(!($rarow['type']=="First Admin"))
{echo '
<td>

<form action="report2.php" method="post">

<input type="hidden" name="uname" id="uname" value="'.$uname.'" />
<input type="hidden" name="sl" id="sl" value="'.$sll.'" />
<input type="hidden" name="del" id="del" value="y" />
<input type="hidden" name="stype" id="stype" value="'.$stype.'" />
<input type="hidden" name="ttype" id="ttype" value="'.$ttype.'" />
<input type="hidden" name="date" id="date" value="'.$date.'" />
<input type="hidden" name="month" id="month" value="'.$month.'" />
<input type="hidden" name="year" id="year" value="'.$year.'" />
<input type="image" src="images/delete.gif" /></form>

</td>';}

else {
	echo'

<td><img src="images/block.png" /></td>
';
}
echo'

</tr>
';
$p1=$p1+$p;
$pd1=$pd1+$pd;
$p=0;
$pd=0;
}
}


if($sqm==!NULL)
{	 while($rqp=mysql_fetch_array($sqm))

{$idR=$rqp['id'];
$sll=$rqp['sl'];

$r++;

	echo '
<tr align="center">
<td>'.$r.'</td>
<td>'.$rqp['day'].'-'.$rqp['month'].'-'.$rqp['year'].'</td>
<td><a href="profile.php?rt='.$uname.'&r='.$idR.'" target="_new">'.$idR.'</a></td>
<td>'.$rqp['item'].'</td>
<td>'.$p=$rqp['amount'].'</td>
<td>'.$pd=$rqp['due'].'</td>
<td>
<form action="report2.php" method="post">

<input type="hidden" name="uname" id="uname" value="'.$uname.'" />
<input type="hidden" name="sl" id="sl" value="'.$sll.'" />
<input type="hidden" name="del" id="del" value="y" />
<input type="hidden" name="stype" id="stype" value="'.$stype.'" />
<input type="hidden" name="ttype" id="ttype" value="'.$ttype.'" />
<input type="hidden" name="date" id="date" value="'.$date.'" />
<input type="hidden" name="month" id="month" value="'.$month.'" />
<input type="hidden" name="year" id="year" value="'.$year.'" />
<input type="image" src="images/delete.gif" /></form>
</td>
</tr>
';
$p1=$p1+$p;
$pd1=$pd1+$pd;
$p=0;
$pd=0;

}
}

if($sqy==!NULL)
{	 while($rqp=mysql_fetch_array($sqy))

{$idR=$rqp['id'];
$sll=$rqp['sl'];

$r++;

	echo '
<tr align="center">
<td>'.$r.'</td>
<td>'.$rqp['day'].'-'.$rqp['month'].'-'.$rqp['year'].'</td>
<td><a href="profile.php?rt='.$uname.'&r='.$idR.'" target="_new">'.$idR.'</a></td>
<td>'.$rqp['item'].'</td>
<td>'.$p=$rqp['amount'].'</td>
<td>'.$pd=$rqp['due'].'</td>
<td>
<form action="report2.php" method="post">

<input type="hidden" name="uname" id="uname" value="'.$uname.'" />
<input type="hidden" name="sl" id="sl" value="'.$sll.'" />
<input type="hidden" name="del" id="del" value="y" />
<input type="hidden" name="stype" id="stype" value="'.$stype.'" />
<input type="hidden" name="ttype" id="ttype" value="'.$ttype.'" />
<input type="hidden" name="date" id="date" value="'.$date.'" />
<input type="hidden" name="month" id="month" value="'.$month.'" />
<input type="hidden" name="year" id="year" value="'.$year.'" />
<input type="image" src="images/delete.gif" /></form>
</td>
</td>
</tr>
';
$p1=$p1+$p;
$pd1=$pd1+$pd;
$p=0;
$pd=0;

}
}




	 mysql_close($con);

echo '<tr align="center" style="background-color:#CFF">
<td colspan="4">Total</td>
<td>'.$p1.'</td>
<td>'.$pd1.'</td>

</tr>
<tr align="center" style="background-color:#CFF">
<td colspan="4">Previous</td>
<td>'.$prt.'</td>
<td>'.$prd.'</td>
</tr>
<tr align="center" style="background-color:#CFF">
<td colspan="4">NET</td>
<td>'.($nt=$p1+$prt).'</td>
<td>'.($nd=$pd1+$prd).'</td>
</tr>



</table>
<p>&nbsp;</p>
<p>&nbsp;</p>';
echo '

<form action="report2.php" method="post">
<input type="hidden" name="uname" id="uname" value="'.$uname.'" />
<input type="hidden" name="date" id="date" value="'.$date.'" />
<input type="hidden" name="month" id="month" value="'.$month.'" />
<input type="hidden" name="year" id="year" value="'.$year.'" />
<input type="hidden" name="rr" id="rr" value="'.$r.'" />
<input type="hidden" name="ttype" id="ttype" value="'.$ttype.'" />
<input type="hidden" name="stype" id="stype" value="'.$stype.'" />
<input type="hidden" name="prt" id="stype" value="'.$nt.'" />
<input type="hidden" name="prd" id="stype" value="'.$nd.'" />
<input type="submit" name="submit" value="More" style="font-size:22px" />
</form>';
}


?>



</div>
	
	
	
	


































				

                

		</div>



		  </div>

			

	<div class="cleaner"></div>
</div>
<div id="tooplate_footer_wrapper">

	<div id="tooplate_footer">

    	

		<p>Copyright © 2048 <a href="#"> Shamim Shikhya Poribar</a> Developed and managed by: <a href="http://facebook.com/dedar.mithu">Dedar Hossain</a>

        

        </p>

		<p>&nbsp;</p>

</div>

	<div class="cleaner"></div>

</div>

</div>

</div>

</body>

</html>