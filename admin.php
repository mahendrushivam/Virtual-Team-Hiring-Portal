
<!doctype html>

<html>
<head>
<meta charset="UTF-8">
<title>Admin  Module</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" src="assets/bootstrap/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script type="text/javascript">
$(document).ready( function()
{
	 $("#openpage").load("allaccounts.php?category=1");
});

$(document).ready(function(e) {
   $('.has-sub').click(function(){
		$(this).toggleClass('tap');
	});
});
$(document).ready( function() {
    $("#loadall").on("click", function() {
        $("#openpage").load("allaccounts.php?category=1");
    });
});

$(document).ready( function() {
    $("#loadusers").on("click", function() {
        $("#openpage").load("allaccounts.php?category=2");
    });
});

$(document).ready( function() {
    $("#loadcompany").on("click", function() {
        $("#openpage").load("allaccounts.php?category=3");
    });
});

$(document).ready( function() {
    $("#loadproj").on("click", function() {
        $("#openpage").load("allprojects.php");
    });
});

$(document).ready( function() {
    $("#changepassword").on("click", function() {
        $("#openpage").load("password.php");
    });
});

$(document).ready( function() {
    $("#feedback").on("click", function() {
		
        $("#openpage").load("feedback.php");
    });
});
</script>
<style type="text/css">
* {padding:0; margin:0;}
.main-nav {width:250px;height:465px;background: #333;}
.main-nav li {list-style: none;}
.main-nav a {
	color: #FFF;
	
	letter-spacing: .2em;
	text-decoration: none;
	display: block;
	padding: 10px 0 10px 20px;
	border-bottom: 1px dotted gray;
}
.main-nav a:hover {background: #566573  ;}
.main-nav-ul ul {display: none;}
.main-nav-ul li.tap ul {display: block;}

.main-nav-ul ul a:before {
	content: '\203A';
	margin-right: 20px;
}

.main-nav .sub-arrow:after {
	content: '\203A';
	float: right;
	margin-right: 20px;
	transform: rotate(90deg);
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
}
.main-nav li.tap .sub-arrow:after {
	content: '\2039';
}

ul.topnav1 {
  list-style-type: none;
  margin: 0px;
  padding-top: 0px;
  overflow: hidden;
  position:fixed;
  top:0px;
  background-color: #333;
  width:100%;
  
 
  }
ul.topnav1 li {float: left;}

ul.topnav1 li a  {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}
</style>
</head>

<body style="background-color:#C2C4C2  ;">
<ul class="topnav1" id="myTopnav1">
<li id="wname"><a href="#">WEBSITENAME</a></li>
<li style="float:right;padding-right:60px;" ><a href="logout.php?logout"><span class="glyphicon glyphicon-new-window" style="margin-right:10px;"></span>Logout</a></li>

	
</ul>
<div style="width:100%">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 

<nav class="main-nav" style="margin-top:45px;height:665px;">
	<ul class="main-nav-ul" style="padding-top:40px;font-size:16px;">
   	
      
      <li class="has-sub" ><a href="#" style="text-decoration:none" >Users<span class="sub-arrow"></span></a>
      	<ul>
         	<li><a href="#" id="loadall" style="text-decoration:none" >All</a></li>
            <li><a href="#" id="loadusers" style="text-decoration:none">Individual</a></li>
            <li><a href="#" id="loadcompany" style="text-decoration:none" >Companies</a></li>
            
         </ul>
      </li>
      
      <li><a href="#" id="loadproj" style="text-decoration:none">Projects</a></li>
      <li><a href="#" style="text-decoration:none" >Jobs</a></li>
	  <li> <a href="#" id="feedback" style="text-decoration:none" > Feedback </a> </li>
      <li class="has-sub" ><a href="#" style="text-decoration:none" >Settings<span class="sub-arrow" style="text-decoration:none" ></span></a>
	  <ul>
         	<li><a href="#" id="changepassword" style="text-decoration:none" >Change Password</a></li>
            
         </ul>
	  </li>
	  
   </ul>
</nav>
</div>
<div id="openpage" class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="margin-top:50px"> </div>
</div>
</div>
</body>
</html>

<?php 

	if(isset($_GET['path']))
	{
		if($_GET['path']=='1')
		{
			echo '<script type="text/javascript">';
	echo '$(document).ready(function() {
        $("#openpage").load("allaccounts.php?category=1");
    });';
	
	echo '</script>';
		}
		else if($_GET['path']=='2')
		{
			echo '<script type="text/javascript">';
	echo '$(document).ready(function() {
        $("#openpage").load("allprojects.php");
    });';
	
	echo '</script>';
		}
		
		else if($_GET['path']=='4')
		{
			echo '<script type="text/javascript">';
	echo '$(document).ready(function() {
        $("#openpage").load("password.php");
    });';
	
	echo '</script>';
		}
		
		else if($_GET['path']=='3')
		{
			echo '<script type="text/javascript">';
	echo '$(document).ready(function() {
        $("#openpage").load("feedback.php?del=1");
    });';
	
	echo '</script>';
		}
		
		else if($_GET['path']=='31')
		{
			echo '<script type="text/javascript">';
	echo '$(document).ready(function() {
        $("#openpage").load("feedback.php");
    });';
	
	echo '</script>';
		}
		
		
		
	}
?>
