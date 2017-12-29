<?php 
if(isset($_POST['submit']))
{$rst=$_POST['txtTitle'];
echo $rst;}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div>
<div id="bottom_child_name" style="margin-top: 10px;">সংবাদ অনুসন্ধান</div>
	<script type="text/javascript" language="javascript" src="combined_post.js"></script>
	<script type="text/javascript" language="javascript" src="layout.js"></script>
	<script type="text/javascript" language="javascript" src="common.js"></script>

<form name="newscomment" action="" method="post">
<input type="text" name="txtTitle" id="txtTitle" /> 
<input type="submit"  name="submit"/>
</form>

<script type="text/javascript">
  		makeBanglaInput('txtTitle');     		
</script>

</div>

</body>
</html>
