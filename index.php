<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Shamim Shikhya Poribar</title>
	<link rel="stylesheet" href="css/style-home.css" />
</head>
<body>
	<div class="lg-container">
		<h1>SS Poribar</h1>
		<form action="arc_mage.php?ch=ck" id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="uname" id="uname" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="pass" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" id="login">Login</button>
			</div>      
			
		</form>
        
		<div id="message"></div>
	</div>
</body>
</html>