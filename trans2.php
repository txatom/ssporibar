<?php
session_start();
error_reporting("E_ALL"); 
include("dbconnection.php");
/**/
$uname=$_POST['uname'];
if($uname==NULL)
{
$uname=$_GET['uname'];	}
$dedar=$_SESSION["$uname"];
$rasqlc="SELECT*FROM admin WHERE username='$uname' AND session='$dedar' AND log='active'";
$raresultc=mysql_query($rasqlc);
$racountc=mysql_num_rows($raresultc); 
$rarow=mysql_fetch_array($raresultc);
			if($racountc==0)
	
				{
	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Stranger..... !!!! You are trying to access unethically. I can`t let you in. Take proper permission & come again.<br /></h2></div>';
				 exit;
				 }
$dt=$_POST['dt'];
$mnt=$_POST['mnt'];
$yer=$_POST['yer'];
$src=$_POST['src'];
$id=$_POST['id'];
$ttype=$_POST['ttype'];

if($src=="Extra")
{
if(!($id=="extra"))
{echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Sorry !!!! This id is not exist.</h2></div>';
exit;}
}



$smonth=$_POST['smonth'];
$tmonth=$_POST['tmonth'];
if($src=="Student")
 {$sqlst=mysql_query("SELECT id,edu FROM profile WHERE id='$id'");
 $rstcount=mysql_num_rows($sqlst);
 $rstn=mysql_fetch_array($sqlst);
 $stype= $rstn['edu'];}
if($src=="Teacher")
 {$sqlst=mysql_query("SELECT id,edu FROM tprofile WHERE id='$id'");
 $rstcount=mysql_num_rows($sqlst);
if($rstcount==0)
{echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Sorry !!!! This id is not exist.</h2></div>';
exit;}


 $rstn=mysql_fetch_array($sqlst);
 $stype= $rstn['edu'];}


 
 if($stype==NULL)
 {$stype=$src;}
 


 
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
.dedar1{color: #7F0000;font-family: 'Times New Roman', Times, serif ; font-size:20px;}
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
		  <div class="col_w900 col_w900_last">
<div style="height:310px;padding-top:80px;" align="center">
<section id="main">		 
<div style="border-bottom-width:2px;border-bottom-style:solid;border-bottom-color:#000;">
<table cellpadding="10" style="color:#309;font-size:21px">
<tr>
<td>ID</td>
<td><b>:</b></td>
<td><?php echo $id;?></td>

<td>Transaction type</td> 
<td><b>:</b></td>
<td><?php echo $ttype ?></td>

<td>Source type</td> 
<td><b>:</b></td>
<td> <?php echo $stype?></td>

<td>Month</td> 
<td><b>:</b></td>
<td><?php echo $smonth."-".$tmonth?></td>

</tr>
</table>
</div>
 

<br />
<br />
	  <form  method="post" action="invoice.php" style="color:#309;font-size:21px">

         
<table width="auto"  style="color:#309;font-size:21px">    
<?php 

if($src=="Teacher")
{
$search=mysql_query("SELECT due FROM statement WHERE id='$id'");
while($search1=mysql_fetch_array($search))
{
$p=$search1['due'];
$p1=$p1+$p;
	}
if($p1==!NULL)
{$dedar1124='warning !!!! This id have '.$p1.' tk Dues from previous transaction.if due paid then clear it from payment information of this ID by update.';}			 				 
echo '<p class="dedar1">'.$dedar1124.'</p>';

echo '<tr>
<td>Amount</td>
<td align=\"center\"><b>:</b></td>
<td><input type="text" name="am"  size="25" id="am" class="dedar12"/></td>
 <input type="hidden" name="tcr" id="tcr" value="y" >
</tr>
';
}
if(!($src=="Teacher"))
{
	$rl="SELECT*FROM parameter WHERE type='$ttype' AND stype='$stype'";			 
$rsql=mysql_query($rl);
$rcount=mysql_num_rows($rsql);

	$i=1;
	echo "<tr>";

for($a=1;$a<=$rcount;$a++)
{$rrow=mysql_fetch_array($rsql);
echo "<td>".$rrow['pm']."</td>";
echo "<td align=\"center\"><b>:</b></td>";
echo "<td style='padding-right:10px'>";
echo '
 <input type="hidden" name="b'.$i.'" id="b'.$i.'" value="'.$rrow['pm'].'" >
<input type="text" name="a'.$i.'"  size="25" id="a'.$i.'" class="dedar12"/>';



echo "</td>";
	if(($a%3==0))
	{  
   echo '</tr> ';}
   


$i++;    
 }
 }
?>
</tr>
<tr><td> Due</td>
<td align="center"><b>:</b></td>  
<td>
<input type="text" name="due" id="due" size="25" class="dedar12" /></td>
<td> Note</td>
<td align="center"><b>:</b></td>  
<td>
<textarea name="note" id="note"  class="dedar12" cols="1" rows="1"></textarea>


</td>
</tr>
   </table>      <p><br />
   
   
  
         <input type="hidden" name="uname" id="uname" value="<?php  echo $uname;?>" >
         <input type="hidden" name="ttype" id="ttype" value="<?php  echo $ttype;?>" >
         <input type="hidden" name="stype" id="stype" value="<?php  echo $stype;?>" >
         <input type="hidden" name="count" id="count" value="<?php  echo $rcount;?>" >
         <input type="hidden" name="id" id="id" value="<?php  echo  $id;?>" >
         <input type="hidden" name="smonth" id="smonth" value="<?php  echo  $smonth;?>" >
         <input type="hidden" name="tmonth" id="tmonth" value="<?php  echo  $tmonth;?>" >
         
         <input type="hidden" name="dt" id="dt" value="<?php  echo  $dt;?>" >
         <input type="hidden" name="mnt" id="mnt" value="<?php  echo  $mnt;?>" >
         <input type="hidden" name="yer" id="yer" value="<?php  echo  $yer;?>" >
          <input type="submit" name="submit" style="font-size:21px" id="submit" value="Submit" />

        </p>

	  </form>	
		    </div>
		  </div>
			<div class="cleaner"></div>
<?php  echo '<div><h2>Payment Informations for ID '.$id.'</h2>
	  <img src="images/section-shadow.png" width="900px" />
</div>';
                
$sqp=mysql_query("SELECT*FROM statement WHERE id='$id' AND stype='$stype' ORDER BY sl DESC");
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
</table><br />';
echo'	</div>';
	?>           
</div>


</section>


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













