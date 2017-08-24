<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
if(isset($_SESSION)){
$username=$_SESSION['username'];
}

?>




<html>
<head>
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
background-color: #333333;
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
margin: 0px;
padding: 0.5em;
position: relative;
vertical-align: middle;
width: 100%;
margin-bottom:30px;
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
	height:110px;
	color:white;
	font-size:20px;
	
	padding-top:10px;
	
	font-size:18px;
	background-color:#333333;
}

#submitpassword{
	width:100%;
	overlay:hidden;
	height:60px;
	
	padding-top:7px;
	padding-left:8px;
	font-size:24px;
	
	font-style:bold;
	cursor:pointer;
	
}

#compemplogin{
	
	
border: 2px solid #ccc;
border-radius: 0.25em;
color:grey;
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
box-sizing: border-box;}

</style>
</head>






<?php
include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select companyname from companyemployees where username='$username'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>
<body>
	
	
	<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" > </div>
	
	<div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
	
		<div class="login" style="border:5px solid #333333;margin-top:50px;border-radius:5px;">
		<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3"  > </div>
		<div > <img class="" src="images/emp.png" width="200" height="200" style="border:5px solid #77A6C2  ;border-radius:50%"  > </div>
 <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3"  > </div><div class="col-md-5 col-lg-5 col-sm-5 col-xs-5" id="passwordlabel"><p style="padding-left:120px;height:40px;font-size:28px;font-style:Verdana;color:grey"><b>Employee Login </b> </p> </div>

<form method="post" action="employeeloginaction.php" id="passwordform">
<select id="compemplogin" name="logcomp" >
<option value="Select Company"> Select Company</option>
<?php
if($count>0)
		{
		
		 while($row=mysqli_fetch_row($result)){ 
               echo '<option value="'.$row[0].'">'.$row[0].'</option>'; 
		
				
		
		}
		}

?>
</select>


<input class="password-field password-field-password" id="password-1" name="comppassword" type="password" style="margin-top:5px;" placeholder="Enter Password">

<input type="submit" id="submitpassword" name="employeelogin" class="btn btn-primary" value="Login" />
</form>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/hideShowPassword.min.js"></script> 
<script src="js/modernizr.custom.js"></script>
</div>
</div>

<div class="col-md-3.5 col-lg-3.5 col-sm-3.5 col-xs-3.5" > </div>

<script>
$('#password-1').hideShowPassword({
  
  innerToggle: true,
  
  touchSupport: Modernizr.touch
});
</script>
</body>
</html>