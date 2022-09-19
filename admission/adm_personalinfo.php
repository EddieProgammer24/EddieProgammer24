<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU ADMISSION-Personal Information</title>
	<link rel="stylesheet" type="text/css" href="adm_personalinfo.css">
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
<div>
	<center>
	<p><b>STUDENTS PERSONAL DETAILS</b></p>
	<div class="info">
	<p>Information in this  form is intended to help the Office of the Registrar understand<br> the student better.It will be used for the purpose of improving the Student's welfare<br> while at the university.</p></div>
</center>
</div>
<center>
	<div class="header">
		KAFU:STUDENT'S PERSONAL INFORMATION
	</div>
<form method="post" autocomplete="off">
	<div class="input-group">
	<label>1.Name</label>
	<input type="text" name="surname" placeholder="Enter Your Surname" required/><br><br>
	<input type="text" name="firstname" placeholder="Enter Your FirstName" required/><br><br>
	<input type="text" name="initial" placeholder=" Enter Initial/Other" required/><br><br>
</div>

<div class="input-group"> 
	<label>2.National Registration Number(ID)</label>
	<input type="text" name="national_number" placeholder="National Registration Number" required /><br>
</div>

<div class="input-group">
	<label>County</label>
	<input type="text" name="county" placeholder="Enter Your County"required/><br>
</div>

<div class="input-group">
	<label>University Registration Number</label>
	<input type="text" name="reg_num" placeholder="Enter Your Registration Number"required/><br>
</div>


	<label>Year Of Study</label><br>
	1.First
	<input type="checkbox" name="year_study" value="First" id="year_study"/>
	2.Second
	<input type="checkbox" name="year_study" value="Second" id="year_study"/>
	3.Third
	<input type="checkbox" name="year_study" value="Third" id="year_study"/>
	4.Fourth
	<input type="checkbox" name="year_study" value="Fourth" id="year_study"/>
	5.Fifth
	<input type="checkbox" name="year_study" value="Fifth" id="year_study"/><br>

<div class="input-group">
	<label>4.Date Of Birth</label>
	<input type="date" name="dob" required>
</div>
	<p>5.Religion</p>
	1.Protestant
	<input type="checkbox" name="religion" value="Protestant" id="religion/">
	2.Catholic
	<input type="checkbox" name="religion" value="Catholic" id="religion"/>
	3.Muslim
	<input type="checkbox" name="religion" value="Muslim" id="religion"/>

	<div class="input-group">
	<label>4.Others</label>
	<input type="checkbox" name="religion" value="Others" id="religion"/>
	<input type="text" name="religion_others" placeholder="Specify" required/>
</div>
	<p>6.Nationality</p>
	1.Kenyan
	<input type="checkbox" name="nationality" value="Kenyan" id="nationality"/>
	2.East African
	<input type="checkbox" name="nationality" value="East African" id="nationality"/>
	<div class="input-group">
	<label>3.Others</label>
	<input type="checkbox" name="nationality" value="Others" id="nationality"/><br>
	<input type="text" name="nationality_others" placeholder="Specify" required/>
</div>

<div class="input-group">
	<label>7.Home Contact Address(Where You Can Be Contacted During Vacations)</label>
	<input type="text" name="student_address" placeholder="Enter Your:P.O BOX" required/><br><br>
	<input type="text" name="student_town" placeholder="Enter Your:City/Town" required/><br><br>
	<input type="text" name="student_tel" placeholder="Enter Your:Telephone/Landline" required/><br><br>
	<input type="text" name="student_mobile" placeholder="Enter Your:Mobile Phone" required/><br><br>
	<input type="email" name="student_email" placeholder="Enter Your:Email Address" required/><br><br>
</div>
	<button type="submit" name="submit"><a href="marrital_status.php">Next</a></button>

</form></center>
<?php
if(isset($_POST['submit'])){
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
	$initial = $_POST['initial'];
	$national_number = $_POST['national_number'];
	$county = $_POST['county'];
	$reg_num = $_POST['reg_num'];
	$year_study = $_POST['year_study'];
	$religion = $_POST['religion'];
	$religion_others = $_POST['religion_others'];
	$nationality = $_POST['nationality'];
	$nationality_others = $_POST['nationality_others'];
	$student_address = $_POST['student_address'];
	$student_town = $_POST['student_town'];
	$student_tel = $_POST['student_tel'];
	$student_mobile = $_POST['student_mobile'];
	$student_email = $_POST['student_email'];

	

	//database connection
	$db = mysqli_connect('localhost','root','','kafu');

	$query = "INSERT INTO student_details(surname,firstname,initial,national_number,county,reg_num,year_study,religion,religion_others,nationality,nationality_others,student_address,student_town,student_tel,student_mobile,student_email)values('$surname','$firstname','$initial','$national_number','$county','$reg_num','$year_study','$religion','$religion_others','$nationality','$nationality_others','$student_address','$student_town','$student_tel','$student_mobile','$student_email')";

	mysqli_query($db,$query);




}
?>

</body>
</html>