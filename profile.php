<?php

 session_start();

error_reporting("E_ALL"); 

include("dbconnection.php");

$tcr=$_GET['tcr'];

if($tcr==NULL)

{$tcr=$_POST['tcr'];}



$id=$_GET['r'];
if($id==NULL)

{$id=$_POST['r'];}


$uname=$_GET['rt'];

if($uname==NULL)
{$uname=$_POST['uname'];
}


$dedar=$_SESSION["$uname"];





include("dbconnection.php");

$rasqlc="SELECT*FROM admin WHERE username='$uname' and session='$dedar'";

	$raresultc=mysql_query($rasqlc);

	$racountc=mysql_num_rows($raresultc); 

			if($racountc==0)

	

				{
					
$arc_mage='<div style="float:left;width:30%;padding: 3 5 0 3"><img src="images/robot.gif"></div><div style="float:left;
width:65%;padding: 3 5 0 1"><h3>Stranger !!!! You are trying to access unethically.I can`t let you in.Take proper permission & come again.<br /></h3></div>';
$link='index.php';
include("noti.php");

	
				 exit;

				 }
/*$del=$_GET['d'];
if(!($del==NULL))
{mysql_query("DELETE FROM statement WHERE invoice='$del'");
}
*/

if($tcr==NULL)
{		

	$sqlc="SELECT*FROM profile WHERE `id`='$id'";

	$resultc=mysql_query($sqlc);
	 $rstcount=mysql_num_rows($resultc);
if ($rstcount==0)
{$arc_mage='<div style="float:left;width:30%;padding: 3 5 0 3"><img src="images/robot.gif"></div><div style="float:left;
width:65%;padding: 3 5 0 1"><h2>Something wrong sir !!!..<br />I could not found This ID in my database.<br />so particular data I can`t execute.</h2>
</div>';
$link='student.php?rt='.$uname.'';
include("noti.php");

exit;}
}

if(!($tcr==NULL))
{


	$sqlc="SELECT*FROM tprofile WHERE `id`='$id'";

	$resultc=mysql_query($sqlc);
	 $rstcount=mysql_num_rows($resultc);
if ($rstcount==0)
{echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Something wrong sir !!!..<br />I could not found This ID in my database.<br />so particular data I can`t execute.</h2>
<h1>Please Go Back</h1>

</div>';
exit;}

}



	
	
	
  

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

.dedar1{color:#339;font-family: 'Times New Roman', Times, serif ; font-size:22px;}



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
<?php if($tcr==NULL)
{
echo ' <div  align="center"> <h2>Student Profile</h2>  <img src="images/section-shadow.png" width="900px" /></div>
';}
if(!($tcr==NULL))
{echo ' <div  align="center"> <h2>Teacher Profile</h2>  <img src="images/section-shadow.png" width="900px" /></div>
';}
	  $rarow=mysql_fetch_array($resultc);

?>



 <br/> 
<div  style="border-bottom:1px #06F solid;" align="center"><h3>Personal Information</h3></div>
<div style="float:left;padding:30px 15px 30px 30px;"><img src="stimage/<?php echo $rarow['image']?>" height="80%" width="80%" class="left" /></div>

<div style="width:100%;padding:10px 10px 10px 30px;border-left:1px; border-left-color: #3FF; border-left-style:solid;" align="center">

 

<table width="600" style="color:#63C;font-size:21px">     
<?php

	   

 echo '

<tr>

      <td width="169">Name</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$rarow['name'].'</p></td>

    </tr>
    <tr>

      <td width="169">Father`s Name</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$rarow['fname'].'</p></td>

    </tr>
    <tr>

      <td width="169">Mother`s Name</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$rarow['mname'].'</p></td>

    </tr>';
	if($tcr==NULL)
	{
	echo'
    <tr>

      <td width="169">Class</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$rarow['class'].'</p></td>

    </tr>
    <tr>

      <td width="169">Roll</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$rarow['roll'].'</p></td>

    </tr>';
	}
	$stype=$rarow['edu'];
	echo' 
    <tr>

      <td width="169">Mobile</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$rarow['mobile'].'</p></td>

    </tr>
    <tr>

      <td width="169">E-mail</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$rarow['email'].'</p></td>

    </tr>
    <tr>

      <td width="169">Address</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$rarow['adrs'].'</p></td>

    </tr>
    <tr>

      <td width="169">Education</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$stype.'</p></td>

    </tr>';
	if(!($tcr==NULL))
{

	echo '<tr>

      <td width="169">skill</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$rarow['skl'].'</p></td>

    </tr>
	<tr>

      <td width="169">Experience</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <p class="dedar1">'.$rarow['exp'].'</p></td>

    </tr>';}
	
	?>
  </table>

</div>
<div align="center"><br/><br/> 	<a href="update.php?r=<?php echo $id?>&rt=<?php echo $uname?>"><img src="images/update.png" /></a><br /></div>
<br />

<div> 
<p>&nbsp;</p>
<?php 
if($tcr==NULL)
{
echo '<h2>To See Payment information. <a href="report2.php?rt='.$uname.'&i='.$id.'&stype='.$stype.'">Click here</a></h2>';
echo '<h2>To See Store information. <a href="report2.php?rt='.$uname.'&i='.$id.'&stype=Store">Click here</a></h2>';
$year=date("Y");
echo '<h2>To See result. <a href="strslt.php?rt='.$uname.'&r='.$id.'&s='.$stype.'&yr='.$year.'">Click here</a></h2>';

}
if(!($tcr==NULL))
{

echo '<h2>To See Payment information. <a href="report2.php?rt='.$uname.'&i='.$id.'&stype='.$stype.'">Click here</a></h2>';
}
?>


<!--?php
if($tcr==NULL)
{
if($r==NULL)
{$r=0;}
$lt=$r+50;
}
if(!($tcr==NULL))
{
if($r==NULL)
{$r=0;}
$lt=$r+100;
}


$sqp=mysql_query("SELECT*FROM statement WHERE id='$id' LIMIT $r,$lt");
$rt=mysql_num_rows($sqp);
if($rt==0)
{
	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div>
	<div style="float:left;width:600px;padding: 30 5 0 10"><h2>No record found for your query sir.Thank you.<br /></h2></div>';
				 exit;
}	


echo '<table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0" >     
<tr align="center" style="background-color:#CFF"><br />
<td>Date of payment</td>
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
else{
  echo '<td>'.$rqp['smonth'].'-'.$rqp['tmonth'].'-'.$rqp['year'].'</td>';

	 }

$idR=$rqp['invoice'];
echo '<td>'.$p=$rqp['amount'].'</td>
<td>'.$pd=$rqp['due'].'</td>
<td><a href="profile.php?rt='.$uname.'&d='.$idR.'&r='.$id.'"><img src="images/delete.gif" /></a></td>

</tr>
';
$p1=$p1+$p;
$pd1=$pd1+$pd;
$p=0;
$pd=0;
}

mysql_close($con);

echo '<tr align="center" style="background-color:#CFF">
<td colspan="3">Total</td>
<td>'.$p1.'</td>
<td>'.$pd1.'</td>
</tr></table>';
if($tcr==NULL)
{
 echo '<a href="profile.php?rt='.$uname.'&rr='.$r.'"><p><img src="images/more.png" /></p></a>'; }
if(!($tcr==NULL))
{ echo '<a href="profile.php?rt='.$uname.'&rr='.$r.'&tcr=y"><p><img src="images/more.png" /></p></a>';}

echo '<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>';


//////////////////store information//////////////////////////////////


if($tcr==NULL)
{echo '<div style="border-bottom:1px; border-bottom-color: #06F; border-bottom-style:solid;" align="center"><h3>Store Information</h3></div>';

$sqpt=mysql_query("SELECT*FROM store WHERE id='$id' LIMIT $r,$lt");
$rtt=mysql_num_rows($sqpt);
if($rtt==0)
{
	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div>
	<div style="float:left;width:600px;padding: 30 5 0 10"><h2>No record found for your query sir.Thank you.<br /></h2></div>';
				 exit;
}	

echo '<table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0" >     
<tr align="center" style="background-color:#CFF"><br />
<td>Date</td>
<td>ID</td>
<td>item</td>
<td>Amount</td>
<td>Due</td>
<td>Action</td>
</tr>';



while($rqpt=mysql_fetch_array($sqpt))
{
	$r++;
echo '
<tr align="center">
<td>'.$rqpt['day'].'-'.$rqpt['month'].'-'.$rqpt['year'].'</td>
<td>'.$rqpt['id'].'</td>';
$smonth=$rqpt['item'];
$tmonth=$rqpt['amount'];
$idR=$rqpt['id'];
echo '<td>'.$p=$rqpt['amount'].'</td>
<td>'.$pd=$rqpt['due'].'</td>
<td><a href="profile.php?rt='.$uname.'&d='.$idR.'&r='.$id.'"><img src="images/delete.gif" /></a></td>
</tr>
';
$p1=$p1+$p;
$pd1=$pd1+$pd;
$p=0;
$pd=0;
}
mysql_close($con);

echo '<tr align="center" style="background-color:#CFF">
<td colspan="3">Total</td>
<td>'.$p1.'</td>
<td>'.$pd1.'</td>
</tr></table>';


}


?>-->





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