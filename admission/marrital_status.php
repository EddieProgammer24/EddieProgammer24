<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU Admission-Student Marrital Status</title>
	<link rel="stylesheet" type="text/css" href="marrital_status.css">
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
	<label>8(a).Marrital Status</label>
</div>
	1.Single
	<input type="checkbox" name="marrital_status" value="Single"/>
	2.Married
	<input type="checkbox" name="marrital_status" value="Married"/>
	<div class="input-group">
	<label>(b).Name and Address Of Spouse(If Married)</label>
	<input type="text" name="spouse_surname" placeholder="Surname" required/><br><br>
	<input type="text" name="spouse_firstname" placeholder="Firstname" required/><br><br>
	<input type="text" name="spouse_initial" placeholder="Initial/Other" required/><br><br>
	<input type="text" name="spouse_address" placeholder="P.O BOX" required><br><br>
	<input type="text" name="spouse_town" placeholder="City/Town" required><br><br>
	<input type="text" name="spouse_tel" placeholder="Telephone(Landline)" required><br><br>
	<input type="tel" name="spouse_phone" placeholder="Mobile Phone" required><br><br>
	<input type="email" name="spouse_email" placeholder="Email Address" ><br><br>
</div>
	<button type="submit" name="submit">Next</button>
</form></center>
<?php
//db connect
$db = mysqli_connect('localhost','root','','kafu');
if(isset($_POST['submit'])){
	$marrital_status = $_POST['marrital_status'];
	$spouse_surname = $_POST['spouse_surname'];
	$spouse_firstname = $_POST['spouse_firstname'];
	$spouse_initial = $_POST['spouse_initial'];
	$spouse_address = $_POST['spouse_address'];
	$spouse_town = $_POST['spouse_town'];
	$spouse_tel = $_POST['spouse_tel'];
	$spouse_phone = $_POST['spouse_phone'];
	$spouse_email = $_POST['spouse_email'];

	$query = "INSERT INTO marrital_status (marrital_status,spouse_surname,spouse_firstname,spouse_initial,spouse_address,spouse_town,spouse_tel,spouse_phone,spouse_email)values('$marrital_status','$spouse_surname','$spouse_firstname','$spouse_initial','$spouse_address','$spouse_town','$spouse_tel','$spouse_phone','$spouse_email')";
	mysqli_query($db,$query);
	header('location:std_father.php');
}
?>

</body>
</html>