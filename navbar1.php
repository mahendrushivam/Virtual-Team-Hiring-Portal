<!DOCTYPE html>
<?php
if (session_status() == PHP_SESSION_NONE)
session_start();?>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/minorstep1.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" src="assets/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
			function modalvisibility()
			{
			document.getElementById("myModal1").style.visibility="visible";
			
			}
  </script>
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
 </style>
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
        <li style="font-size: 20px; margin-top:5px "><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/vt4.jpeg" />
               <!-- <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" src="img/c-phone-horizontal.png" />
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img data-u="caption" data-t="1" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" src="img/c-slide-1.jpg" />
                        <img data-u="caption" data-t="2" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" src="img/c-slide-3.jpg" />
                    </div>
                    <img style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" src="img/c-navigator-horizontal.png" />
                    <img data-u="caption" data-t="3" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" src="img/c-finger-pointing.png" />
                </div>-->
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/emp1.png" />
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="img/int4.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End --> </div>
    <!-- #endregion Jssor Slider End -->
  
</div>
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	
	<div class="modal-content">
		<div class="modal-header" style="background-color:#4169E1;>
		<button type="button" class="close" data-dismiss="modal" style="color:white; cursor: auto;"></button>
		<h2 class="modal-title" align="center" style="color:white; font-size:25px;"><span class="glyphicon glyphicon-lock"></span>Sign Up</h4>
		</div>
		<div class="modal-body">
		<a href="#myModal1" data-toggle="modal" class="button2" onclick="modal1visibility()" data-dismiss="modal" align="left" style="padding-left:2px; text-decoration:none;"><img src="username.png"> </img><div style="align:bottom"><span class="glyphicon glyphicon-user"></span>  Individual</div></a>
		<a href="#"align="right" style="float:right;" data-dismiss="modal" class="button1" style="padding-left:2px;"><img src="hr.png" style="margin-left:-20px"> </img><div style="align:bottom"> <span class="glyphicon glyphicon-briefcase" ></span>Company </div></a> 
		</div>
		
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#4169E1; color:white;">Close</button>
		</div>
	</div>
	</div>
</div>
<div class="modal fade" id="myModal1" role="dialog"  >
	<div class="modal-dialog">
	
	<div class="modal-content">
		<div class="modal-header" style="background-color:#4169E1;>
		<button type="button" class="close" data-dismiss="modal" style="color:white; cursor:auto;">&times</button>
		
		
		</div>
		<div class="modal-body1" >
		<?php include("minor1j.php"); ?>
		</div>
		
	</div>
	</div>
</div>
  



</body>
</html>

