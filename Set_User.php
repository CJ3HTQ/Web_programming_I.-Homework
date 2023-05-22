<?php
	session_start();
	include("Connection.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			$query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
			$result = mysqli_query($conn, $query);
			$query2 = "SELECT first_name, last_name FROM users WHERE username = '$username' LIMIT 1";
			$result2 = mysqli_query($conn, $query2);
			while($row = mysqli_fetch_assoc($result2)) {
				$_SESSION['first_name'] = $row['first_name'];
				$_SESSION['last_name'] = $row['last_name'];
			}
			if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
					
				if($user_data['password'] === $password)
				{
					$_SESSION['user_id'] = $user_data['user_id'];
					$_SESSION['username'] = $username;
						
					header("Location: Messages.php");
					die;
				}
			}
			
			header("Location: Login.php");
			die;
		}
		else
		{
			echo "Hibás felhasználónév vagy jelszó!";
			header("Location: Login.php");
			die;
		}
	}
?>
