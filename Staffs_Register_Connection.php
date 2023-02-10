<?php
	session_start();
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
		$occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
		$phone1 = mysqli_real_escape_string($conn, $_POST['phone1']);
		$phone2 = mysqli_real_escape_string($conn, $_POST['phone2']);
		$address= mysqli_real_escape_string($conn, $_POST['address']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

		$checkEmail_phrase = "SELECT Email FROM Students_Register WHERE Email=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $checkEmail_phrase)) {
			echo "Error! Prepared statements connection failed.";
		} else {
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			$checkEmail_compare = mysqli_stmt_get_result($stmt);
			$checkEmail_result = mysqli_fetch_assoc($checkEmail_compare);
			if ($email == isset($checkEmail_result['Email'])) {
				$errormsg_3 = '<p style="text-align: center; color: red; font-weight: bold;">Error! Email already exists.<br><br></p>';
			} else {
				if ($password!=$cpassword) {
				$errormsg_2 = '<p style="text-align: center; color: red; font-weight: bold;">Error! Passwords did not match.<br><br></p>';
				} else {
					$pwd = password_hash($password, PASSWORD_DEFAULT);
					$sql="INSERT INTO Students_Register(Fullname, Birthdate, Gender, Occupation, Phone1, Phone2, Address, Email, Password) values(?,?,?,?,?,?,?,?,?);";
					$STMT = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($STMT, $sql)) {
						die("Error! Prepared statements connection failed.");
					} else {
						mysqli_stmt_bind_param($STMT, "sssssssss", $fullname, $birthdate, $gender, $occupation, $phone1, $phone2, $address, $email, $pwd);
						mysqli_stmt_execute($STMT);
						$result = mysqli_stmt_get_result($STMT);
						if ($result == FALSE) { 
							$successmsg_1 = "<script>alert('Congratulations! you have been registered successfully.');document.location='index.php';</script>";
						} else {
							die("Error! connection to database failed.");
						}	
					}
				}
			}
		}
	}	
/* NOTE: For successful queries, the php function " mysqli_stmt_get_result() " returns a resultset if the statement executed is SELECT, SHOW, DESCRIBE or EXPLAIN. For other successful queries it returns FALSE. */	
?>