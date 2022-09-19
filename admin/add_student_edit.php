<?php
// including the database connection file
include_once("config.php");

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM student_details WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$surname = $res['surname'];
	$firstname = $res['firstname'];
	$initial = $res['initial'];
	$national_number = $res['national_number'];
	$county =  $res['county'];
	$reg_num = $res['reg_num'];
	$year_study = $res['year_study'];
	$religion = $res['religion'];
	$religion_others = $res['religion_others'];
	$nationality = $res['nationality'];
	$nationality_others = $res['nationality_others'];
	$student_address = $res['student_address'];
	$student_town = $res['student_town'];
	$student_tel = $res['student_tel'];
	$student_mobile = $res['student_mobile'];
	$student_email = $res['student_email'];

}
?>
<html>
<head>	
	<title>Student Details</title>
	<style type="text/css">
		.content-table{
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			min-width: 400px;
			border-radius: 5px 5px 0 0;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}
		.content-table thead tr{
			background-color: #009879;
			color: #ffffff;
			text-align: left;
			font-weight: bold;
		}
		.content-table th,
		.content-table td{
			padding: 12px 15px;
		}
		.content-table tbody tr{
			border-bottom: 1px solid #ddddddd ;
		}
		.content-table tbody tr:nth-of-type(even){
			background-color: #f3f3f3;
		}
		.content-table tbody tr:last-of-type{
			border-bottom: 2px solid #009879;
		}
		.content-table tbody tr.active-row{
			font-weight: bold;
			color:#009878 ;
	</style>
</head>

<body>
	<a href="add_student_view.php">Home</a>
	<br><br>
	<center>
	<form name="form1" method="post" action="add_student_editprocess.php">
		<table border="0" class="content-table">
			<tr>
				<thead>
					<tbody>
				<td>Surname</td>
				<td><input type="text" name="surname" value="<?php echo $surname;?>"></td>
			</tr>

			<tr>
				<td>FirstName</td>
				<td><input type="text" name="firstname" value="<?php echo $firstname;?>"></td>
			</tr>

			<tr>
				<td>Initial/Other</td>
				<td><input type="text" name="initial" value="<?php echo $initial;?>"></td>
			</tr>

			<tr>
				<td>National Number</td>
				<td><input type="text" name="national_number" value="<?php echo $national_number;?>"></td>
			</tr>

			<tr>
				<td>County</td>
				<td><input type="text" name="county" value="<?php echo $county;?>"></td>
			</tr>

			<tr>
				<td>Registration Number</td>
				<td><input type="text" name="reg_num" value="<?php echo $reg_num;?>"></td>
			</tr>

			<tr>
				<td>Year Of Study</td>
				<td><input type="text" name="year_study" value="<?php echo $year_study; ?>"></td>
			</tr>

			<tr>
				<td>Religion</td>
				<td><input type="text" name="religion" value="<?php echo $religion;?>"></td>
			</tr>

			<tr>
				<td>Others</td>
				<td><input type="text" name="religion_others" value="<?php echo $religion_others;?>"></td>
			</tr>

			<tr>
				<td>Nationality</td>
				<td><input type="text" name="nationality" value="<?php echo $nationality;?>"></td>
			</tr>

			<tr>
				<td>Others</td>
				<td><input type="text" name="nationality_others" value="<?php echo $nationality_others;?>"></td>
			</tr>

			<tr>
				<td>Address</td>
				<td><input type="text" name="student_address" value="<?php echo $student_address;?>"></td>
			</tr>

			<tr>
				<td>Town/City</td>
				<td><input type="text" name="student_town" value="<?php echo $student_town;?>"></td>
			</tr>

			<tr>
				<td>Telephone Landline</td>
				<td><input type="text" name="student_tel" value="<?php echo $student_tel;?>"></td>
			</tr>

			<tr>
				<td>Phone Number</td>
				<td><input type="text" name="student_mobile" value="<?php echo $student_mobile;?>"></td>
			</tr>

			<tr>
				<td>Email Address</td>
				<td><input type="text" name="student_email" value="<?php echo $student_email;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</thead>
	</tbody>
		</table>
	</form></center>
</body>
</html>