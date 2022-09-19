<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU:Admission</title>
	<link rel="stylesheet" type="text/css" href="institution.css">
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
	<label>21.Any Other Institution Attended To and Qualifications Attained</label>
	<label>Name</label>
	<input type="text" name="inst_a" required>
	<label>Specialization</label>
	<input type="text" name="inst_a_spec" required>
	<label>Qualification</label>
	<input type="text" name="inst_a_qlfy" required><br><br><br>
	<label>Name</label>
	<input type="text" name="inst_b" required>
	<label>Specialization</label>
	<input type="text" name="inst_b_spec" required>
	<label>Qualification</label>
	<input type="text" name="inst_b_qlfy" required><br><br><br>
	<label>Name</label>
	<input type="text" name="inst_c" required>
	<label>Specialization</label>
	<input type="text" name="inst_c_spec" required>
	<label>Qualification</label>
	<input type="text" name="inst_c_qlfy" required>
</div>
<button type="submit" name="submit">Next</button>
</form>
</center>
<?php 
if(isset($_POST['submit'])){
	$inst_a = $_POST['inst_a'];
	$inst_a_spec = $_POST['inst_a_spec'];
	$inst_a_qlfy = $_POST['inst_a_qlfy'];
	$inst_b = $_POST['inst_b'];
	$inst_b_spec = $_POST['inst_b_spec'];
	$inst_b_qlfy = $_POST['inst_b_qlfy'];
	$inst_c = $_POST['inst_c'];
	$inst_c_spec = $_POST['inst_c_spec'];
	$inst_c_qlfy = $_POST['inst_c_qlfy'];

	//database connection
	$db = mysqli_connect('localhost','root','','kafu');

	$query = "INSERT INTO institutions(inst_a,inst_a_spec,inst_a_qlfy,inst_b,inst_b_spec,inst_b_qlfy,inst_c,inst_c_spec,inst_c_qlfy) values ('$inst_a','$inst_a_spec','$inst_a_qlfy','$inst_b','$inst_b_spec','$inst_b_qlfy','$inst_c','$inst_c_spec','$inst_c_qlfy')";
	mysqli_query($db,$query);
	header('location:clubs_societies.php');



}
?>



</body>
</html>