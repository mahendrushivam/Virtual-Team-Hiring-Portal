<?php
include_once("configfac.php");
include_once("includes/functionsfac.php");

if($fbuser)
	{
	$user_profile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
	$user = new Usersfacebook();
	$_SESSION['facebook-userdata']=$user_profile;
	$user_data = $user->checkUserfacebook($user_profile['id'],$user_profile['first_name'],$user_profile['last_name'],$user_profile['email'],$user_profile['gender'],$user_profile['locale'],$user_profile['picture']['data']['url']);
	if(!empty($user_data)){
	echo'<h1>Facebook Profile Details </h1>';
		$output .= '<img src="'.$user_data['picture'].'">';
        $output .= '<br/>Facebook ID : ' . $user_data['oauth_uid'];
        $output .= '<br/>Name : ' . $user_data['fname'].' '.$user_data['lname'];
        $output .= '<br/>Email : ' . $user_data['email'];
        $output .= '<br/>Gender : ' . $user_data['gender'];
        $output .= '<br/>Locale : ' . $user_data['locale'];
        echo '<br/>You are login with : Facebook';
        echo'<br/>Logout from <a href="logout.php?logoutfacebook">Facebook</a>'; 
	}else{
		$output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
	}
}
?>
