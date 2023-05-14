<?php
	session_start();
	include("Connection.php");
	$str = "Logged-in: ";
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="gyakorlo_css.css">
    <title>Shop</title>
</head>
<body>

<ul class="navbar">
		<li><a href="Main.php">Home</a></li>
		<li><a href="Messages.php">Messages</a></li>
		<li><a href="Shop.php">Shop</a></li>
		<li><a href="<?php if($_SESSION['user_id'] == 1) { echo "Login.php"; } else { echo "Logout.php"; } ?>"><?php if($_SESSION['user_id'] == 1) { echo "Login"; } else { echo "Logout"; } ?></a></li>
		<li style="float:right;" ><a style=" display: block; color: Black; 	background-color:#578CAF; text-align: center; padding: 15px 100px; text-decoration: none; font-weight:bold; font-style:italic; transform: scale(1.0);"><?php echo $str . $_SESSION['first_name'] . " " .  $_SESSION['last_name'] . " (" . $_SESSION['username'] . ")"; ?></a></li>
	</ul>
    
    <section class="sec">
        <div class="products">
            <!--start-->
            <div class="card">
                <div class="img"><img src="kepek/jordan_delta_3_low_szembol.jpg" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Jordan Delta 3 low</div>
                <div class="box">
                    <div class="price">110€</div>
                    <button class="btn"><a href="delta3.php" style="text-decoration: none; color: black">Megnéz</a></button>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="card">
                <div class="img"><img src="kepek/jordan_zoom_separate_szembol.png" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Jordan Zoom Separate</div>
                <div class="box">
                    <div class="price">110€</div>
                    <button class="btn"><a href="zoomseparate.php" style="text-decoration: none; color: black">Megnéz</a></button>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="card">
                <div class="img"><img src="kepek/jorda_zion_2_szembol.png" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Jordan Zion 2</div>
                <div class="box">
                    <div class="price">120€</div>
                    <button class="btn"><a href="zion2.php" style="text-decoration: none; color: black">Megnéz</a></button>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="card">
                <div class="img"><img src="kepek/legacy_szembol.png" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Air Jordan Legacy 312 Low</div>
                <div class="box">
                    <div class="price">140€</div>
                    <button class="btn"><a href="legacy.php" style="text-decoration: none; color: black">Megnéz</a></button>
                </div>
            </div>
            <!--end-->
        </div>
    </section>

</body>
</html>