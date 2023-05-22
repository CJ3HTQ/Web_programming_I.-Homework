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
    <link rel="stylesheet" href="gyakorlo_css.css">
	<script type="text/javascript" src="list.js"></script>
    <title>Sub-pages</title>
    <style>
         #div1, #div2 {float:left; width:400px; height:300px; margin:10px;padding:10px;border:1px solid #aaaaaa;}
         #mycanvas{border:3px red;}
    </style>
    <script>
		function allowDrop(ev) {
			ev.preventDefault();
		}

		function drag(ev) {
			ev.dataTransfer.setData("text", ev.target.id);
		}

		function drop(ev) {
			ev.preventDefault();
			var data = ev.dataTransfer.getData("text");
			ev.target.appendChild(document.getElementById(data));
		}
	</script>
</head>
<body>

    <ul class="navbar">
        <li><a href="Main.php">Home</a></li>
        <li style="float:right;" ><a style=" display: block; color: Black; 	background-color:#578CAF; text-align: center; padding: 15px 100px; text-decoration: none; font-weight:bold; font-style:italic; transform: scale(1.0);"><?php echo $str . $_SESSION['first_name'] . " " .  $_SESSION['last_name'] . " (" . $_SESSION['username'] . ")"; ?></a></li>
    </ul>
	
    <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
		<img src="kepek/nje.png" draggable="true" ondragstart="drag(event)" id="drag1" width="400" height="300">
	</div>
	<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    
    <canvas id="mycanvas" width="300" height="150" style="border:1px solid #d3d3d3;">
        Your browser does not support canvas!
    </canvas> 
    <script>
        var c = document.getElementById("mycanvas");
        var ctx = c.getContext("2d");
        ctx.rotate(20 * Math.PI / 180);
        ctx.fillRect(50, 20, 100, 50);
    </script>

    <svg width="400" height="100">
	  <rect width="400" height="100" style="fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)" />
	</svg>
	<div>
	Name:<br>
		<input type="text" id="name1" name="name2" value="" onKeyUp="typing();">
		<br>
		<select size="10" id="list1" name="list2" onChange="choose();">
		</select>
        <div id="exam" style="display: none">
            <h2>Exam</h2>
            <p>Time: <span id="time1"></span><br>
            Venue: <span id="venue1"></span></p>
        </div>
    </div>

   

</body>
</html>