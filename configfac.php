<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '1812003859084275'; //Facebook App ID
$appSecret = '04e1fdf7de8da4d3cfa8d3485ef13e1c'; // Facebook App Secret
$homeurl = 'http://localhost/login-with-google-using-php/index1.php';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>