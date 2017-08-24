<?php
if (session_status() == PHP_SESSION_NONE)
session_start();
?>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="password_strength/password_strength_lightweight.js"></script>
<link rel="stylesheet" type="text/css" href="password_strength/password_strength.css">

       
<style>
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	
}

/* The actual popup */
.popup .popuptext  {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
	
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}


/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
	
}
.popup .close {
		visibility:hidden;
		 -webkit-animation: fadeOut 1s;
    animation: fadeOut 1s;
}
div.head {
width:100%;
 height:10%;
 padding: 15px 0px 80px 5px;
 margin: 0px 8px 0px 0px;
 background-color:#565656;

}
section 
{
	width:100%;
	height:10%
    float:left;
    padding:10px;	 	 
}
div.signup{
margin:0px 0px 0px 0px;
padding: 2px 0px 10px 0px;
background-color:white;
height:12%;

}

div.formm {
border: 5px inset TAN;
border-radius:5px;
margin: 30px 430px 20px 430px;
background: linear-gradient(to bottom right,#565656,TAN);
padding: 25px 10px 10px 10px;
height:71%;
}
input
{
  -moz-border-radius: 10px;
 border-radius: 10px;
    border:solid 1px #565656;
    padding:5px;
}
  .box{
                font-family:Tahoma, Geneva, sans-serif;
                font-size:16px;
                color:#333;
                padding:5px;
                background-color:white;
                border:2px solid #565656;
        }
.button {
    background-color: #50394c;
    border: none;
    color: white;
    padding: 20px 142px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 8px 4px;
    cursor: pointer;
	border-radius:8px;
	transition-duration: 0.4s;
}
.button:hover{
background-color:#72606f;
}
hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
	border-color: #F7882F;
}
input#fname{
background-image:url(png/glyphicons-4-user.png);
background-repeat:no-repeat;
background-position:6px;

margin-top:0px;
padding-left:35px;
width:360px;
height:45px;
font-size:16px;}

input#email{
background-image:url(png/glyphicons-11-envelope.png);

background-repeat:no-repeat;
background-position:6px;

margin-top:0px;
padding-left:35px;
width:360px;
height:45px;
font-size:16px;


}
input#pswd{
background-image:url(png/glyphicons-45-keys.png);
background-repeat:no-repeat;
background-position:6px;

margin-top:0px;
padding-left:35px;
width:360px;
height:45px;
font-size:16px;
}
input#uname{
background-image:url(png/glyphicons-522-user-lock.png);
background-repeat:no-repeat;
background-position:6px;

margin-top:0px;
padding-left:35px;
width:360px;
height:45px;
font-size:16px;
}
</style>
<script src="js/signstep1.js">
			
</script>
<script>
$(document).ready(function($) {
        

        $('#mySecondPassword').strength_meter({
            inputClass: 'c_strength_input',
            strengthMeterClass: 'c_strength_meter',
            toggleButtonClass: 'c_button_strength'
        });

        
    });
</script>

</head>
<body style="background :linear-gradient(to bottom right, white, #D7CEC7)">

<div class="head">
  <h3 style="color:white; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height:48px; margin:0; text-align:right;">Sign Up</h3></br>
  </div>
  <hr style="border-color:TAN;border-style:solid;border-width:4.5px;margin-top:0px">
<div class="section" >
<br>
<h1 align="center" style="font-family: 'Inder',sans-serif;line-height:28px;margin-bottom:15px;color: #76323F;font-size:32px">Create an account</h1>
 <div class="formm">

<form>
  
  <p>
  <div class="popup">
  <input type="text" class="box" id="fname" name="fname" placeholder="First and Last Name" size="40" onblur="validatename()" > </br></p>
  <div class="popuptext" id="mypopup" > </div>
  </div>
  <div class="popup" >
  <input type="text" class="box" id="uname" name="uname" placeholder="User Name" style="margin-top: 5px "  size="40" onblur="validateusername()"></br>
  
  <div class="popuptext" id="mypopup2" > </div>
  </div>
  <div class="popup" >
  <input type="email" class="box" id="email" name="eemail" placeholder="Email Address" style="margin-top: 18px;" size="40" onblur="validateemail()"></br>
  <div class="popuptext" id="mypopup3" > </div>
  </div>
   <div class="popup" >
   <input type="password" id="pswd" class="box" name="pass" placeholder="Password" style="margin-top: 18px" size="40" onblur="validatepassword()"></br>
  <div class="popuptext" id="mypopup4" > </div>
  </div>
  <div style="margin-top:-50px">
  <div class="effects">
      <div id="mySecondPassword" ></div>
    </div>
</div>
 

  <input type="button" class= "button"id="btn1" value="Signup" style="margin-top: 18px" onclick="Function1(0)">
  <hr style="border-width:2px; border-style:inset">
  <h5 align="center" style="font-family: 'Signika', sans-serif;color:white">or Connect with</h5>
  <p style="margin:-15px">
  <a href="#" class="btn azm-social azm-btn azm-border-bottom azm-facebook"><i class="fa fa-facebook" align="left"></i> Log in with Facebook</a>
  <?php
include("index.php");

?>
  </form>

  </div>



 </body>
</html>
