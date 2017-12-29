<?php 

session_start();
error_reporting("E_ALL"); 
	$uname=$_GET['rt'];
	$dedar=$_SESSION["$uname"];

	if (!($uname=="guest"))
	{
	include("dbconnection.php");
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
				 if($rarow['type']=="First Admin")
			 {$arc_mage='<div style="float:left;width:30%;padding: 3 5 0 3"><img src="images/robot.gif"></div><div style="float:left;
width:65%;padding: 3 5 0 1"><h2>You are First Admin.You can`t Access This Page.Take proper permission & come again.<br /></h2></div>';
$link='index2.php?rt='.$uname.'';
include("noti.php");

				 exit;}
	}
				 
				 
				 else {
		include("dbconnection2.php");

	}

$rr=$_GET['rr'];

	if(isset($_POST['submit']))

{
$type=$_POST['type'];
$uname12=$_POST['uname12'];
$password=$_POST['password'];
$passw=$_POST['repassword'];
if($uname12==NULL)
{$dedar55='User name can`t Blank';}
if(($type==NULL)&($dedar55==NULL))
{$dedar55='User type can`t Blank';}
if ((!($password==$passw))&($dedar55==NULL))
{	
	$dedar55='Password not matched.Try Again.';}
$sqlac=mysql_query ("SELECT*FROM admin WHERE username='$uname12'");
$swlt=mysql_num_rows($sqlac);
if (($swlt>=1)&($dedar55==NULL))
{$dedar55='This User is already Exist.Try New one.';}
if($dedar55==NULL)
{		
$hash = md5($password);	
mysql_query("INSERT INTO admin (`username`,`password`,`type`) VALUES('$uname12','$hash','$type')");
$dedar55='success fully executed.';}
}
if(!($rr==NULL))
{
	$sqlarr=mysql_query ("SELECT*FROM admin");
	$countsqlarr=mysql_num_rows($sqlarr);
	if($countsqlarr==1)
	{echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Sorry sir....!!!! your action is blocked for security reason. I can`t let you to do it.</h2> <br /><h1><a href="admin.php?rt='.$uname.'">Click here</a></h1></div>';
 exit;
}
	
else{	
	mysql_query("DELETE FROM `admin` WHERE `username`='$rr'");
	$dedar55= 'user '.$rr.' Deleted.';
}
 

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

.dedar1{color:#309;font-family: 'Times New Roman', Times, serif ; font-size:28px;}



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

		  <div class="col_w900 col_w900_last">

		 

           

		 

<div  align="center">
<?php 
if($dedar55==!NULL)
{
echo '<div style=" background-color:#FF0;height:50px;padding-top:10px"><h3>'.$dedar55.'</h3></div>';}?>
<br /> <br />

<div class="dedar1">
  <p>Add New user</p>
  <p><img src="images/section-shadow.png" width="900px" /></p>
</div>
<?php 

if($dedar22==NULL)

{

	?>



<div  align="center">

	  <form   action="" method="post">



		<table width="auto" style="color:#309;font-size:21px">     

    <tr>

      <td>User name </td>

      <td  align="center"><b>:</b></td>

      <td>

        <input type="text" name="uname12" size="25" id="uname12" class="dedar12" autocomplete="off" /></td>

        </tr>
     <tr>

      <td>Type</td>

      <td  align="center"><b>:</b></td>

      <td>

      <select name="type" id="type" class="dedar12">
        <option></option>

        <option>First Admin</option>

        <option>Master Admin</option>

        </select>

  </td> 

  </tr>

  <tr>

      <td >Password</td>

      <td  align="center"><b>:</b></td>

      <td ><input type="password" name="password" size="25" id="password" class="dedar12" autocomplete="off" />

         </td>

    </tr> 

    <tr>

      <td > Re-type Password</td>

      <td  align="center"><b>:</b></td>

      <td ><input type="password" name="repassword" size="25" id="repassword" class="dedar12" autocomplete="off" />

         </td>

    </tr>    

      </table>	

        <p><br />

          <input type="submit" name="submit" style="font-size:18px" id="submit" value="Submit" />
        </p>
	  </form>	

				

                

	    </div>
<p>&nbsp;</p>
<p>&nbsp;</p>

            

            <?php }	

			?>

            

                

		</div>



		  </div>

		<div>
        
        
<div class="dedar1"><p>Existing User's List</p>
  <p><img src="images/section-shadow.png" width="900px" /></p>
  <p>&nbsp;</p>
</div>
		<table width="800"style="color:#309;font-size:21px" border="1" cellspacing="0">
        <tr align="center">
        <td>user name</td>
        <td>Type</td>
        <td>Login Status</td>
        <td> Last IP Address</td>
        <td> Last login</td>
        <td> Action</td>

        </tr>
        <?php 
		$sqla=mysql_query ("SELECT*FROM admin");
		while($rsqp=mysql_fetch_array($sqla))
		{	$user=$rsqp['username'];
			echo '<tr align="center">
		   <td>'.$rsqp['username'].'</td>
		   <td>'.$rsqp['type'].'</td>
		   <td>'.$rsqp['log'].'</td>
		   <td>'.$rsqp['ip'].'</td>
		   <td>'.$rsqp['time'].'</td>
		   <td><a href="admin.php?rt='.$uname.'&rr='.$user.'"><img src="images/delete.gif"/></a></td>
		</tr> ';}
		
		
		?>
        
        
        
        
        </table>     
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

