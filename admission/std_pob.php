<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU Admission:Student Place Of Birth</title>
	<link rel="stylesheet" type="text/css" href="std_pob.css">
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
	KAFU:PLACE OF BIRTH
</div>
	<center>
		<form method="post" autocomplete="off">
			<div class="input-group">
			<label>13.Place of Birth</label>
			<input type="text" name="pob_village" placeholder="Village" required><br><br>
			<input type="text" name="pob_location" placeholder="Location" required><br><br>
			<input type="text" name="pob_chief" placeholder="Name Of Chief" required><br><br>
			<input type="text" name="pob_division" placeholder="Division" required><br><br>
			<input type="text" name="pob_county" placeholder="County" required><br><br>
			<input type="text" name="pob_constituency" placeholder="Constituency" required><br><br>
			<label>14.Place of Permanent Residence</label>
			<input type="text" name="std_village" placeholder="Village" required><br><br>
			<input type="text" name="nearest_town" placeholder="Nearest Town" required><br><br>
			<input type="text" name="nearest_police" placeholder="Nearest Police Station" required><br><br>
			<input type="text" name="std_location" placeholder="Location" required><br><br> 
			<input type="text" name="assistant_chief" placeholder="Assistant Chief" required><br><br>
			<input type="text" name="chief" placeholder="Name of Chief" required><br><br>
		</div>
			<button type="submit" name="submit">Next</button>
		</form>
	</center>
	<?php
	

	if(isset($_POST['submit'])){
		$pob_village = $_POST['pob_village'];
		$pob_location = $_POST['pob_location'];
		$pob_chief = $_POST['pob_chief'];
		$pob_division = $_POST['pob_division'];
		$pob_county = $_POST['pob_county'];
		$pob_constituency = $_POST['pob_constituency'];
		$std_village = $_POST['std_village'];
		$nearest_town = $_POST['nearest_town'];
		$nearest_police = $_POST['nearest_police'];
		$std_location = $_POST['std_location'];
		$assistant_chief = $_POST['assistant_chief'];
		$chief = $_POST['chief'];

		//database connection
		$db = mysqli_connect('localhost','root','','kafu');
		$query = "INSERT INTO pob(pob_village,pob_location,pob_chief,pob_division,pob_county,pob_constituency,std_village,nearest_town,nearest_police,std_location,assistant_chief,chief)values('$pob_village','$pob_location','$pob_chief','$pob_division','$pob_county','$pob_constituency','$std_village','$nearest_town','$nearest_police','$std_location','$assistant_chief','$chief')";
		mysqli_query($db,$query);
		header('location:std_emergency1.php');

		

	}


	?>

</body>
</html>