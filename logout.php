<?php
include_once("config.php");

if(array_key_exists('logout',$_GET))
{	
	unset($_SESSION['token']);
	unset($_SESSION['acctype']);
	unset($_SESSION['username']);
	unset($_SESSION['companyname']);
	unset($_SESSION['google_data']); //Google session data unset
	$gClient->revokeToken();
	session_destroy();
	header("location:navbar.php");
	
}


include_once("configfac.php");
if(array_key_exists('logoutfacebook',$_GET))
{
	$facebook->destroySession();
	session_start();
	unset($_SESSION['userdata']);
	unset($_SESSION['username']);
	unset($_SESSION['facebook-userdata']);
	session_destroy();
	header("Location:navbar.php");
}
?>