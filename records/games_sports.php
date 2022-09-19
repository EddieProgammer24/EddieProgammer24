
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAFU RECORDS:GAMES</title>
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
	<center><h1>KAFU RECORDS:GAMES & SPORTS</h1></center>
	<table class="content-table">
		<thead>
		<tr>
			<th>Soccer</th>
			<th>Hockey</th>
			<th>Basketball</th>
			<th>Netball</th>
			<th>Tennis</th>
			<th>Badminton</th>
			<th>Rugby</th>
			<th>Volleyball</th>
			<th>Athletics</th>
			<th>Swimming</th>
			<th>Table Tennis</th>
			<th>Darts</th>
			<th>Karate</th>
			<th>Martial Arts</th>
			<th>Others</th>
			<th>Details</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
	//database connection
	$db = mysqli_connect('localhost','root','','kafu');
	$result = mysqli_query($db,"SELECT * FROM games_sports");

	$i = 0;
	while($row = mysqli_fetch_array($result)){
		if($i%2 == 0)
		$classname = "even";
	else
		$classname = "odd";
	?>

	<tr class="<?php if(isset($classname)) echo $classname?>"></tr>
		<td><?php echo $row["soccer"]?></td>
		<td><?php echo $row["hockey"]?></td>
		<td><?php echo $row["basketball"]?></td>
		<td><?php echo $row["netball"]?></td>
		<td><?php echo $row["tennis"]?></td>
		<td><?php echo $row["badminton"]?></td>
		<td><?php echo $row["rugby"]?></td>
		<td><?php echo $row["volleyball"]?></td>
		<td><?php echo $row["athletics"]?></td>
		<td><?php echo $row["swimming"]?></td>
		<td><?php echo $row["table_tennis"]?></td>
		<td><?php echo $row["darts"]?></td>
		<td><?php echo $row["karate"]?></td>
		<td><?php echo $row["martial_arts"]?></td>
		<td><?php echo $row["others"]?></td>
		<td><?php echo $row["details"]?></td>
		<tr>
			<?php
			$i++;
		}
			?>
		</tr>
	
</tbody>
</table>
</body>
</html>