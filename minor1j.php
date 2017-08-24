
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	
      <script type="text/javascript">
	window.history.forward();
	function noBack() { window.history.forward(); }
	
	function headerfunction()
	{
		header("location: account.php");
	}
	
	$(document).ready(function() {
    var x_timer;    
    $("#uname").keyup(function (e){
        clearTimeout(x_timer);
        var username = $(this).val();
        x_timer = setTimeout(function(){
          
			$.post('checkusername.php', {'username':username}, function(data) {
			if(data=='error')
			{
				document.getElementById("mypopup2").innerHTML='Username already exists';
				document.getElementById("mypopup2").style.visibility="visible";
				document.getElementById("uname").style.backgroundColor="#f7bbbb";
			}
			else
			{
				document.getElementById("uname").style.backgroundColor="#ffffff";
			}
			
			
    });
        }, 300);
    }); 
	
	$("#uname").keyup(function (e){
		
				document.getElementById("mypopup2").style.visibility="hidden";
	});
	
});


$(document).ready(function() {
    var x_timer;    
    $("#email").keyup(function (e){
        clearTimeout(x_timer);
        var useremail = $(this).val();
        x_timer = setTimeout(function(){
          
			$.post('checkusername.php', {'useremail':useremail}, function(data) {
			if(data=='error')
			{
				document.getElementById("mypopup3").innerHTML='Email-id already exists';
				document.getElementById("mypopup3").style.visibility="visible";
				document.getElementById("email").style.backgroundColor="#f7bbbb";
			}
			else
			{
				document.getElementById("email").style.backgroundColor="#ffffff";
			}
			
			
    });
        }, 400);
    }); 
	
	$("#email").keyup(function (e){
		
				document.getElementById("mypopup3").style.visibility="hidden";
	});
	
	$("#fname").keyup(function (e){
		
				document.getElementById("mypopup").style.visibility="hidden";
	});
$("#lname").keyup(function (e){
		
				document.getElementById("mypopup1").style.visibility="hidden";
	});
$("#pswd").keyup(function (e){
		
				document.getElementById("mypopup4").style.visibility="hidden";
	});
$("#cpswd").keyup(function (e){
		
				document.getElementById("mypopup5").style.visibility="hidden";
	});
	
});


function signupindsubmit()
{
	var firstname=document.getElementById("fname").value;
	var lastname=document.getElementById("lname").value;
	var username=document.getElementById("uname").value;
	var emailid=document.getElementById("email").value;
	var pass=document.getElementById("pswd").value;	
	var confirmpass=document.getElementById("cpswd").value;
	if(firstname=='' && lastname=='' && username=='' &&  emailid=='' && pass=='' && confirmpass=='')
	{
		event.preventDefault();
	}
	else
	{
		this.submit();
	}
	
}






</script> 

<style>

.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
      touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}

.azm-social {
	margin: 0;
	padding: 0;
	display: inline-block;
	color: #fff;
	text-align: center;
	-moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
	-o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

.azm-btn {
	height: 48px;
	margin: 8px;
	padding: 13px 17px;
	font-size: 14px;
	line-height: 21px;
	font-weight: 300;
	-moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}

.azm-border-bottom {
	padding-top: 12px;
	border-bottom: 4px solid rgba(0, 0, 0, 0.1);
}

.azm-facebook { background: #4862a3; }

.azm-google { background: #3f85f4; }
.azm-google-plus { background: #dd4b39; }

.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;transform:translate(0, 0)}

.namepopup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	
}


.namepopup .namepopuptext  {
    visibility:hidden;
    width: 140px;
    background-color: #555;
    color: #fff;
	
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
	top:0px;
    left:150px;
	
	height:40px;
    margin-left:0%;
}



.namepopup namepopuptext::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
	border-top: 6px solid transparent;
  border-bottom: 6px solid transparent; 
  
  border-right:6px solid #555; 
    margin-left: -8px;
    
}


.namepopup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}


@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
 }

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
	
}
.namepopup .close {
		visibility:hidden;
		 -webkit-animation: fadeOut 1s;
    animation: fadeOut 1s;
}

</style>
<script src="js/individualstep1.js">
</script>
</head>
<body style="background :linear-gradient(to bottom right, white, #D7CEC7)" >
			<?php
					include("dbconnect.php");
					$usererr=$emailerr="";
					$usernameerr=$emailiderr=$firsterr=$lasterr=$passerr="";
					$username=$emailid=$firstname=$lastname=$password="";
					$action = array();
					$action['result'] = null;
                    $errarray = array();
				if(isset($_POST['indsignup']))
				{
					
					if ($_SERVER["REQUEST_METHOD"] == "POST")
					{
						
						
							$username=test_input($_POST["uname"]);
							$emailid=test_input($_POST["eemail"]);
							$firstname=test_input($_POST["fname"]);
							$password=test_input($_POST["pass"]);
							$lastname=test_input($_POST['lname']);
							$con=mysqli_connect('localhost','root','');
							if(empty($firstname))
							{
							$action['result'] = 'error';
							array_push($errarray,'Please enter Firstname');
							}
							if(empty($lastname))
							{
							$action['result'] = 'error';
							array_push($errarray,'Please enter Lastname');
							}
							if(empty($username))
							{
							$action['result'] = 'error';
							array_push($errarray,'Please enter Username');
							}
							if(empty($password))
							{
							$action['result'] = 'error';
							array_push($errarray,'Please enter Password');
							}
							if(!$con)
							{
								die('could not connect'.mysqli_connect_error());
							}
							mysqli_select_db($con,"minorproject");
							
							if($action['result'] == 'error')
							{
							$text=implode("\\n",$errarray);
						
							}
							else
							{
									$time=$_SERVER["REQUEST_TIME"];
									$password=md5($password);
									$sql="insert into users (acc_type,username,emailid,password,status,logintime) values ('User','$username','$emailid','$password','0',$time);insert into individual(firstname,lastname,username) values('$firstname','$lastname','$username')";
									mysqli_multi_query($con,$sql);
									include("mail3.php");
									echo '<script> alert("Thank you for signing up. <br>Check you mails verificationfor email"); </script>';
									mysqli_close($con);
									$username=$firstname=$lastname=$emailid=$password="";
									
							
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

<div class="section" >
<br>

 <div class="formm">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="signupindsubmit()">
  
  <p>
  <div class="namepopup">
  <input type="text" class="box" id="fname" name="fname" placeholder="Firstname" value="<?php echo $firstname; ?>" size="20"  style="margin-left:70px" onblur="validatename(this.id)" onfocus="firstnameatfocus()"> </br></p>
  <span class="namepopuptext"  id="mypopup" ></span>
  <!-- <span class="popuptext" id="1name">Enter First name</span>  -->
  
  </div>
  <div class="namepopup">
  <input type="text" class="box" id="lname" name="lname" placeholder="Lastname"   size="20"  onblur="validatelastname(this.id)" onfocus="lastnameatfocus()"> </br></p>
  <span class="namepopuptext"  id="mypopup1" ></span>
  <!-- <span class="popuptext" id="1name">Enter First name</span>  -->
  
  </div>
  <div class="popup" >
  <input type="text" class="box" id="uname" name="uname" placeholder="User Name" style="margin-left:70px;margin-top:3px;" value="<?php echo $username; ?>"   size="40" onblur="validateusername(this.id)" onfocus="usernameatfocus()" ></br>
  
  <span class="popuptext" id="mypopup2" ></span>
  </div>
  <div class="popup" >
  <input type="email" class="box" id="email" name="eemail" placeholder="Email Address" style="margin-left:70px;margin-top:8px;" value="<?php echo $emailid; ?>" size="40" onblur="validateemail()" onfocus="emailidatfocus()" ></br>
  <span class="popuptext" id="mypopup3" > </span>
  </div>
   <div class="popup">
   <input type="password" id="pswd" class="box" name="pass" placeholder="Password" style="margin-left:70px;margin-top:8px;"  value="<?php echo ($password); ?>"  size="40" onblur="passwordval()" onfocus="passwordatfocus()"/> </br>
  <div class="popuptext" id="mypopup4" > </div>
  </div>
  <div class="popup" >
   <input type="password" id="cpswd" class="box" name="cpass" placeholder="Confirm Password" style="margin-left:70px;margin-top:8px;" size="40"  onblur="confirmpasswordd()" onfocus="confirmpasswordatfocus()"></br>
  <div class="popuptext" id="mypopup5" > </div></div>
  <div id="RecaptchaField1" style="margin-top:15px;margin-left:105px;"  name="recaptchafield1" ></div>
  <div class="row"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
  <input type="submit" class= "btn btn-primary" value="Signup" name="indsignup" style="margin-top: 13px; height:50px; margin-left:100px;" onclick="Function1(0)"></div>
  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div></div>
  <hr style="border-width:2px; border-style:inset">
  <h5 align="center" style="font-family: 'Signika', sans-serif;color:white; margin-top:-10px; font-size:18px;">or Connect with</h5>
  <p style="margin:15px;margin-left:70px;margin-bottom:10px;">
  
  <?php
include_once("configfac.php");
include_once("includes/functionsfac.php");
$fbuser=null;
if(!$fbuser){
	
	$loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
	echo'<a href="'.$loginUrl.'" class="btn azm-social azm-btn azm-border-bottom azm-facebook" name="facebookloginbut" style="text-transform:none;"><i class="fa fa-facebook" align="left"></i> Log in with Facebook</a>';
		
}
?>
  
  <?php
  $countfac=0;
  {
	 
	  {include_once("config.php");
include_once("includes/functions.php");

//print_r($_GET);die;
 $countfac=0;
if(isset($_REQUEST['code']) ){
	$gClient->authenticate();
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectUrl, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	$userProfile = $google_oauthV2->userinfo->get();
	//DB Insert
	$gUser = new Users();
	$_SESSION['google_data'] =$userProfile;
	
	$gUser->checkUser('google',$userProfile['id'],$userProfile['given_name'],$userProfile['family_name'],$userProfile['email'],$userProfile['picture'],'User');
	
	
	$_SESSION['token'] = $gClient->getAccessToken();
} else {
	$authUrl = $gClient->createAuthUrl();
}
  }}
if(isset($authUrl)) {
	

	echo '<a href="'.$authUrl.'" class="btn azm-social azm-btn azm-border-bottom azm-google-plus" style="text-transform:none;"><i class="fa fa-google-plus"></i> Sign in with Google+</a></p>';
		} 
else {
	echo '<a href="logout.php?logout" class="btn azm-social azm-btn azm-border-bottom azm-google-plus" style="text-transform:none;"><i class="fa fa-google-plus"></i> Sign in with Google+</a></p>';
}
  
?>
  </form>

  </div>
</div>


 </body>
</html>
