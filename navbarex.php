<!DOCTYPE html>
<?php
if (session_status() == PHP_SESSION_NONE)
session_start();
?>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/minorstep1.css">
  <link rel="stylesheet" href="css/modal1.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" src="assets/bootstrap/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
 <style>
 .navbar-inverse{background-color:#50364c;border-color:#080808}
 .navbar{border-radius:0px;}
 .navbar {
    position: relative;
    min-height: 80px;
    margin-bottom: 10px;
    border: 1px solid transparent;
}


.navbar-nab {
    float: left;
    margin: 0;
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 100px;
	
}



.navbar-right {
    float: right!important;
    margin-right: -15px;
	margin-top:-90px;
}
.button2 {
    background-color: #d2691e;
    border: none;
    color: white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 8px 8px;
	width:265px;
    cursor: pointer;
	border-radius:4px;
	height:350px;
	transition-duration: 0.4s;
}
.button2:hover{
background-color:#b35919;
color:white;
text-decoration:none;
}
.button1 {
    background-color: #ADFF2F;
    border: none;
	height:350px;
	width:265px;
    color: white;
    padding: 10px 30px;
    text-align:center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 8px 8px;
    cursor: pointer;
	border-radius:4px;
	transition-duration: 0.4s;
}
.button1:hover{
background-color:#7acc00;
color:white;
text-decoration:none;
}
 .modal-footer {
      background-color: #f9f9f9;
  }
  
  .back1 {
  background-image:url("r1.png");
  }
  .modal-header1
{min-height:16.43px;
border-bottom:1px solid #e5e5e5;
}



 
 
.modal-header2
{min-height:24px;
border-bottom:1px solid #e5e5e5;
}
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	
}


.popup .popuptext  {
    visibility:hidden;
    width: 180px;
    background-color: #555;
    color: #fff;
	
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
	top:0px;
    left:370px;
	
	height:40px;
    margin-left:0%;
}



.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 0%;
	border-top: 6px solid transparent;
  border-bottom: 6px solid transparent; 
  
  border-right:6px solid #555; 
    margin-left: -8px;
    
}


.popup .show {
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
.popup .close {
		visibility:hidden;
		 -webkit-animation: fadeOut 1s;
    animation: fadeOut 1s;
}

.horizpopup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	
}


.horizpopup .horizpopuptext  {
    visibility:hidden;
    width: 180px;
    background-color: #555;
    color: #fff;
	
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
	top:-70px;
    left:200px;
	
	height:50px;
    margin-left:0%;
}



.horizpopup .horizpopuptext::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 0%;
	border-top: 6px solid transparent;
  border-bottom: 6px solid transparent; 
  
  border-right:6px solid #555; 
    margin-left: -8px;
    
}


.horizpopup .show {
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
.horizpopup .close {
		visibility:hidden;
		 -webkit-animation: fadeOut 1s;
    animation: fadeOut 1s;
}
 
 </style>
 
 <script>
$(document).ready(function(){
    $("#button1").click(function(){
        $("#myModal2").modal();
    });
});
function choicevalue()
{
	<?php $_SESSION['acctype']='User';?>
	
	alert ("<?php echo $_SESSION['acctype']; ?>");
}
function choicevalue2()
{
	<?php $_SESSION['acctype']='User';?>
	alert ("<?php echo $_SESSION['acctype']; ?>");
}

    var CaptchaCallback = function() {
        grecaptcha.render('RecaptchaField1', {'sitekey' : '6Lea7QsUAAAAAJhWnO2d3K0utf7Tcb_sAaa2Umd2'},{'data-theme': 'dark'});
        grecaptcha.render('RecaptchaField2', {'sitekey' : '6Lea7QsUAAAAAJhWnO2d3K0utf7Tcb_sAaa2Umd2'},{'data-theme': 'dark'});
    };
	
	function validateloginform()
	{
		var username=document.getElementById("loginusername").value;
		var password=document.getElementById("loginpassword").value;
		if(username=='' || password==' ')
		{
			event.preventDefault();
			
		}
		else
		{
			
			this.submit();
		}
	}

$(document).ready(function() {
     
    $("#loginusername").blur(function(){
			var username = $(this).val();
          var dataString ='username='+username;
		  if(username!='')
		  {
			  $.post('checkusername.php', {'username':username}, function(data) {
			if(data!='error')
			{
				document.getElementById("logpopup1").innerHTML="Username doesn't exists";
				document.getElementById("logpopup1").style.visibility="visible";
				
			}
			
			
			
		  });
		  }
        });
   
	
	$("#loginusername").focus(function (e){
		document.getElementById("logpopup1").style.visibility="hidden";
	});
	
	
	$("#loginpassword").focus(function (e){
		document.getElementById("logpopup2").style.visibility="hidden";
	}); 
	
	$("#loginpassword").blur(function(){
			var password= $(this).val();
			var getusername=document.getElementById("loginusername").value;
			if(getusername!='' && password!='')
		  {
			  $.post('checkusername.php', {'getusername':getusername,'password':password}, function(data) {
			if(data=='error')
			{
				document.getElementById("logpopup2").innerHTML="Wrong password";
				document.getElementById("logpopup2").style.visibility="visible";
				
			}
			
			
			
		  });
		  }
        });
});	
	
</script>
</head>
<body style="font-size:16px">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
	<div class="navbar-nab">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"style="margin-left:10px">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 </a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
		<li class="dropdown" style="margin-left:10px">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 2 </span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Page 2-1</a></li>
            <li><a href="#">Page 2-2</a></li>
            <li><a href="#">Page 3-3</a></li>
         </ul>
        </li>
		
        <li class="dropdown" style="margin-left:10px">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 3 </span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Page 3-1</a></li>
            <li><a href="#">Page 3-2</a></li>
            <li><a href="#">Page 3-3</a></li>
         </ul>
        </li>
      </ul>
	  </div>
	  </div>

	 
      <ul class="nav navbar-nav navbar-right">
        <li style="font-size: 20px; margin-top:5px"><a data-toggle="modal" href="#myModal"><span class="glyphicon glyphicon-user"></span style="font-size:50px;"> Sign Up</a></li>
        <li style="font-size: 20px; margin-top:5px "><a href="#loginmodal"  data-toggle="modal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
		
  </div>
</nav>
<div  class="container" style="width:100%;padding-left:0px;padding-right:0px;margin-top:-10px;">
<div style="height:500px;width:100%">
<script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
        
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
        
        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left:0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/vt4.jpeg" />
               
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/emp1.png" />
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="img/int4.jpg" />
            </div>
        </div>
        
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    </div>
    
  
</div>


<div class="modal fade" id="loginmodal">
            	<div class="modal-dialog">
                	<div class="modal-content">
                    	<div class="modal-header" style="height:60px;background-color:#4169E1;color:white;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title"><span class="glyphicon glyphicon-lock"></span>Login</h3>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                     	<div class="row">
                        	<div class="col-md-6">
                            
                            <p style="text-align: center; padding-top:10px;color:#7E7575">
          Connect with
          </p>
          
                		<div class="col">
        					<a href="#" class="btn azm-social azm-btn azm-border-bottom azm-facebook"><i class="fa fa-facebook"></i> Log in with Facebook</a>
                			<a href="#" class="btn azm-social azm-btn azm-border-bottom azm-google-plus"><i class="fa fa-google-plus"></i> Sign in with Google+</a>
                        </div>
                            </div>
                            <div class="col-md-6">
                          
                                  <form role="form" method="post" action="confirmation.php" onsubmit="validateloginform()">
             
           <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="loginusername" name="loginusername" placeholder="Enter email">
			  <div class="horizpopup">
					<span class="horizpopuptext" id="logpopup1"> </span>
			  </div>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="loginpassword" name="loginpassword" placeholder="Enter password">
			  <div class="horizpopup">
					<span class="horizpopuptext" id="logpopup2"> </span>
			  </div>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            
              <button type="submit" name="loginbutton" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer" style="background-color:#C0C0C0;">
                        <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"> Close</button>
                       
                        <div style="text-align: left">
                         <p>Not a member? <a href="#myModal" data-toggle="modal" data-dismiss="modal" >Sign Up</a></p>
         				 <p>Forgot <a href="password.php">Password?</a></p>
                         </div>
                    </div>
                </div>
            </div>
      </div>
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	
	<div class="modal-content">
		<div class="modal-header" style="background-color:#4169E1;>
		<button type="button" class="close" data-dismiss="modal" style="color:white; cursor: auto;"></button>
		<h2 class="modal-title" align="center" style="color:white; font-size:25px;"><span class="glyphicon glyphicon-lock"></span>Sign Up</h4>
		</div>
		<div class="modal-body">
		<a href="#myModal1" data-toggle="modal" class="button2"  data-dismiss="modal" align="left" style="padding-left:2px; text-decoration:none;" onclick="choicevalue()"><img src="username.png"  > </img><div style="align:bottom"><span class="glyphicon glyphicon-user"></span>  Individual</div></a>
		<a href="#myModal2"  data-toggle="modal" align="right"  style="float:right;" data-dismiss="modal" class="button1" style="padding-left:2px;" onclick="choicevalue2()"><img src="hr.png" style="margin-left:-20px"  > </img><div style="align:bottom" > <span class="glyphicon glyphicon-briefcase" style="padding-right:10px" ></span>Company </div></a> 
		</div>
		
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#4169E1; color:white;">Close</button>
		</div>
	</div>
	</div>
</div>
<div class="modal fade" id="myModal1" role="dialog">
	<div class="modal-dialog" >
	
	<div class="modal-content" >
		<div class="modal-header" style="background-color:TAN;height:50px;margin-bottom:0px;padding:0px;">
		<div style="margin-left:395px;">
		<button type="button" class="close" data-toggle="modal" data-dismiss="modal" style="color:#565656; cursor:auto;">&times</button>
		</div>
		
		</div>
		<div class="modal-body1" style="height:100%;margin-top:-25px;" >
		<?php  include("minor1j.php");?>
		</div>
		
	</div>
	</div>
	
</div>
<div class="modal fade" id="myModal2" role="dialog">
	<div class="modal-dialog" >
	
	<div class="modal-content" >
		<div class="modal-header" style="background-color:TAN;height:50px;">
		<div style="margin-left:395px;">
		<button type="button" class="close" data-dismiss="modal" style="color:#565656; cursor:auto;">&times</button>
		</div>
		
		</div>
		<div class="modal-body1" style="margin-top:2px;">
		<?php include("companysignup.php"); ?>
		</div>
		
	</div>
	</div>
	
</div>


<div class="modal" id="companystep2modal" role="dialog">
	<div class="modal-dialog" style="">
	
	<div class="modal-content">
		<div class="modal-header" style="background-color:#333333;height:50px;">
		
		
		</div>
		<div class="modal-body" style="height:120px;" >
		
			<p id="contentmodal" style="font-size:16px;font-style:bold;"> </p> 
			
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


	if(isset($_GET['tokenmod']))
	{
		if($_GET['tokenmod']==1)
		{echo '<script type="text/javascript">';
			echo 'var modal = document.getElementById("companystep2modal");
				
	 modal.style.display = "block";';
	 
	 echo "document.getElementById('contentmodal').innerHTML='Thank you for signing up. You have been sent an email regarding the signup details.';";
			echo '</script>';}
	
		
	}
?>

