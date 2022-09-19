<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU:Admission</title>
	<link rel="stylesheet" type="text/css" href="clubs_societies.css">
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
	<div class="header">KAFU</div>
	<center>
	<form method="post" autocomplete="off">
		<div class="input-group">
<label>22.Clubs and Societies:Which clubs and societies are you intrested in</label>
<label>Please Give Details In your Application</label>
<label>(a)First Choice</label>
<input type="text" name="first_choice" required>
<label>(b)Second Choice</label>
<input type="text" name="second_choice" required>
<label>(c)Third Choice</label>
<input type="text" name="third_choice" required>
<label>23.Do you suffer from any physical impairment?If so give details</label>
<label>No</label>
<input type="checkbox" name="physical_impairment" value="NO" id="checkbox">
<label>Yes</label>
<input type="checkbox" name="physical_impairment" value="YES" id="checkbox">
<input type="text" name="yes_details">
<label>24.Please Give any information you think is important to communicate to the university</label>
<input type="text" name="aob" required>
<label>I certify that the information I have provided is correct</label>
<label>Agree</label>
<input type="checkbox" name="agree" value="Agree" required>
<label>Date</label>
<input type="date" name="agree_date" required>
</div>
<button type="submit" name="submit">Finish</button>
</form></center>
<?php
if(isset($_POST['submit'])){
	$first_choice = $_POST['first_choice'];
	$second_choice = $_POST['second_choice'];
	$third_choice = $_POST['third_choice'];
	$physical_impairment = $_POST['physical_impairment'];
	$yes_details = $_POST['yes_details'];
	$aob = $_POST['aob'];
	$agree = $_POST['agree'];
	$agree_date = $_POST['agree_date'];

	//database connection
	$db = mysqli_connect('localhost','root','','kafu');

	$query = "INSERT INTO clubs_societies(first_choice,second_choice,third_choice,physical_impairment,yes_details,aob,agree,agree_date)values('$first_choice','$second_choice','$third_choice','$physical_impairment','$yes_details','$aob','$agree','$agree_date')";
	mysqli_query($db,$query);
	header('location:about.php');

} 
?>
</body>
</html>