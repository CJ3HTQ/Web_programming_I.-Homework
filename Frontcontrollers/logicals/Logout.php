<?php

//session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);
	$_SESSION['user_id']=1;
	$_SESSION['username'] = "Guest";
	$_SESSION['first_name']="";
	$_SESSION['last_name']="";
	
}

header("Location: .");
die;