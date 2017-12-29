<?php

session_start();

error_reporting("E_ALL"); 

include("dbconnection.php");

include("ip.php");

get_IP_address();

$IPaddress = $_SERVER['REMOTE_ADDR'];

$uname=$_GET['rt'];

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

.examplecode{

margin-bottom:1em;

}



#staticversion .hand.minute {

	-moz-transform: rotate(50deg);

    -ms-transform: rotate(50deg);

    -webkit-transform: rotate(50deg);

    transform: rotate(50deg)

    }



#staticversion .hand.second {

	-moz-transform: rotate(30deg);

    -ms-transform: rotate(30deg);

    -webkit-transform: rotate(30deg);

    transform: rotate(30deg)

    }



</style>







<link rel="stylesheet" type="text/css" href="css/css3clock.css">

<script src="js/jquery.js"></script>



</head>

<body>

<div id="fp_body">
<div id="tooplate_fp_100_wrapper">

  <div id="tooplate_fp_wrapper">

	

		<div id="tooplate_header">

			<div id="site_title">
            <a href="index2.php?rt=<?php echo $uname?>">
            <p align="right"><img src="images/logo1.png" /></p></a>
            <a href="index2.php?rt=<?php echo $uname?>">
            <p align="right">
            <img src="images/slogo.png" height="45" width="200"/></p></a></div>

         <div style="float:right;padding:10px 10px 0 0;">

        <a href="log-out.php?rt=<?php echo $uname?>"><img src="images/log-out.png" /></a></div>

			

			<div id="tooplate_menu">

					

		  </div> <!-- end of tooplate_menu -->

			<img src="images/shadow.png" width="100% height="100%""/>

		</div> <!-- end of forever header -->

		

		<div id="tooplate_middle">

			<div id="mid_slider">

				<div id="slider1" class="sliderwrapper">

	

					<div class="contentdiv">

						<a href=""><img src="images/monitor21.png" alt="Image"/></a>

					</div>

	

				

				</div>

				

				<div id="paginate-slider1" class="pagination">

				

				</div>

				

				

	    </div>

			<div id="mid_left">
<a href="#">
			  <div style="padding: 40px 0px 0px;  width:180px;">

            

              <div id="liveclock" class="outer_face">



<div class="marker oneseven"></div>

<div class="marker twoeight"></div>

<div class="marker fourten"></div>

<div class="marker fiveeleven"></div>





<div class="inner_face">



<div style="-moz-transform: rotate(341deg);" class="hand hour"></div>

<div style="-moz-transform: rotate(132deg);" class="hand minute"></div>

<div style="-moz-transform: rotate(38.604deg);" class="hand second"></div>



</div>





</div>



<script type="text/javascript">



var $hands = $('#liveclock div.hand')



window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||

                              window.webkitRequestAnimationFrame || window.msRequestAnimationFrame ||

															function(f){setTimeout(f, 60)}





function updateclock(){

	var curdate = new Date()

	var hour_as_degree = ( curdate.getHours() + curdate.getMinutes()/60 ) / 12 * 360

	var minute_as_degree = curdate.getMinutes() / 60 * 360

	var second_as_degree = ( curdate.getSeconds() + curdate.getMilliseconds()/1000 ) /60 * 360

	$hands.filter('.hour').css({transform: 'rotate(' + hour_as_degree + 'deg)' })

	$hands.filter('.minute').css({transform: 'rotate(' + minute_as_degree + 'deg)' })

	$hands.filter('.second').css({transform: 'rotate(' + second_as_degree + 'deg)' })

	requestAnimationFrame(updateclock)

}



requestAnimationFrame(updateclock)





</script>

              </div>

                

                

		    <p>&nbsp;</p>
		    <div id="learn_more"></div>
</a>
		  </div>

            <div id="mid_right">

			  <div id="mid_title">

					Welcome Admin</div>

              

                      <p class="dedar01">Hello  admin ( <?php echo $uname ?>).you Logged in </p>

                      <p class="dedar01">successfully.You are logged in from :<?php echo $IPaddress ?></p>

				<p>&nbsp;</p>

            

                    <div id="learn_more"></div>

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
            

	                    
	<?php if($rarow['type']=="Master Admin")
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

<?php if($rarow['type']=="Master Admin")
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