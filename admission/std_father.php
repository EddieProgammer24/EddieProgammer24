<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU Admission-Father's Details</title>
	<link rel="stylesheet" type="text/css" href="std_father.css">
</head>
<body>
	<div class="logo">
	<img src="images/kafu_logo.jpg" width="150px">
</div>
<div class="info">
	Tel 0773040235/077137339<br>
	E-mail:registar_aa@kafuco.ac.ke<br>
	Website:www.kafuco.ac.ke<br>
</div>
<div>
	<center><p><b>KAIMOSI FRIENDS UNIVERSITY</b></p></center>
	<center><p><b>Office Of The Registrar(Academic Affairs)</b></p></center>

</div>
<div class="header">
	KAFU:MARRITAL STATUS
</div>
	<center>
	<form method="post" autocomplete="off">
		<div class="input-group">
		<label>9(a).Full Name Of Father</label>
		<input type="text" name="father_surname" placeholder="Surname" required><br><br>
		<input type="text" name="father_firstname" placeholder="FirstName" required><br><br>
		<input type="text" name="father_initial" placeholder="Initial/Other" required><br><br>
	</div>
		Deceased
		<input type="checkbox" name="father_status" value="Deceased"/>
		Alive
		<input type="checkbox" name="father_status" value="Alive"/><br><br>
		<div class="input-group">
			<label>Occupation</label>
		<input type="text" name="father_occupation" placeholder="Occupation" required/><br><br>
		<label>Date Of Birth</label>
		<input type="date" name="father_dob"><br><br>
	</div>

	<div class="input-group">
		<label>(b).Full Name Of Mother</label>
		<input type="text" name="mother_surname" placeholder="Surname" required><br><br>
		<input type="text" name="mother_firstname" placeholder="FirstName" required><br><br>
		<input type="text" name="mother_initial" placeholder="Initial/Other" required><br><br>
	</div>
		Deceased
		<input type="checkbox" name="mother_status" value="Deceased"/>
		Alive
		<input type="checkbox" name="mother_status" value="Alive"/><br><br>
		<div class="input-group">
			<label>Occupation</label>
		<input type="text" name="mother_occupation" placeholder="Occupation" required/><br><br>

		<label>Date Of Birth</label>
		<input type="date" name="mother_dob"><br><br>
	</div>

		<button type="submit" name="submit"><a href="std_guardian.php"></a>Next</button>
	</form></center>
	<?php  
	if(isset($_POST['submit'])){
		$father_surname = $_POST['father_surname'];
		$father_firstname = $_POST['father_firstname'];
		$father_initial = $_POST['father_initial'];
		$father_status = $_POST['father_status'];
		$father_occupation = $_POST['father_occupation'];
		$father_dob = $_POST['father_dob'];

		$mother_surname = $_POST['mother_surname'];
		$mother_firstname = $_POST['mother_firstname'];
		$mother_initial = $_POST['mother_initial'];
		$mother_status = $_POST['mother_status'];
		$mother_occupation = $_POST['mother_occupation'];
		$mother_dob = $_POST['mother_dob'];

		//database connection
		$db = mysqli_connect('localhost','root','','kafu');

		$query = "INSERT INTO parent_details(father_surname,father_firstname,father_initial,father_status,father_occupation,father_dob,mother_surname,mother_firstname,mother_initial,mother_status,mother_occupation,mother_dob)values('$father_surname','$father_firstname','$father_initial','$father_status','$father_occupation','$father_dob','$mother_surname','$mother_firstname','$mother_initial','$mother_status','$mother_occupation','$mother_dob')";

		mysqli_query($db,$query);
		header('location:std_guardian.php');




	}

	?>

</body>
</html>