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

	echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Stranger !!!! You are trying to access unethically.I can`t let you in.Take proper permission & come again.<br /></h2></div>';
				 exit;

				 }


$rr=$_GET['rr'];
$id=$_GET['r'];
$year=$_GET['yr'];
$stype=$_GET['s'];

if(!($rr==NULL))

{
	$sqlarr=mysql_query ("SELECT*FROM result WHERE sl='$rr'");
	/*$countsqlarr=mysql_num_rows($sqlarr);
	if($countsqlarr==1)
	{echo '<div style="float:left;width:200px;padding: 30 5 0 30"><img src="images/robot.gif"></div><div style="float:left;
width:600px;padding: 30 5 0 10"><h2>Sorry sir....!!!! your action is blocked for security reason. I can`t let you to do it.</h2> <br /><h1><a href="admin.php?rt='.$uname.'">Click here</a></h1></div>';
 exit;
}
	
else{*/	
	mysql_query("DELETE FROM `result` WHERE `sl`='$rr'");
// exit;}
 

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


<br /> <br />
<div class="dedar1">
  <p>Resultsheet</p>
  <p><img src="images/section-shadow.png" width="900px" /></p>
</div>
<?php 

if($dedar22==NULL)

{

	?>



<div  align="center">

	  <form   action="strslt.php" method="get">

<input type="hidden" name="rt" value="<?php echo $uname ?>"  /> 

		<table width="auto" style="color:#309;font-size:21px">     

    
     <tr>

      <input type="hidden" name="r" value="<?php echo $id ?>"  />

  </tr>

  <tr>

      <td>year</td>

      <td  align="center"><b>:</b></td>

      <td> 
      <select name="yr" id="yr" class="dedar12">            
      		 <option><?php echo $year ?></option> 
               <option>2014</option>
               <option>2015</option>
               <option>2016</option>
               <option>2017</option>
               <option>2018</option>
               <option>2019</option>
               <option>2020</option>
               <option>2021</option> 
               <option>2022</option>
               <option>2023</option>
               </select>
         </td>
<td> <input type="submit" style="font-size:14px" value="Submit" /></td>
    </tr>    

      </table>	

       
	  </form>	

				

                

	    </div>
<p>
  <?php }	

			?>
		</p>
</div>



		  </div>

		<div>
        
        
<div class="dedar1"><p>&nbsp;</p>
</div>
		<table width="95%"style="color:#309;font-size:21px" border="1" cellspacing="0">
        <tr align="center">
        <td rowspan="2">Subject </td>
        <td colspan=3 >1st Term</td>
        <td colspan=3 >2nd Term</td>
        <td colspan=3 >Anual</td>
        <td rowspan="2"> Action</td>
        </tr>
        <tr align="center">
        <td> Result</td>
        <td>Point</td>
        <td> Grade</td>
        <td> Result</td>
        <td>Point</td>
        <td> Grade</td>
        <td> Result</td>
        <td>Point</td>
        <td> Grade</td>
        </tr>
        
        <?php 
		function grade($x)
{
 if($x>=80)
 {
	 $p['a']=5.00;
 	 $p['b']="A+";
	}
 elseif($x>=70&&$x<=79)
 {$p['a']=4.00;
  $p['b']="A";}
 elseif($x>=60&&$x<=69)
 {$p['a']=3.50;
  $p['b']="A-";}
  elseif($x>=50&&$x<=59)
 {$p['a']=3.00;
  $p['b']="B";}
  elseif($x>=40&&$x<=49)
 {$p['a']=2.00;
  $p['b']="C";}
  elseif($x>=33&&$x<=39)
 {$p['a']=1.00;
  $p['b']="D";}
  elseif($x>=0&&$x<=32)
  {$p['a']=0.00;
  $p['b']="F";}
  elseif($x<0)
{$p['a']="**";
  $p['b']="**";}
 else
 {$p['a']="//";
  $p['b']="//";} 
 return $p;
}			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection='utf8_general_ci'");
		$sqla=mysql_query ("SELECT*FROM result WHERE id='$id'AND year='$year'");
		

		while($rsqp=mysql_fetch_array($sqla))
		{	$u=$rsqp['1t'];
			$rsty=grade($u);
			
			$u1=$rsqp['2t'];
			$rsty1=grade($u1);
			
			$u2=$rsqp['anu'];
			$rsty2=grade($u2);
			
			
			echo '<tr align="center">
			
			
		   <td class="font-bangla">'.$rsqp['subject'].'</td>';
		   if($u<0)
			{$u="N/A";}
			
			 if($u1<0)
			{$u1="N/A";}
			
			 if($u2<0)
			{$u2="N/A";}
			$rrr=$rsqp['sl'];
			
		   echo '<td>'.$u.'</td>
		   
		   <td>'.$rsty['a'].'</td>
		   <td>'.$rsty['b'].'</td>

		   
		   <td>'.$u1.'</td>
		   <td>'.$rsty1['a'].'</td>
		   <td>'.$rsty1['b'].'</td>
		   
		   <td>'.$u2.'</td>
		   <td>'.$rsty2['a'].'</td>
		   <td>'.$rsty2['b'].'</td>
		   <td>
		   
		   <form action="strslt.php" method="get">
		   <input type="hidden" name="rt" value="'.$uname.'" />
		   <input type="hidden" name="r" value="'.$id.'" />
		   <input type="hidden" name="yr" value="'.$year.'" />
		   <input type="hidden" name="s" value="'.$stype.'" />
		   <input type="hidden" name="rr" value="'.$rrr.'"/>
		   
		   <input type="image" src="images/delete.gif" />
		   
		   </form></td>
		     
		   
		   
		</tr> ';
		
		
		}
		
		
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

