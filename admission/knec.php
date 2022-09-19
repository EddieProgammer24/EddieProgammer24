<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU:Admission</title>
	<link rel="stylesheet" type="text/css" href="knec.css">
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
	<form method="post">
		<div class="input-group">
	<label>17.KCE/KCSE or equivalent Results(Subjects & Grade)</label>
	<input type="text" name="subject_1" placeholder="Subject & Grade" required><br><br>
	<input type="text" name="subject_2" placeholder="Subject & Grade" required><br><br>
	<input type="text" name="subject_3" placeholder="Subject & Grade" required><br><br>
	<input type="text" name="subject_4" placeholder="Subject & Grade" required><br><br>
	<input type="text" name="subject_5" placeholder="Subject & Grade" required><br><br>
	<input type="text" name="subject_6" placeholder="Subject & Grade" required><br><br>
	<label>Mean Score/Divison(where applicable)</label>
	<input type="text" name="mean_score" required>

</div>
<button type="submit" name="submit">Next</button>
</form>
</center>
<?php 
if(isset($_POST['submit'])){
	$subject_1 = $_POST['subject_1'];
	$subject_2 = $_POST['subject_2'];
	$subject_3 = $_POST['subject_3'];
	$subject_4 = $_POST['subject_4'];
	$subject_5 = $_POST['subject_5'];
	$subject_6 = $_POST['subject_6'];

	//database connection
	$db = mysqli_connect('localhost','root','','kafu');

	$query = "INSERT INTO knec(subject_1,subject_2,subject_3,subject_4,subject_5,subject_6)values('$subject_1','$subject_2','$subject_3','$subject_4','$subject_5','$subject_6')";
	mysqli_query($db,$query);
	header('location:schools.php');

}
?>
	


</body>
</html>