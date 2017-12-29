<?php 
error_reporting("E_ALL"); 

	$uname=$_POST['uname'];
	if($uname=!"guest")
	{
	include("dbconnection.php");}
	else {include("dbconnection2.php");}
	$id=$_POST['id'];
	$tcr=$_POST['tcr'];	
	
		define("UPLOAD_DIR", "stimage/");
		if (!empty($_FILES["myFile"]))
	{
	    $myFile = $_FILES["myFile"];
	    				if ($myFile["error"] !== UPLOAD_ERR_OK) 
						{ echo "<p>An error occurred.</p>"; exit;}
	   if (($myFile["type"]=="image/jpeg")||($myFile["type"]=="image/png")||($myFile["type"]=="image/jpg"))
	  			 		{}
	   	else 
						{echo "image type is not  supported <br>"; exit;}
	 	if($myFile["size"]/1024<50)
	    {}
	else { echo "file size is not permitted <br>";
		   exit; }
	 	    // ensure a safe filename
	    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
	    // don't overwrite an existing file
	    $i = 0;
	    $parts = pathinfo($name);
	    while (file_exists(UPLOAD_DIR . $name)) {
		$i++;
	        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
		
	    }
	 
	    // preserve file from temporary directory
	    $success = move_uploaded_file($myFile["tmp_name"],
	        UPLOAD_DIR . $name);
	    if (!$success) {
	        echo "<p>Unable to upload file.</p>";
	       	    }
		   else {}
           /*echo "Uploaded file: " .$name. "<br>";
  	       echo "Type: " . $myFile["type"] . "<br>";
           echo "Size: " . ($myFile["size"] / 1024) . " kB<br>";*/
		  //echo '<img src="target2/'.$name.'" width="200px" height="200px"/>';
		  
		  // set proper permissions on the new file
	    chmod(UPLOAD_DIR . $name, 0644);
		if($tcr==NULL)
		{
		mysql_query("UPDATE `profile` SET `image` = '$name' WHERE `id`='$id'");		
		header("location:profile.php?r=".$id."&rt=".$uname."");
		}
		
		if(!($tcr==NULL))
 {
			mysql_query("UPDATE `tprofile` SET `image` = '$name' WHERE `id`='$id'");
			header("location:profile.php?r=".$id."&&rt=".$uname."&&tcr=".$tcr."");

			}
	
		
		mysql_close($con);
	}
		//header("location:profile.php?r=$id&rt=$uname");
		

	?>