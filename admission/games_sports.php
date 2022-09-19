<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU:Admission</title>
	<link rel="stylesheet" type="text/css" href="games_sports.css">
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
<label>01.Soccer</label>
<input type="text" name="soccer" placeholder="Enter Your Registration Number">
<label>02.Hockey</label>
<input type="text" name="hockey" placeholder="Enter Your Registration Number">
<label>03.Basketball</label>
<input type="text" name="basketball" placeholder="Enter Your Registration Number">
<label>04.Netball</label>
<input type="text" name="netball" placeholder="Enter Your Registration Number">
<label>05.Tennis</label>
<input type="text" name="tennis" placeholder="Enter Your Registration Number">
<label>06.Badminton</label>
<input type="text" name="badminton" placeholder="Enter Your Registration Number">
<label>07.Rugby</label>
<input type="text" name="rugby" placeholder="Enter Your Registration Number">
<label>08.Volleyball</label>
<input type="text" name="volleyball" placeholder="Enter Your Registration Number">
<label>09.Athletics</label>
<input type="text" name="athletics" placeholder="Enter Your Registration Number">
<label>10.Swimming</label>
<input type="text" name="swimming" placeholder="Enter Your Registration Number">
<label>11.Table Tennis</label>
<input type="text" name="table_tennis" placeholder="Enter Your Registration Number">
<label>12.Darts</label>
<input type="text" name="darts" placeholder="Enter Your Registration Number">
<label>13.Karate</label>
<input type="text" name="karate" placeholder="Enter Your Registration Number">
<label>14.Martial Arts</label>
<input type="text" name="martial_arts" placeholder="Enter Your Registration Number">
<label>15.Others</label>
<input type="text" name="others" placeholder="Enter Your Registration Number">
<label>If you represented your school,etc:in games please give details:</label>
<input type="text" name="details">
</div>
<button type="submit" name="submit">Next</button>

</form>
</center>
<?php
if(isset($_POST['submit'])){
	$soccer = $_POST['soccer'];
	$hockey = $_POST['hockey'];
	$basketball = $_POST['basketball'];
	$netball = $_POST['netball'];
	$tennis = $_POST['tennis'];
	$badminton = $_POST['badminton'];
	$rugby = $_POST['rugby'];
	$volleyball = $_POST['volleyball'];
	$athletics = $_POST['athletics'];
	$swimming = $_POST['swimming'];
	$table_tennis = $_POST['table_tennis'];
	$darts = $_POST['darts'];
	$karate = $_POST['karate'];
	$martial_arts = $_POST['martial_arts'];
	$others = $_POST['others'];
	$details = $_POST['details'];

	//database connection
	$db = mysqli_connect('localhost','root','','kafu');

	$query = "INSERT INTO games_sports(soccer,hockey,basketball,netball,tennis,badminton,rugby,volleyball,athletics,swimming,table_tennis,darts,karate,martial_arts,others,details)values('$soccer','$hockey','$basketball','$netball','$tennis','$badminton','$rugby','$volleyball','$athletics','$swimming','$table_tennis','$darts','$karate','$martial_arts','$others','$details')";
	mysqli_query($db,$query);
	header('location:institutions.php');
}

?>
</body>
</html>