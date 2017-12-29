<?php

session_start();

error_reporting("E_ALL"); 

include("dbconnection.php");

$rflag=$_GET['rflag'];
$uname=$_GET['rt'];
$rdt=$_GET['rdt'];
$r=$_GET['rr'];
$fl=$_GET['fl'];

$dedar=$_SESSION["$uname"];

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

		if($rarow['type']=="First Admin")
		{
			echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;width:600px;padding: 30 5 0 10"><h2>You are First Admin.you can`t access this section.<br />come with proper permission.</h2></div>';

				 exit;
			
			}		 
if (!($rdt==NULL))
{
	mysql_query("DELETE FROM tprofile WHERE id='$rdt'");
	mysql_query("DELETE FROM statement WHERE id='$rdt'");
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
<style>.dedar1{color:#FFF;font-family: 'Times New Roman', Times, serif ; font-size:18px;}

<!--
	
	        /* style the auto-complete response */
	        li.ui-menu-item { font-size:16px !important; color:#000; }
	
	-->

</style>
	<script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
	<script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
	<script type="text/javascript"> 
 
		jQuery(document).ready(function(){
			$('#r').autocomplete({source:'searchid.php', minLength:2});
		});
 
	</script>
    	<script type="text/javascript"> 
 
		jQuery(document).ready(function(){
			$('#r').autocomplete({source:'searchid.php', minLength:2});
		});
 
	</script>  
    
	<link rel="stylesheet" href="jquery/css/smoothness/jquery-ui-1.8.2.custom.css" /> 

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



<?php 
if (($rflag==NULL)&&($r==NULL))
{
echo '
<div style="padding-left:20px">

<div class="col_allw280 fp_service_box">

						<div class="con_tit_02"> 

						  <p>Add Teacher</p>

						

              </div>

						<div style="padding-left:10px;"><a href=""><img src="images/add.png" alt="image" /></a>

			  <p class="dedar1">Add New Teacher.</p>

					  <p class="dedar1"><a href="teacher.php?rt='.$uname.'&rflag=1"><img src="images/go.png" /></a></p>



                        <p class="dedar1">&nbsp;</p>

						<p class="dedar1">&nbsp; </p>

        </div>

      </div>
      <div class="col_allw280 fp_service_box">

						<div class="con_tit_02"> 

						  <p>Search </p>

						

              </div>

						<div style="padding-left:30px; align="center"">
						  <form method="post" action="profile.php">
						  <p class="dedar1" align="left"><img src="images/search.png" width="40" height="40" /> 
 search Teacher info</p>
						  <input type="text" name="r" id="r" placeholder="Enter id no" class="dedar12" />
						  <input type="hidden" name="uname" id="uname" value="'.$uname.'" />
						  <input type="hidden" name="tcr" id="tcr" value="y" />
						 <p>&nbsp;</p>
						  <input type="submit" name="submit" value="submit" style=" font-size:18px" />
						  </form
						  
						  
						 



                        <p class="dedar1">&nbsp;</p>

						<p class="dedar1">&nbsp; </p>

        </div>

      </div>
	  
<div class="col_allw280 fp_service_box">

						<div class="con_tit_02"> 

						  <p>payment</p>

						

              </div>

						<div style="padding-left:10px;"><a href=""><img src="images/pay.png" height="100px" width="100px" alt="image" /></a>

			  <p class="dedar1">Add payment info.</p>

					  <p class="dedar1"><a href="trans.php?rt='.$uname.'&tcr=y"><img src="images/go.png" /></a></p>



                        <p class="dedar1">&nbsp;</p>

						<p class="dedar1">&nbsp; </p>

        </div>

      </div>
	  
	  
	  
	  
	  </div>';
      
 } 
if ($rflag==1)
{
echo'
  <div class="col_w9002 col_w900_last">
	    <div  align="center">
		      
  <form  method="post" action="add.php">

  <div><h1>New Teacher Entry</h1>
  <img src="images/section-shadow.png" width="900px" /></div>

		<p>&nbsp;</p>
		<table width="600" style="color:#309;font-size:21px">     

    <tr>

      <td width="169">Teacher name</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">
	  <input type="hidden" name="tcr" id="tcr" value="tcr" />

      <input type="text" name="name" id="name" class="dedar12"/>

      <input type="hidden" name="rt" id="rt" value="'.$uname.'"  /> 

    </tr>

<tr>

      <td width="169">Father`s name</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">

      <input type="text" name="fname" id="fname" class="dedar12"/>
    </tr>
    <tr>

      <td width="169">Mother`s name</td>

      <td width="56" align="center"><b>:</b></td>

      <td width="361">
      <input type="text" name="mname" id="mname" class="dedar12"/>
    </tr>
    <tr>

     <tr>

       <td>ID</td>

       <td align="center"><b>:</b></td>

       <td>

         <input type="text" name="id" size="25" id="id" class="dedar12"/></td>

     </tr>

    <tr>

    <td>Mobile No.</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="mobile" size="25" id="mobile" class="dedar12" /></td>

    </tr>

    <tr>

    <td>Email Address</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="email" size="25" id="email" class="dedar12" /></td>

    </tr>

    

    <tr>

      <td>Present Address</td>

      <td align="center"> <b>:</b></td>

      <td><textarea name="adrs" cols="10" rows="3" id="adrs" class="dedar12"></textarea>

</td>

    </tr>

  

    <tr>
      
      <td>Education</td>
      
      <td align="center"><b>:</b></td>
      
      <td>    <select name="edu" id="edu" class="dedar12">
        
        <option>School</option>
        
        <option> Coaching</option>
        
        </select></td>
      
    </tr>
    <tr>

      <td>Skill Area</td>

      <td align="center"> <b>:</b></td>

      <td><textarea name="skl" cols="10" rows="3" id="skl" class="dedar12"></textarea>

</td>

    </tr>

    <tr>

      <td>Experience</td>

      <td align="center"> <b>:</b></td>

      <td><textarea name="exp" cols="10" rows="3" id="exp" class="dedar12"></textarea>

</td>

    </tr>


     

  </table>

      <p>&nbsp;</p>

      <p>

        <input type="submit" name="submit" id="submit" style="font-size:22px" value="Submit" />

      </p>

</form>

				

                

		</div>



	  </div>';
	  }
	  ?>
      
     
      

			<div class="cleaner"></div>
<?php if ($rflag==NULL)
{
	echo '            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div>
  <h1>Exist Teacher`s list</h1>
  <p><img src="images/section-shadow.png" width="900px" /></p>
  <p>&nbsp;</p>
      </div>
 
';
	if($r==NULL)
{$r=0;}
$lt=$r+50;
$sqlcs=mysql_query("SELECT name,id,skl,exp FROM tprofile LIMIT $r,$lt");
$rcscount=mysql_num_rows($sqlcs);
  if ($rcscount>0)
  {

	 echo '
<table width="900" style="color:#309;font-size:21px" border="1" cellspacing="0">  
<tr align="center">
<td>sl no.</td>
<td>Name</td>
<td>ID </td>
<td>Skill</td>
<td>Experience</td>
<td>Action</td>
</tr>';

while($array=mysql_fetch_array($sqlcs))
{
$r++;
$id=$array['id'];
echo '<tr align="center">
<td> '.$r.'</td>
<td><a href="profile.php?rt='.$uname.'&&r='.$id.'&&tcr=y">'.$array['name'].'</a></td>
<td>'.$id.'</td>
<td>'.$array['roll'].'</td>
<td>'.$array['class'].'</td>';

		if($rarow['type']=="First Admin")
			 {echo' <td><img src="images/block.png" /></td>';
			 }
		if($rarow['type']=="Master Admin")
		{echo '<td><a href="teacher.php?rt='.$uname.'&rdt='.$id.'"><img src="images/delete.gif" /></a></td>';}



echo '</tr>';
}
echo '</table>';

 echo '<div align="center"> 
  <p>&nbsp;</p>';
  echo '
 
 <a href="teacher.php?rt='.$uname.'&rr='.$r.'"><p><img src="images/more.png" /></p></a> </div></div>';
}
else {echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>No record found for your query sir.Thank you.<br /></h2></div>';
				 exit;}

}?>

</div>
			<div class="cleaner"></div>

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