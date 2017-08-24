<?php

if(session_status()==PHP_SESSION_NONE)
{
	session_start();
	
}
?>
<!doctype html>

<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="jQuery.tagify.js"></script>
<script src="company.js"></script>


<script>
$(document).ready(function()
{ 
    var closedialog = 0;
	$("#maindiv").bind('click', overlayclickclose);
	$("#dialog").dialog({closeText: 'Close',
                  focus: function() {
                      closedialog = 0;
                  },
                  close: function() {
                      $("#maindiv").unbind('click');
                  }
	});
	$(window).scroll(function () {
if ($(window).scrollTop() < 30) {
  $('#myTopnav1').css("opacity", 1);
  $('#myTopnav1').addClass('navbar-fixed');
}
    
if ($(window).scrollTop() > 30) {
  $('#myTopnav1').css( "opacity", 0.33); 
    }
});
	$('[name=tags]').tagify();
	$('[name=tags]').tagify({duplicates : false});
   	$("#cTeam").click(function(){$("#contentloader").html('<object height="100%" width="100%" data="try.php"/>');});
 $("#vTeam").click(function(){$("#contentloader").load('teams.php');});
  $("#myEmployees").click(function(){$("#contentloader").html('<object height="100%" width="100%" data="employeeview.php"/>');});
  $("#todoit").click(function(){$("#contentloader").html('<object height="100%" width="100%" data="select.php"/>');});
 $("#datepicker2").datepicker({          
    showOn: "button",
    buttonImage: "png/calendar1.png",
    buttonImageOnly: true,
    buttonText: "Select date",
    minDate : 0,
    showButtonPanel: true,
    closeText: 'Clear',   
});

function overlayclickclose() {
	$('#dialog').dialog('close');
}

$("#gbutton").click(function(){$("#gs").toggle();});

$("#datepicker2").tooltip({content: "<strong>Google Search</strong>",track:true});
  
});
</script>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="company2.css">

<link href="tagify.css" rel="stylesheet">
<style>
.nbuttons{
	background-color:#333;
	border:1px solid #333;
	top:75px;
	margin-left:50px;
	width:37px;
	height:37px;
	position:absolute;
}
.nbuttons:focus{background-color:white;}
</style>
<body>
<div id="maindiv">
<div>
<nav class="topnav1" >
	<ul class="topnav1" style="padding-top:20px;" id="myTopnav1">
	  <li><a href="#" id="hireEmployee"> Dashboard </a></li>   
      <li><a href="#" id="hireEmployee"> Hire employee</a></li>
	  <li><a href="#" id="myEmployees"> My employees</a></li>
      <li><a href="#create" id="cTeam"> Create a Team  <span class="glyphicon glyphicon-plus-sign" style="margin-right:0px;"></span></a></li>
      <li><a href="#" id="vTeam">View Teams  <span class="sub-arrow"></span></a></li>
      <li><a href="#" id="pTeam"> My Personal Team </a></li>
	  <li><a href="http://localhost/login-with-google-using-php/logout.php?logout" style="position:absolute;right:5px;"> Logout </a></li>
	  <ul>  
         </ul>
	  
   </ul>
</nav>
</div>
<div style="top:20px;height:350px;width:100%;background-color:#283747;position:absolute;">
<form class="navbar-form navbar-left" role="search">
<span id="companyName" style="color:#fff;font-size:14px;font-family: Arial Black, Gadget, sans-serif;margin-top:40px;">fishteams</span>
    <div class="form-group" style="margin-left:400px;margin-top:40px;color:#fff;">
        <input type="text" name="tags" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default" style="margin-top:40px;"><span class="glyphicon glyphicon-search"></span></button>	
</form>
<img src="png/applications.png" style="top:50px;right:5px;position:absolute;"></img>
<button id="todoit" class="nbuttons" style="right:55px;top:50px;" ><img src="png/todo.png"></img></button>
</div>

<div id="contentloader" style="background-color:#E5E8E8;top:120px;width:100%;height:100%;position:absolute;overflow:hidden;">
</div>



<div id="gs" style="display:none;">
<form method="get" action="https://www.google.com/search?g=[value from input-field]">
    <div class="form-group" style="right:50px;position:fixed;bottom:0px">
        <input type="text" id="gs2" class="form-control" placeholder="Google Search" size="20"></div>
    <button type="submit" class="btn btn-default" style="right:5px;bottom:14px;position:fixed;"><span class="glyphicon glyphicon-search"></button>	
</form>
</div>


<div id="container-floating">

  <div class="nd5 nds" data-toggle="tooltip" data-placement="left" data-original-title="Simone"></div>
  <div class="nd4 nds" data-toggle="tooltip" data-placement="left" data-original-title="contract@gmail.com"><img class="reminder">
    <input type="hidden" id="datepicker2">
  </div>
  <div class="nd3 nds" data-toggle="tooltip" data-placement="left" data-original-title="Reminder"><img class="reminder" src="//ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/ic_reminders_speeddial_white_24dp.png" /></div>
  <div class="nd1 nds" id="btn3" data-placement="left" data-original-title="Google search"><img class="reminder">
    <input type="button" id="gbutton" style="height: 36px;width: 36px;border-radius:17px;">
  </div>

  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
    <p class="plus">+</p>
    <img class="edit" src="http://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
  </div>

</div>
</div>
<div id="dialog" title="Notification Alert">
  
  <p><span class="glyphicon glyphicon-exclamation-sign"></span> No new notifications</p>
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
        $("#contentloader").load("teams.php");
    });';
	
	echo '</script>';
		}
		
}