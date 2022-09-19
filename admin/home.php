<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.header {
		background: dark gray;
	}
	button[name=register_btn] {
		background: gold;
	}
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

	<div class="header">
		<h2>KAFU Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>