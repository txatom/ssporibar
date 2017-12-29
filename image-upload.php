 <?php
 session_start();
error_reporting("E_ALL"); 
include("dbconnection.php");

	$roll=$_GET['r'];
	$uname=$_GET['rt'];
	$tcr=$_GET['tcr'];
	$dedar=$_SESSION["$uname"];
	$rasqlc="SELECT*FROM admin WHERE username='$uname' and session='$dedar'";
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
<title>Shamim Shikhya Poribar</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico"  type="image/x-icon" />
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
<form action="image.php" method="post" enctype="multipart/form-data">
 
 <div ><h1> Student Entry</h1>
  <img src="images/section-shadow.png" width="900px" /></div>
 
 
  
<div >
    <p style="color: #00F;font-size:22px"> Add a photo. size maximum : 50 kb</p>
<p>&nbsp;</p></div>
  
     <div align="center">
    <table width="200" align="center">
      <tr>
          <td> <input type="file" name="myFile" size="40">
          <input type="hidden" name="id" id="id" value="<?php echo $roll ?>" />
          <input type="hidden" name="uname" id="uname" value="<?php echo $uname?>" />
 		 <input type="hidden" name="tcr" id="tcr" value="<?php echo $tcr?>" />

          </td>  </tr>
          
<tr>

<td align="center"><p>&nbsp;
  </p>
  <p>
    <input name="submit" type="submit"  style="font-size:21px" value="submit" />
  </p></td>
    </tr>
 </table>
 </div>
    
</form>
	<?php 	
			if($tcr==NULL)
{
	
	
	echo '<a href="profile.php?r='.$roll.'&rt='.$uname.'"> <h3> skip this Step</h3></a>';}
			if(!($tcr==NULL))

	{	echo '<a href="profile.php?r='.$roll."&&rt=".$uname."&&tcr=".$tcr.'"> <h3> skip this Step</h3></a>';}

	
	
	
	?>
        		
              
                
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
