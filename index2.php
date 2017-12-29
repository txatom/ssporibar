﻿<?php

session_start();

error_reporting("E_ALL"); 
$uname=$_GET['rt'];
	if (!($uname=="guest"))
{
include("dbconnection.php");

include("ip.php");

get_IP_address();

$IPaddress = $_SERVER['REMOTE_ADDR'];


$dedar=$_SESSION["$uname"];

$ra=$_GET['ra'];



if($ra=="active")

{

$rasqlc="SELECT*FROM admin WHERE username='$uname' AND session='$dedar' AND log='active'";

	$raresultc=mysql_query($rasqlc);

	$racountc=mysql_num_rows($raresultc); 

	$rarow=mysql_fetch_array($raresultc);

			if($racountc==1)

			{ $ip=$rarow['ip'];

			  echo "<div align='center'>

			  <br/><br/>

			  

			  <h3> Warning !!! This Account was logged in from this device :".$IPaddress.". if this is not valid, change your settings & check your contents.do you want to continue to your Admin panel. ?? (Clear Bugs recomended)</h3><br/><br/>";

              

 echo '<a href="index2.php?rt='.$uname.'"><img src="images/cntn.jpg" onmouseover="this.src=\'images/cntn2.jpg\'" onmouseout="this.src=\'images/cntn.jpg\'" "/></a><br/><br/>';

 

  echo '<a href="log-out.php?rt='.$uname.'"><img src="images/clear.jpg" onmouseover="this.src=\'images/clear2.jpg\'" onmouseout="this.src=\'images/clear.jpg\'" "/></a>';

			  echo "</div>";

			  exit;

			  

			}

	if($racountc==0)

	

				{

	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Stranger !!!! You are trying to access unethically.I can`t let you in.Take proper permission & come again.<br /></h2></div>';
				 exit;

				 }			

}



$rasqlc="SELECT*FROM admin WHERE username='$uname' AND session='$dedar' AND log='active'";

	$raresultc=mysql_query($rasqlc);

	$racountc=mysql_num_rows($raresultc); 

	$rarow=mysql_fetch_array($raresultc);

			if($racountc==0)

	

				{

	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Stranger !!!! You are trying to access unethically.I can`t let you in.Take proper permission & come again.<br /></h2></div>';
				 exit;

				 }

				 
}




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- 

	Template 2019 Pinko

    http://www.tooplate.com/view/2019-pinko

-->

<title>Shamim Shikhya Poribar</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico"  type="image/x-icon" />
<style>

.dedar1{color:#FFF;font-family: 'Times New Roman', Times, serif ; font-size:18px;}

.dedar01{
padding:5px 0 5px 0;
font-size:22px;
color: #000;
text-align:justify;
line-height:15px;
}



</style>







	<script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
<link href="css/assets/css/style.css" rel="stylesheet" />
<script src="js/moment.min.js"></script>
		<script src="js/script.js"></script> 



</head>

<body>
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

</div> <img src="images/shadow.png" width="100%"/>
			

</div> <!-- end of forever header -->

		

		<div id="tooplate_middle">			  



	

					<div class="contentdiv">

						<a href=""><img src="images/monitor21.png" height="auto" width="auto" alt="Image"/></a>


	

				


				

				

				

	    </div>

			<div id="mid_left">
						<a href=""><img src="images/monitor21.png" height="auto" width="auto" alt="Image"/></a>

                

                

		    <p>&nbsp;</p>
		    <div id="learn_more"></div>
</a>
		  </div>

            <div id="mid_right">

			  

              

                     <div id="clock" class="light">
			<div class="display">
				<div class="weekdays"></div>
				<div class="ampm"></div>
				<div class="alarm"></div>
				<div class="digits"></div>
<div style=" padding-top:15px">
                    <script type="text/javascript">
<!--

var m_names = new Array("January", "February", "March", 
"April", "May", "June", "July", "August", "September", 
"October", "November", "December");

var d = new Date();
var curr_date = d.getDate();
var curr_month = d.getMonth();
var curr_year = d.getFullYear();
//document.write(curr_date + "-" + m_names[curr_month] + "-" + curr_year);

document.write("<font color=\"black\" size =\"+1.5\">"+curr_date + "-" + m_names[curr_month] + "-" + curr_year + "<\/font>"); 




/* The last two lines above have 
to placed on a single line */

//-->
</script>
</div>
			</div>
		</div>

			</div>

			

			<div class="cleaner">
                        </div>

		</div> <!-- end of middle -->
        
        
        
        
        
        
		<div id="tooplate_main">
        <p class="dedar1">&nbsp;</p>

<p class="dedar1">&nbsp;
        
<div class="col_w900_last">

		    <div class="col_allw280 fp_service_box">

						<div class="con_tit_02"> 

						  <p>Student Corner</p>

						

              </div>

						<div style="padding-left:10px;"><a href=""><img src="images/add.png" alt="image" /></a>

			  <p class="dedar1">Add ,upadate or view student info.</p>

					  <p class="dedar1"><a href="arc_mage.php?rt=<?php echo $uname?>&pr=st"><img src="images/go.png" /></a></p>



                        <p class="dedar1">&nbsp;</p>

						<p class="dedar1">&nbsp; </p>

                        </div>

		    </div>

					

	  		<div class="col_allw280 fp_service_box">

						<div class="con_tit_02">

						  <p>Transaction </p>

			  </div>

						<div style="padding-left:10px;">

                        

                        <a href=""><img src="images/tran.png" alt="image" /></a>

			  <p><span class="dedar1">Add ,upadate or view Transaction info.</span></p>

<p class="dedar1"><a href="trans.php?rt=<?php echo $uname ?>"><img src="images/go.png"   /></a></p>

<p class="dedar1">&nbsp;</p>

<p class="dedar1">&nbsp;					    </p></div>





<p class="dedar1">&nbsp;</p>

<p class="dedar1">&nbsp;

			</div>
            

	                    
	<?php
	 if($rarow['type']==("Master Admin")|| ("guest"))
					{echo '				

	<div class="col_allw280 fp_service_box col_last">

						<div class="con_tit_02">

						  <p>View Report</p>

			</div>

                        <div style="padding-left:10px;">

					  <a href=""><img src="images/onebit_16.png" alt="image" /></a>
<table width="auto">
<tr>
<td width="28"><img src="images/arrow.png" alt="image" width="50%" height="30%" />
</td>
<td>
<a href="report.php?rt='.$uname.'&&rty=d"><p class="dedar1"> Daily</p></a>
</td>
</tr>

<tr>
<td width="28"><img src="images/arrow.png" alt="image" width="50%" height="30%" />
</td>
<td>
<a href="report.php?rt='.$uname.'&&rty=m"><p class="dedar1"> Monthly</p></a>
</td>
</tr>

<tr>
<td width="28"><img src="images/arrow.png" alt="image" width="50%" height="30%" />
</td>
<td>
<a href="report.php?rt='.$uname.'&&rty=y"><p class="dedar1"> yearly</p></a>
</td>
</tr>

</table>
        </div>



						

			</div>

			';}
			else {echo '<div class="col_allw280 fp_service_box col_last" align="center">
			<div style="padding:20px 0 0 50px;">
			<img src="images/lock.png"/></div>
			</div>';}
			
			
			
			?>		

					<div class="cleaner h60"></div>

<?php
	 if($rarow['type']==("Master Admin")|| ("guest"))
					{echo '				

	  		<div class="col_allw280 fp_service_box">

						<div class="con_tit_02">Administration Settings</div>

                        <div style="padding-left:10px;">

						<a href=""><img src="images/admin.png" alt="image" /></a>

						<p class="dedar1">Add,Change or Update user or admin info.</p>

					<a href="arc_mage.php?rt='.$uname.'&pr=ad"><img src="images/go.png" /></a></p>


						<p class="dedar1">&nbsp;</p>

						 <p class="dedar1">&nbsp;</p>

              </div>

			</div>
            
                    <div class="col_allw280 fp_service_box">

						<div class="con_tit_02">Transaction Settings</div>

                        <div style="padding-left:10px;">

						<a href=""><img src="images/se.png" alt="image" /></a>

						<p class="dedar1">Add,Change or Update Transaction info.</p>
					<p class="dedar1"><a href="trset.php?rt='.$uname.'"><img src="images/go.png" /></a></p>
                    
						<p class="dedar1">&nbsp;</p>

						<p class="dedar1">&nbsp;</p>

                      </div>

					</div>	  		
					
					
					<div class="col_allw280 fp_service_box">

						<div class="con_tit_02">Teacher Point</div>

                        <div style="padding-left:10px;">

						<a href=""><img src="images/teacher.png" alt="image" /></a>

						<p class="dedar1">Add,Change or Update Teacher info.</p>

					<a href="teacher.php?rt='.$uname.'&&fl=tcr"><img src="images/go.png" /></a></p>


						<p class="dedar1">&nbsp;</p>

						 <p class="dedar1">&nbsp;</p>

              </div>

			</div>

					
';}


else {echo '<div class="col_allw280 fp_service_box">

									<div style="padding:20px 0 0 50px;">
		<img src="images/lock.png"/></div>


			</div>
			<div class="col_allw280 fp_service_box">

									<div style="padding:20px 0 0 50px;">
		<img src="images/lock.png"/></div>


			</div>
			<div class="col_allw280 fp_service_box col_last" align="center">
			<div style="padding:20px 0 0 50px;">
			<img src="images/lock.png"/></div>
			</div>';
			}
			
			
?>	



	  		<div class="cleaner h60"></div>

         <div class="col_allw280 fp_service_box">

						<div class="con_tit_02"> 

						  <p>Result</p>

						

              </div>

						<div style="padding-left:10px;"><a href=""><img src="images/rslt.png" alt="image" /></a>

			  <p class="dedar1">Add ,upadate or view student's result.</p>

					  <p class="dedar1"><a href="rslt.php?rt=<?php echo $uname?>"><img src="images/go.png" /></a></p>



                        <p class="dedar1">&nbsp;</p>

						<p class="dedar1">&nbsp; </p>

                        </div>

		    </div>  

		  </div>

			

			<div class="cleaner"></div>

	  </div> <!-- end of main -->

	

	</div> <!-- end of fp wrapper -->



<div id="tooplate_footer_wrapper">

	<div id="tooplate_footer">

    	

		Copyright © 2048 <a href="#"> Shamim Shikhya Poribar</a> Developed and managed by: <a href="http://facebook.com/dedar.mithu">Dedar Hossain</a>

        

	</div>

	<div class="cleaner"></div>

</div>

</div> <!-- end of fp 100% wrapper -->

</div>
</body>

</html>