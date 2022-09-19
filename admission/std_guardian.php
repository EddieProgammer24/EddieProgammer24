<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU Addmission-Student Guardian</title>
	<link rel="stylesheet" type="text/css" href="std_guardian.css">
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
	KAFU:GUARDIAN DETAILS
</div>
	<center>
		<form method="post" autocomplete="off">
			<div class="input-group">
	<label>10(a)Full Name of Guardian</label>
	<input type="text" name="guardian_surname" placeholder="Surname" required><br><br>
	<input type="text" name="guardian_firstname" placeholder="FirstName" required><br><br>
	<input type="text" name="guardian_initial" placeholder="Initial/Other" required><br><br>
	<input type="text" name="guardian_occupation" placeholder="Occupation" required><br><br>
	<input type="text" name="guardian_id" placeholder="ID Number" required><br><br>
</div>

<div class="input-group">
	<label>11.Addres Of  Parent/Guardian</label>
	<input type="text" name="guardian_address" placeholder="P.O BOX" required><br><br>
	<input type="text" name="guardian_city" placeholder="City/Town" required><br><br>
	<input type="text" name="guardian_tel" placeholder="Telephone(Landline)" required><br><br>
	<input type="text" name="guardian_mobile" placeholder="Mobile Phone" required><br><br>
	<input type="email" name="guardian_email" placeholder="Email Address" required><br><br>
</div>
	<button type="submit" name="submit">Next</button>
</form></center>
<?php
if(isset($_POST['submit'])){
$guardian_surname = $_POST['guardian_surname'];
$guardian_firstname = $_POST['guardian_firstname'];
$guardian_initial = $_POST['guardian_initial'];
$guardian_occupation = $_POST['guardian_occupation'];
$guardian_id = $_POST['guardian_id'];
$guardian_address =$_POST['guardian_address'];
$guardian_city = $_POST['guardian_city'];
$guardian_tel = $_POST['guardian_tel'];
$guardian_mobile = $_POST['guardian_mobile'];
$guardian_email = $_POST['guardian_email'];

//database connection
$db = mysqli_connect('localhost','root','','kafu');

$query = "INSERT INTO guardian_details(guardian_surname,guardian_firstname,guardian_initial,guardian_occupation,guardian_id,guardian_address,guardian_city,guardian_tel,guardian_mobile,guardian_email)values('$guardian_surname','$guardian_firstname','$guardian_initial','$guardian_occupation','$guardian_id','$guardian_address','$guardian_city','$guardian_tel','$guardian_mobile','$guardian_email')";

mysqli_query($db,$query);
header('location:next_kin.php');


}


?>

</body>
</html>