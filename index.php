<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>StudentsRegistrationSystem</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="container">
		<div class="leftDiv"></div>
		<div class="midDiv">
			<div  class="home_heading">
			<!--<button class="btnExit" onclick="window.close();">Exit</button>	-->
			<center><h2>KIUT INFORMATION SYSTEM - KIS</h2></center>
			</div>
			<div class="cont">
			<div class="left"><center><P style="padding-top: 20px;"><span style="color: green; letter-spacing: 2px;">Are you new to KIS?</span><br><span style="color:green; font-weight: bold;">STUDENT</span><br><a href="Students_Register.php"><button class="btn">Signup Here!</button></a></P></center></div>
			<div class="right"><center><p style="padding-top: 20px;"><span style="color: green; letter-spacing: 2px;">Are you new to KIS?</span><br><span style="color:green; font-weight: bold;">STAFF</span><br><a href="Staff_Register.php"><button class="btn">Signup Here!</button></a></p></center></div>
			</div>
			<?php 
				include("Login.php");
			?>
		</div>
		<div class="rightDiv"></div>
	</div>
</body>
</html>