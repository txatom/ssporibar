<?php 
session_start();
error_reporting("E_ALL"); 
include("dbconnection.php");
$uname=$_GET['rt'];
$dedar=$_SESSION["$uname"];
	$rasqlc="SELECT*FROM admin WHERE username='$uname' and session='$dedar'";
	$raresultc=mysql_query($rasqlc);
	$racountc=mysql_num_rows($raresultc); 
	$rarow=mysql_fetch_array($raresultc);
			if($racountc==0)
				{
	echo "<div align='center'>";
				 echo "<h2> You have no permission<br/><br/>"; 
				 echo '<img src="images/robo-broken.jpg" height="500" width="500"/></div>';
				 exit;
				 }


		if($rarow['type']=="First Admin")
			 {echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>You are First Admin.You can`t Access This Page.Take proper permission & come again.<br /></h2></div>';
				 exit;}



$d=$_GET['d'];
if(!($d==NULL))
	{ 
mysql_query("DELETE FROM parameter WHERE pm='$d'");
	
	}


				 
	if(isset($_POST['submit']))
{ 
$type=$_POST['type']; 
$stype=$_POST['stype']; 

 for($i=1;$i<=10;$i++)
{	
$p="pm".$i;
$pa=$_POST[''.$p.''];
if($pa==NULL)
	{
				$c=$c+1;				
	}
		else{

					mysql_query("INSERT INTO parameter(`type`,`stype`,`pm`) VALUES ('$type','$stype','$pa')");	
						

			}

}
if($c==10)
{$dedar222="No parameter found.";}
else
{$dedar222="Successfully Recorded.";}

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
.dedar1{color:#FFF;font-family: 'Times New Roman', Times, serif ; font-size:18px;}
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
<form  method="post" action="">
  <div >
  <h1>Set Transaction Parameters</h1>
  <img src="images/section-shadow.png" width="900px" /></div>

<h3 style="color: #600"><?php echo $dedar222?></h3> 
		<table width="600" style="color:#309;font-size:21px">     

         <tr>

      <td>Transaction Type</td>

      <td  align="center"><b>:</b></td>

      <td>

      <select name="type" id="type" class="dedar12">

        <option>Income</option>

        <option>Expense</option>

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
        </select>

  </td> 

  </tr>



    <tr>

    <td>Parameter 1</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="pm1" size="25" id="pm1" class="dedar12"/></td>

    </tr>

        <tr>

    <td>Parameter 2</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="pm2" size="25" id="pm2" class="dedar12" /></td>

    </tr>



    <tr>

    <td>Parameter 3</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="pm3" size="25" id="pm3" class="dedar12" /></td>

    </tr>



    <tr>

    <td>Parameter 4</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="pm4" size="25" id="pm4" class="dedar12" /></td>

    </tr>



    <tr>

    <td>Parameter 5</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="pm5" size="25" id="pm5" class="dedar12" /></td>

    </tr>



    <tr>

    <td>Parameter 6</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="pm6" size="25" id="pm6" class="dedar12" /></td>

    </tr>



    <tr>

    <td>Parameter 7</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="pm7" size="25" id="pm7" class="dedar12" /></td>

    </tr>



    <tr>

    <td>Parameter 8</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="pm8" size="25" id="pm8"class="dedar12" /></td>

    </tr>



    <tr>

    <td>Parameter 9</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="pm9" size="25" id="pm9"class="dedar12" /></td>

    </tr>



    <tr>

    <td>Parameter 10</td>

    <td align="center"><b>:</b></td>

    <td>

      <input type="text" name="pm10" size="25" id="pm10"class="dedar12" /></td>

    </tr>





     

  </table>

      <p>&nbsp;</p>

      <p>

        <input type="submit" name="submit" id="submit" value="Submit" style="font-size:25px"/>

      </p>

</form>

				

                

		</div>



		  </div>
          
          
          <p>&nbsp;</p>
          <div >
  <h1> Exist Parameters</h1>
<img src="images/section-shadow.png" width="900px" /></div>

<div>
		<p>&nbsp;</p>
		<table width="600" style="color:#309;font-size:21px" border="1" cellspacing="0">     
        <tr align="center">
        <td>Name</td>
    <td>Transaction Type</td>
    <td>Source Type</td>
    <td>Action</td>    
        </tr>

<?php 

$sqlpr=mysql_query("SELECT*FROM parameter ");


while($rsqlp=mysql_fetch_array($sqlpr))
{
$idR=$rsqlp['pm'];	 
echo '<tr align="center">

<td>'.$idR.'</td>
<td>'.$rsqlp['type'].'</td>
<td>'.$rsqlp['stype'].'</td>
<td><a href="trset.php?rt='.$uname.'&d='.$idR.'"><img src="images/delete.gif" /></a>
</td>
</tr>';}

?>
</table>
</div>	
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 <?php mysql_close($con);	
?>   
    		

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
