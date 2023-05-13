<?php
	session_start();
	include("Connection.php");
	//include("Set_user.php");
	//echo $_SESSION['user_id'];
	//echo $_SESSION['username'];
	$str = "Logged-in: ";
//	echo $str . $_SESSION['first_name'] . " " .  $_SESSION['last_name'] . " (" . $_SESSION['username'] . ")";
	
		if (isset($_POST['post_comment'])) {

		$name = $_SESSION['username'];
		$message = $_POST['message_text'];
		
		$sql = "INSERT INTO messages (username, message_text)
		VALUES ('$name', '$message')";

		if (mysqli_query($conn, $sql)) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" .mysqli_error($conn);
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
              <img src="kepek/jordan_zoom_separate_szembol.png" style="width:100%;">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
              <img src="kepek/jordan_zoom_separate_kulso.png" style="width:100%;">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
              <img src="kepek/jordan_zoom_separate_belso.png" style="width:100%;">
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
              <img src="kepek/jordan_zoom_separate_talp.png" style="width:100%;">
          </div>

          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
              <img src="kepek/jordan_zoom_separate_hatulrol.png" style="width:100%;">
          </div>
        
          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
              <img src="kepek/jordan_zoom_separate_felul.png" style="width:100%;">
          </div>
          <div class="caption-container">
            <p id="caption"></p>
          </div>

          <div class="row">
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_zoom_separate_szembol.png" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_zoom_separate_kulso.png" style="width:100%" onclick="currentSlide(2)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_zoom_separate_belso.png" style="width:100%" onclick="currentSlide(3)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_zoom_separate_talp.png" style="width:100%" onclick="currentSlide(4)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_zoom_separate_hatulrol.png" style="width:100%" onclick="currentSlide(5)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="kepek/jordan_zoom_separate_felul.png" style="width:100%" onclick="currentSlide(6)" alt="">
            </div>
          </div>
        </div>
    </div>
    <script src="galleryjs.js"></script>
</body>
</html> 