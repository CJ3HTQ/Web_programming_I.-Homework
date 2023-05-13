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
    
    <canvas id="mycanvas" width="200" height="200"></canvas>

    <svg width="400" height="100">
	  <rect width="400" height="100" style="fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)" />
	</svg>
    

   

</body>
</html>