<?php
if (session_status() == PHP_SESSION_NONE)
session_start();
?>

<html>
<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Front Page</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/minorstep1.css">
		<link rel="stylesheet" href="css/modal1.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" src="assets/bootstrap/css/bootstrap.min.css">
  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
		<link rel="stylesheet" type="text/css" href="green/css/isotope.css" media="screen" />	
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="green/css/bootstrap.css">
		<link rel="stylesheet" href="green/css/bootstrap-theme.css">
		<link href="green/css/responsive-slider.css" rel="stylesheet">
		<link rel="stylesheet" href="green/css/animate.css">
        <link rel="stylesheet" href="green/css/style.css">

		<link rel="stylesheet" href="green/css/font-awesome.min.css">
		<!-- skin -->
		<link rel="stylesheet" href="green/skin/default.css">
		
		<!--bocor-->
		
		<link href="green/css/bocor/nivo-lightbox.css" rel="stylesheet" />
		<link href="green/css/bocor/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
		<link href="green/css/bocor/animations.css" rel="stylesheet" />
		<link href="green/css/bocor/style.css" rel="stylesheet">
		<link href="green/css/bocor/color/default.css" rel="stylesheet">
<style>

.inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .fa {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .fa  { left:  0px; padding-top:10px}
.right-addon .fa { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }


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

#list1 li a:hover
{
	color:black;
	background-color:white;
}
#list1 li a{
	color:white;
}
#navbar-brand:hover{
	color:black;
	background-color:white;
}
#carousel-slider a i {
	border-radius:50%;
	font-size: 30px;
	height: 50px;
	padding: 10px;
	position: absolute;
	top: 50%;
	width: 50px;
	color:#3a906d;
	background:#333;
	color:#fff;
}

#carousel-slider a i:hover {
	background:#333;
	color:#fff;
	border: 1px solid #333;
}

</style>
<script>
$(document).ready(function(){
    $("#button1").click(function(){
        $("#myModal2").modal();
    });
});

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
	
	
	
	
	function openloginmodal()
	{
		
		document.getElementById("myModal").style.display="block";
	}
	
	
	function validatecontactform()
	{
		var resname=document.getElementById("resname").value;
		var ressubject=document.getElementById("ressubject").value;
		var resmessage=document.getElementById("resmessage").value;
		var resemail=document.getElementById("resemail").value;
		
		if(resname=='' || resemail=='' || resmessage=='' || ressubject=='')
		{
			event.preventDefault();
			
		}
		else
			
			{
				$(document).ready(function(){
			$.post('mainfeedback.php', {'resname':resname,'ressubject':ressubject,'resmessage':resmessage,'resemail':resemail});
				
				});
				
				document.getElementById("contactusmodal").style.display="block";
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



function closecontactmodal()
{
	
	document.getElementById("contactusmodal").style.display="none";
	
}

</script>
</head>
<body>

<div class="header">
	<section id="header" class="appear">
		
		
		<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;color:white">fishteams
					</a></h1>
				</div>
				<div class="navbar-collapse collapse" id="menu">
					<ul class="nav navbar-nav" id="list1" data-0="margin-top:5px;" data-300="margin-top:0px;">
						<li class="active"><a href="#index">Home</a></li>
						<li><a href="#section-Cat">Category</a></li>
						<li><a href="#section-about">About</a></li>
						<li><a href="jobmodule.php?cat=All">Jobs</a></li>
						<li><a href="#section-contact">Contact</a></li>
						<li style="font-size:24px"><a href="#loginmodal" data-toggle="modal"><span class="fa fa-sign-in fa-2x"></span>Sign-in</a></li>
						<li style="font-size:24px"><a data-toggle="modal" href="#myModal"><span class="fa fa-user fa-2x"></span>Sign-up</a></li>
					</ul>
					
				</div><!--/.navbar-collapse -->
			</div>
		
		
	</section>
	</div>

	
<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">						
						<img src="img/vt4.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span>Build Your Virtual Team</span></h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									<p style="background-color:#333;">Let's get you started with your virtual team</p>
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										<button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required" style="background-color:#333;"> <a href="#loginmodal" data-toggle="modal" data-dismiss="modal" style="text-decoration:none;color:white">Log In </a></button>
									</div>
									<div class="form-group">
										<button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required" onclick="opensignupmodal()"><a href="#myModal" data-toggle="modal" data-dismiss="modal" style="text-decoration:none;color:black">Sign Up</a></button>
									</div>
								</form>
							</div>
						</div>
				    </div>
			
				    <div class="item">
						<img src="img/int4.jpeg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								<h2>Looking For A Job ?</h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									<p style="background-color:#333;">Let's get you your desired job</p>
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
								<form class="form-inline">
									<div class="form-group">
										<button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required" style="background-color:#333;"><a href="jobmodule.php?cat=All" style="text-decoration:none;color:white" ><span class="glyphicon glyphicon-search" style="margin-right:5px"> </span>Find Jobs </a> </button>
									</div>
								
								</form>
							</div>
						</div>
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
	
    <section id="section-Cat" class="home-section color-dark bg-gray">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="section-heading text-center">
					<h2 class="h-bold">What we can do for you</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row animatedParent">
            <div class="col-md-4">
				<div class="animated rotateInDownLeft">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-laptop fa-2x" style="font-size:40px"></span> 
					</div>
					<div class="service-desc">						
						<h5>Designer</h5>
						<div class="divider-header"></div>
						<p>
						3D Designers & Artist<br>Graphic Designer<br>Web Designer<br>and more...
						</p>
						<a href="jobmodule.php?cat=Designers" id="designer" class="btn btn-skin" style="text-transform: none">Browse</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-4">
				<div class="animated rotateInDownLeft slow">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-code fa-2x" style="font-size:40px"></span> 
					</div>
					<div class="service-desc">
						<h5>Programmers</h5>
						<div class="divider-header"></div>
						<p>
						SQL Server Developers<br>Android Developers<br>C# Developers<br>and more...
						</p>
						<a href="jobmodule.php?cat=Programmers" id="programmers" class="btn btn-skin" style="text-transform: none">Browse</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-4">
				<div class="animated rotateInDownLeft slower">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-users fa-2x" style="font-size:40px"></span> 
					</div>
					<div class="service-desc">
						<h5>Administrators</h5>
						<div class="divider-header"></div>
						<p>
						Internet Researchers<br>Virtual Assistants<br>Data Miners<br>and more...
						</p>
						<a href="jobmodule.php?cat=Administrators" id="administrators" class="btn btn-skin" style="text-transform: none">Browse</a>
					</div>
                </div>
				</div>
            </div>

        </div>	
<br>		
		
		<!--second row-->
		
		<div class="row animatedParent">
            <div class="col-md-4">
				<div class="animated rotateInDownLeft">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-pencil fa-2x" style="font-size:40px"></span> 
					</div>
					<div class="service-desc">						
						<h5>Writers</h5>
						<div class="divider-header"></div>
						<p>
						Web Content Managers<br>Article Writers<br>Journalists<br>and more...
						</p>
						<a href="jobmodule.php?cat=Writers" id="writers" class="btn btn-skin" style="text-transform: none">Browse</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-4">
				<div class="animated rotateInDownLeft slow">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-bar-chart-o fa-2x" style="font-size:40px"></span> 
					</div>
					<div class="service-desc">
						<h5>Financial</h5>
						<div class="divider-header"></div>
						<p>
						Accounting Assistants<br>Business Analyst<br>Excel Experts<br>and more...
						</p>
						<a href="jobmodule.php?cat=Financial" id="financial" class="btn btn-skin" style="text-transform: none">Browse</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-4">
				<div class="animated rotateInDownLeft slower">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-briefcase fa-2x" style="font-size:40px"></span> 
					</div>
					<div class="service-desc">
						<h5>Marketing</h5>
						<div class="divider-header"></div>
						<p>
						Marketing Strategists<br>Advertising Consultants<br>Link Builders<br>and more...
						</p>
						<a href="jobmodule.php?cat=Marketing" id="marketing" class="btn btn-skin" style="text-transform:none;">Browse</a>
					</div>
                </div>
				</div>
            </div>

        </div>		
		</div>
		</div>
	</section>
	
	
	
		
	<section id="section-about">
		<div class="container">
			<div class="about">
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="title">
							<div class="wow bounceIn">
						
							<h2 class="section-heading animated" data-animation="bounceInUp"> ABOUT US</h2>
							
						
							</div>
						</div>
					</div>
				</div>
				<div class="row">
			
					<div class="row-slider">
						<div class="col-lg-6 mar-bot30">
							<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
								<div class="slides" data-group="slides">
									<ul>
  	    		
										<div class="slide-body" data-group="slide">
											<li><img alt="" class="img-responsive" src="images/img1.jpg" width="100%" height="350"/></li>
											<li><img alt="" class="img-responsive" src="images/img2.jpg" width="100%" height="350"/></li>
											<li><img alt="" class="img-responsive" src="images/img3.jpg" width="100%" height="350"/></li>
							
										</div>
									</ul>
										<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
										<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
								
								</div>
							</div>
						</div>
					
						<div class="col-lg-6 ">
							<div class="company mar-left10">
								<h4>Our website aims at providing a platform to the freelancers, jobseekers and companies to interact with each other </h4>
								<p>It aids the start-ups in the cumbersome process of hiring a virtual team. Company can simply select the suitable candidates and connect with them through the portal we provideAny jobseeker can choose the company of his/her choice from our large database. We try to link them together through chat software that provide the below mentioned facilities:</p>
							</div>
							<div class="list-style">
								<div class="row">
									<div class="col-lg-6 col-sm-6 col-xs-12">
										<ul>
											<li>Video conferencing</li>
											<li>Group discussions</li>
											<li>Online skill tests</li>
											
										</ul>
									</div>
									<div class="col-lg-6 col-sm-6 col-xs-12">
										
									</div>
								</div>
							</div>
						</div>
					
					</div>	
				</div>
					
			</div>
			
		</div>
	</section>
	<!--/about-->
	
	<section id="section-contact" class="home-section nopadd-bot color-dark bg-gray text-center" style="background-color:-webkit-linear-gradient(rgba(229,228,221,0),rgba(189,188,185,0));">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown" style="font-weight:800; font-size:34px;">Get in touch with us</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="container">

			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
				    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
						<form id="contact-form" onsubmit="validatecontactform()" method="post" role="form" class="contactForm">
    						<div class="row marginbot-20">
    							<div class="col-md-6 xs-marginbot-20">
    							    <div class="form-group">
									<div class="inner-addon left-addon">
									<i class="fa fa-user fa-2x" style="font-size:35px"></i>
        								<input type="text" name="name" class="form-control" id="resname" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="padding-left:50px; font-size:20px;"/>
                                        <div class="validation"></div>
									</div>
                                    </div>
    							</div>
    							<div class="col-md-6">
    							    <div class="form-group">
									<div class="inner-addon left-addon">
									<i class="fa fa-envelope fa-2x" style="font-size:35px"></></i>
        								<input type="email" class="form-control" name="email1" id="resemail" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" style="padding-left:50px; font-size:20px;" />
                                        <div class="validation"></div>
    							    </div>
									</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<div class="form-group">
									<div class="inner-addon left-addon">
									<i class="fa fa-rocket fa-2x" aria-hidden="true" style="font-size:35px"></></i>
    									<input type="text" class="form-control" name="subject" id="ressubject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" style="padding-left:50px; font-size:20px;" />
                                        <div class="validation"></div>
										</div>
    								</div>
    								<div class="form-group">
									<div class="inner-addon left-addon">
									<i class="fa fa-comments fa-2x" aria-hidden="true" style="font-size:35px"></></i>
    									<textarea class="form-control" name="resmessage" id="resmessage" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" style="padding-left:50px; font-size:20px;"></textarea>
                                        <div class="validation"></div>
    								</div>						
    								<button type="submit" class="btn btn-skin btn-lg btn-block" id="btncontact">
    									Send Message</button>
    							</div>
    						</div>
						</form>
				</div>
			</div>	


		</div>
	</section>
	
	<section id="footer" class="section footer">
		<div class="container">
			<div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
				<div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="https://www.instagram.com" target="_blank" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com"  target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.plus.google.com" target="_blank" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>				
				</div>
			</div>

			<div class="row align-center copyright">
					<div class="col-sm-12">
					    <p><strong style="text-color:white;">&copy;Copywrite 2016 Website Name networks LTD. All rights reserved</strong></p>
                        <div class="credits">
                           
                            
                        </div>
                    </div>
			</div>
		</div>

	</section>
	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

	
	
	<div class="modal" id="contactusmodal" role="dialog" style="">
	<div class="modal-dialog"  style="">
	
	<div class="modal-content" style="">
		
		<div class="modal-body" style="height:180px;background-color:#BFD7F2;" >
		<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		
			<img src="images/msg.png" align="center"width="100" height="80"></div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div></div>
			<div class="row" style="margin-top:30px;">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
		
			<p id="contactcontent" style="font-size:22px;font-style:bold;"> Your message has been received </p> </div>
			</div>
			
			
			
		
		
		
	</div>
	
	<div class="modal-footer" style="background-color:#AEB6BF">
			<button type="button" class="btn btn-default" onclick="closecontactmodal()" style="background-color:#4169E1; color:white;">Close</button>
		</div>
	</div>
</div>
</div>

	<div class="modal fade" id="loginmodal">
            	<div class="modal-dialog">
                	<div class="modal-content">
                    	<div class="modal-header" style="height:60px;background-color:#4169E1;color:white;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title" style="color:white;"><span class="glyphicon glyphicon-lock"></span>Login</h3>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                     	<div class="row">
                        	<div class="col-md-6">
                            
                            <p style="text-align: center; padding-top:10px;color:#7E7575">
          Connect with
          </p>
          
                		<div class="col">
        					<a href="#" class="btn azm-social azm-btn azm-border-bottom azm-facebook" style="text-transform:none;"><i class="fa fa-facebook"></i> Log in with Facebook</a>
                			<a href="#" class="btn azm-social azm-btn azm-border-bottom azm-google-plus" style="text-transform:none;"><i class="fa fa-google-plus"></i> Sign in with Google+</a>
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
            
              <button type="submit" name="loginbutton" class="btn btn-primary btn-block" style="text-transform:none;"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer" style="background-color:#C0C0C0;">
                        <button type="submit" class="btn btn-danger  pull-right" data-dismiss="modal" style="background-color:#4169E1; color:white; text-transform:none;"> Close</button>
                       
                        <div style="text-align: left">
                         <p>Not a member? <a href="#myModal" data-toggle="modal" data-dismiss="modal" style="color:#4169E1">Sign Up</a></p>
         				 <p>Forgot <a href="password.php" style="color:#4169E1">Password?</a></p>
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
<div class="modal fade" id="myModal1" role="dialog" style="margin-top:-30px;">
	<div class="modal-dialog" >
	
	<div class="modal-content" >
		<div class="modal-header" style="background-color:TAN;height:50px;margin-bottom:0px;padding:0px;">
		
 
		<button type="button" class="close" data-toggle="modal" data-dismiss="modal" style="color:#565656; cursor:auto;">&times;</button>
		<h4 class="modal-title" style="color:white; text-align:center;"><span class="glyphicon glyphicon-lock"></span>Individual Registration</h4>
		
		
		</div>
		<div class="modal-body1" style="margin-top:-25px;" >
		<?php  include("minor1j.php");?>
		</div>
		
	</div>
	</div>
	
</div>
<div class="modal fade" id="myModal2" role="dialog">
	<div class="modal-dialog" >
	
	<div class="modal-content" >
		<div class="modal-header" style="background-color:TAN;height:50px;">
		
		<button type="button" class="close" data-dismiss="modal" style="color:#565656; cursor:auto;">&times;</button>
		<h4 class="modal-title" style="color:white; text-align:center;"><span class="glyphicon glyphicon-lock"></span>Company Registration</h4>
		
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






	
	<script src="green/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="green/js/jquery.js"></script>
	<script src="green/js/jquery.easing.1.3.js"></script>
    <script src="green/js/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="green/js/jquery.isotope.min.js"></script>
	<script src="green/js/jquery.nicescroll.min.js"></script>
	<script src="green/js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="green/js/skrollr.min.js"></script>		
	<script src="green/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="green/js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="green/js/stellar.js"></script>
	<script src="green/js/responsive-slider.js"></script>
	<script src="green/js/jquery.appear.js"></script>
	<script src="green/js/grid.js"></script>
    <script src="green/js/main.js"></script>
    <script src="green/js/wow.min.js"></script>
	<script>wow = new WOW({}).init();</script>
    <script src="contactform/contactform.js"></script>
	
	<!--Bocor-->
	 <script src="js/bocor/js/jquery.min.js"></script>	 
    <script src="js/bocor/js/bootstrap.min.js"></script>
	<script src="js/bocor/js/jquery.sticky.js"></script>
    <script src="js/bocor/js/jquery.easing.min.js"></script>	
	<script src="js/bocor/js/jquery.scrollTo.js"></script>
	<script src="js/bocor/js/jquery.appear.js"></script>
	<script src="js/bocor/js/stellar.js"></script>
	<script src="js/bocor/js/nivo-lightbox.min.js"></script>
	
    <script src="js/bocor/js/custom.js"></script>
	<script src="js/bocor/js/css3-animate-it.js"></script>
    <script src="contactform/contactform.js"></script>
	

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