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
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="gallerycss.css">
    <link rel="stylesheet" href="gyakorlo_css.css">

    <title>Gallery</title>
</head>
<body>
<ul class="navbar">
		<li><a href="Shop.php">Shop</a></li>
		<li style="float:right;" ><a style=" display: block; color: Black; 	background-color:#578CAF; text-align: center; padding: 15px 100px; text-decoration: none; font-weight:bold; font-style:italic; transform: scale(1.0);"><?php echo $str . $_SESSION['first_name'] . " " .  $_SESSION['last_name'] . " (" . $_SESSION['username'] . ")"; ?></a></li>
	</ul>
    <div class="container">
        <div class="mySlides">
            <div class="numbertext">1 / 6</div>
              <img src="kepek/jordan_delta_3_low_szembol.png" style="width:100%;">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
              <img src="kepek/jordan_delta_3_low_kulso.png" style="width:100%;">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
              <img src="kepek/jordan_delta_3_low_belso.png" style="width:100%;">
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
              <img src="kepek/jordan_delta_3_low_talp.png" style="width:100%;">
          </div>

          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
              <img src="kepek/jordan_delta_3_low_hatulrol.png" style="width:100%;">
          </div>
        
          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
              <img src="kepek/jordan_delta_3_low_felul.png" style="width:100%;">
          </div>
          <div class="caption-container">
            <p id="caption"></p>
          </div>

          <div class="row">
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_delta_3_low_szembol.png" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_delta_3_low_kulso.png" style="width:100%" onclick="currentSlide(2)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_delta_3_low_belso.png" style="width:100%" onclick="currentSlide(3)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_delta_3_low_talp.png" style="width:100%" onclick="currentSlide(4)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_delta_3_low_hatulrol.png" style="width:100%" onclick="currentSlide(5)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_delta_3_low_felul.png" style="width:100%" onclick="currentSlide(6)" alt="">
            </div>
          </div>
        </div>
    </div>
    <script src="galleryjs.js"></script>
</body>
</html> 