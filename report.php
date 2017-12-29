<?php 
date_default_timezone_set('Asia/Dhaka');
session_start();
error_reporting("E_ALL"); 
include("dbconnection.php");
$uname=$_GET['rt'];
$rty=$_GET['rty'];
$dedar=$_SESSION["$uname"];
	$rasqlc="SELECT*FROM admin WHERE username='$uname' and session='$dedar'";
	$raresultc=mysql_query($rasqlc);
	$racountc=mysql_num_rows($raresultc); 
	$rarow=mysql_fetch_array($raresultc);
			if($racountc==0)
				{
$arc_mage='<div style="float:left;width:30%;padding: 3 5 0 3"><img src="images/robot.gif"></div><div style="float:left;
width:65%;padding: 3 5 0 1"><h3>Stranger !!!! You are trying to access unethically.I can`t let you in.Take proper permission & come again.<br /></h3></div>';
$link='index.php';
include("noti.php");
				 exit;
				 }
				 
				 
	
		if(($rarow['type']=="First Admin")&&(!($rty=="d")))
			 {$arc_mage='<div style="float:left;width:30%;padding: 3 5 0 3"><img src="images/robot.gif"></div><div style="float:left;
width:65%;padding: 3 5 0 1"><h2>You are First Admin.You can`t Access This Page.Take proper permission & come again.<br /></h2></div>';
$link='index2.php?rt='.$uname.'';
include("noti.php");

				 exit;}
			 
				 
/*				 
				 
$del=$_GET['d'];
if(!($del==NULL))
{mysql_query("DELETE FROM statement WHERE invoice='$del'");
echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>I success fully executed sir. I Delete The Invoice has  Number '.$del.' from my Database. see report again.</h2> <br /><h1><a href="report.php?rt='.$uname.'">Click here</a></h1></div>';
 exit;
}

$dels=$_GET['ds'];
if(!($dels==NULL))
{mysql_query("DELETE FROM store WHERE id='$dels'");
echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>I success fully executed sir. I Delete The data has  Number '.$dels.' from my store Database. see report again.</h2> <br /><h1><a href="report.php?rt='.$uname.'">Click here</a></h1></div>';
 exit;
}
*/

$date=date("j");
$year=date("Y");
$month=date("F");
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
.dedar1{color: #606 ;font-family: 'Times New Roman', Times, serif ; font-size:21px;}
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
<form  method="post" action="report2.php">
<div >
    <h1>View report</h1>
  <img src="images/section-shadow.png" width="900px" /></div>

		<table width="526" height="179" style="color:#309;font-size:21px">     
         <tr>
      <td width="147" height="29">Transaction Type</td>
      <td width="28"  align="center"><b>:</b></td>
      <td width="335">
      <input type="hidden" name="uname" id="uname" value="<?php echo $uname?>"  />
      <select name="ttype" id="type" class="dedar12">
        <option>Income</option>
        <option>Expense</option>
        <option>All</option>
        </select>
  </td> 
  </tr>
            <tr>
      <td>Source Type</td>
      <td  align="center"><b>:</b></td>
      <td>
      <select name="stype" id="stype" class="dedar12">
        <option>School</option>
        <option>Coaching</option>
        <option>Madrasha</option>
         <option>Store</option>
         <option>Extra</option>
         <option>All</option>
        </select>

  </td> 

  </tr>
  <tr>
      <td> report date</td>
      <td  align="center"><p><b>:</b></p></td>
      <td>
           <p>
        <?php   
           if($rty==d)
           {
             echo ' <select name="date" id="date" class="dedar12">
               <option>'.$date.'</option>';
              for($i=1;$i<=31;$i++){
	    	  echo "<option>".$i."</option>";}
			  echo '</select>';
             }
           if(($rty==d)||($rty==m))
             {
             echo '<select name="month" id="month"class="dedar12">
               
               <option>'.$month.'</option>
               
               <option> </option>
               
               <option>January</option>
               
               <option>February</option>
               
               <option>March</option>
               
               <option>April</option>
               
               <option>May</option>
               
               <option>June</option>
               
               <option>July</option>
               
               <option>August</option>
               
               <option>September</option>
               
               <option>October</option>
               
               <option>November</option>
               
               <option>December</option>
               
             </select>';
             }
              
           if(($rty==d)||($rty==m)||($rty==y))
           {
             
            echo ' <select name="year" id="year" class="dedar12">          
               <option>'.$year.'</option>';
			 for($y=1;$y<=50;$y++)
			 {echo '<option>'.($year-$y).' </option>';}  
			   
              /* <option>'.($year+1).' </option>
               <option>'.($year+2).'</option> */              
            echo '</select>';
             }?>
           </p></td> 

  </tr>





     

  </table>

      <p>&nbsp;</p>

      <p>
        
<input type="submit" name="submit" id="submit" style="font-size:22px" value="Submit" />

      </p>

      <p>&nbsp;</p>

      <p>&nbsp;</p>

      <p>&nbsp;</p>

      <p>&nbsp;</p>

</form>



































				

                

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