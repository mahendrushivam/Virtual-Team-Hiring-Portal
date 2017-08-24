<?php

if (session_status() == PHP_SESSION_NONE)
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '629840727127-s95b5iguejkec2vo2l2jb21t2de7s3v1.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'NF_BaeuYxZ3pE2cpXgOd5mui'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/login-with-google-using-php/index2.php';  //return url (url to script)
$homeUrl = 'http://localhost/login-with-google-using-php/navbar.php';  //return to home
$countarr;
##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to Minor Project');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>