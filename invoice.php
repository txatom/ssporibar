<?php 
session_start();
date_default_timezone_set('Asia/Dhaka');
error_reporting("E_ALL"); 	
include("dbconnection.php");
$uname=$_POST['uname'];
$dedar=$_SESSION["$uname"];
$rasqlc="SELECT*FROM admin WHERE username='$uname' and session='$dedar'";
$raresultc=mysql_query($rasqlc);
$racountc=mysql_num_rows($raresultc); 
$rarow=mysql_fetch_array($raresultc);
			if($racountc==0)
				{
	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Stranger..... !!!! You are trying to access unethically. I can`t let you in. Take proper permission & come again.<br /></h2></div>';
				 exit;
				 				 }
$tcr=$_POST['tcr'];
$ttype=$_POST['ttype'];
$stype=$_POST['stype'];	
$count=$_POST['count'];
$id=$_POST['id'];
$due=$_POST['due'];
$smonth=$_POST['smonth'];
$tmonth=$_POST['tmonth'];
$date=$_POST['dt'];
$month=$_POST['mnt'];
$year=$_POST['yer'];
$note=$_POST['note'];								 
								 
		$fp=fopen("serial.txt","r");
		$invoice1=fread($fp,1024);
		fclose($fp);
		$invoice=$invoice1+1;
		$fp=fopen("serial.txt","w");
		fwrite($fp,$invoice);
		fclose($fp);
 if($tcr=="y")
 { $sqlst=mysql_query("SELECT*FROM tprofile WHERE id='$id'");
 $rqst=mysql_fetch_array($sqlst);}
  if($tcr==!"y")
{
 $sqlst=mysql_query("SELECT*FROM profile WHERE id='$id'");
 $rqst=mysql_fetch_array($sqlst);}
  
if($ttype=="Income")
{$link="trans.php?rt=".$uname."&t=Income#main01";
	}
if($ttype=="Expense")
{$link="trans.php?rt=".$uname."&t=Expense#main01";}
 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shamim Shikhya Poribar </title>
    <link rel="stylesheet" href="css/styleinvoice.css" media="all" />
    <link rel="shortcut icon" href="images/favicon.ico"  type="image/x-icon" />
    <style>
.dedar1{color: #000;font-family: 'Times New Roman', Times, serif ; font-size:18px;}
</style>
  </head>
  <body>    
    <header class="clearfix">
      <div id="logo">
      </div>
      <h1>Shamim Shikhya poribar</h1>
<div align="center" style="margin-top:-15px"><img src="images/slogoin.png" height="57" />
<br />
<b>Invoice no : <?php echo $invoice?></b><br />     
 <?php 
	 if($smonth==$tmonth)
      {      
      echo  '<b>'.$smonth."-".$year.'</b>';
}
else{
     echo '<b>'.$smonth."  -- ".$tmonth."--".$year.'</b>';
	 }
?>
</div>
<div id="company" class="clearfix">
                <a href="<?php echo $link?>">
                <img src="images/monitor211.png" width="60%" height="60%"></a>
      </div>         
      <div id="project">
        <p>&nbsp;</p>
        <table  cellspacing="0">
        <tr><td><b>ID</b></td><td><b>:</b></td><td><b><?php echo $id?></b></td></tr>
        <tr><td><b>Name</b></td><td><b>:</b></td><td><b><?php 
		
		  if(!($id=="Extra"))
		{
		$name=$rqst['name'];
		echo $name;
		}
		  if($id=="Extra")
		{ $name="extra";
			echo $name;}
		
		?></b></td></tr>
        <?php 
		if($ttype=="Income")
		{echo
        '<tr><td><b>class</b></td><td><b>:</b></td><td><b>'.$rqst['class'].'</b></td></tr>
        <tr><td><b>Roll</b></td><td><b>:</b></td><td><b>'.$rqst['roll'].'</b></td></tr>';}?>
         <tr><td><b>Date</b></td><td><b>:</b></td><td><b><?php echo $date.'-'.$month.'-'.$year?></b></td></tr>
        </table>
      </div>

    </header>
    <main>
  

      <table cellspacing="0" border="1" style="width:100%;">
        <thead>
          <tr align="center" style="height:40px;">
            <th>DESCRIPTION</th>
            <th>Tk</th>
            <th>Paisa</th>
            <th>TOTAL (tk)</th>
          </tr>
        </thead>
        <tbody>
         <?php  
		 if(!($tcr=="y"))
		 {
for($i=1;$i<=$count;$i++)

{
 $a="a".$i;
 $p=$_POST[''.$a.''];
 $b="b".$i;
 $r=$_POST[''.$b.''];//pm value=a, name=b
 $p2=$p2+$p;
 
		if($stype=="Store")
		{
	if(!($p==NULL))
		{
		mysql_query("INSERT INTO store(`day`,`month`,`year`,`id`,`item`,`amount`,`due`,`note`) 		  	
					VALUES('$date','$month','$year','$id','$r','$p2','$due','$note')");
					
					}	
		}
					
					
					
					if(!($stype=="Store"))
		{
	if(!($p==NULL))
	{
	 mysql_query("INSERT INTO statement 		   
	(`type`,`stype`,`name`,`id`,`item`,`amount`,`due`,`invoice`,`day`,`month`,`year`,`smonth`,`tmonth`,`note`)
	VALUES('$ttype','$stype','$name','$id','$r','$p2','$due','$invoice','$date','$month','$year','$smonth','$tmonth','$note')");
	}
		}
				
					
 echo'

          <tr style="height:40px">
            <td style="padding-left:5px;">'.$r.'</td>
            <td align="right" style="padding-right:5px;">'.$p.'</td>
            <td align="right" style="padding-right:5px;">0</td>
            <td align="right" style="padding-right:5px;">'.$p.'</td>
          </tr>';
		  $p1=$p2+$p1;
		  $p2=0;
		  
}
		

		
 		}  

		 if($tcr=="y")
		 {$r="Amount";
		 $p1=$_POST['am'];
		  echo'

          <tr style="height:40px">
            <td style="padding-left:5px;">'.$r.'</td>
            <td align="right" style="padding-right:5px;">'.$p1.'</td>
            <td align="right" style="padding-right:5px;">0</td>
            <td align="right" style="padding-right:5px;">'.$p1.'</td>
          </tr>';
		   mysql_query("INSERT INTO statement 		   
	(`type`,`stype`,`name`,`id`,`item`,`amount`,`due`,`invoice`,`day`,`month`,`year`,`smonth`,`tmonth`,`note`)
	VALUES('$ttype','$stype','$name','$id','$r','$p1','$due','$invoice','$date','$month','$year','$smonth','$tmonth','$note')");
	
		  
		  
		  
		  }		  
		  
		  
		  

?>
          <tr style="height:40px">
            <td align="right" colspan="3" style="padding-right:5px;">Total</td>
            <td align="right" style="padding-right:5px;"><?php echo $p1?></td>
          </tr>
        </tbody>
      </table>    
      <p>&nbsp;</p>
      <?php if( $due==!NULL)
	  {
      echo '<h3 align="center"> you have '.$due.' tk due. Pay it quickly to avoid fine. </h3>';
}?>
  </main>
  
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
    <?php
	mysql_close($con);
	?>
   
    
    
  </body>
</html>