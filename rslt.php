
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
	if(isset($_POST['submit']))
{ 

mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");
$id=$_POST['id1']; 
$stype=$_POST['stype']; 
$etype=$_POST['etype']; 
if($etype==NULL||$stype==NULL||$id==NULL)
	{$dedar222="Required field missing";}
	
	

$year=date("Y");
					if($etype=="1g mvgwqK")
						{$e=1;}
					if($etype=="2q mvgwqK")
						{$e=2;}
					if($etype=="evwl©K")
						{$e=3;}

	if($e>=1)
{
for($i=1;$i<=36;$i++)
{
		$a='sub'.$i;
		$b='rslt'.$i;
	$sub=$_POST[''.$a.'']; 
	$rslt=$_POST[''.$b.''];

if(!($rslt==NULL))
	{
 $subsr=mysql_query("SELECT*FROM result WHERE id='$id' AND year='$year' AND subject='$sub'");
$subs=mysql_num_rows($subsr);
		if($subs>=1)
				{
	if($e==1)
	{$mysql_query("UPDATE result SET 1t='$rslt' WHERE id='$id' AND year='$year' AND subject='$sub'");}
	if($e==2)
	{mysql_query("UPDATE result SET 2t='$rslt' WHERE id='$id' AND year='$year' AND subject='$sub'");}
	if($e==3)
	{mysql_query("UPDATE result SET anu='$rslt' WHERE id='$id' AND year='$year' AND subject='$sub'");}
				}
		if($subs==0)
					{

mysql_query("INSERT INTO result(`year`,`subject`,`stype`,`1t`,`2t`,`anu`,`id`) 
					VALUES('$year','$sub','$stype','$rslt',' -1','-1','$id')");
					}						
	}
	
/*else {
	
	
	$mysql_query("DELETE FROM result WHERE  year=$year AND subject='$sub' ");

 }*/	
	
	
}		
	
}

mysql_close($con);	

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

	<link rel="stylesheet" href="jquery/css/smoothness/jquery-ui-1.8.2.custom.css" /> 

	<script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
	<script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
   <script type="text/javascript" src="js/kernel_main.js"></script>
 	<script type="text/javascript" src="js/kernel_intranet.js"></script>

	<script type="text/javascript"> 
 
		jQuery(document).ready(function(){
			$('#cname1').autocomplete({source:'search.php', minLength:2});
		});
 
	</script> 
	<link rel="stylesheet" href="jquery/css/smoothness/jquery-ui-1.8.2.custom.css" />
	<link href="css/template_bx24.css" type="text/css" data-template-style="true" rel="stylesheet">
    

	<script type="text/javascript">
	$(document).ready(function() {
		$("li").click(function(){
			$(this).toggleClass("active");
			$(this).next("div").stop('true','true').slideToggle("slow");
		});
	});
	</script>

        	<script type="text/javascript"> 
 
		jQuery(document).ready(function(){
			$('#id1').autocomplete({source:'searchid2.php', minLength:1});
		});
 
	</script> 
            	<script type="text/javascript"> 
 
		jQuery(document).ready(function(){
			$('#id2').autocomplete({source:'searchid2.php', minLength:1});
		});
 
	</script>  
 
<style>
.dedar1{color:#FFF;font-family: 'Times New Roman', Times, serif ; font-size:18px;}
<!--
	
	        /* style the auto-complete response */
	        li.ui-menu-item { font-size:16px !important; color:#000; }
	.font-style{
		
	font-size:25px;
	color: #630;
	font-weight:!important;}
	.font-en{ font-family:"Times New Roman", Times, serif}

	textarea{resize:none;}
			body{font-family:Tahoma;}
			#toggle{width:100%; margin:0 auto;
		}
		#toggle ul{width:100%;}
		#toggle li:hover{background:#FFFFE0}
		#toggle li{list-style-type:none; cursor:pointer; -moz-border-radius:0 10px 0 10px; border:3px solid #666666; margin:2px; padding:5px 5px 5px 5px;}
		#toggle ul div{color: #666666; cursor: auto; display: none; font-size: 13px; padding: 5px 0 5px 20px; text-decoration: none; }
		#toggle ul div a{color:#000000; font-weight:bold;}
		#toggle li div:hover{text-decoration:none !important;}
		#toggle li:before {content: "+"; padding:10px 10px 10px 0; color:red; font-weight:bold;}
		#toggle li.active:before {content: "-"; padding:10px 10px 10px 0; color:red; font-weight:bold;}
		li.ui-menu-item { font-size:12px !important; }
	
	-->
	
	

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





<!--<?php//if($rarow['type']=="Master Admin"){?>-->
        



		  <div class="col_w9002 col_w900_last">

		 

           

		 

<div  align="center">
<form  method="post" action="">
  <div>
  <h1>Add Result Data</h1>
  <img src="images/section-shadow.png" width="900px" /></div>

<h3 style="color:#A00; background-color:#FF0"><?php echo $dedar222?></h3> 
		<table width="50%" style="color:#309;font-size:21px">     
<tr align="center">

    <td>Student ID</td>

    <td align="center"><b>:</b></td>

    <td>

      
            <input type="text" name="id1" size="10" id="id1" placeholder="Type Student name" class="dedar12"/>
            <p style="color:#F00; font-size:28px;float:left"><b> *</b></p>
        
        </td>
  
  

    </tr>   
    <tr align="center">        

      <td>Source Type</td>

      <td  align="center"><b>:</b></td>

      <td>
      <select name="stype" id="stype" class="dedar12">
        <option></option>
        <option>School</option>
        <option>Coaching</option>
		<option>Madrasha</option>
        </select>
            <p style="color:#F00; font-size:28px;float:left"><b> *</b></p>

  </td> 

</tr>     
<tr align="center">  

      <td>Exam Type</td>

      <td  align="center"><b>:</b></td>

      <td>

      <select name="etype" id="etype" class="dedar13 font-bangla">
      	<option></option>
        <option> 1g mvgwqK </option>
		<option> 2q mvgwqK </option>
		<option> evwl©K</option>

      

        </select>
            <p style="color:#F00; font-size:28px;float:left"><b> *</b></p>


  </td>
</tr>    
  </table>
		<p>&nbsp;</p>
	<?php
 	$sub1="evsjv";
	$sub2="Bs‡iRx";
	$sub3="mvavib MwbZ";
	$sub4="mvgvwRK weÁvb";
	$sub5="mvavib weÁvb";
	$sub6="ag©";
	$sub7="mvavib Ávb";   
	$sub8="WªBs";
	$sub9="IqvW© eyK";
	$sub10="evsjv-1g cÎ";
    $sub11="evsjv-2q cÎ";
    $sub12="Bs‡iRx-1g cÎ";
    $sub13="Bs‡iRx-2q cÎ";
	$sub14="mvavib MwbZ";
	$sub15="mvgvwRK weÁvb";
	$sub16="mvavib weÁvb";
	$sub17="ag©";
	$sub18="K…wl wkÿv";
	$sub19="Mvn©¯'¨ A_©bxwZ";
	$sub20="Kw¤úDUvi wkÿv";
	$sub21="Kg©g~Lx wkÿv";
	$sub22="c`v_©weÁvb";
	$sub23="RxeweÁvb";
	$sub24="imvqb weÁvb";
	$sub25='D"PZi MwbZ';
	//$sub26="RxeweÁvb";
	$sub27="wdb¨vÝ I e¨vswKs";
	$sub28="wnmve  weÁvb";
	$sub29="e¨vemvq D‡`¨vM";
	$sub30="evwbR¨K f~‡Mvj";
	$sub31="f~‡Mvj"; 
	$sub32="BwZnvm";
 	$sub33="A_©bxwZ";
	$sub34="‡cŠibxwZ";

	
	echo ' 	<div id="toggle" align="left">
	<ul>
		<li style=" color:#2A00FF;font-size:18px;"> Primary School</li>
		<div><br/>
	<table  style="color:#309;font-size:21px; width:100%;" border="1" cellpadding="0" cellspacing="0">     
     <tr align="center">

      <td>Subject</td>

      <td>Result (%)</td> 
      <td>Subject</td>

      <td>Result (%)</td> 

  </tr> <tr align="center">     
';
for($i=1;$i<=9;$i++)
{	
    	$aa1=$i+$aa;
		$p="sub".$aa1;
		//$q="sub".($aa1+1);
		
	
	echo '
<td height="40" align="center">
    <input type="hidden" name="sub'.$aa1.'" id="sub'.$aa1.'" value="'.$$p.'" />
    <p class="font-style font-bangla"> '.$$p.' </p></td> 
<td align="center" style="padding-left:5%">
      <input name="rslt'.$aa1.'" type="text" class="dedar13 font-bangla" id="rslt'.$aa1.'" />
    </td> ';

	if(($i%2==0))
	{  
   echo '</tr> ';}
	//$aa++;
	//$aa1=0;
    }
 echo' </table><br /></div>';
 
 
 
 echo '
		<li style="color:#2A00FF;;font-size:18px;">Junior & Secondary School</li>
	<div><br/>
	<h3 class="font-bangla" style="border-bottom:1px solid #7F3F55">mKj wefvM</h3>
	<table  style="color:#309;font-size:21px; width:100%;" border="1" cellpadding="0" cellspacing="0">     
     <tr align="center">

      <td>Subject</td>

      <td>Result (%)</td> 
      <td>Subject</td>

      <td>Result (%)</td> 

  </tr> <tr align="center">     
';
		$a=1;
for($i=10;$i<=21;$i++)
{	
    	$aa1=$i+$aa;
		$p="sub".$aa1;
		//$q="sub".($aa1+1);
		
	
	echo '
<td height="40" align="center">
    <input type="hidden" name="sub'.$aa1.'" id="sub'.$aa1.'" value="'.$$p.'" />
    <p class="font-style font-bangla"> '.$$p.' </p></td> 
<td align="center" style="padding-left:5%">
      <input name="rslt'.$aa1.'" type="text" class="dedar13 font-bangla" id="rslt'.$aa1.'" />
    </td> ';

	if(($a%2==0))
	{  
   echo '</tr> ';}
	$a++;
	//$aa1=0;
    }
 echo' </table>';


 
 echo '
	<br/>
	<h3 class="font-bangla" style="border-bottom:1px solid #7F3F55">weÁvb wefvM</h3>
	<table  style="color:#309;font-size:21px; width:100%;" border="1" cellpadding="0" cellspacing="0">     
     <tr align="center">

      <td>Subject</td>

      <td>Result (%)</td> 
      <td>Subject</td>

      <td>Result (%)</td> 

  </tr> <tr align="center">     
';
		$a=1;
for($i=22;$i<=25;$i++)
{	
    	$aa1=$i+$aa;
		$p="sub".$aa1;
		//$q="sub".($aa1+1);
		
	
	echo '
<td height="40" align="center">
    <input type="hidden" name="sub'.$aa1.'" id="sub'.$aa1.'" value="'.$$p.'" />
    <p class="font-style font-bangla"> '.$$p.' </p></td> 
<td align="center" style="padding-left:5%">
      <input name="rslt'.$aa1.'" type="text" class="dedar13 font-bangla" id="rslt'.$aa1.'" />
    </td> ';

	if(($a%2==0))
	{  
   echo '</tr> ';}
	$a++;
	//$aa1=0;
    }
 echo' </table>';

 
 
 
  echo '
	<br/>
	<h3 class="font-bangla" style="border-bottom:1px solid #7F3F55">e¨vemvq wkÿv</h3>
	<table  style="color:#309;font-size:21px; width:100%;" border="1" cellpadding="0" cellspacing="0">     
     <tr align="center">

      <td>Subject</td>

      <td>Result (%)</td> 
      <td>Subject</td>

      <td>Result (%)</td> 

  </tr> <tr align="center">     
';
		$a=1;
for($i=27;$i<=30;$i++)
{	
    	$aa1=$i+$aa;
		$p="sub".$aa1;
		//$q="sub".($aa1+1);
		
	
	echo '
<td height="40" align="center">
    <input type="hidden" name="sub'.$aa1.'" id="sub'.$aa1.'" value="'.$$p.'" />
    <p class="font-style font-bangla"> '.$$p.' </p></td> 
<td align="center" style="padding-left:5%">
      <input name="rslt'.$aa1.'" type="text" class="dedar13 font-bangla" id="rslt'.$aa1.'" />
    </td> ';

	if(($a%2==0))
	{  
   echo '</tr> ';}
	$a++;
	//$aa1=0;
    }
	echo'</table>';
	
  echo '
	<br/>
	<h3 class="font-bangla" style="border-bottom:1px solid #7F3F55">gvbweK wefvM</h3>
	<table  style="color:#309;font-size:21px; width:100%;" border="1" cellpadding="0" cellspacing="0">     
     <tr align="center">

      <td>Subject</td>

      <td>Result (%)</td> 
      <td>Subject</td>

      <td>Result (%)</td> 

  </tr> <tr align="center">     
';
		$a=1;
for($i=31;$i<=34;$i++)
{	
    	$aa1=$i+$aa;
		$p="sub".$aa1;
		//$q="sub".($aa1+1);
		
	
	echo '
<td height="40" align="center">
    <input type="hidden" name="sub'.$aa1.'" id="sub'.$aa1.'" value="'.$$p.'" />
    <p class="font-style font-bangla"> '.$$p.' </p></td> 
<td align="center" style="padding-left:5%">
      <input name="rslt'.$aa1.'" type="text" class="dedar13 font-bangla" id="rslt'.$aa1.'" />
    </td> ';

	if(($a%2==0))
	{  
   echo '</tr> ';}
	$a++;
	//$aa1=0;
    }
 echo' </table></div></ul></div>';
 
 ?>
 
 

      <p>&nbsp;</p>

      <p>

        <input type="submit" name="submit" id="submit" value="Submit" style="font-size:21px"/>

      </p>

</form>

				

                

		</div>



		  </div>
   <?php// }?>       
          
          <p>&nbsp;</p>
    
 
 
 
 
 
    
      <div>
  <h1>View Result</h1>
  <img src="images/section-shadow.png" width="900px" /></div>
  <div align="center">
  <form action="strslt.php" method="get">
  <input type="hidden" name="rt" value="<?php echo $uname?>"  />
		<table width="600" style="color:#309;font-size:21px">     
<tr>

    <td>Student ID</td>

    <td align="center"><b>:</b></td>

    <td>
            <input type="text" name="r" size="25" id="r" placeholder="Type Student name" class="dedar12"/>
        
        </td>

    </tr>        
<tr>

      <td>Source Type</td>

      <td  align="center"><b>:</b></td>

      <td>

      <select name="s" id="s" class="dedar12">
        <option></option>
        <option>School</option>
        <option>Coaching</option>
        </select>

  </td> 

  </tr>

 <tr>

      <td> Year</td>

      <td  align="center"><p><b>:</b></p></td>

      <td>

<select name="yr" id="yr" class="dedar12">          
               <option><?php  $yearcdr=date("Y");
 echo $yearcdr ?></option>
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

  </tr>

    

</table>
  <p>

        <input type="submit" value="Submit" style="font-size:21px"/>

      </p>

</form>


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
