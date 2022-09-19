<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>KAFU PORTAL REGISTRATION SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="wrapper">
		<ul class="nav-area">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="login.php">Sign In</a></li>
			<li><a href="#">Contact Us</a></li>

			
		</ul>
		
	</div>
	

	<div class="header">
		<h2>KAFU PORTAL LOGIN</h2>
	</div>
	<form method="post" action="login.php">


		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Don't have an account? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>