<?php
$db = mysqli_connect('localhost','root','','kafu')
if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$subject_1 = mysqli_real_escape_string($mysqli, $_POST['subject_1']);
$subject_2 = mysqli_real_escape_string($mysqli, $_POST['subject_2']);
$subject_3 = mysqli_real_escape_string($mysqli, $_POST['subject_3']);	
$subject_4 = mysqli_real_escape_string($mysqli, $_POST['subject_4']);
$subject_5 = mysqli_real_escape_string($mysqli, $_POST['subject_5']);
$subject_6 = mysqli_real_escape_string($mysqli, $_POST['subject_6']);	

if(empty($subject_1) || empty($subject_2) || empty($subject_3) || empty($subject_4) || empty($subject_5) || empty($subject_6)) {	
if(empty($subject_1)) {
echo '<font color="red">subject 1 field is empty.</font><br>';
}
if(empty($subject_2)) {
echo '<font color="red">subject 2 field is empty.</font><br>';
}
if(empty($subject_3)) {
echo '<font color="red">subject 3 field is empty.</font><br>';
}	
if(empty($subject_4)) {
echo '<font color="red">subject 4 field is empty.</font><br>';
}
if(empty($subject_5)) {
echo '<font color="red">subject 5 field is empty.</font><br>';
}
if(empty($subject_6)) {
echo '<font color="red">subject 6 field is empty.</font><br>';
}			
} else {	
$result = mysqli_query($mysqli, "UPDATE knec SET subject_1='$subject_1',subject_2='$subject_2',subject_3='$subject_3',subject_4='$subject_4',subject_5='$subject_5',subject_6='$subject_6' WHERE id=$id");
header("Location: knec.php");
}
}
?>