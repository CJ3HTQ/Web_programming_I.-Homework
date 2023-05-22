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
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="messages.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Messages/Comments</title>
</head>
<body>
	<ul class="navbar">
		<li><a href="Main.php">Home</a></li>
		<li><a href="Messages.php">Messages</a></li>
		<li><a href="Shop.php">Shop</a></li>
		<li><a href="<?php if($_SESSION['user_id'] == 1) { echo "Login.php"; } else { echo "Logout.php"; } ?>"><?php if($_SESSION['user_id'] == 1) { echo "Login"; } else { echo "Logout"; } ?></a></li>
		<li style="float:right;" ><a style=" display: block; color: Black; 	background-color:#578CAF; text-align: center; padding: 15px 100px; text-decoration: none; font-weight:bold; font-style:italic; transform: scale(1.0);"><?php echo $str . $_SESSION['first_name'] . " " .  $_SESSION['last_name'] . " (" . $_SESSION['username'] . ")"; ?></a></li>
	</ul>
	<div class="comments_div">
		<?php
			$query="SELECT * FROM messages";
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result) ){
					?>
					<h3><?php echo $row['username'] ?></h3>
					<p><?php echo $row['message_text'] ?></p>
					<p><?php echo $row['date_time'] ?></p>
		<?php		
				}
			}
		?>
		
	</div>
	<div class="message_bottom">
		<div class="message_div">
			<form action="" method="post" class="message_form">
				<input type="text" class="name" name="<?php echo $_SESSION['username'];?>" placeholder="<?php echo $_SESSION['username'];?>" disabled>
				<br>
				<textarea name="message_text" cols="30" rows="10" class="message_text" placeholder="Message"></textarea>
				<br>
				<button type="submit" class="post_comment" name="post_comment">Post comment</button>
			</form>
		</div>
	</div>
</body>	
</html>