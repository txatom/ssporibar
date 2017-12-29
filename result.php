<?php 
include("dbconnection.php");
error_reporting("E_ALL");
$id=$_GET['r'];
if($id==NULL)
{
$id=$_POST['id2'];
	}
$stype=$_POST['stype'];	
$year=$_POST['year'];


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shamim Shikhya Poribar</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link rel="shortcut icon" href="images/favicon.ico"  type="image/x-icon" />
<style>
<!--
	h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(images/dimension.png);}
.font-bangla
{  font-family:SutonnyMJ;
}
.font-style{
	font-size:21px;
	color:#000;
	}
	.font-en{ font-family:"Times New Roman", Times, serif}
-->
</style>
</head>

<body>

<div align="center" style="padding:15px">

<?php 
if($stype=="School")
{echo ' <h1 class="font-bangla ">isaby g‡Wj ¯‹zj</h1>';}
else {  echo '<h1 class="font-bangla ">DËib †KvwPs †m›Uvi</h1>';}
 
 ?> 
  
  
<p class="font-bangla font-style" align="center">cix¶vi-b¤^i cÎ-<?php echo $year ?></p>
<table border=1 cellspacing=0 cellpadding=0 width=100%>
 <tr class="font-bangla font-style" align="center">
  <td width=140 rowspan=2 valign=top>welq
  </td>
  <td colspan=3 valign=top>
  1g mvgwqK
  </td>
  <td colspan=3 valign=top>2q mvgwqK
  
  </td>
  <td colspan=3 valign=top >evwl©K
  </td>
 </tr>
 <tr class="font-bangla font-style" align="center">
  <td width=110
  > c&Ouml;v&szlig; b¤^i (%)
  
  </td>
  <td width=61 >
  c‡q›U
  </td>
  <td width=78>
  
  
   c&Ouml;v&szlig; ‡MÖW
   
  </td>
  <td width=103 >c&Ouml;v&szlig; b&curren;^i (%) </td>
  <td width=59>c‡q›U
  <td width=76>   c&Ouml;v&szlig; ‡MÖW
  </td>
  <td width=107>c&Ouml;v&szlig; b&curren;^i (%) </td>
  <td width=57>c‡q›U
  </td>
  <td width=98> c&Ouml;v&szlig; ‡MÖW
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
{$rs1='<p class="font-en font-style" align="center"> ** </p>';

}
if($rs2<0)
{$rs2='<p class="font-en font-style" align="center"> ** </p>';
}
if($rs3<0)
{$rs3='<p class="font-en font-style" align="center"> ** </p>';
}

$gp=$rs11['a'];
$gp1=$gp1+$gp;

$gp2=$rs12['a'];
$gp12=$gp12+$gp2;

$gp3=$rs33['a'];
$gp13=$gp13+$gp3;


echo'
<td class="font-bangla font-style">'.$rs1.'</td>
<td class="font-bangla font-style">';
printf("%.2f",$gp);
echo
'</td>
<td class="font-style">'.$rs11['b'].'</td>';


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
 


<tr align="center">


 </tr>
  
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

      




<p>&nbsp;</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%">
 <tr align="center" class="font-bangla font-style">
  <td><p><b>‡gavwfwËK &macr;&rsquo;vbt</b></p>
  </td>
  <td width=96><p></p></td>
  <td width=108><p></p></td>
  <td width=121><p></p></td>
 </tr>
 <tr class="font-bangla font-style" align="center">
  <td width=631><p>cÖavb wk¶K/wkw¶Kvi ¯^v¶i t</p>
    <p>ZvwiL t</p></td>
  <td width=96 ><p></p></td>
  <td width=108 ><p></p></td>
  <td width=121 ><p></p></td>
 </tr>
 <tr class="font-bangla font-style" align="center">
  <td width=631><p>Awffve‡Ki ¯^v¶i t</p></td>
  <td width=96 ><p></p></td>
  <td width=108 ><p></p></td>
  <td width=121 ><p></p></td>
 </tr>
</table>

<p>&nbsp;</p>

<h2 class="font-bangla">GB KvW cÖvwßi 3
w`‡bi<span style='mso-spacerun:yes'>  </span>g‡a¨ Awffve‡Ki Øviv ¯^v¶i Kwiqv
†kªYx wk¶K / wkw¶Kvi wbKU Rgv w`‡Z n‡e | GB b¤^i cÎ nviv‡j ev bó nB‡j 10(`k) UvKv
Rwigvbv w`qv Bnvi Abywjwc MÖnY Kwi‡Z nB‡e</h2>
</div>
</div>

</body>

</html>
