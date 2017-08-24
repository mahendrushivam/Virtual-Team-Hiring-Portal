<!DOCTYPE.html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="persinfo.css">
<style>
.error {color: #000000;}
</style>
<script >

var modal = document.getElementById('id01');

 window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function validateName(){
   var x =document.forms["proj"]["college"].value;
    if(x==null || x=="")
	{
		q="* What is the name of your project?";	
    	document.getElementById("err1").innerHTML= "<br>"+q;
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
			 document.getElementById("err1").innerHTML= "<br>* Invalid project name";
		 }
	 }        
}

function validateCategory(){
   var y =document.forms["proj"]["course"].value;
    if(y==null || y=="")
	{
	w="* What is the category of your project ?";	
    	document.getElementById("err2").innerHTML= "<br>"+w;	
	 }else 
	 {
		 document.getElementById("err2").innerHTML= "<br>inNAN";
		 if(y.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("err2").innerHTML= "<br>"+"  Ok";
			 
		 }
		 else
		 {
			 document.getElementById("err2").innerHTML= "<br>* Invalid project category";
		 }
		 
	 }
		 
	 
                 
}


function validateStartYear(){
   var x =document.forms["proj"]["ssyear"].value;
    if(x==null || x=="")
	{
		r="* When did you start your project?";	
    	document.getElementById("err4").innerHTML= "<br>"+r;
	}
	else 
	 {
		 if(x.match(/^[\d]+$/) && x.length==4)
		 {
			 document.getElementById("err4").innerHTML= "<br>"+"  Ok";
		 }
		 else
		 {
			 document.getElementById("err4").innerHTML= "<br>* Invalid Year";
		 }
		 
	 }
	
	
	
	
}
function validateEndYear(){
   var x =document.forms["proj"]["eeyear"].value;
    if(x==null || x=="")
	{
		t="* When did your project end?";	
    	document.getElementById("err5").innerHTML= "<br>"+t;	
	}
		else 
	 {
		 if(x.match(/^[\d]+$/)&& x.length==4)
		 {
			 document.getElementById("err5").innerHTML= "<br>"+"  Ok";
		 }
		 else
		 {
			 document.getElementById("err5").innerHTML= "<br>* Invalid Year";
		 }
		 
	 }

}

</script>



</head>


<body>

<h2 align='CENTER' size='24'>Modal Login Form</h2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >Login</button>
<div id="id01" class="modal">

  
<form name="proj" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="modal-content animate">

<div class="headerr">
  <p style= "font-size:150%;color:white;font-family:Impact, Charcoal, sans-serif; text-align:left;padding-top:25px;padding-left:20px;">Project Information</p>
  <span onclick="document.getElementById('id01').style.display='none' " class="close" title="Close Modal " >&times;</span>
  </div>
 

 
<input type="text" id="fname" name="fname" placeholder="First Name"  style="margin-top:40px"  autofocus onkeydown="validateFname()">
<span id="err1" class="error">*</span>
  </br>
  <input type="text" id="lname" name="lname" placeholder="Last Name" autofocus onkeydown="validateLname()">
  <span id="err2" class="error">*</span> 
  </br>
  <select name="Gender" id="s4">
	<option> Gender </option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	<option value="Other">Other</option>
  </select></br></br>
  
  <select name="DOBDay" id="s1">
	<option> Day </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>
  
  <select name="DOBMonth" id="s2">
	<option> Month </option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>

	</select>
  
  <select name="DOBYear" id="s3">
	<option> Year </option>
	<option value="1993">2016</option>
	<option value="1993">2015</option>
	<option value="1993">2014</option>
	<option value="1993">2013</option>
	<option value="1993">2012</option>
	<option value="1993">2011</option>
	<option value="1993">2010</option>
	<option value="1993">2009</option>
	<option value="1993">2008</option>
	<option value="1993">2007</option>
	<option value="1993">2006</option>
	<option value="1993">2005</option>
	<option value="1993">2004</option>
	<option value="1993">2003</option>
	<option value="1993">2002</option>
	<option value="1993">2001</option>
	<option value="1993">2000</option>
	<option value="1993">1999</option>
	<option value="1993">1998</option>
	<option value="1993">1997</option>
	<option value="1993">1996</option>
	<option value="1993">1995</option>
	<option value="1993">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1947">1946</option>
	<option value="1947">1945</option>
	<option value="1947">1944</option>
	<option value="1947">1943</option>
	<option value="1947">1942</option>
	<option value="1947">1941</option>
	<option value="1947">1940</option>
</select>
 <input type="text" id="phone" name="phone" placeholder="Mob No."  style="margin-top:40px"  >
<span id="err1" class="error">*</span>

 <textarea name="message" rows="5" cols="40" placeholder="About the project" >
</textarea>
  </br>
  <input type="submit" id="btn1" >
  <input type="reset" id="btn2" value="Reset">   
  </form>



  </body>

 </html>