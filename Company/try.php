<!DOCTYPE html>
<?php

if(session_status()==PHP_SESSION_NONE)
{
	session_start();
	
}
?>
<html>
<head>
<link rel="stylesheet" href="modal.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#spass").keyup(function() {
	   passwordStrength($(this).val());
	});
	$("#tname").keyup(function() {
		validateN($(this).val());
	});
	$("#rpass").keyup(function() {
		validatePassword($(this).val());
	});
});
</script>
<script src="modal.js"></script>
<script>
function managerValidate()
{
	var x=document.getElementById("mname").value;
	if(x.match(/\b([!]+|[@]+|[#]+|[\$]+|[%]+|[\^]+|[\&]+|[\*]+|[\(]+|[\)]+|[_]+|[\+]+)/))
	{
		$("#2").html("<br>* Text only!");
	}
	else
	{
		$("#2").html("*");
	}
	
}
</script>
<style>
.awesome {
    position: relative;
    display: inline-block;
   
}

.awesome .awesometext {
    background-color: black;
    color: #fff;
	width:180px;
	height:115px;
    text-align: center;
    position: absolute;
    z-index: 1;
    bottom: 0px;
	top:-17px;
    right: -150px;
    opacity: 0;
}
.awesome .awesometext::after {
    content: " ";
    position: absolute;
    top: 50%;
    right: 100%; /* To the left of the tooltip */
	font-size:25px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent black transparent black;
}
.awesome:focus .awesometext {
    visibility: visible;
	opacity: 1;
}
</style>
</head>
<body>
<?php
// define variables and set to empty values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $teamname = test_input($_POST['team']);
  $manager = test_input($_POST['manager']);
  $managerID = test_input($_POST['managerID']);
  $password = md5($_POST['password']);
  
  include('dbconnect.php');
  mysqli_select_db($con,'minorproject');
  $sql = "select companyname from company where company.username ='anmolchachra12'";
  $result = mysqli_query($con,$sql);
  $count = mysqli_num_rows($result);
  if($count == 1)
  {
	  $row=mysqli_fetch_row($result);
	  $companyname=$row[0];
	
	  $sql="INSERT into companyteams (teamname,companyname,username,emailid,password) values ('$teamname','$companyname','$manager','$managerID','$password')";	  
	  mysqli_query($con,$sql);
  }
  
  $sql= "select * from companyteams where companyteams.teamname ='$teamname'";
  $result=mysqli_query($con,$sql);
  $count = mysqli_num_rows($result);
  $row=mysqli_fetch_row($result);
  if($row[0] == $teamname)
  {
	 echo '<script>';
     echo 'window.alert("Team already exists! Entry not submitted")';
     echo '</script>';	 
  }
  else
  {
	  header('Location: dialog.php');
  }

  mysqli_close($con);

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
return $data;}
?>

<div class="modal-body1 animate">

<form id="f1" name="teamform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " onsubmit="validateMe()">
  <span class="close" title="Close Modal">&times;</span>
  <p class="textfile">Team Name:<input type="text" id="tname" name="team" placeholder="Team Name" class="input1" style="margin-left:68px"><span id="1" class="error" style="color:red;font-size:13px;margin-left:25px">*</span></p>
  <p class="textfile">Team's Manager:<input type="text" id="mname" name="manager" placeholder="Team Manager" class="input1" style="margin-left:43px" onblur="managerValidate()"><span id="2" class="error" style="color:red;font-size:13px;margin-left:23px">*</span> 
  </p>
     
  <p class="textfile">Manager's id/username: <select  id="mid" name="managerID" class="input1" onblur="validateEmail()">
  <?php include('dbconnect.php');
	  mysqli_select_db($con,'minorproject');
	  $sql="SELECT username FROM companyemployees where companyemployees.companyname = 'Chachra Traders'";
      $result=mysqli_query($con,$sql);
      $count = mysqli_num_rows($result);
      if($count>0)
	  {
		  while($count > 0)
		  {
			  $row=mysqli_fetch_row($result);
			  $users = $row[0];       ?>
          <option value="<?php echo $row[0];?>" > <?php echo $row[0]; ?> </option>
         <?php $count--;		  
		  }	  
	  }
	  mysqli_close($con);
	  ?>
  </select>
<span id="3" class="error" style="color:red;font-size:13px;margin-left:23px">*</span>
  </span> 
  </p>
  <p class="textfile">Password: 
  
  <input type="password" id="spass" name="password" class="input1" style="margin-left:81px">
  <span id ="t4" class="tooltip">
  <span id="4" class="error" type="color:red;font-size:13px;margin-left:25px">*</span>
  <span id="21" class="tooltiptext"><img src="png/bulb1.png"  width="38" height="42" alt="!TIPS!">Make use of capital letters,small letters,numbers and special characters for a stronger password!</span>
   </span> </p>
   
  <div class="progress progress-striped active" style="margin-left:160px;">
  <div id="jak_pstrength" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;color:red">PasswordStrength</div>
  </div>

  <p class="textfile">Retype Password:<input type="password" id="rpass" name="rpassword" class="input1" style="margin-left:40px" onblur="validatePassword()"><span id="5" class="error" style="color:red;font-size:13px;margin-left:27px">*</span> 
  </p>
  <input type="submit" id="btn1" value="Let him know" class="button1">   
  </form>
</div>

</body>
</html>
