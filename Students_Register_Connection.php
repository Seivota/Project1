<?php
	include("DBconnection.php");

	$successmsg_1 = null;
	$errormsg_1 = null;
	$errormsg_2 = null;
	$errormsg_3 = null;

	if (!isset($_POST['submit'])) {
		$errormsg_1="<script>alert('Remember to click the submit button.');</script>"; //Error message when user tries to submit the form without clicking the submit button Eg; By pressing Enter
	}else {
		$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
		$birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$course = mysqli_real_escape_string($conn, $_POST['course']);
		$phone1 = mysqli_real_escape_string($conn, $_POST['phone1']);
		$phone2 = mysqli_real_escape_string($conn, $_POST['phone2']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

		$checkEmail_phrase = "SELECT Email FROM Students_Register WHERE Email='$email';";
		$checkEmail_compare = mysqli_query($conn, $checkEmail_phrase);
		$checkEmail_result = mysqli_fetch_assoc($checkEmail_compare);

		if ($email == isset($checkEmail_result['Email'])) {
			$errormsg_3 = '<p style="text-align: center; color: red; font-weight: bold;">Error! Email already exists.<br><br></p>';
		} else {
			if ($password!=$cpassword) {
			$errormsg_2 = '<p style="text-align: center; color: red; font-weight: bold;">Error! Passwords did not match.<br><br></p>';
			} else {
				$pwd = password_hash($password, PASSWORD_DEFAULT);
				$sql="INSERT INTO Students_Register(Fullname, Birthdate, Gender, Course, Phone1, Phone2, Address, Email, Password) values('$fullname', '$birthdate', '$gender', '$course', '$phone1', '$phone2', '$address', '$email', '$pwd');";
				if (!mysqli_query($conn, $sql)) {
					die("Error! connection to database failed.");
				} else {
				$successmsg_1 = "<script>alert('Congratulations! you have been registered successfully.');window.location.href='index.php';</script>";
				}
			}
		}
	}
	
?>