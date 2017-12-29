<?php 
date_default_timezone_set('Asia/Dhaka');
session_start();
error_reporting("E_ALL"); 
include("dbconnection.php");
$uname=$_GET['rt'];
if($uname==NULL)
{
	$uname=$_POST['rt'];

	}
$dedar=$_SESSION["$uname"];
	$rasqlc="SELECT*FROM admin WHERE username='$uname' AND session='$dedar' AND log='active'";
	$raresultc=mysql_query($rasqlc);
	$racountc=mysql_num_rows($raresultc); 
	
			if($racountc==0)
				{
	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Stranger....!!!! You are trying to access unethically. I can`t let you in. Take proper permission & come again.<br /></h2></div>';
				 exit;
				 }
$date=date("j");
$year=date("Y");
$month=date("F");
			  $d0="January";
              $d1="February";
              $d2="March";
			  $d3="April";
              $d4="May";
              $d5="June";
              $d6="July";
              $d7="August";
              $d8="September";
              $d9="October";
              $d10="November";
              $d11="December";

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
<link rel="shortcut icon" href="images/favicon.ico"  type="image/x-icon" />
	<script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
	<script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
    	<script type="text/javascript"> 
		jQuery(document).ready(function(){
			$('#id2').autocomplete({source:'searchid.php', minLength:1});
		});
	</script>  
    <!-- JavaScript Includes -->
			<link rel="stylesheet" href="jquery/css/smoothness/jquery-ui-1.8.2.custom.css" /> 
<style>
.dedar1{color:#FFF;font-family: 'Times New Roman', Times, serif ; font-size:18px;}
<!--
	        /* style the auto-complete response */
	        li.ui-menu-item { font-size:16px !important; color:#000; }
	-->
	.object_error{
	background-color:#F00;}
.object_ok{
	background-color:#0C0;}
</style>


<link rel="stylesheet" type="text/css" href="test/tcal.css" />
	<script type="text/javascript" src="test/tcal.js"></script> 
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
<div id="tooplate_main">
		  <p><!-- end of tooplate_menu -->
			  <img src="images/shadow.png" width="100%"/></p>
<?php
$ex=$_GET['ex'];
//<!-- end of forever header --><!-- end of middle -->
if(isset($_POST['submitx']))
{$id=$_POST['id2'];
 $sqlst=mysql_query("SELECT*FROM profile WHERE id='$id'");
 $rqst=mysql_fetch_array($sqlst);
 $name=$rqst['name'];
 $stype=$rqst['edu']; 

		mysql_query("INSERT INTO presence(`id`,`name`,`stype`,`pres`,`day`,`month`,`year`) 		  	
					VALUES('$id','$name','$stype','1','$date','$month','$year')");	

echo '<div style="background-color:#FF0"><p style="font-size:21px; color:#000">Presence Added</p></div>';


}

   if (($ex==NULL))
{
	
		echo' 
	
	<div style="padding-top:10px">
	  <div style="height:400px;width:auto;padding:10px 20px 5px 20px;"  align="center">
	    <div style="border-bottom:1px solid #F6F">
<h3>Add Students Presence</h3></div>
<br /><br />
		 <form  method="post" action="" style="font-size:16px;color:#000;">
         <input type="hidden" name="uname" id="uname" value="'.$uname.'" >
		<table width="auto" style="color:#309;font-size:21px"> 
          </tr>
 
        
<tr>
      
      <td >Student ID</td>
      
      <td  align="center"><b>:</b></td>
      
      <td ><input type="text" name="id2" id="id2"  class="dedar12" placeholder="Type Student Name"/>
        
        </td>

      
    </tr>

      </table>	

        <p><br />

          <input type="submit" name="submitx" style="font-size:22px" id="submit" value="Submit" />

        </p>

	  </form>
	  
	 </div></div> 
	  
	  ';
	}
   if (($ex==21))
{
 echo '
 
 	


 
 <div style="padding-top:10px">
	  <div style="height:400px;width:auto;padding:10px 20px 5px 20px;"  align="center">
	    <div style="border-bottom:1px solid #F6F">
<h3>Students present History</h3></div>
<br /><br />
						  <form method="post" action="prs.php?ex=2">
	<input type="hidden" name="uname" id="uname" value="'.$uname.'" />
    <table width="auto" style="color:#309;font-size:21px">     
         <tr>
		 <td>Date</td>
		 <td>:</td>
		 <td><input type="text" name="dater" class="tcal" style=" width:180px;" /></td>
		 </tr>
		 <tr>
      <td>Source Type</td>
      <td  align="center"><b>:</b></td>
      <td>
      <select name="stype" id="stype" class="dedar12">
	   	<option></option>
        <option>School</option>
        <option>Coaching</option>
        <option>Madrasha</option>
	    <option>All</option>
	
        </select>
  </td> 
  </tr>                   
                              <tr>
      <td>Class </td>
      <td  align="center"><b>:</b></td>
      <td>';
				  echo ' <select name="cls" id="cls" class="dedar12">
				  <option></option>
				  <option>All</option>			  
				  <option>n0</option>
                  <option>na</option>
      			  <option>nb</option>
                  <option>nc</option>
                  <option>nd</option>
                  <option>kg1</option>
                  <option>kg2</option>
                  <option>kg3</option>
				  <option>kg4</option>';
              for($i=1;$i<=12;$i++){
	    	  echo "<option>".$i."</option>";
			  if($i<11)
			  {
			  echo "<option>".$i."m</option>";}
			  }
			  echo '</select></td>  ';
			  echo '
      </tr>';
             /*echo '             <tr>
                            <td>Date</td>
      <td  align="center"><b>:</b></td>
                  <td>';
               echo '<select name="date" id="date" class="dedar12">
			   <option></option>
               <option>'.$date.'</option>';
              for($i=1;$i<=31;$i++){
	    	  echo "<option>".$i."</option>";}
			  echo '</select></td>  ';
			  echo'
                          </tr>
    
	<tr>
                            <td>Month </td>
      <td  align="center"><b>:</b></td>
      <td>
	  <select name="month" id="month"class="dedar12">
							   <option></option>';
    		 for($n=0;$n<=11;$n++)
			 {
				$p="d".$n;
				$p1= $$p;
				echo'<option>'.$p1.'</option>';
			 }
             echo '</select></td>
</tr>
 <tr>
                            <td>Year </td>
      <td  align="center"><b>:</b></td>
      <td>
   <select name="year" id="year" class="dedar12">
               <option>'.$year.'</option>';
			 for($y=1;$y<=50;$y++)
			 {echo '<option>'.($year-$y).' </option>';}  
              /* <option>'.($year+1).' </option>
               <option>'.($year+2).'</option> */              
            echo '</select>
            </td></tr>
    </table>	
        <p><br />
         <input type="hidden" name="rt" id="rt" value="'.$uname.'" >
          <input type="submit" name="submit1" style="font-size:22px" id="submit1" value="Submit" />
        </p>
	  </form>
';
}



if($ex==2)
{

	$dater=$_POST['dater'];
 	$dater=explode('/',$dater);
	$datek=$dater[0];
	$month1=$dater[1];
	$year1=$dater[2];

/*
$date=$_POST['date'];
$year=$_POST['year'];
$month=$_POST['month'];*/
$stype=$_POST['stype'];
if ($stype==NULL)
{$stype=$_GET['stype'];}
$r=$_POST['rr'];
if($r==NULL)
{$r=$_GET['rr'];}
if($r==NULL)
{$r=1;}
$cls=$_POST['cls'];
if(!($stype=="All"))	
{ $idclschk=mysql_query("SELECT*FROM profile WHERE class='$cls' AND edu='$stype' ORDER BY id ASC");
	$count1=mysql_num_rows($idclschk);
	echo "<div style=\"border-bottom:1px solid #F6F;padding-bottom:5px\"><h3> Present Report For Class : ".$cls." - " .$stype. " </h3>
	
	<h4> Report Date :".$month.'-'.$year."</h4><br/>
	
	</div><br/>";
	echo "<h4> Total Students :".$count1."</h4><br/>";
if(($date==NULL) && ($month==NULL)&&($year==!NULL))	
{$alrsch2=1;}	
	if($alrsch2==NULL)
{				echo '<table width="90%" style="color:#309;font-size:21px" border="1" cellspacing="0"> 
<tr align="center" style="background-color:#CFF" align="center">
<td style="width:3%">
Sl no.</td>
<td style="width:10%">Name</td>';

for($d=1;$d<=31;$d++)
{ echo '<td style="width:3%">'.$d.'</td>';

	}


echo '<td> Total</td></tr>';

	while ($rtss=mysql_fetch_array($idclschk))
	{
	$id=$rtss['id'];
	$name=$rtss['name'];
	
	echo'	<tr align="center">
<td>'.$r.'</td>

<td><a href="profile.php?rt='.$uname.'&r='.$id.'">'.$name.'</a></td>';


for($dt=1;$dt<=31;$dt++)
{
	$alrsch1=mysql_query("SELECT*FROM presence WHERE id='$id' AND stype='$stype' AND day='$dt' AND month='$month1' AND year='$year1'");
	$rtss1=mysql_fetch_array($alrsch1);
	$p1=$rtss1['pres'];
	if(($dt<=$date)){
	if($p1==NULL)
				{		$p1=".";}
				
				else {$p1="P";
				$cpt=$cpt+1;
	
				}
				
				}
						
	echo '	<td style="width:3%">'.$p1.'</td>
			
	
	';

	}


/*
if(!(($date&&$month&&$year)==NULL))
{
	$alrsch1=mysql_query("SELECT*FROM presence WHERE id='$id' AND stype='$stype' AND  day='$date' AND month='$month' AND year='$year'");
	}
	
if(($date==NULL)&&($month&&$year)==!NULL)
{$alrsch1=mysql_query("SELECT*FROM presence WHERE id='$id' AND stype='$stype' AND month='$month' AND year='$year'");}	
	$rtss1=mysql_fetch_array($alrsch1);
	$p1=$rtss1['pres'];
	$p=$p+$p1;
	$p1=0;
echo '<td>'.$rtss1['day'].'-'.$rtss1['month'].'-'.$rtss1['year'].'</td>';
		
	if($p==NULL)
	{	$t++;
		echo '<td>0</td>';
}
else {	echo '<td>'.$p.'</td>';}
*/
	echo '<td>'.$cpt.'</td></tr>';
	$r++;
	//$p=0;
	$cpt=0;
}
echo '</table>';
/*$ttt=$count1-$t;
echo '<br/> <h3> Total present - '.$ttt.' Student. Rest - '.$t;
	 */ ?>
    <p>&nbsp;</p>
<!--<a href="landing-report.php?<php echo 'd='.$date.'&m='.$month.'&y='.$year.'&tp=Income&sp='.$stype.'&rr='.$r.'&cls='.$cls?> " onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=100%,height=auto,directories=no,location=no');return false;" rel="nofollow">
<h3>Print This Page</h3>
</a> -->   
      <?php
   }
/*	if($alrsch2==!NULL)
{
echo '<table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0"> 
<tr align="center" style="background-color:#CFF" align="center">
<td>Sl no.</td>
<td>Name</td>
<td>JAN</td>
<td>FEB</td>
<td>MAR</td>
<td>APR</td>
<td>MAY</td>
<td>JUN</td>
<td>JUL</td>
<td>AUG</td>
<td>SEP</td>
<td>OCT</td>
<td>NOV</td>
<td>DEC</td>
</tr>';
	while ($rtss=mysql_fetch_array($idclschk))
	{
	$id=$rtss['id'];
	$name=$rtss['name'];
	echo'	<tr align="center">
<td>'.$r.'</td>
<td><a href="profile.php?rt='.$uname.'&r='.$id.'">'.$name.'</a></td>';
	    		 for($n=0;$n<=11;$n++)
			 {
				$p="d".$n;
				$p1= $$p;
				
	$alrscp3=mysql_query("SELECT*FROM presence WHERE id='$id' AND  stype='$stype' AND month='$p1' AND year='$year'");
	$count2=mysql_num_rows($alrsc3);
	 for($m=0;$m<=$count2;$m++)
	{	
	$rtss12=mysql_fetch_array($alrscp3);
	$p2=$rtss12['pres'];
	$p7=$p+$p2;
	$p2=0;
	}
	if($p7==0)
	{		
	echo '<td style="color:#F00">'.$p7.'</td>';			 
}
	if($p7==!0)
	{		echo '<td style="color:#C0F">'.$p7.'</td>';			 
}
	
			 }
			$r++;
}
echo '</table>';
}
  */ 
}

 	if($stype=="All")
{
	
echo '<div align="center">';
		echo '<div>
    <h1>Total report</h1>
  <img src="images/section-shadow.png" width="900px" /> <br />
     <h3 >Sections :All </h3>
 <h3> Report Date :  '.$date.' '.$month.' '.$year.' </h3>
  </div>';	
  	
	$alrsch1=mysql_query("SELECT*FROM presence WHERE stype='School'   AND day='$datek' AND month='$month1' AND year='$year1'");
	$alrsch2=mysql_query("SELECT*FROM presence WHERE stype='Coaching' AND day='$datek' AND month='$month1' AND year='$year1'");
	$alrsch3=mysql_query("SELECT*FROM presence WHERE stype='Madrasha' AND day='$datek' AND month='$month1' AND year='$year1'");

$sqlcssc=mysql_query("SELECT*FROM profile WHERE edu='School'");
$rcscountsc=mysql_num_rows($sqlcssc);
$sqlcscs=mysql_query("SELECT*FROM profile WHERE edu='Coaching'");
$rcscountcs=mysql_num_rows($sqlcscs);

$sqlcsmdr=mysql_query("SELECT*FROM profile WHERE edu='Madrasha'");
$rcscountmdr=mysql_num_rows($sqlcsmdr);
$cprs=0;$cprc=0;$cprm=0;	
			while($alrsch=mysql_fetch_array($alrsch1))
			{	$rtss1=mysql_fetch_array($alrsch1);
				$p1=$rtss1['pres'];
				if(($p1="//")||($p1="1"))
				{$cprs=$cprs+1;}
			}
	
			while($alrsch=mysql_fetch_array($alrsch2))
			{	$rtss1=mysql_fetch_array($alrsch2);
				$p1=$rtss1['pres'];
				if(($p1="//")||($p1="1"))
				{$cprc=$cprc+1;}

			}
			
			while($alrsch=mysql_fetch_array($alrsch3))
			{	$rtss1=mysql_fetch_array($alrsch3);
				$p1=$rtss1['pres'];
				if(($p1="//")||($p1="1"))
				{$cprm=$cprm+1;}
			}

 
		$cprsa=$rcscountsc-$cprs;
		$cprca=$rcscountcs-$cprc;
		$cprma=$rcscountmdr-$cprm; 
		
 	echo '<table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0"> 
		<tr align="center" style="background-color:#CFF" align="center">
			<td>Source</td>
			<td>Present</td>
			<td>Absent</td>
			</tr>
			<tr align="center">
			<td>School</td>
			<td>'.$cprs.'</td>
			<td>'.$cprsa.'</td>
			</tr>
			<tr align="center">
			<td>Coaching</td>
			<td>'.$cprc.'</td>
			<td>'.$cprca.'</td>
			</tr>
			<tr align="center">
			<td>Madrasha</td>
			<td>'.$cprm.'</td>
			<td>'.$cprma.'</td>
			</tr>

		</table>	
			';
			
	}		
			 
  }
  
?>
</div> </div> 
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








