<!DOCTYPE.html>
<html>
<head>
<style>

select{
	margin:10px 5px 0px 4px;
    padding:0px 0px 0px 3px;
    height:44px;
    width:85%;	
	box-sizing: border-box;
    border-radius: 4px;
	box-shadow: 4px 3px 3px  #6D5A56;
	border: 1px solid #272322;;
	background-color:#e6e6e6;
	}
	
	.error {color: #000000;}





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
	
::-webkit-input-placeholder 
   { 
  color: black;
  opacity:0.8;
   }
  
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="boot1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

<script>

function validateskillname(){
   var x =document.forms["Skill"]["skillname"].value;
    if(x==null || x=="")
	{
		q="* What is the name of your skill?";	
    	document.getElementById("skillerr1").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		 document.getElementById("skillerr1").innerHTML= "<br>inNAN";
		 if(x.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("skillerr1").innerHTML= "<br>Ok";
		 
		 }
		 else
		 {
			 document.getElementById("skillerr1").innerHTML= "<br>* Invalid skill name";
		 }
	 }        
}



function validateskilllevel(){
   var x =document.forms["Skill"]["skilllevel"].selectedIndex;
    if(x==0)
	{
		q="* Select your skill level?";	
    	document.getElementById("skillerr2").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		
		 document.getElementById("skillerr2").innerHTML= "<br>Ok";
		 
		 		 
	 }        
}


</script>

<?php

	
	
	
	$skillname=$skilllevel="";
	$skillnameerr=$skilllevelerr="";
	

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST['skillsbutton']))
	{
  $projectname = test_input2($_POST["skillname"]);
  $projcategory = test_input2($_POST["skilllevel"]);
  
if($skillnameerr  =="" && $skilllevelerr =="")
{
  include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	 
	$sql="insert into skills (skillname,stage) values('$skillname','$skilllevel')";
	mysqli_query($con,$sql);
	
}

$skillname=$skilllevel="";
 mysqli_close($con); 
	}
}

function test_input2($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
	
?>


<body>

  
<form name="Skill" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="back">

<div id="display1">
 <div class="skilltooltip">
 <input type="text" id="skillname" name="skillname" placeholder="Skill name" style="margin-top:40px;" autofocus onkeydown="validateskillname()"></input>
 <span class="skilltooltiptext">What is your skill name?</span>
 </div>
 <span id="skillerr1" class="error"></span>
 <br> <br> 
 <div class="skilltooltip">
 <select name="skilllevel" id="skilllevel" class="skilldropdown" autofocus onkeydown="validateskilllevel()">
		<option value="any"> Skill Level </option>
		<option value="Beginner"> 	Beginner</option>
		<option value="Intermediate"> Intermediate</option>
		<option value="Higher"> Higher</option>
 </select>
 <span class="skilltooltiptext">What is your skill level?</span>
 </div>
 <span id="skillerr2" class="error"></span>
 </br>
 </div>
 <button id="skillsbutton" type="button" class="btn btn-primary btn-block" style="margin-top:40px;width:100%" >ADD ANOTHER SKILL</button>
</form>
 </body>
</html>