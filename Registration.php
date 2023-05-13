<?php
	session_start();
	include("Connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email=$_POST['email'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		$query = "SELECT username FROM users WHERE username = '$username' ";
		$query_run=mysqli_query($conn, $query);

		if (mysqli_num_rows($query_run)>0) 
		{
			echo "A felhasználónév már foglalt";
		}
		
			
		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			$query = "insert into users(username,password,email,first_name,last_name) values ('$username','$password','$email','$firstname','$lastname')";

			mysqli_query($conn, $query);
			
			
			header("Location: Login.php");
			die;
		}
		else
		{
			echo "Kérlek érvényes adatokat adj meg!";
		}
	}

?>