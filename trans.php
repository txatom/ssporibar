0<?php 
date_default_timezone_set('Asia/Dhaka');
session_start();
error_reporting("E_ALL"); 
include("dbconnection.php");
$uname=$_GET['rt'];
$tcr=$_GET['tcr'];
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
$usrchk=mysql_fetch_array($raresultc);
$date=date("j");
$year=date("Y");
$month=date("F");
$ttype=$_GET['t'];
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
			 for($n=0;$n<=11;$n++)
			 {
				$p="d".$n;
				$p1= "d".($n-1);
			if($month==$$p)
			 {$month1=$$p1;}
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
	<script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
	<script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
    	<script type="text/javascript"> 
		jQuery(document).ready(function(){
			$('#r').autocomplete({source:'searchid.php', minLength:1});
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
     <script>
function startTime() {
  var today=new Date();
  var h=today.getHours();
  var m=today.getMinutes();
  var s=today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML = "<font color=\"black\" size =\"+3\">"+h+":"+m+":"+s+"</font>";
  var t = setTimeout(function(){startTime()},500);
}
function checkTime(i) {
  if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>       
</head>
<body onload="startTime()">
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
   <section id="main01"> 
           
<div style="width:auto">
<p>&nbsp;</p>
	<div id="txt"></div>

<?php
if($ttype=="Income")
{?>
    <!-- The main CSS file -->


	      <script type="text/javascript"> 
 
		jQuery(document).ready(function(){
			$('#id').autocomplete({source:'searchid.php', minLength:1});
		});
	      </script>
          
          
          
          
          
          
        		
             <div style="height:auto; width:45%; padding:20px 20px 5px 20px;float:left"  align="center">
               <div style="border-bottom:2px solid #F6F">
                 <h3>Income</h3>
                 
</div>
<br/><br />
	  <form  method="post" action="trans2.php#main" style="font-size:16px;color:#000;">
         <input type="hidden" name="uname" id="uname" value="<?php echo $uname;?>" >
		<table width="auto" style="color:#309;font-size:21px"> 
        <tr>
        <td width="124"><p>Date</p></td>
              <td width="33"  align="center"><b>:</b></td>
        <td width="242">
        		<select name="dt" id="dt" class="dedar12" style="background-color:#F9F">
                <option><?php echo $date;?></option>
                 <option><?php echo $date+1;?></option>
      			 <?php  for($i=1;$i<=31;$i++){
	    	 	 	echo "<option>".$i."</option>";}
			  		echo '</select>';?>
                </select>
        <select name="mnt" id="mnt"class="dedar12" style="background-color:#F9F">
               <option><?php echo $month;?></option>
            
			 <?php 
			 for($n=0;$n<=11;$n++)
			 {
				$p="d".$n;
				echo '<option>'.$$p.'</option>'; 
                }         
				?>
				
				 </select>
             

<select name="yer" id="yer" class="dedar12" style="background-color:#F9F">          
              
               <option><?php echo $year ;?></option> 
               <option><?php echo $year+1; ?> </option>
               <option><?php echo $year+2; ?> </option>
             </select>



             </td>
        </tr>  
                
<tr>
      
      <td > Source</td>
      
      <td  align="center"><b>:</b></td>
      
      <td >
 <select name="src" id="scr" class="dedar12" style="background-color:#CF6">          
    <option>Student</option>
    <option>Store</option>
    </select> 
        </td>

      
    </tr>
 
        
<tr>
      
      <td > ID</td>
      
      <td  align="center"><b>:</b></td>
      
      <td ><input type="text" name="id" id="id"  class="dedar12"/>
        
        </td>

      
    </tr>

       
       
           <input type="hidden" name="ttype" id="ttype" value="Income"  />
         


      

    

      <tr>
        
        <td>  Start month</td>
        
        <td  align="center"><p><b>:</b></p></td>
        
        <td>
          <p>
            <select name="smonth" id="smonth"class="dedar12" style="background-color:#F9F">
              <option><?php echo $month1;?></option>

			 <?php 
			 for($n=0;$n<=11;$n++)
			 {
				$p="d".$n;
				echo '<option>'.$$p.'</option>'; 
                }         
				?>              </select>
            </p></td> 
        
      </tr>
  <tr>

      <td>  Target month</td>

      <td  align="center"><p><b>:</b></p></td>

      <td>
        <p>
          <select name="tmonth" id="tmonth"class="dedar12" style="background-color:#F9F">
            <option><?php echo $month1;?></option>

			 <?php 
			 for($n=0;$n<=11;$n++)
			 {
				$p="d".$n;
				echo '<option>'.$$p.'</option>'; 
                }         
				?>          </select>
        </p></td> 

  </tr>

      </table>	

        <p><br />

          <input type="submit" name="submit" style="font-size:22px" id="submit" value="Submit" />

        </p>

	  </form>
</div>   






                
 


<div style="height:auto; width:45%; padding:20px 20px 5px 20px;float:left"  align="center">
               <div style="border-bottom:2px solid #F6F">
<h3>Search Student</h3></div>

<br /><br />
						  <form method="post" action="profile.php">
						    <table width="auto" style="color:#309;font-size:21px">     
						      
						      <tr>

      <td>Enter ID </td>

      <td  align="center"><b>:</b></td>

      <td>

						  <input type="text" name="r" id="r" placeholder="Enter id no" class="dedar12" />
						  <input type="hidden" name="uname" id="uname" value="<?php echo $uname ?>" /></td>
                          </tr>

    </table>	

        <p><br />

          <input type="submit" name="submit1" style="font-size:22px" id="submit1" value="Submit" />

        </p>

	  </form>

</div> 


<?php }?>









		  <?php
	  if($ttype=="Expense")

{
			 
if(($tcr==!NULL)||($ttype=="Expense"))

{
		
echo "<script type='text/javascript'> 
 
		jQuery(document).ready(function(){
			$('#id').autocomplete({source:'searchid3.php', minLength:1});
		});
	</script>";
 echo '<div style="padding:40px 5px 10px 25px;width:auto">
<div style="border-bottom:2px solid #036" align="center"><h2>Expense</h2></div><br /><br />
<form  method="post" action="trans2.php#main" style="font-size:16px;color:#000;">
         <input type="hidden" name="uname" id="uname" value="'.$uname.'" >
		<table width="auto" style="color:#309;font-size:21px"> 
        <tr>
        <td width="124"><p>Date</p></td>
              <td width="33"  align="center"><b>:</b></td>
        <td width="242">
        		<select name="dt" id="dt" class="dedar12" style="background-color:#F9F">
                <option>'.$date.'</option>';
				 
      			for($i=1;$i<=31;$i++){
	    	 	 	 echo '<option>'.$i.'</option>';
					}
			  		 echo '</select>
                </select>
        <select name="mnt" id="mnt"class="dedar12" style="background-color:#F9F">
               <option>'. $month.'</option>';


			 
			 for($n=0;$n<=11;$n++)
			 {
				$p="d".$n;
				echo '<option>'.$$p.'</option>'; 
                }         
				









echo'          </select>
             

<select name="yer" id="yer" class="dedar12" style="background-color:#F9F">          
              
               <option>'.$year .'</option> 
               <option>'.($year+1).' </option>
               <option'.($year+2).'</option>
             </select>
             </td>
        </tr>   
<tr>
      <td > ID</td>
      <td  align="center"><b>:</b></td>
      <td >
	  
	  
	  <input type="text" name="id" size="25" id="id"  class="dedar12"/>
        </td>
    </tr>

         <input type="hidden" name="ttype" id="ttype" value="Expense" >

       <tr>
      <td>Source</td>
      <td  align="center"><b>:</b></td>
      <td>

      <select name="src" id="src"  class="dedar12" style="background-color:#CF6">';
       
	  if($usrchk['type']=="Master Admin"){  
	  
	  echo '<option>Teacher</option>';
	  }
echo '        <option>Extra</option>
        </select>
  </td> 
  </tr> 
      <tr>
        <td> Start month</td>
        
        <td  align="center"><p><b>:</b></p></td>
        
        <td>
          <p>
            <select name="smonth" id="smonth"class="dedar12" style="background-color:#F9F">
              <option>'.$month1.'</option>';
			  
			  
			 for($n=0;$n<=11;$n++)
			 {
				$p="d".$n;
				echo '<option>'.$$p.'</option>'; 
                }         
			
			  
			  
			  echo'
              </select>
            </p></td> 
        
      </tr>
  <tr>

      <td>  Target month</td>

      <td  align="center"><p><b>:</b></p></td>

      <td>
        <p>
          <select name="tmonth" id="tmonth"class="dedar12" style="background-color:#F9F">
              <option>'.$month1.'</option>';

			 for($n=0;$n<=11;$n++)
			 {
				$p="d".$n;
				echo '<option>'.$$p.'</option>'; 
                }
				
				
				         
			echo'          </select>
        </p></td> 

  </tr>

      </table>	

        <p><br />
          <input type="submit" name="submit" style="font-size:22px" id="submit" value="Submit" />

        </p>

	  </form>
	  </div>
</div>

















</div>		
';
}
}
?>

</div> 
</div>
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













