<?php
session_start();
include("./logicals/Connection.php");
include("./logicals/Set_user.php");
$pagetitle = array(
    'title' => 'BeadandóBolt',
);


$footer = array(
    'author' => 'Author: Csejtei Bálint & Csejtei Miklós',
    'firm' => 'CJ3HTQ@gmail.com'
	
);

$pages = array(
	'/' => array('file' => 'main', 'text' => 'Home', 'menun' => array(1,1)),
	
	'messages' => array('file' => 'messages', 'text' => 'Messages', 'menun' => array(1,1)),
	'shop' => array('file' => 'shop', 'text' => 'Shop', 'menun' => array(1,1)),
	'subpages' => array('file' => 'subpages', 'text' => 'Subpages', 'menun' => array(1,1)),
	
	'legacy' => array('file' => 'legacy', 'text' => 'legacy', 'menun' => array(0,0)),
	'zion2' => array('file' => 'zion2', 'text' => 'zion2', 'menun' => array(0,0)),
	'zoomseparate' => array('file' => 'zoomseparate', 'text' => 'zoom', 'menun' => array(0,0)),
	'delta3' => array('file' => 'delta3', 'text' => 'delta3', 'menun' => array(0,0)),
	//'login' => array('file' => 'login', 'text' => 'Login', 'menun' => array(1,0)),
    //'logout' => array('file' => 'logout', 'text' => 'Logout', 'menun' => array(0,1)),
	'signup' => array('file' => 'signup', 'text' => 'signup', 'menun' => array(0,0)),
	'set_user' => array('file' => 'set_user', 'text' => 'set_user', 'menun' => array(0,0)),
	'registration' => array('file' => 'registration', 'text' => 'set_user', 'menun' => array(0,0)),
	
);
if($_SESSION['username'] == "Guest") {
	$pages['login'] = array('file' => 'login', 'text' => 'Login', 'menun' => array(1,1));
} else {
	$pages['logout'] = array('file' => 'logout', 'text' => 'Logout', 'menun' => array(1,1));
}

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>
