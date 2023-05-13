<?php
	session_start();
	include("Connection.php");
	
	//$_SESSION['user_id']=1;
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($conn, $query);
			$query2 = "select first_name, last_name from users where username = '$username' limit 1";
			$result2 = mysqli_query($conn, $query2);
			while($row = mysqli_fetch_assoc($result2) ){
				$_SESSION['first_name']=$row['first_name'];
				$_SESSION['last_name']=$row['last_name'];
			}
			if($result)
			{
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
			}
			
			echo "Hibás felhasználónév vagy jelszó!";
			header("Location: Login.php");
		}else
		{
			echo "Nem regisztrált felhasználó!";
		}
		
		
	}
?>