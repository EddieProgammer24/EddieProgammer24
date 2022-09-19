<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU Admission-Secondary School</title>
	<link rel="stylesheet" type="text/css" href="secondary_school.css">
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
	KAFU:SECONDARY SCHOOL INFO
</div>
	<center>
		<form method="post" autocomplete="off">
			<div class="input-group">
			<label>Name and address of secondary school attended</label>
			<input type="text" name="first_name" placeholder="Name" required><br><br>
			<input type="text" name="first_address" placeholder="Address" required><br><br>
			<input type="text" name="first_town" placeholder="Town" required><br><br>
			<label>DATES FROM</label>
			<input type="date" name="first_from" required ><br><br>
			<label>DATES TO</label>
			<input type="date" name="first_to" required><br><br>

			<input type="text" name="second_name" placeholder="Name" required><br><br>
			<input type="text" name="second_address" placeholder="Address" required><br><br>
			<input type="text" name="second_town" placeholder="Town" required><br><br>
			<label>DATES FROM</label>
			<input type="date" name="second_from"><br><br>
			<label>DATES TO</label>
			<input type="date" name="second_to"><br><br>

			<input type="text" name="third_name" placeholder="Name" required><br><br>
			<input type="text" name="third_address" placeholder="Address" required><br><br>
			<input type="text" name="third_town" placeholder="Town" required><br><br>
			<label>DATES FROM</label>
			<input type="date" name="third_from" ><br><br>
			<label>DATES TO</label>
			<input type="date" name="third_to" ><br><br>
		</div>
			<button type="submit" name="submit"><a href="exam.php"></a>Next</button>


		</form>
	</center>
	<?php 
	if(isset($_POST['submit'])){
		$first_name = $_POST['first_name'];
		$first_address = $_POST['first_address'];
		$first_town = $_POST['first_town'];
		$first_from = $_POST['first_from'];
		$first_to = $_POST['first_to'];

		$second_name = $_POST['second_name'];
		$second_address = $_POST['second_address'];
		$second_town = $_POST['second_town'];
		$second_from = $_POST['second_from'];
		$second_to = $_POST['second_to'];

		$third_name = $_POST['third_name'];
		$third_address = $_POST['third_address'];
		$third_town = $_POST['third_town'];
		$third_from = $_POST['third_from'];
		$third_to = $_POST['third_to'];

		//database connection
		$db = mysqli_connect('localhost','root','','kafu');

		$query = "INSERT INTO secondary_school(first_name,first_address,first_town,first_from,first_to,second_name,second_address,second_town,second_from,second_to,third_name,third_address,third_town,third_from,third_to)values('$first_name','$first_address','$first_town','$first_from','$first_to','$second_name','$second_address','$second_town','$second_from','$second_to','$third_name','$third_address','$third_town','$third_from','$third_to')";
		mysqli_query($db,$query);
		header('location:knec.php');




	}
	?>

</body>
</html>