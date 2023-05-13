<?php
	session_start();
	include("Connection.php");
	echo $_SESSION['user_id'];
	echo $_SESSION['username'];
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
		<li><a href="#contact">Contact</a></li>
		<li><a href="Shop.php">Shop</a></li>
		<li><a href="<?php if($_SESSION['user_id'] == 1) { echo "Login.php"; } else { echo "Logout.php"; } ?>"><?php if($_SESSION['user_id'] == 1) { echo "Login"; } else { echo "Logout"; } ?></a></li>
	</ul>
    
    <section class="sec">
        <div class="products">
            <!--start-->
            <div class="card">
                <div class="img"><img src="doctor.jpg" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Man Shoes</div>
                <div class="box">
                    <div class="price">$100</div>
                    <button class="btn">Megnéz</button>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="card">
                <div class="img"><img src="doctor.jpg" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Man Shoes</div>
                <div class="box">
                    <div class="price">$100</div>
                    <button class="btn">Megnéz</button>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="card">
                <div class="img"><img src="doctor.jpg" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Man Shoes</div>
                <div class="box">
                    <div class="price">$100</div>
                    <button class="btn">Megnéz</button>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="card">
                <div class="img"><img src="doctor.jpg" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Man Shoes</div>
                <div class="box">
                    <div class="price">$100</div>
                    <button class="btn">Megnéz</button>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="card">
                <div class="img"><img src="doctor.jpg" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Man Shoes</div>
                <div class="box">
                    <div class="price">$100</div>
                    <button class="btn">Megnéz</button>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="card">
                <div class="img"><img src="doctor.jpg" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Man Shoes</div>
                <div class="box">
                    <div class="price">$100</div>
                    <button class="btn">Megnéz</button>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="card">
                <div class="img"><img src="doctor.jpg" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Man Shoes</div>
                <div class="box">
                    <div class="price">$100</div>
                    <button class="btn">Megnéz</button>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="card">
                <div class="img"><img src="doctor.jpg" alt="cipo"></div>
                <div class="desc">Man</div>
                <div class="title">Man Shoes</div>
                <div class="box">
                    <div class="price">$100</div>
                    <button class="btn">Megnéz</button>
                </div>
            </div>
            <!--end-->
        </div>
    </section>

</body>
</html>