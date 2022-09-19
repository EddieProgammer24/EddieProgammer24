<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
$surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
$firstname = mysqli_real_escape_string($mysqli,$_POST['firstname']);
$initial = mysqli_real_escape_string($mysqli,$_POST['initial']);
$national_number = mysqli_real_escape_string($mysqli,$_POST['national_number']);
$county = mysqli_real_escape_string($mysqli,$_POST['county']);
$reg_num = mysqli_real_escape_string($mysqli,$_POST['reg_num']);
$year_study = mysqli_real_escape_string($mysqli,$_POST['year_study']);
$religion = mysqli_real_escape_string($mysqli,$_POST['religion']);
$religion_others = mysqli_real_escape_string($mysqli,$_POST['religion_others']);
$nationality = mysqli_real_escape_string($mysqli,$_POST['nationality']);
$nationality_others = mysqli_real_escape_string($mysqli,$_POST['nationality_others']);
$student_address = mysqli_real_escape_string($mysqli,$_POST['student_address']);
$student_town = mysqli_real_escape_string($mysqli,$_POST['student_town']);
$student_tel = mysqli_real_escape_string($mysqli,$_POST['student_tel']);
$student_mobile = mysqli_real_escape_string($mysqli,$_POST['student_mobile']);
$student_email = mysqli_real_escape_string($mysqli,$_POST['student_email']);


if(empty($surname) || empty($firstname) || empty($initial) || empty($national_number) || empty($county) || empty($reg_num) || empty($year_study) || empty($religion) || empty($religion_others) || empty($nationality) || empty($nationality_others) || empty($student_address) || empty($student_town) || empty($student_tel) || empty($student_mobile) || empty($student_email)) {
				
if(empty($surname)) {
echo '<font color="red">Surname field is empty.</font><br>';
}

if(empty($firstname)) {
echo '<font color="red">Firstname field is empty.</font><br>';
}

if(empty($initial)) {
echo '<font color="red">Initial Name field is empty.</font><br>';
}

if(empty($national_number)) {
echo '<font color="red">National Number field is empty.</font><br>';
}

if(empty($county)) {
echo '<font color="red">County field is empty.</font><br>';
}

if(empty($reg_num)) {
echo '<font color="red">Registration Number field is empty.</font><br>';
}

if(empty($year_study)) {
echo '<font color="red">Year Of Study field is empty.</font><br>';
}

if(empty($religion_others)) {
echo '<font color="red">Others field is empty.</font><br>';
}

if(empty($nationality)) {
echo '<font color="red">Nationality field is empty.</font><br>';
}

if(empty($nationality_others)) {
echo '<font color="red">Others field is empty.</font><br>';
}

if(empty($student_address)) {
echo '<font color="red">Student Address field is empty.</font><br>';
}

if(empty($student_town)) {
echo '<font color="red">Student Town field is empty.</font><br>';
}

if(empty($student_tel)) {
echo '<font color="red">Telephone field is empty.</font><br>';
}

if(empty($student_mobile)) {
echo '<font color="red">Mobile Phone field is empty.</font><br>';
}

if(empty($student_email)) {
echo '<font color="red">Email field is empty.</font><br>';
}
echo '<br><a href="javascript:self.history.back();">Go Back</a>';
} else { 
$result = mysqli_query($mysqli, "INSERT INTO student_details(surname,firstname,initial,national_number,county,reg_num,year_study,religion,religion_others,nationality,nationality_others,student_address,student_town,student_tel,student_mobile,student_email) VALUES('$surname','$firstname','$initial','$national_number','$county','$reg_num','$year_study','$religion','$religion_others','$nationality','$nationality_others','$student_address','$student_town','$student_tel','$student_mobile','$student_email')");
echo '<font color="green">Data added successfully.</font>';
echo '<br><a href="index.php">View Result</a>';
}
}
?>

