<?php
	session_start();
	include("Connection.php");
	$str = "Logged-in: ";
?>
<!DOCTYPE html>
<html>
<head>
	<!-- oldal neve -->
	<title>Beadandó</title>
	<!-- reszponzív -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- külső css-->
	<link rel="stylesheet" href="gyakorlo_css.css">
	<meta charset="utf-8">
</head>
<body>
	<ul class="navbar">
		<li><a href="Main.php">Home</a></li>
		<li><a href="Messages.php">Messages</a></li>
		<li><a href="Shop.php">Shop</a></li>
		<li><a href="subpages.php">Subpages</a></li>
		<li><a href="<?php if($_SESSION['user_id'] == 1) { echo "Login.php"; } else { echo "Logout.php"; } ?>"><?php if($_SESSION['user_id'] == 1) { echo "Login"; } else { echo "Logout"; } ?></a></li>
		<li style="float:right;" ><a style=" display: block; color: Black; 	background-color:#578CAF; text-align: center; padding: 15px 100px; text-decoration: none; font-weight:bold; font-style:italic; transform: scale(1.0);"><?php echo $str . $_SESSION['first_name'] . " " .  $_SESSION['last_name'] . " (" . $_SESSION['username'] . ")"; ?></a></li>
	</ul>
<div class="first_div">
	<h1>Main Page</h1>
	<p>This site was a homework so it's not contain relevant informations!</p>
	<p>Some information about the site:</p>
	<ul class="informations">
		<li>Secondhand shoes can be found here!</li>
		<li>These are mostly: Adidas, Nike, Jordan and Helly Hansen.</li>
		<li>If you are looking for something you probably find here</li>
	</ul>
</div>
<div class="google_map">
	<h2>Embeded Location</h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21813.28826744895!2d19.63806336652266!3d46.889716681283254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sNeumann%20J%C3%A1nos%20Egyetem%20GAMF%20M%C5%B1szaki%20%C3%A9s%20Informatikai%20Kar!5e0!3m2!1shu!2shu!4v1683235385695!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<footer>
	<p>Author: Csejtei Bálint & Csejtei Miklós</p>
	<p><a href="mailto:CJ3HTQ@gmail.com">CJ3HTQ@gmail.com</a></p>
</footer>
</body>
</html>