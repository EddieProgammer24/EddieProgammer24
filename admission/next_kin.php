<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU Admission-Next Of Kin</title>
	<link rel="stylesheet" type="text/css" href="next_kin.css">
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
	KAFU:NEXT OF KIN
</div>
	<center>
	<form method="post" autocomplete="off">
		<div class="input-group">
		<label>12(a)Name of Next of Kin</label>
		<input type="text" name="kin_surname" placeholder="Surname" required><br><br>
		<input type="text" name="kin_firstname" placeholder="FirstName" required><br><br>
		<input type="text" name="kin_initial" placeholder="Initial/Other" required><br><br>
	

		<label>Address of Next of Kin</label>
		<input type="text" name="kin_address" placeholder="PO BOX" required><br><br>
		<input type="text" name="kin_town" placeholder="City/Town" required><br><br>
		<input type="text" name="kin_id" placeholder="ID Number" required><br><br>
		<input type="text" name="kin_tel" placeholder="Telephone(Landline)" required><br><br>
		<input type="text" name="kin_mobile" placeholder="Mobile Phone" required><br><br>
		<input type="email" name="kin_email" placeholder="Email Address" required><br><br>
	</div>
		<button type="submit" name="submit">Next</button>

	</form>
</center>
<?php 
//database connection
$db = mysqli_connect('localhost','root','','kafu');
if(isset($_POST['submit'])){
	$kin_surname = $_POST['kin_surname'];
	$kin_firstname = $_POST['kin_firstname'];
	$kin_initial = $_POST['kin_initial'];
	$kin_address = $_POST['kin_address'];
	$kin_town = $_POST['kin_town'];
	$kin_id = $_POST['kin_id'];
	$kin_tel = $_POST['kin_tel'];
	$kin_mobile = $_POST['kin_mobile'];
	$kin_email = $_POST['kin_email'];
	

	$query = "INSERT INTO next_of_kin (kin_surname,kin_firstname,kin_initial,kin_address,kin_town,kin_id,kin_tel,kin_mobile,kin_email)values('$kin_surname','$kin_firstname','$kin_initial','$kin_address','$kin_town','$kin_id','$kin_tel','$kin_mobile','$kin_email')";
	mysqli_query($db,$query);
	header('location:std_pob.php') ;

}
?>

</body>
</html>