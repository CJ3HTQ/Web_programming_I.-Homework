<?php
	session_start();
	include("Connection.php");
	echo $_SESSION['user_id'];
	echo $_SESSION['username'];
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
		<li><a href="#contact">Contact</a></li>
		<li><a href="Shop.php">Shop</a></li>
		<li><a href="<?php if($_SESSION['user_id'] == 1) { echo "Login.php"; } else { echo "Logout.php"; } ?>"><?php if($_SESSION['user_id'] == 1) { echo "Login"; } else { echo "Logout"; } ?></a></li>
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
				<input type="submit" value="Signup">
			</form>
	</div>
</body>	
</html>