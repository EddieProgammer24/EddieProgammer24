<?php
//database connection
$db = mysqli_connect('localhost','root','','kafu');
$result = mysqli_query($db,"SELECT * FROM knec");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU RECORDS:KNEC</title>
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
	<center><h1>KAFU:KCSE RESULTS DETAILS</h1></center>
	<center>
		<table class="content-table">
			<thead>
			<tr>
				<th>Subject 1</th>
				<th>Subject 2</th>
				<th>Subject 3</th>
				<th>Subject 4</th>
				<th>Subject 5</th>
				<th>Subject 6</th>
				<th>Action</th>
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
			<td><?php echo $row["subject_1"]?></td>
			<td><?php echo $row["subject_2"]?></td>
			<td><?php echo $row["subject_3"]?></td>
			<td><?php echo $row["subject_4"]?></td>
			<td><?php echo $row["subject_5"]?></td>
			<td><?php echo $row["subject_6"]?></td>
			echo "<td bgcolor='green'><a href='knec_edit.php?id=$res[id]'><font color='white'>Edit</a>";

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