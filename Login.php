<?php 
	include("Loginconnection.php");	 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="Login.css">	
</head>
<body>	
	<div class="container">
		<div class="lDiv"></div>
		<div class="mDiv">
			<form method="POST">
				<div class="Heading">
					<center><h2>LOGIN</h2></center>
				</div>
				<div class="body">
					<center>
					<input type="email" name="Email" placeholder="Enter your email" required><br><br>
					<?php echo $errormsg_2; ?>
					<input type="password" name="Password" placeholder="Enter your password" required><br><br>
					<button type="submit" name="submit" class="btn1">Login</button><br><br>
					<a href="#" class="fpwd">Forgot password?</a><br>
					</center>				
					<?php //echo $errormsg_1; ?>
					<?php echo $errormsg_3; ?>
				</div>
			</form>						
		</div>
		<div class="rDiv"></div>
	</div>
</body>
</html>
