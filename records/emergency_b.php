<?php
//database connection
$db = mysqli_connect('localhost','root','','kafu');
$result = mysqli_query($db,"SELECT * FROM emergency_b");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU RECORDS:KIN</title>
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
	<center><h1>KAFU RECORDS:NEXT OF KIN II</h1></center>
	<center><table class="content-table">
		<thead>
		<tr>
			<th>Surname</th>
			<th>Firstname</th>
			<th>Initial</th>
			<th>Relationship</th>
			<th>Address</th>
			<th>Town/City</th>
			<th>Telephone</th>
			<th>Mobile</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<?php
		$i = 0;
		while($row = mysqli_fetch_array($result)){
			if($i%2 == 0)
				$classname = "even";
			else
				$classname = "odd";

			

		
		?>
	</tr>

	<tr class="<?php if(isset($classname)) echo $classname?>"></tr>
	
		<td><?php echo $row["second_surname"]?></td>
		<td><?php echo $row["second_firstname"]?></td>
		<td><?php echo $row["second_initial"]?></td>
		<td><?php echo $row["second_relationship"]?></td>
		<td><?php echo $row["second_address"]?></td>
		<td><?php echo $row["second_town"]?></td>
		<td><?php echo $row["second_tel"]?></td>
		<td><?php echo $row["second_mobile"]?></td>
		<td><?php echo $row["second_email"]?></td>
		<tr>
			<?php
			$i++;
		}

			?>
		</tr>
	</tbody>
	</table></center>

</body>
</html>