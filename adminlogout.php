<?php

session_start();

if(isset($_SESSION['id']))
{
	$_SESSION['x']=0;
	unset($_SESSION['id']);

}

header("Location: login.php");
die;
