<!DOCTYPE.html>
<html>
<head>
<style>

.skilldropdown{
	margin:10px 5px 0px 4px;
    padding:0px 0px 0px 3px;
    height:44px;
    width:77.5%;	
	box-sizing: border-box;
    border-radius: 4px;
	
	border: 1px solid #272322;;
	background-color:#D5DBE1;
	}
	
	.uw {
	font-family: Verdana,Arial,sans-serif;
	font-size: 1.1em;
}

#skillname
 {
	font-family: Verdana,Arial,sans-serif;
	font-size: 1em;
}
.skilltooltip {
    position: relative;
    display: inline-block;
   
}

.skilltooltip .skilltooltiptext {
    visibility: visible;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    padding: 2px 0;
    position: absolute;
    z-index: 1;
    bottom: 10px;
    left: 97%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 3s;
}
.skilltooltip span:before{
    content:'';
    display:block;
    width:0;
    height:0;
    position:absolute;
	margin-left: 2px;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
    border-right:6px solid #555;
   
    left:-8px;

    top:40%;
}


.skilltooltip:hover .skilltooltiptext {
    visibility: visible;
    opacity: 1;
}






  
  
  



</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="assets/jquery-3.1.1.min.js"></script>    
 

<script>
$(document).ready(function() {
	
$("#skillname").blur(function (e){
	document.getElementById("skillname").style.backgroundColor="#D5DBE1";
		
			
	});
	
	$("#skillname").focus(function (){
		document.getElementById("skillname").style.backgroundColor="#F4F6F7";
			
	});
});
function validateskillform()
{
	var skillname=document.getElementById('skillname').value;
	var skilllevel=document.getElementById('skilllevel').selectedIndex;
	if(skillname=='' || skilllevel==0)
	{
		event.preventDefault();
	}
	else
		
		{
			thsi.submit();
		}
}
</script>
</head>
<?php

	
	
	
	$skillname=$skilllevel="";
	
	
if(isset($_POST['skillsbutton'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
		
  $skillname= test_input2($_POST["skillname"]);
  $skilllevel= test_input2($_POST["skilllevel"]);
  $user=$_SESSION['username'];
  
  include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	 
	$sql="insert into skills (skillname,stage,username) values('$skillname','$skilllevel','$user')";
	mysqli_query($con,$sql);
	
}


 mysqli_close($con); 
echo '<script>';
echo 'window.location.href="dashboard.php"';
echo '</script>';
	
}

function test_input2($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
	
?>

<body>

  
<form name="Skills" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="back" onsubmit="validateskillform()">
<div id="display1">

 
  <input id="skillname" placeholder="Skillname" name="skillname" style="background-color:#D5DBE1">

 <br> <br> 
 <div class="skilltooltip">
 <select name="skilllevel" id="skilllevel" class="skilldropdown" style="width:350px">
		<option value="any"> Select Skill Level </option>
		<option value="Beginner"> 	Beginner</option>
		<option value="Intermediate"> Intermediate</option>
		<option value="Advance"> Advance</option>
 </select>
 <span class="skilltooltiptext">What is your skill level?</span>
 </div>
 </br>
 </div>
 <input id="skillsbutton" name="skillsbutton" type="submit" class="btn btn-primary btn-block" style="margin-top:40px;width:100%;height:40px;font-size:18px;" value="ADD SKILL">
</form>
 </body>
</html>