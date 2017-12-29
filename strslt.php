﻿<?php 

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
.font-style{
	font-size:21px;
	color:#000;
	}



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
      <input type="hidden" name="s" value="<?php echo $stype?>"  />

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
	
        
      
      <p class="font-bangla font-style" align="center">cix¶vi-b¤^i cÎ-<?php echo $year ?></p>
<table border=1 cellspacing=0 cellpadding=0 width=98%>
 <tr class="font-bangla font-style" align="center">
  <td width=134 rowspan=2 valign=top>welq
  </td>
  <td colspan=3 valign=top>
  1g mvgwqK
  </td>
  <td colspan=3 valign=top>2q mvgwqK
  
  </td>
  <td colspan=3 valign=top >evwl©K
  </td>
          <td width="59" rowspan="2" class="font-en"> Action</td>
 </tr>
 <tr class="font-bangla font-style" align="center">
  <td width=105
  > c&Ouml;v&szlig; b¤^i (%)
  
  </td>
  <td width=60 >
  c‡q›U
  </td>
  <td width=75>
  
  
   c&Ouml;v&szlig; ‡MÖW
   
  </td>
  <td width=99 >c&Ouml;v&szlig; b&curren;^i (%) </td>
  <td width=58>c‡q›U
  <td width=73>   c&Ouml;v&szlig; ‡MÖW
  </td>
  <td width=103>c&Ouml;v&szlig; b&curren;^i (%) </td>
  <td width=56>c‡q›U
  </td>
  <td width=99> c&Ouml;v&szlig; ‡MÖW
  </td>
 </tr>
 
<?php 
 mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");
$rslt=mysql_query("SELECT*FROM result WHERE id='$id' AND year='$year' AND stype='$stype' ORDER BY sl");
$count=mysql_num_rows($rslt);
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
}
function gradep($y)
{ 	if($y>=5)
	{$q['a']="A+";}
	elseif($y>=4&&$y<=4.99)
	{$q['a']="A";}
	elseif($y>=3.5&&$y<=3.99)
	{$q['a']="A-";}
	elseif($y>=3&&$y<=3.49)
	{$q['a']="B";}
	elseif($y>=2&&$y<=2.99)
	{$q['a']="C";}
	elseif($y>=1&&$y<=1.99)
	{$q['a']="D";}
	else
	{$q['a']="F";}
	 return $q;

}

for($i=1;$i<=$count;$i++)
{
	$rslts=mysql_fetch_array($rslt);
	echo '<tr align="center">
<td class="font-bangla font-style" >'.$rslts['subject'].'</td>
';
$rs1=$rslts['1t'];
$rs2=$rslts['2t'];
$rs3=$rslts['anu'];
if($rs1<0)
{$cnt1=$cnt1+1;}
if($rs2<0)
{$cnt2=$cnt2+1;}

if($rs3<0)
{$cnt3=$cnt3+1;}
$rs11=grade($rs1);
$rs12=grade($rs2);
$rs33=grade($rs3);
if($rs1<0)
{$rs1='**';

}
if($rs2<0)
{$rs2='**';
}
if($rs3<0)
{$rs3='**';
}

$gp=$rs11['a'];
$gp1=$gp1+$gp;

$gp2=$rs12['a'];
$gp12=$gp12+$gp2;

$gp3=$rs33['a'];
$gp13=$gp13+$gp3;

$rrr=$rslts['sl'];
echo'
<td class="font-bangla font-style">'.$rs1.'</td>
<td class="font-bangla font-style">';
printf("%.2f",$gp);
echo
'</td>
<td class="font-style">'.$rs11['b'].'</td>
';


echo'
<td class="font-bangla font-style">'.$rs2.'</td>
<td class="font-bangla font-style">';

printf("%.2f",$gp2);
echo 
'</td>
<td class="font-style">'.$rs12['b'].'</td>';

echo'
<td class="font-bangla font-style">'.$rs3.'</td>
<td class="font-bangla font-style">';

printf("%.2f",$gp3);
			

echo 
'</td>
<td class="font-style">'.$rs33[b].'</td>
   <td>
		   
		   <form action="strslt.php" method="get">
		   <input type="hidden" name="rt" value="'.$uname.'" />
		   <input type="hidden" name="r" value="'.$id.'" />
		   <input type="hidden" name="yr" value="'.$year.'" />
		   <input type="hidden" name="s" value="'.$stype.'" />
		   <input type="hidden" name="rr" value="'.$rrr.'"/>
		   <input type="image" src="images/delete.gif" />
		   </form>
		   
</td>
</tr>';

}
$gpa1x=($gp1/$count);
$gpa2x=($gp12/$count);
$gpa3x=($gp13/$count);

$gpa1=gradep($gpa1x);
$gpa2=gradep($gpa2x);
$gpa3=gradep($gpa3x);

if($cnt1==$count)
{
$flag1="y";
}
if($cnt2==$count)
{$flag2="y";
}
if($cnt3==$count)
{$flag3="y";
}
?>  
 



  
 <?php

 echo '
  <tr  align="center">
 <td class="font-bangla font-style">Mo †MÖW c‡q›U</td>
 ';
 if ($flag1=="y")
{
	echo'
<td class="font-en font-style" colspan="2">**</td>
<td class="font-style">**</td>';
}
				else{
				echo '<td class="font-bangla font-style" colspan="2">';
				
			printf("%.2f",$gpa1x);
	
				echo '</td>
				<td class="font-style">'.$gpa1['a'].'</td>';
					}
 if ($flag2=="y")
{
echo '<td class="font-en font-style" colspan="2"> **</td>
<td class="font-style"> **</td>';
}
else {
echo'<td class="font-bangla font-style" colspan="2">';

			printf("%.2f",$gpa2x);
echo 
'</td>
<td class="font-style">'.$gpa2['a'].'</td>';
}

 if ($flag3=="y")
 {
echo '<td class="font-en font-style" colspan="2">**</td>
<td class="font-style">**</td>';
 }
  else{
echo '<td class="font-bangla font-style" colspan="2">';
			printf("%.2f",$gpa3x);

echo '</td>
<td class="font-style">'.$gpa3['a'].'</td>';
 }
echo'
 </tr>';

?>
</table>

      
      
      
      
      
      
      
      
        <br/><br />
        <?php  
        echo '
		<form action="result.php" method="post">
		 <input type="hidden" name="id2" value="'.$id.'" />
		 <input type="hidden" name="stype" value="'.$stype.'" />
		<input type="hidden" name="year" value="'.$year.'" />				
		<input type="submit" value="Print This Resultsheet" style="font-size:21px;"';  ?>
    

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

