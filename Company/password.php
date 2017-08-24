<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<title></title>
<style>


.hideShowPassword-toggle {
background-image: url(img/wink.svg);
background-position: 0 center;
background-repeat: no-repeat;
cursor: pointer;
height: 100%;
overflow: hidden;
text-indent: -9999em;
width: 44px;
}
.hideShowPassword-toggle-hide {
background-position: -44px center;
}

.hideShowPassword-toggle{
z-index: 3;
}





.login, .password-field {
border-radius: 0.25em;
}
.login {
background-color: #e6e6e6;
}
.password-field {
background-color: #fff;
border: 2px solid #ccc;
border-radius: 0.25em;
color: inherit;
display: block;
height:45px;
font-family: inherit;
font-size: 20px;
line-height: inherit;
margin-top:3px;
margin: 0;
padding: 0.5em;
position: relative;
vertical-align: middle;
width: 100%;
-webkit-appearance: none;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
.password-field:focus {
border-color: #0088cc;
outline: transparent;
z-index: 2;
}
.password-field-username {
border-bottom-left-radius: 0;
border-bottom-right-radius: 0;
margin-bottom: -2px;
}
.password-field-password {
border-top-left-radius: 0;
border-top-right-radius: 0;
margin-top: -2px;
}

#passwordlabel{
	width:100%;
	overlay:hidden;
	height:60px;
	color:white;
	font-size:20px;
	
	padding-top:10px;
	
	font-size:18px;
	background-color:#333333;
}

#submitpassword{
	width:100%;
	overlay:hidden;
	height:50px;
	-webkit-border-radius:5px 5px 5px 5px;
	-moz-border-radius: 5px 5px 5px 5px;
	padding-top:7px;
	padding-left:8px;
	font-size:24px;
	color:#4A5156;
	font-style:bold;
	cursor:pointer;
	background:rgba(51,51,48,0.3);
}
#submitpassword:hover{
	
	background:rgba(51,51,48,0.7);
	color:white;
	cursor:pointer;
}
</style>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/hideShowPassword.min.js"></script> 
<script src="js/modernizr.custom.js"></script>
</head>
<body >







<div class="login" style="border:5px solid #333333;margin-left:300px;margin-top:150px;">
<div id="passwordlabel"><p style="padding-left:120px;font-size:26px;">Change Password</p> </div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input class="password-field password-field-password" id="password-1" name="oldpassword" type="password" placeholder="Old Password">
<input class="password-field password-field-password" id="password-2" type="password" name="newpassword" placeholder="New Password">
<input class="password-field password-field-password" id="password-3" type="password" name="confirmnewpassword" placeholder="Confirm Password">
<input type="submit" id="submitpassword" name="submitpassword" value="Submit" />
</form>
</form>
</div>




<script>


$('#password-1').hideShowPassword({
  
  innerToggle: true,
  
  touchSupport: Modernizr.touch
});

$('#password-2').hideShowPassword({
  
  innerToggle: true,
  
  touchSupport: Modernizr.touch
});
$('#password-3').hideShowPassword({
  
  innerToggle: true,
  
  touchSupport: Modernizr.touch
});
</script>

</body>
</html>


<?php



	if(isset($_POST['submitpassword']))
	{
		$oldpassword=$newpassword=$confirmnewpassword='';
		$oldpassword=test_input($_POST['oldpassword']);
		$newpassword=test_input($_POST['newpassword']);
		$confirmnewpassword=test_input($_POST['confirmnewpassword']);
		include("dbconnect.php");
		mysqli_select_db($con,"minorproject");
		$username='adminaccount';
		$sql="select * from users where acc_type='Admin' and username='adminaccount'";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);

		if($count==1)
		{
			$row=mysqli_fetch_row($result);
			$orgpassword=test_input(($row[4]));
			echo $orgpassword;
			
			if(strcmp(md5($oldpassword),$orgpassword)==0)
			{
		$newpassword=md5($newpassword);
				$sql="update users set password='$newpassword' where username='$username' and acc_type='Admin';";
				mysqli_query($con,$sql);
				$count=mysqli_affected_rows($con);
				
		}
		
	}
	}
	
	function test_input($data) 
								{
									$data = trim($data);
									$data = stripslashes($data);
									$data = htmlspecialchars($data);
									return $data;
								}
		
	
?>