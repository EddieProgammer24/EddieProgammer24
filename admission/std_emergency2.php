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
			<label>(ii)</label>
			<input type="text" name="second_surname" placeholder="Surname" required><br><br>
			<input type="text" name="second_firstname" placeholder="FirstName" required><br><br>
			<input type="text" name="second_initial" placeholder="Initial/Other" required><br><br>
			<input type="text" name="second_relationship" placeholder="Relationship" required><br><br>
			<input type="text" name="second_address" placeholder="PO BOX" required><br><br>
			<input type="text" name="second_town" placeholder="Town/City" required><br><br>
			<input type="text" name="second_tel" placeholder="Telephone(Landline)" required><br><br>
			<input type="tex'" name="second_mobile" placeholder="Mobile Phone" required><br><br>
			<input type="email" name="second_email" placeholder="Email Address" required><br><br>
		</div>
			<button type="submit" name="submit"><a href="secondary_school.php"></a>Next</button>
		</form>
	</center>
	<?php
	if(isset($_POST['submit'])){
		$second_surname = ($_POST['second_surname']);
		$second_firstname = $_POST['second_firstname'];
		$second_initial = $_POST['second_initial'];
		$second_relationship = $_POST['second_relationship'];
		$second_address = $_POST['second_address'];
		$second_town = $_POST['second_town'];
		$second_tel = $_POST['second_tel'];
		$second_mobile = $_POST['second_mobile'];
		$second_email = $_POST['second_email'];
	}
	//database connection
	$db = mysqli_connect('localhost','root','','kafu');

	$query = "INSERT INTO emergency_b(second_surname,second_firstname,second_initial,second_relationship,second_address,second_town,second_tel,second_mobile,second_email)values('$second_surname','$second_firstname','$second_initial','$second_relationship','$second_address','$second_town','$second_tel','$second_mobile','$second_email')";
	mysqli_query($db,$query);
	header('location:secondary_school.php');


	?>

</body>
</html>