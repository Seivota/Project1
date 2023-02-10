<?php 
	session_start();
	include("DBconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="Student_Account.css">
</head>
<body>
	<div class="container">
	<div class="LDiv"></div>
	<div class="MDiv">
		<h2>Personal Information</h2>
		<table cellspacing="0">
			<?php 
			$emailFromSession = $_SESSION['emailSession'];
			$phrase1 = "SELECT * FROM Students_Register WHERE Email='$emailFromSession';"; 
			$compare1 = mysqli_query($conn, $phrase1);
			while ($result1 = mysqli_fetch_assoc($compare1)) {
			?>
			<tr>
				<th>
					NAME:
				</th>
				<td>
					<?php
						echo $result1['Fullname'];
					?>
				</td>
			</tr>
			<tr>
				<th>
					DOB:
				</th>	
				<td>
					<?php
						echo $result1['Birthdate']; 
					?>
				</td>
			</tr>
			<tr>
				<th>
					SEX:
				</th>	
				<td>
					<?php
						echo $result1['Gender'];
					?>
				</td>
			</tr>
		</table>
		<br><br>
		<h2>Contacts & Address</h2>
		<table>
			<tr>
				<th>
					Phone 1:
				</th>
				<td>
					<?php 
						echo $result1['Phone1'];
					?>
				</td>
			</tr>
			<tr>
				<th>
					Phone 2:
				</th>	
				<td>
					<?php
						echo $result1['Phone2'];
					?>
				</td>
			</tr>
			<tr>
				<th>
					Email:
				</th>	
				<td>
					<?php 
						echo $result1['Email'];
					?>
				</td>
			</tr>
			<tr>
				<th>
					Address:
				</th>	
				<td>
					<?php 
						echo $result1['Address'];
					?>
				</td>
			</tr>
		</table>
		<br><br>
		<h2>FACULTIES</h2>
		<table class="faculties">
			<tr>
				<td>Allied Health Sciences</td>
			</tr>
			<tr>	
				<td>Computing, Management & Social Sciences</td>
			</tr>
			<tr>	
				<td>Education & Legal Studies</td>
			</tr>
			<tr>	
				<td>Medicine & Pharmaceutical Sciences</td>
			</tr>
		</table>
		<br><br>
		<h2>Programmes</h2>
		<table class="programmes">
			<tr>
				<td>Bachelor of Computer Science</td>
			</tr>
			<tr>	
				<td>Bachelor of Information Technology</td>
			</tr>
			<tr>	
				<td>Bachelor of Medicine & Surgery</td>
			</tr>
			<tr>	
				<td>Bachelor of Pharmacy</td>
			</tr>
			<tr>
				<td>Bachelor of Medical Laboratory Science</td>
			</tr>
			<tr>	
				<td>Bachelor of Social Work and Social Administration</td>
			</tr>
			<tr>	
				<td>Bachelor of Public Administration</td>
			</tr>
			<tr>	
				<td>Bachelor of Science with Education</td>
			</tr>
			<tr>	
				<td>Bachelor of Laws</td>
			</tr>
			<tr>
				<td>Bachelor of Art with Education</td>
			</tr>
			<tr>	
				<td>Bachelor of Conflict Resolution and Peace Building</td>
			</tr>
			<tr>	
				<td>Bachelor of Guidance and Counseling</td>
			</tr>
			<tr>
				<td>Bachelor of Business Administration</td>
			</tr>
			<tr>	
				<td>Human Resources Management</td>
			</tr>
		</table>
	</div>
	<div class="RDiv"></div>
	</div>
	<?php
		}
	?>
</body>
</html>