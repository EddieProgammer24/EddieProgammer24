<?php
include_once("config.php");
if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
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
echo '<font color="red">surname field is empty.</font><br>';
}
if(empty($firstname)) {
echo '<font color="red">firstname field is empty.</font><br>';
}
if(empty($initial)) {
echo '<font color="red">initial field is empty.</font><br>';
}	
if(empty($national_number))	{
	echo '<font color="red">national number field is empty.</font><br>';
}
if(empty($county)){
	echo '<font color="red">county field is empty.</font><br>';
}
if(empty($reg_num)){
	echo '<font color="red">registration number field is empty.</font><br>';
}
if(empty($year_study)){
	echo '<font color="red">year of study field is empty.</font><br>';
}
if(empty($religion)){
	echo '<font color="red">religion field is empty.</font><br>';
}
if(empty($religion_others)){
	echo '<font color="red">others field is empty.</font><br>';
}
if(empty($nationality)){
	echo '<font color="red"nationality field is empty.</font><br>';
}
if(empty($nationality_others)){
	echo '<font color="red"others field is empty.</font><br>';
}
if(empty($student_address)){
	echo '<font color="red"address field is empty.</font><br>';
}
if(empty($student_town)){
	echo '<font color="red"town/city field is empty.</font><br>';
}
if(empty($student_tel)){
	echo '<font color="red"telephone field is empty.</font><br>';
}
if(empty($student_mobile)){
	echo '<font color="red"phone field is empty.</font><br>';
}
if(empty($student_email)){
	echo '<font color="red"Email field is empty.</font><br>';
}
} else {	
$result = mysqli_query($mysqli, "UPDATE student_details SET surname='$surname',firstname='$firstname',initial='$initial',national_number='$national_number',county='$county',reg_num='$reg_num',year_study='$year_study',religion='$religion',religion_others='$religion_others',nationality='$nationality',nationality_others = '$nationality_others',student_address='$student_address',student_town='$student_town',student_tel='$student_tel',student_mobile='$student_mobile',student_email='$student_email' WHERE id=$id");
header("Location: add_student_view.php");
}
}
?>