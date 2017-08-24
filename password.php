<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,1); 
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
<script>

function closemodal()
{
	var modal = document.getElementById('passwordmodal');
	modal.style.display = "none";
	window.location.href='admin.php?path=4';
} 
</script>
</head>
<body >





<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> </div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> 
<div class="login" style="border:5px solid #333333;margin-left:0px;margin-top:150px;">
<div id="passwordlabel"><p style="padding-left:120px;font-size:26px;">Change Password</p> </div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="passwordform">
<input class="password-field password-field-password" id="password-1" name="oldpassword" type="password" placeholder="Old Password">
<input class="password-field password-field-password" id="password-2" type="password" name="newpassword" placeholder="New Password">
<input class="password-field password-field-password" id="password-3" type="password" name="confirmnewpassword" placeholder="Confirm Password">
<input type="submit" id="submitpassword" name="submitpassword" value="Submit" />
</form>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> </div>
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
<div class="modal" id="passwordmodal" role="dialog">
	<div class="modal-dialog">
	
	<div class="modal-content">
	
		<div class="modal-header" style="background-color:#333333;height:50px;">
		
		
		</div>
		<div class="modal-body" style="height:120px;" >
		<img src="images/error.png" style="float:left;" ></img>
			<p id="errormessage1" style="font-size:16px;font-style:bold;"> </p> 
			<p id="errormessage2" style="font-size:16px;font-style:bold;"> </p>
			<p id="errormessage3" style="font-size:16px;font-style:bold;"> </p>
		</div>
		
		<div class="modal-footer"style="background-color:#333333;height:60px;" >
			<button type="button" class="btn btn-default" onclick="closemodal()" style="background-color:#85C1E9  ; color:white;">Ok </button>
		</div>
	</div>
	</div>
</div>
</body>
</html>


<?php



	if(isset($_POST['submitpassword']))
	{
		$oldpassword=$newpassword=$confirmnewpassword='';
		$errarray1=$errarray2=$errarray3='';
		$oldpassword=test_input($_POST['oldpassword']);
		$newpassword=test_input($_POST['newpassword']);
		$confirmnewpassword=test_input($_POST['confirmnewpassword']);
		$action['result'] = null;
        $errarray = array();
		if(empty($oldpassword))
		{
			$action['result'] = 'error';
		    $errarray1='Please enter oldpassword <br>';
		}
		if(empty($newpassword))
		{
			$action['result'] = 'error';
	       $errarray2='Please enter newpassword <br>';
		}
		if(empty($confirmnewpassword))
		{
			$action['result'] = 'error';
		   $errarray3='Please enter confirm password <br>';
		}
		
			
		if($action['result'] ==null)
		{
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
		
			
			if(strcmp(md5($oldpassword),$orgpassword)==0)
			{
		$newpassword=md5($newpassword);
				$sql="update users set password='$newpassword' where username='$username' and acc_type='Admin';";
				mysqli_query($con,$sql);
				
				mysqli_close($con);
				echo '<script type="text/javascript">';
			echo 'var modal = document.getElementById("passwordmodal");
				 
	 modal.style.display = "block";';
	 echo "document.getElementById('errormessage1').innerHTML='Your password has been changed successfully!';";
	 echo "document.getElementById('passwordform').style.visibility='hidden';";
			echo '</script>';
		}
		else
		{
			echo '<script type="text/javascript">';
			echo 'var modal = document.getElementById("passwordmodal");
				 
	 modal.style.display = "block";';
	 echo "document.getElementById('errormessage1').innerHTML='Sorry you entered wrong password!';";
	 echo "document.getElementById('passwordform').style.visibility='hidden';";
			echo '</script>';
		}
		
	}
	}
	else
	{	
		echo '<script type="text/javascript">';
			echo 'var modal = document.getElementById("passwordmodal");
				
	 modal.style.display = "block";';
	 
	 echo "document.getElementById('errormessage1').innerHTML='$errarray1';";
	 echo "document.getElementById('errormessage2').innerHTML='$errarray2';";
	 echo "document.getElementById('errormessage3').innerHTML='$errarray3';";
	 echo "document.getElementById('passwordform').style.visibility='hidden';";
			echo '</script>';
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