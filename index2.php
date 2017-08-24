<?php
include_once("config.php");
include_once("includes/functions.php");

//print_r($_GET);die;

if(isset($_REQUEST['code'])){
	$gClient->authenticate();
	$_SESSION['token'] = $gClient->getAccessToken();
	
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	$userProfile = $google_oauthV2->userinfo->get();
	//DB Insert
	
	$gUser = new Users();
	
	$_SESSION['google_data'] =$userProfile; 
	
	$gUser->checkUser('google',$userProfile['id'],$userProfile['given_name'],$userProfile['family_name'],$userProfile['email'],$userProfile['picture'],$_SESSION["acctype"]);
	

	$_SESSION['token'] = $gClient->getAccessToken();
		if($_SESSION['count']==0 )
		{		unset($_SESSION['count']);
			header("Location:confirmation.php?logintype=google");
			
		}
		else if($_SESSION['count']==1)
		{unset($_SESSION['count']);
				$_SESSION['username']=$userProfile['email'];
			header('Location:dashboard.php');
			
		}
	
	
} else {
	$authUrl = $gClient->createAuthUrl();
}



?>
<html>
<head>
<script type="text/javascript">
	window.history.forward();
	function noBack() { window.history.forward(); }
</script>
</head>
<body onload="noBack();" 
	onpageshow="if (event.persisted) noBack();" onunload="">
	
	
	<?php
include_once("config.php");
include_once("includes/functions.php");

//print_r($_GET);die;

if(isset($_REQUEST['code'])){
	$gClient->authenticate();
	$_SESSION['token'] = $gClient->getAccessToken();
	
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	$userProfile = $google_oauthV2->userinfo->get();
	//DB Insert
	
	$gUser = new Users();
	
	$_SESSION['google_data'] =$userProfile; 
	
	$gUser->checkUser('google',$userProfile['id'],$userProfile['given_name'],$userProfile['family_name'],$userProfile['email'],$userProfile['picture'],$_SESSION["acctype"]);
	
	
	$_SESSION['token'] = $gClient->getAccessToken();
} else {
	$authUrl = $gClient->createAuthUrl();
}



?>
</body>
</html>