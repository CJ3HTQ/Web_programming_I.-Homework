<?php
	session_start();
	include("Connection.php");
	
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="gyakorlo_css.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Belépés</title>
</head>
<body>
	<ul class="navbar">
		<li><a href="Main.php">Home</a></li>
		<li><a href="Messages.php">Messages</a></li>
		<li><a href="Shop.php">Shop</a></li>
	</ul>
	<div class="Signup_div">
		<h1>Signup</h1>
			<form method="post" action="registration.php">
				<div class="txt_fields">
					<input type="text" name="username" required>
					<label>Username</label>
				</div>
				<div class="txt_fields">
					<input type="password" name="password" required>
					<label>Password</label>
				</div>
				<div class="txt_fields">
					<input type="text" name="email" required>
					<label>Email</label>
				</div>
				<div class="txt_fields">
					<input type="text" name="firstname" required>
					<label>First name</label>
				</div>
				<div class="txt_fields">
					<input type="text" name="lastname" required>
					<label>Last name</label>
				</div>
				<input type="submit" value="Signup">
			</form>
	</div>
</body>	
</html>