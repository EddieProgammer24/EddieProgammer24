<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM student_details ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Student Details</title>
	<style type="text/css">
		@import url('https: //fonts.googleapis.com/css?family=Poppins: 400,')
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins',sans-serif;
}
body{
	background: #f2f2f2;
}
nav{
	background:#1b1b1b ;
}
nav:after{
	content: '';
	clear: both;
	display: table;
}
nav .logo{
	float: left;
	color: white;
	font-size: 27px;
	font-weight: 600;
	line-height: 70px;
	padding-left: 60px;
}
nav ul{
	float: right;
	list-style: none;
	margin-right: 40px;
	position: relative;
}
nav ul li{
	float: left;
	display: inline-block;
	background: #1b1b1b;
	margin: 0 5px;
}
nav ul li a{
	color:white ;
	text-decoration: none;
	line-height: 70px;
	font-size: 18px;
	padding: 8px 15px;
}
nav ul li a:hover{
	color: cyan;
	border-radius: 5px;
	box-shadow: 0 0 5px #33ffff,
	            0 0 5px #66ffff;
}
nav ul ul li a:hover{
	color: cyan;
	box-shadow: none;
}
nav ul ul{
	position: absolute;
	top: 90px;
	border-top: 3px solid cyan;
	opacity: 0;
	visibility: hidden;
	transition: top.3s;
}
nav ul ul ul{
	border-top: none;
}
nav ul li:hover > ul{
	top: 70px;
	opacity: 1;
	visibility: visible;
}
nav ul ul li{
	position: relative;
	margin: 0px;
	width: 150px;
	float: none;
	display: list-item;
	border-bottom: 1px solid rgba(0, 0, 0, 0.3);
}
nav ul ul li a{
	line-height: 50px;
}
nav ul ul ul li{
	position: relative;
	top: -70px;
	left: 150px;
}
span .fa-plus{
	margin-left: 40px;
	font-size: 15px;
}

		.content-table{
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			width: 50%;
			height: 15%;
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
	<nav>
		<div class="logo">AdminHomepage</div>
		<ul>
			<li><a href="#">Home</a></li>
			<li>
				<a href = "#">View</a>
				<ul>
					<li><a href="#">User Profiles</a></li>
					<li><a href="#">Students</a></li>
					<li><a href="#">Parents Details</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Admission</a>
				<ul>
					<li><a href="#">Student Details</a></li>
					<li><a href="#">Games & Clubs</a></li>
					<li>
						<a href="#">More
							<span class="fa fa-plus"></span></a>
						<ul>
							<li><a href="#">Academics</a></li>
							<li><a href="#">High Schools</a></li>
							<li><a href="#">Institutions</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="add_student_info.html">New Student</a></li>
			<li><a href="#">Inbox</a></li>
		</ul>
	</nav>


<a href="add.html">Add New Data</a><br><br>

	<table width='50%'height='15%' border='0' class="content-table">
<thead>
	<tr bgcolor='yellow'>
		<td>Surname</td>
		<td>Firstname</td>
		<td>Initial/Others</td>
		<td>National Number</td>
		<td>County</td>
		<td>Registration Number</td>
		<td>Year Of Study</td>
		<td>Religion</td>
		<td>Others</td>
		<td>Nationality</td>
		<td>Others</td>
		<td>Address</td>
		<td>Town/City</td>
		<td>Telephone Landline</td>
		<td>Phone Number</td>
		<td>Email</td>
		<td>Update</td>	
	</tr></thead>
	<tbody>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td bgcolor=''>".$res['surname']."</td>";
		echo "<td>".$res['firstname']."</td>";
		echo "<td>".$res['initial']."</td>";
		echo "<td>".$res['national_number']."</td>";
		echo "<td>".$res['county']."</td>";
		echo "<td>".$res['reg_num']."</td>";
		echo "<td>".$res['year_study']."</td>";
		echo "<td>".$res['religion']."</td>";
		echo "<td>".$res['religion_others']."</td>";
		echo "<td>".$res['nationality']	."</td>";
		echo "<td>".$res['nationality_others']."</td>";
		echo "<td>".$res['student_address']."</td>";
		echo "<td>".$res['student_town']."</td>";
		echo "<td>".$res['student_tel']."</td>";
		echo "<td>".$res['student_mobile']."</td>";
		echo "<td>".$res['student_email']."</td>";
echo "<td bgcolor='green'><a href='add_student_edit.php?id=$res[id]'><font color='white'>Edit</a>";         
	}
	?>
	</tbody
	</table>
</body>
</html>