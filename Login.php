<?php
	session_start();
	include("Connection.php");
	$str = "Logged-in: ";
	if(!isset($_SESSION['user_id'])) {
		$_SESSION['user_id'] = 1;
		$_SESSION['username'] = "Guest";
	} else {
		include("Set_User.php");
		$query = "SELECT user_id, first_name, last_name FROM users WHERE username = '$username' LIMIT 1";
		$result = mysqli_query($conn, $query);
		
		if ($result && mysqli_num_rows($result) > 0) {
			$user_data = mysqli_fetch_assoc($result);
			$_SESSION['user_id'] = $user_data['user_id'];
			$_SESSION['username'] = $username;
			$_SESSION['first_name'] = $user_data['first_name'];
			$_SESSION['last_name'] = $user_data['last_name'];
		}
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="gyakorlo_css.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Belépés</title>
	<script>
		function setCookie(cname, cvalue, exdays) {
			const d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			let expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}

			function getCookie(cname) {
			let name = cname + "=";
			let ca = document.cookie.split(';');
			for(let i = 0; i < ca.length; i++) {
				let c = ca[i];
				while (c.charAt(0) == ' ') {
				c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
				}
			}
			return "";
			}
		function checkCookie() {
			let user = getCookie(<?php $_SESSION['username']?>);
			if (user != "") {
				alert("Welcome " + user +"!");
			} 
		}
	</script>
</head>
<body>
	<ul class="navbar">
		<li><a href="Main.php">Home</a></li>
		<li><a href="Messages.php">Messages</a></li>
		<li><a href="Shop.php">Shop</a></li>
		<li><a href="<?php if($_SESSION['user_id'] == 1) { echo "Login.php"; } else { echo "Logout.php"; } ?>"><?php if($_SESSION['user_id'] == 1) { echo "Login"; } else { echo "Logout"; } ?></a></li>
	</ul>
	<div class="login_div">
		<h1>Login</h1>
			<form method="post" action="Set_User.php">
				<div class="txt_fields">
					<input type="text" name="username" required>
					<label>Username</label>
				</div>
				<div class="txt_fields">
					<input type="password" name="password" required>
					<label>Password</label>
				</div>
				<div class="forgot">
					Forgot password?
				</div>
				<input type="submit" value="Login" onclick="checkCookie()">
				<div class="signup">
					Not a member?<a href="Signup.php">Sign up</a>
				</div>
			</form>
	</div>
</body>	
</html>