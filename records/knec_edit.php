<?php
// including the database connection file
include_once("config.php");

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM knec WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$subject_1 = $res['subject_1'];
	$subject_2 = $res['subject_2'];
	$subject_3 = $res['subject_3'];
	$subject_4 = $res['subject_4'];
	$subject_5 = $res['subject_5'];
	$subject_6 = $res['subject_6'];
}
?>
<html>
<head>	
	<title>KNEC Details</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br><br>
	
	<form name="knec_edit" method="post" action="knec_editprocess.php">
		<table border="0">
			<tr>
				<td>Subject 1</td>
				<td><input type="text" name="subject_1" value="<?php echo $subject_1;?>"></td>
			</tr>
			<tr>
				<td>Subject 2</td>
				<td><input type="text" name="subject_2" value="<?php echo $subject_2;?>"></td>
			</tr>
		<tr> 
				<td>Subject 3</td>
				<td><input type="text" name="subject_3" value="<?php echo $subject_3;?>"></td>
			</tr>

			<tr>
				<td>Subject 4</td>
				<td><input type="text" name="subject_4" value="<?php echo $subject_4;?>"></td>
			</tr>

			<tr>
				<td>Subject 5</td>
				<td><input type="text" name="subject_5" value="<?php echo $subject_5;?>"></td>
			</tr>

			<tr>
				<td>Subject 6</td>
				<td><input type="text" name="subject_6" value="<?php echo $subject_6;?>"></td>
			</tr>

			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>