<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU Admission:Others</title>
	<link rel="stylesheet" type="text/css" href="std_emergency.css">
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
	KAFU
</div>
	<center>
		<form method="post" autocomplete="off">
			<div class="input-group">
			<label>15.Give name and address of persons who can be contacted incase of an emergency.</label>
			<label>(i)</label>
			<input type="text" name="first_surname" placeholder="Surname" required><br><br>
			<input type="text" name="first_firstname" placeholder="FirstName" required><br><br>
			<input type="text" name="first_initial" placeholder="Initial/Other" required><br><br>
			<input type="text" name="first_relationship" placeholder="Relationship" required><br><br>
			<input type="text" name="first_address" placeholder="PO BOX" required><br><br>
			<input type="text" name="first_town" placeholder="Town/City" required><br><br>
			<input type="text" name="first_tel" placeholder="Telephone(Landline)" required><br><br>
			<input type="tex'" name="first_mobile" placeholder="Mobile Phone" required><br><br>
			<input type="email" name="first_email" placeholder="Email Address" required><br><br>
		</div>
			<button type="submit" name="submit">Next</button>
		</form>
	</center>
	<?php
	
	if(isset($_POST['submit'])){
		$first_surname = $_POST['first_surname'];
		$first_firstname = $_POST['first_firstname'];
		$first_initial = $_POST['first_initial'];
		$first_relationship = $_POST['first_relationship'];
		$first_address = $_POST['first_address'];
		$first_town = $_POST['first_town'];
		$first_tel = $_POST['first_tel'];
		$first_mobile = $_POST['first_mobile'];
		$first_email = $_POST['first_email'];

		//database connection
		$db = mysqli_connect('localhost','root','','kafu');

		$query = "INSERT INTO emergency_a(first_surname,first_firstname,first_initial,first_relationship,first_address,first_town,first_tel,first_mobile,first_email)values('$first_surname','$first_firstname','$first_intitial','$first_relationship','$first_address','$first_town','$first_tel','$first_mobile','$first_email')";
		mysqli_query($db,$query);
		header('location:std_emergency2.php');

	}

	?>

</body>
</html>