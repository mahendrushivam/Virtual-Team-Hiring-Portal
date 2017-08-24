<!DOCTYPE.html>
<html>
<head>

<style>
.error{
	color:#485057  ;
}
input{
box-sizing: border-box;
border-radius: 4px;

    border: 1px solid #272322;
    margin: 20px 5px 0px 5px;
	padding:0px 10px 0px 10px;
	height:45px;
	width:350px;
	}
	
	
	
	.projecttooltip {
    position: relative;
    display: inline-block;
   
}

.projecttooltip .projecttooltiptext {
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
.projecttooltip span:before{
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


.projecttooltip:hover .projecttooltiptext {
    visibility: visible;
    opacity: 1;
}
	
   
   ::-webkit-input-placeholder 
   { 
  color: black;
  opacity:0.8;
   }
  
  #btn1,#btn2,#projectsubmit
  { 
   background-color:#5D6D7E;
box-shadow: 0px 0px 0px  #000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
    margin: 40px 5px 0px 5px;
	padding:2px 0px 0px 3px;
    width:160px;  
    height:40px;
	float:left;
  
  
  }
  
  #btn2
  {
	  float:left;
	 margin:41px 0px 0px 35px;
   width:160px;
   height:40px;
   }
  
     #btn1:hover {background-color:#85929E;}
   #btn2:hover {background-color:#85929E;}
   #btn1:active {
  background-color:#85929E;
  transform: translateY(4px);
}

#btn2:active {
  background-color:#85929E;
  transform: translateY(4px);
}
#projectsubmit:hover {background-color:#85929E;}
   
   #projectsubmit:active {
  background-color:#85929E;
  transform: translateY(4px);
}
  
  textarea{
    box-sizing: border-box;
    border-radius: 4px;
	border: 1px solid #272322;;
	margin: 20px 5px 0px 5px;
	padding:4px 0px 0px 10px;
	width:350px; 
	height:85px;
	overflow:auto; 
  }

</style>
<script >



function validateprojectname(){
   var x =document.getElementById("projname").value;
    if(x==null || x=="")
	{
		q="* What is the name of your project?";	
    	document.getElementById("projerr1").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		 document.getElementById("projerr1").innerHTML= "<br>inNAN";
		 if(x.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("projerr1").innerHTML= "<br>Ok";
		 
		 }
		 else
		 {
			 document.getElementById("projerr1").innerHTML= "<br>* Invalid project name";
		 }
	 }        
}

function validateprojectlink(){
   var x =document.getElementById("projectlink").value;
   var letters=/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/|www\.)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
    if(x==null || x=="")
	{
		q="* What is your project link?";	
    	document.getElementById("projerr4").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		 if(x.match(letters))
		 {
			 document.getElementById("projerr4").innerHTML= "<br>Ok";
		 
		 }
		 else
		 {
			 document.getElementById("projerr4").innerHTML= "<br>* Invalid project link";
		 }
	 }        
}

function validateprojectcategory(){
   var y =document.getElementById("projectcategory").value;
    if(y==null || y=="")
	{
	w="* What is the category of your project ?";	
    	document.getElementById("projerr2").innerHTML= "<br>"+w;	
	 }else 
	 {
		 document.getElementById("projerr2").innerHTML= "<br>inNAN";
		 if(y.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("projerr2").innerHTML= "<br>"+"  Ok";
			 
		 }
		 else
		 {
			 document.getElementById("projerr2").innerHTML= "<br>* Invalid project category";
		 }
		 
	 }
		 
	 
                 
}


function validateprojectyear(){
   var x =document.getElementById("projectyear").value;
    if(x==null || x=="")
	{
		r="* When was your project completed?";	
    	document.getElementById("projerr3").innerHTML= "<br>"+r;
	}
	else 
	 {
		 if(x.match(/^[\d]+$/) && x.length==3)
		 {
			 document.getElementById("projerr3").innerHTML= "<br>"+"Ok";
		 }
		 else
		 {
			 document.getElementById("projerr3").innerHTML= "<br>* Invalid Year";
		 }
		 
	 }
	
	
	
	
}

function validateprojectform()
{
	var projectname=document.getElementById('projname').value;
	var projectcategory=document.getElementById('projectcategory').value;
	var projectlink=document.getElementById('projectlink').value;
	var projectyear=document.getElementById('projectyear').value;
	if(projectname=='' || projectcategory=='' || projectlink=='' || projectyear=='')
	{
		event.preventDefault();
	}
	else
	{
		this.submit();
	}
	
	
}



</script>





</head>




<body>


 
<form name="proj" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="back" style="margin-bottom:80px;" onsubmit="validateprojectform()">
<div class="projecttooltip">
<input type="text" id="projname" name="projname" placeholder="Project Name"  style="margin-top:40px"  autofocus onkeydown="validateprojectname()">
<span class="projecttooltiptext">What is your project name?</span>
  </div>
<span id="projerr1" class="error"></span>
  <br>
  <div class="projecttooltip">
  <input type="text" id="projectcategory" name="projectcategory" placeholder="Project Category" autofocus onkeydown="validateprojectcategory()">
  <span class="projecttooltiptext">What's your project category?</span>
  </div>
  <span id="projerr2" class="error" ></span> 
  <br>
  <div class="projecttooltip">
  <input type="text" id="projectyear" name="projectyear" placeholder="Project Year" autofocus onkeydown="validateprojectyear()">
  <span class="projecttooltiptext">When did you started your project?</span>
  </div>
  <span id="projerr3"  class="error" ></span>
  <br>
  <div class="projecttooltip">
  <input type="text" id="projectlink" name="projectlink" placeholder="Project link" autofocus onkeydown="validateprojectlink()">
  <span class="projecttooltiptext">What is your project link?</span>
  </div>
  <span id="projerr4"  class="error"></span>
  </br>
 <textarea name="projmessage" id="projmessage" rows="5" cols="80" placeholder="About the project" >
</textarea>
  </br>
  <input type="submit" id="projectsubmit" name="projectsubmit" >
  <input type="reset" id="btn2" value="Reset">   
  </form>



  </body>

 </html>
 
 
 
 <?php
 
 
 $projectname=$projectlink=$projectmessage=$projectyear=$projectcategory='';
 if(isset($_POST['projectsubmit']))
 {
	 if($_SERVER["REQUEST_METHOD"] == "POST")
	 {	$projectname=proj_input($_POST['projname']);
		$projectlink=proj_input($_POST['projectlink']);
		$projectmessage=proj_input($_POST['projmessage']);
		$projectyear=proj_input($_POST['projectyear']);
		$projectcategory=proj_input($_POST['projectcategory']);
		$userproj=$_SESSION['username'];
		 include("dbconnect.php");
		 mysqli_select_db($con,"minorproject");
		 $sql="insert into projectindividual (projectname,projcategory,projaddinfo,projlink,projyear,username) values ('$projectname','$projectcategory','$projectmessage','$projectlink','$projectyear','$username')";
		 mysqli_query($con,$sql);
		 mysqli_close($con);
		 
	 }
	 
 }
 
 
 
 function proj_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>