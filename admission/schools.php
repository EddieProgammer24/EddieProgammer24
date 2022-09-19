<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU:ADMISSION</title>
	<link rel="stylesheet" type="text/css" href="schools.css">
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
	<label>18.Name and Address of School Attended for KACE/"A" Level(Where applicable)</label>
	<label>(a)Name</label>
	<input type="text" name="school_name" required>
	<label>(b)Address</label>
	<input type="text" name="school_address" placeholder="P.O BOX" required><br><br>
	<input type="text" name="school_town" placeholder="Town/City"><br><br>
	<label>19.KACE Results"A"Level Results(Subject and Grades)</label>
	<input type="text" name="subject_a" placeholder="Subject & Grade" required><br><br>
	<input type="text" name="subject_b" placeholder="Subject & Grade" required><br><br>
	<input type="text" name="subject_c" placeholder="Subject & Grade" required><br><br>
	<input type="text" name="subject_d" placeholder="Subject & Grade" required><br><br>
	<input type="text" name="subject_e" placeholder="Subject & Grade" required><br><br>
	<input type="text" name="subject_f" placeholder="Subject & Grade" required><br><br>
</div>
<button type="submit" name="submit">Next</button>
</form>
</center>

</body>
<?php
if(isset($_POST['submit'])){
	$school_name = $_POST['school_name'];
	$school_address = $_POST['school_address'];
	$school_town = $_POST['school_town'];
	$subject_a = $_POST['subject_a'];
	$subject_b = $_POST['subject_b'];
	$subject_c = $_POST['subject_c'];
	$subject_d = $_POST['subject_d'];
	$subject_e = $_POST['subject_e'];
	$subject_f = $_POST['subject_f'];

	//database connection
	$db = mysqli_connect('localhost','root','','kafu');

	$query = "INSERT INTO schools(school_name,school_address,school_town,subject_a,subject_b,subject_c,subject_d,subject_e,subject_f)values('$school_name','$school_address','$school_town','$subject_a','$subject_b','$subject_c','$subject_d','$subject_e','$subject_f')";
	mysqli_query($db,$query);
	header('location:games_sports.php');

}
?>
</html>