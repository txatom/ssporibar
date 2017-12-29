<?php 
include("dbconnection.php");
$id=$_GET['r'];
$uname=$_GET['rt'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
if($name==!NULL)
{mysql_query("UPDATE profile SET name='$name' WHERE id='$id'");}

$fname=$_POST['fname'];
if($fname==!NULL)
{mysql_query("UPDATE profile SET fname='$fname' WHERE id='$id'");}

$mname=$_POST['mname'];
if($mname==!NULL)
{mysql_query("UPDATE profile SET mname='$mname' WHERE id='$id'");}

$class=$_POST['class'];
if($class==!NULL)
{mysql_query("UPDATE profile SET class='$class' WHERE id='$id'");}

$roll=$_POST['roll'];
if($roll==!NULL)
{mysql_query("UPDATE profile SET roll='$roll' WHERE id='$id'");}


$mobile=$_POST['mobile'];
if($mobile==!NULL)
{mysql_query("UPDATE profile SET mobile='$mobile' WHERE id='$id'");}

$email=$_POST['email'];
if($email==!NULL)
{mysql_query("UPDATE profile SET email='$email' WHERE id='$id'");}

$adrs=$_POST['adrs'];
if($adrs==!NULL)
{mysql_query("UPDATE profile SET adrs='$adrs' WHERE id='$id'");}

$edu=$_POST['edu'];
if($edu==!NULL)
{
mysql_query("UPDATE profile SET edu='$edu' WHERE id='$id'");}
header ("location:image-upload.php?r=".$id."&rt=".$uname."");

}


$sql=mysql_query("SELECT*FROM profile WHERE id='$id' ");
$rsq=mysql_fetch_array($sql);
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

.dedar1{color:#339;font-family: 'Times New Roman', Times, serif ; font-size:22px;}



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

<div  align="center"> <h2>Update Student Profile</h2>  <img src="images/section-shadow.png" width="900px" /></div>
<form method="post" action="">
<p>&nbsp;</p>
<table width="auto"  style="color:#63C;font-size:21px"> 
<tr>
<td>Name</td>    
<td width="56" align="center"><b>:</b></td>
<td><input type="text" name="name" id="name" placeholder="<?php echo $rsq['name']?>" size="25" class="dedar12" /></td>
</tr>
<tr>
<td>Father`s Name</td>    
<td width="56" align="center"><b>:</b></td>
<td><input type="text" name="fname" id="fname" placeholder="<?php echo $rsq['fname']?>" size="25" class="dedar12" /></td>
</tr>
<tr>
<td>Mother`s Name</td>    
<td width="56" align="center"><b>:</b></td>
<td><input type="text" name="mname" id="mname" placeholder="<?php echo $rsq['mname']?>" size="25" class="dedar12" /></td>
</tr>
<tr>
<td>Class</td>    
<td width="56" align="center"><b>:</b></td>
<td><input type="text" name="class" id="class" placeholder="<?php echo $rsq['class']?>" size="25" class="dedar12" /></td>
</tr>
<tr>
<td>Roll</td>    
<td width="56" align="center"><b>:</b></td>
<td><input type="text" name="roll" id="roll" placeholder="<?php echo $rsq['roll']?>" size="25" class="dedar12" /></td>
</tr>
<tr>
<td>ID</td>    
<td width="56" align="center"><b>:</b></td>
<td><?php echo$rsq['id']?> </td>
</tr>
<tr>
<td>Mobile</td>    
<td width="56" align="center"><b>:</b></td>
<td><input type="text" name="mobile" id="mobile" placeholder="<?php echo $rsq['mobile']?>" size="25" class="dedar12" /></td>
</tr>
<tr>
<td>E-mail</td>    
<td width="56" align="center"><b>:</b></td>
<td><input type="text" name="email" id="email" placeholder="<?php echo $rsq['email']?>" size="25" class="dedar12" /></td>
</tr>
<tr>
<td>Address</td>    
<td width="56" align="center"><b>:</b></td>
<td>
<textarea name="adrs" id="adrs" placeholder="<?php echo $rsq['adrs']?>" cols="25" rows="5"class="dedar12" ></textarea>
</td>
</tr>
<tr>
<td>Education</td>    
<td width="56" align="center"><b>:</b></td>
<td>
<select name="edu" id="edu" class="dedar12">
        <option>School</option>
        <option> Coaching</option>
		<option>Madrasha</option>
        </select>
		</td>
        <td><?php echo $rsq['edu']?></td>
</tr>



</table>
<p>&nbsp;  </p>
<p>
  <input type="submit" name="submit" style="font-size:22px" value="submit"/>
</p>
</form>

</div>














<div id="tooplate_footer_wrapper">

	<div id="tooplate_footer">

    	

		<p>Copyright © 2048 <a href="#"> Shamim Shikhya Poribar</a> Developed and managed by: <a href="http://facebook.com/dedar.mithu">Dedar Hossain</a>

        

        </p>

		<p>&nbsp;</p>

</div>

	<div class="cleaner"></div>



</div>

</body>
</html>