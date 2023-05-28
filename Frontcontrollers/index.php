<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1; // Alapértelmezett érték
	//header("refresh: 0.1");
}

// Ellenőrizze, hogy van-e beállítva a 'username' változó
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    $_SESSION['username'] = "Guest"; // Alapértelmezett érték
}
//echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "<br>";
include('./includes/config.inc.php');
if (isset($_GET['page'])) {
	if (isset($pages[$_GET['page']]) && file_exists("./templates/pages/{$pages[$_GET['page']]['file']}.tpl.php")) {
		$find = $pages[$_GET['page']];
	}
	else { 
		$find = $error_page;
		header("HTTP/1.0 404 Not Found");
	}
}
else $find = $pages['/'];
include('./templates/index.tpl.php'); 



?>
