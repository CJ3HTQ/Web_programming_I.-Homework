

<div class="comments_div">
		<?php
			$query="SELECT * FROM messages Order by date_time desc ";
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
	
	<?php 
	if (isset($_POST['post_comment'])) {

		$name = $_SESSION['username'];
		$message = $_POST['message_text'];
		
		$sql = "INSERT INTO messages (username, message_text)
		VALUES ('$name', '$message')";

		if (mysqli_query($conn, $sql)) {
		  echo "";
		  header("refresh: 1");
		} else {
		  echo "Error: " . $sql . "<br>" .mysqli_error($conn);
		}
	}
	
	?>