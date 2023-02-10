<?php
	session_start();
	include("DBconnection.php");

	$errormsg_1 = null;
	$errormsg_2 = null;
	$errormsg_3 = null;

	if (!isset($_POST['submit'])) {
		$errormsg_1="<script>alert('Remember to click the submit button.');</script>";
	} else {
		$Email = mysqli_real_escape_string($conn, $_POST['Email']);
		$Password = mysqli_real_escape_string($conn, $_POST['Password']);

		$checkEmail_phrase = "SELECT Email FROM students_register WHERE Email=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $checkEmail_phrase)) {
			echo "Error-1! Prepared statements connection failed";
		} else {
			mysqli_stmt_bind_param($stmt, "s", $Email);
			mysqli_stmt_execute($stmt);
			$checkEmail_compare = mysqli_stmt_get_result($stmt);
			$checkEmail_result = mysqli_fetch_assoc($checkEmail_compare);

			if ($Email!= isset($checkEmail_result['Email'])) {
				$errormsg_2 = '<p style="text-align: center; color: red; font-weight: bold;">Login failed! Incorrect email address.<br><br></p>';
			}else {
				$checkPwd_phrase = "SELECT Password FROM Students_Register WHERE Email=?;";
				$STMT = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($STMT, $checkPwd_phrase)) {
					echo "Error-2! Prepared statements connection failed";
				} else {
					mysqli_stmt_bind_param($STMT, "s", $Email);
					mysqli_stmt_execute($STMT);
					$checkPwd_compare = mysqli_stmt_get_result($STMT);
					$checkPwd_result = mysqli_fetch_assoc($checkPwd_compare);

					$PWD = password_verify($Password, $checkPwd_result['Password']);
					if ($PWD == FALSE) {
						$errormsg_3="<script>alert('Login failed! Incorrect password.');</script>";
					}else{
						$_SESSION['emailSession'] = $Email;
						header("Location: Student_Account.php");
					}
				}
			}
		}
	}	
?>	