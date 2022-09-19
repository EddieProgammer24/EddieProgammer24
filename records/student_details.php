<?php 
//database connection
$db = mysqli_connect('localhost','root','','kafu');
$result = mysqli_query($db,"SELECT * FROM student_details");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU RECORDS:STUDENT DETAILS</title>
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
	<img src="images/kafu.jpg" width="200px">
	<center><h1>KAFU RECORDS:STUDENT DETAILS</h1></center>
	<center>
		<table class="content-table">
			<thead>
			<tr>
				<th>Surname</th>
				<th>FirstName</th>
				<th>Initial/Other</th>
				<th>National Registration Number</th>
				<th>County</th>
				<th>University Registration Number</th>
				<th>Year Of Study</th>
				<th>Religion</th>
				<th>Others</th>
				<th>Nationality</th>
				<th>Others</th>
				<th>Address</th>
				<th>Town/City</th>
				<th>Telephone No.</th>
				<th>Mobile No.</th>
				<th>Email</th>
			</tr>
		</thead>
			<tbody>
			<?php 
			$i = 0;
			while($row = mysqli_fetch_array($result)){
				if($i%2 == 0)
					$classname = "even";
				else
					$classname = "odd";
				?>
				<tr class="<?php if(isset($classname)) echo $classname?>"></tr>
				<tr>
				<td><?php echo $row["surname"]?></td>
				<td><?php echo $row["firstname"]?></td>
				<td><?php echo $row["initial"]?></td>
				<td><?php echo $row["national_number"]?></td>
				<td><?php echo $row["county"]?></td>
				<td><?php echo $row["reg_num"]?></td>
				<td><?php echo $row["year_study"]?></td>
				<td><?php echo $row["religion"]?></td>
				<td><?php echo $row["religion_others"]?></td>
				<td><?php echo $row["nationality"]?></td>
				<td><?php echo $row["nationality_others"]?></td>
				<td><?php echo $row["student_address"]?></td>
				<td><?php echo $row["student_town"]?></td>
				<td><?php echo $row["student_tel"]?></td>
				<td><?php echo $row["student_mobile"]?></td>
				<td><?php echo $row["student_email"]?></td></tr>
<tr>
				<?php 
				$i++;
			}
				?>
			</tr>
			</tbody>
		</table>
	</center>

</body>
</html>