<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
if(isset($_SESSION)){
$username=$_SESSION['username'];?>
<!DOCTYPE html>
<html>
<head>


 
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dash1.css">
<style>







</style>
</head>


<?php
include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select firstname,lastname from individual where individual.username='$username'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
$name=$row[0].' '.$row[1];
mysqli_close($con);
}
?>
<script>
$(document).ready( function() {
    $("#applicationindividual").on("click", function() {
        $("#backdiv").load("applicationindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	
	
	
	
	$("#invitesindividual").on("click", function() {
        $("#backdiv").load("invitesindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	
	$("#jobsindividual").on("click", function() {
        $("#backdiv").load("jobsindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	
	
	$("#dashboardindividual").on("click", function() {
        $("#backdiv").load("pinfodiv.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	
	
	});

function closeNav() {
    document.getElementById("sidenav").style.width = "0";
    document.getElementById("backdiv").style.marginLeft = "0";
   
}
function openNav1() {
    document.getElementById("sidenav").style.width = "200px";
    document.getElementById("backdiv").style.marginLeft = "200px";
   
}


</script>
<body style="background-color:#C2C4C2">







<div class="modal-content1" style="height:0px;">
<ul class="topnav1" id="myTopnav1" >
<li id="wname"><a href="#">WEBSITENAME</a></li>
<li>

<ul class="topnav" id="myTopnav" style="margin-top:52px;margin-left:-200px;position:fixed">
  
  <li style="margin-top:30px"><span style="font-size:17px;cursor:pointer;color:white;padding-top:20px;" onclick="openNav1()">☰</span></li>
  <li><a class="active" href="#home" id="dashboardindividual">Dashboard</a></li>
  <li><a href="#" id="applicationindividual" >Application</a></li>
  <li><a href="#" id="invitesindividual">Invites</a></li>
  <li><a href="#">Jobs</a></li>
</ul>
</li>
<li> <input type="text" id="searchbar" height="80" style="margin-left:460px;margin-top:6px;height:50px;width:470px;font-size:22px;border-radius: 10px;border: 2px solid #333333;padding-left:50px;;background-image:url(images/searchbar2.png);background-repeat:no-repeat;background-position:6px;background-color:#DEE2E7  " placeholder="Search For Jobs" /> </li>
<li style="float:right;padding-right:60px;" ><a href="logout.php?logout"><span class="glyphicon glyphicon-new-window" style="margin-right:10px;"></span>Logout</a></li>
</div>	







<div id="sidenav" class="sidenav" style="margin-top:105px;padding-top:20px;position:fixed;">
<button onclick="closeNav()" style="border:0px;background-color:#000110;color:white;font-size:20px;margin-top:0px;margin-left:170px;">&times;</button>
   <a href="#"><img src="C:/wamp/www/proj1/emp.png" alt="Person" width="96" height="96" style="margin-top:20px;"></a></br>
   
  <a href="#"><?php echo $name ?></a>
  <a href="#">Profile Completion</a>
  <a href="#">Settings</a>
  <a href="#">About Us</a>
  <a href="#">Update Preferences</a>
  <a href="#">Download Resume</a>
</div>




<div id="backdiv" class="backdiv" style="position:relative;top:100px;">

</div>



</body>
</html>
<?php
if(isset($_GET['path']))
{	if($_GET['path']==1)
	{
	echo '<script>';
	echo '$(document).ready( function() {
    
        $("#backdiv").load("invitesindividual.php?iac=1");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
	});';
	echo '</script>';	
	}
	
	if($_GET['path']==2)
	{
	echo '<script>';
	echo '$(document).ready( function() {
    
        $("#backdiv").load("invitesindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
	});';
	echo '</script>';	
	}
}