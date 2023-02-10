<?php
 include("Staffs_Register_Connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staffs Registration Form</title>
	<link rel="stylesheet" type="text/css" href="Staff_Register.css">
</head>
<body>
	<div class="container">
		<div class="lfDiv"></div>
		<div class="mdDiv">
	<form method="POST">
		<div class="heading">
			<center><h2>Signup to KIS</h2></center>
		</div>
		<div class="body">
		<label>Passport photo: </label><input type="file" name="passport"><br><br>	
		<label>Full Name: </label><input type="text" name="fullname" placeholder="Firstname Surname" required><br><br>
		<label>Birthdate: </label><input type="date" name="birthdate" required><br><br>
		<label class="Gen">Gender: </label><span class="Gender"><input type="radio" name="gender" value="Male" class="gender" required><b>Male</b> <input type="radio" name="gender" value="Female" class="gender" required><b>Female</b></span> <br><br>
		<label>Occupation: </label><input type="text" name="occupation" placeholder="Enter your occupation & position if any" required><br><br>
		<label>Phone NO: </label><input type="tel" pattern="[+]{1}[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" name="phone1" placeholder="+255-XXX-XXX-XXX"><br><br>
		<label>Phone NO: </label><input type="text" name="phone2" placeholder="Enter your phone number 2" required><br><br>
		<label>Home Address: </label><input type="text" name="address" placeholder="Enter your home address" required><br><br>
		<label>Email: </label><input type="email" name="email" placeholder="Enter your email address" required><br><br>
		<?php echo $errormsg_3; ?>
		<label>Password: </label><input type="password" name="password" placeholder="Create strong password for your account" required><br><br>
		<label>Confirm Password: </label><input type="password" name="cpassword" placeholder="Confirm your password" required><br><br>
		<?php echo $errormsg_2; ?>
		<center><button type="submit" name="submit" class="btn1">Submit</button> <button type="reset" class="btn1">Reset</button></center>
		</div>
		<?php echo $successmsg_1; ?>
		<?php //echo $errormsg_1; ?>
	</form>
	</div>
	<div class="rtDiv"></div>
	</div>
</body>
</html>