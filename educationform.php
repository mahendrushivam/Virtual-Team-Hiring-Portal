<!DOCTYPE.html>


<html>
<head>

<style>


.edutooltip {
    position: relative;
    display: inline-block;
   
}

.edutooltip .edutooltiptext {
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
.edutooltip span:before{
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


.edutooltip:hover .edutooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>
<script>
function validateEndYear(){
   var x =document.forms["Resume"]["eeyear"].value;
    if(x==null || x=="")
	{
		t="          When your college ended?";	
    	document.getElementById("err5").innerHTML= "<br>"+t;	
		
	}
		else 
	 {
		 if(x.match(/^[0-9]+$/) && x.length==4)
		 {
			 document.getElementById("err5").innerHTML= "<br>Ok";
		 }
		 else
		 {
			 document.getElementById("err5").innerHTML= "<br>* Invalid Year";
			 action=1;
		 }
		 
	 }

}







function validateCollege(){
   var x =document.forms["Resume"]["college"].value;
    if(x==null || x=="")
	{
		q="* Which college did you go to?";	
    	document.getElementById("err1").innerHTML= "<br>"+q;
		action=1;
	 }
	 
	 else
	 {
		 document.getElementById("err1").innerHTML= "<br>inNAN";
		 if(x.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("err1").innerHTML= "<br>Ok";
		 }
		 else
		 {
			 document.getElementById("err1").innerHTML= "<br>* Enter a valid college name";
			 action=1;
		 }
	 }        
}

function validateCourse(){
   var y =document.forms["Resume"]["course"].value;
    if(y==null || y=="")
	{
	w="* What course did you opted ?";	
    	document.getElementById("err2").innerHTML= "<br>"+w;
action=1;		
	 }else 
	 {
		 document.getElementById("err2").innerHTML= "<br>inNAN";
		 if(y.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("err2").innerHTML= "<br>Ok";
		 }
		 else
		 {
			 document.getElementById("err2").innerHTML= "<br>* Invalid Course Name";
		 action=1;
		 }
		 
	 }
		 
	 
                 
}

function validateeduStream(){
   var x =document.getElementById("stream").value;
    if(x==null || x=="")
	{
	e="Which stream did you take?";	
    	document.getElementById("err3").innerHTML= "<br>"+e;
		
	}
	else 
	 {
		 if(x.match(/^[^\d]+$/))
		 {
			 document.getElementById("err3").innerHTML= "<br>Ok";
		 }
		 else
		 {
			 document.getElementById("err3").innerHTML= "<br>* Invalid Stream";
			 action=1;
		 }
		
	 }
}

function validateStartYear(){
   var x =document.forms["Resume"]["ssyear"].value;
    if(x==null || x=="")
	{
		r="* When you college started?";	
    	document.getElementById("err4").innerHTML= "<br>"+r;
		action=1;
	}
	else 
	 {
		 if(x.match(/^[0-9]+$/) && x.length==4)
		 {
			 document.getElementById("err4").innerHTML= "<br>Ok";
		 }
		 else
		 {
			 document.getElementById("err4").innerHTML= "<br>* Invalid Year";
			 
		 }
		 
	 }
	
	
	
	
}

function validateeducationform()
{
	var college=document.getElementById("college").value;
	var course=document.getElementById("course").value;
	var startyear=document.getElementById("ssyear").value;
	var endyear=document.getElementById("eeyear").value;
	var stream=document.getElementById("stream").value;
	var percentage=document.getElementById("percentage").value;
	if(college=='' && course=='' && startyear=='' && endyear=='' && stream=='')
	{
		event.preventDefault();
	}
	else
	{
		
		var educattype=document.getElementById("educationtitle").innerHTML;
		var edutype=educattype.split(' ');
		$(document).ready(function() {
		//POST THE DATA
		$.post('addeducationdetails.php', {'edutype':edutype[0],'college':college,'course':course,'ssyear':startyear,'eeyear':endyear,'stream':stream,'percentage':percentage}, function(data) {
			if(data!='error')
			{
				var x = document.getElementById("snackbar");
				document.getElementById("snackimage").src="images/exp.png";
		document.getElementById("message").innerHTML="Your form has been submitted";
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); 
				window.location.href="dashboard.php"}, 3000);
				
			}
		});
	});
		
	}
	
}

</script>


</head>


<body>
  
<form name="Resume" method="post" style="margin-bottom:80px;"  onsubmit="validateeducationform()">


 
  <div class="edutooltip"><input type="text" id="college" name="college" placeholder="College/School Name"  style="margin-top:20px"  onblur="validateCollege()">
  <span id="tt1" class="edutooltiptext">Which college did you go to?</span>
  </div>
  <span id="err1" class="error"></span>
  </br>
  <div class="edutooltip"><input type="text" id="course" name="course" placeholder="Course" onblur="validateCourse()">
  <span id="tt2" class="edutooltiptext">Which course did you take?</span>
  </div>
  <span id="err2" class="error"></span> 
  </br>
  
  <div class="edutooltip">
  <input type="text" id="stream" name="stream" placeholder="Stream" onblur="validateeduStream()" >
  <span id="tt3" class="edutooltiptext">Which stream did you choose?</span>
  </div>
  <span id="err3" class="error"></span>
  </br>
  <div style="">
  <div class="edutooltip" style="float:left"><input type="text" id="ssyear" name="ssyear" style="float:left;width:150px;" placeholder="Start Year" onblur="validateStartYear()" style="height:45px;width:175px;" >
  <span id="tt4" class="edutooltiptext">when did you start going to college?</span>
  
  </div>
  
  
  <div class="edutooltip" style="float:right;left:-20%;"><input type="text" id="eeyear" name="eeyear" style="float:right;width:150px;" placeholder="End Year" onblur="validateEndYear()" style="height:45px;width:175px;">
  <span id="tt5" class="edutooltiptext">when did your college end?</span>
  
  </div>
  </div>
  <div style="">
  <p id="err4" class="error" style="float:left;width:150px;" > </p>
  <p id="err5" class="error" style="float:left;width:150px;margin-left:100px;" > </p>
  </div>
  
 
 <div>
 <div class="edutooltip">
  <input type="text" id="percentage" name="percentage" placeholder="Percentage/ CGPA" >
  <span id="tt5" class="edutooltiptext">What was your percentage/CGPA?</span>
  </div>
  <input type="submit"  id="btn1" name="educationsubmit">
  <input type="reset" id="btn2" value="Reset"> 
  </div>
  </form>


  </body>

 </html>
 
 