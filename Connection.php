<?php
	$servername="localhost";
	$username="root";
	$password="password";
	$dbname="webshop";
// Kapcsolódás az adatbázishoz

	$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kapcsolódás ellenőrzése
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
?>