<!DOCTYPE.html>
<html>
<head>
<script src="assets/jquery-3.1.1.min.js"></script>   
		<script src="assets/location.js"></script> 
		<script src="js/jquery.min.js"></script>
<style>


.exptooltip {
    position: relative;
    display: inline-block;
   
}

.exptooltip .exptooltiptext {
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
.exptooltip span:before{
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


.exptooltip:hover .exptooltiptext {
    visibility: visible;
    opacity: 1;
}
	



  
  #expbtn1,#expbtn2{ 
background-color:#5D6D7E   ;
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
  
  #expbtn2{
	  float:left;
	 margin:41px 0px 0px 35px;
   width:160px;
   height:40px;
   }
  
     #expbtn1:hover {background-color:#85929E;
}
   #expbtn2:hover {background-color: #85929E;
}
   #expbtn1:active {
  background-color: #6DAEAC ;
  transform: translateY(4px);
}

#expbtn2:active {
  background-color: #6DAEAC ;
  transform: translateY(4px);
}

  
  textarea{
    box-sizing: border-box;
    border-radius: 4px;
	
	border: 1px solid #272322;;
	margin: 20px 5px 0px 5px;
	padding:4px 0px 0px 10px;
	width:350px; 
	height:75px;
	overflow:auto; 
	
  }
  
  select{
	margin:10px 5px 0px -10px;
    padding:0px 0px 0px 3px;
    height:40px;
    width:109px;	
	box-sizing: border-box;
    border-radius: 4px;

	border: 1px solid #272322;;
	background-color:#e6e6e6;
	}
   
    
	#fname,#lname{
	height:7%;
	width:42%;
	float:left;
	
	}
	
	#lname{
	height:7%;
	width:44%;
	float:left;
	margin: 21px 0px 0px 10px;
	}
	


</style>
<script type="text/javascript" >

function validateexpname(){
   var x =document.getElementById("expname").value;
    if(x==null || x=="")
	{
		q="* What is the name of your training?";	
    	document.getElementById("experr1").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		 document.getElementById("experr1").innerHTML= "<br>inNAN";
		 if(x.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("experr1").innerHTML= "<br>Ok";
		 
		 }
		 else
		 {
			 document.getElementById("experr1").innerHTML= "<br>* Invalid training name";
		 }
	 }        
}




function validateorganization(){
   var x =document.getElementById("organizationname").value;
    if(x==null || x=="")
	{
		q="* What is your organization name?";	
    	document.getElementById("experr2").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		 document.getElementById("experr2").innerHTML= "<br>inNAN";
		 if(x.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("experr2").innerHTML= "<br>Ok";
		 
		 }
		 else
		 {
			 document.getElementById("experr2").innerHTML= "<br>* Invalid organization name";
		 }
	 }        
}








function validatecountry()
{
   var x =document.getElementById("countryId").selectedIndex;
    if(x==0)
	{
		q="* Select your country?";	
    	document.getElementById("experr3").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		
		 document.getElementById("experr3").innerHTML= "<br>Ok";
	 }        
}


function validatestate(){
   var x =document.forms["experience"]["state"].selectedIndex;
    if(x==0)
	{
		q="* Select your state?";	
    	document.getElementById("experr4").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		
		 document.getElementById("experr4").innerHTML= "<br>Ok";
		 
		 		 
	 }        
}


function validatecity(){
   var x =document.forms["experience"]["city"].selectedIndex;
    if(x==0)
	{
		q="* Select your city?";	
    	document.getElementById("experr5").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		
		 document.getElementById("experr5").innerHTML= "<br>Ok";
		 
		 		 
	 }        
}

function validateexpstartyear(){
   var x =document.getElementById("expstartyear").value;
    if(x==null || x=="")
	{
		r="* When was it started?";	
    	document.getElementById("experr6").innerHTML= "<br>"+r;
	}
	else 
	 {
		 if(x.match(/^[\d]+$/) && x.length==4)
		 {
			 document.getElementById("experr6").innerHTML= "<br>"+"Ok";
		 }
		 else
		 {
			 document.getElementById("experr6").innerHTML= "<br>* Invalid Year";
		 }
		 
	 }
		
}

function validateexpendyear(){
   var x =document.getElementById("expendyear").value;
    if(x==null || x=="")
	{
		r="* When was it completed?";	
    	document.getElementById("experr7").innerHTML= "<br>"+r;
	}
	else 
	 {
		 if(x.match(/^[0-9]+$/) && x.length==4)
		 {
			 document.getElementById("experr7").innerHTML= "<br>"+"Ok";
		 }
		 else
		 {
			 document.getElementById("experr7").innerHTML= "<br>* Invalid Year";
		 }
		 
	 }
	
}

$(document).ready(function(){
    $('#expcountryid').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#expstateid').html(html);
                    $('#expcityid').html('<option value="">Select City</option>'); 
                }
            }); 
        }else{
            $('#expstateid').html('<option value="">Select country first</option>');
            $('#expcityid').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#expstateid').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#expcityid').html(html);
					var value=$('#expcityid').value();
                }
            }); 
        }else{
            $('#expcityid').html('<option value="">Select state first</option>'); 
			
        }
    });
});

function experiencessubmit()
{
	
	var profile=document.getElementById("expname").value;
	var organization=document.getElementById("organizationname").value;
	var startyear=document.getElementById("expstartyear").value;
	var endyear=document.getElementById("expendyear").value;
	var country=document.getElementById("expcountryid").selectedIndex;
	var state=document.getElementById("expstateid").selectedIndex;
	var city=document.getElementById("expcityid").selectedIndex;
	var expaddinfo=document.getElementById("expaddinfo").value;
	if(profile=='' && organization=='' && startyear=='' && endyear=='' && country==0 && city==0 && state==0)
	{
		event.preventDefault();
	}
	else
	{
		var exptype=document.getElementById("experiencetitle").innerHTML;
		var expfinal=exptype.split(' ');
		
		
		$(document).ready(function() {
		//POST THE DATA
		$.post('addexpdetails.php', {'exptype':expfinal[0],'profile':profile,'organization':organization,'startyear':startyear,'endyear':endyear,'countryid':country,'stateid':state,'cityid':city,'expaddinfo':expaddinfo}, function(data) {
			if(data!='error')
			{
			
				
		window.location.href="dashboard.php";
			
			}
			
			
			
		  });
		  
		});
		
		
	}
	
}
</script>



</head>
<?php
    
    include('dbconnect.php');
    if(!$con)
							{
								die('could not connect'.mysqli_connect_error());
							}
							mysqli_select_db($con,"minorproject");
    //Get all country data
    $query = "SELECT * FROM countries ORDER BY country_name ASC";
    $result=mysqli_query($con,$query);
	$count=mysqli_num_rows($result);
 
     
    ?>
<body>


  
<form name="experience" method="POST" class="back" onsubmit="experiencessubmit()">

 <div class="exptooltip">
<input type="text" id="expname" name="expname" placeholder="Profile"  style="margin-top:30px"  onkeydown="validateexpname()">
<span class="exptooltiptext">What 's your profile/job title?</span>
  </div>
<span id="experr1" class="error"></span>
  </br>
  
 <div class="exptooltip">
<input type="text" id="organizationname" name="organizationname" placeholder="Organization Name" onkeydown="validateorganization()">
<span class="exptooltiptext">What's the organization name?</span>
  </div>
<span id="experr2" class="error"></span>
  </br>
 
 
  <select name="expcountryid" class="countries" id="expcountryid" onclick="validateCountry()" style="margin-left:6px;">
    <option value="">Country </option>
	<?php
        if($count > 0){
            while($row=mysqli_fetch_row($result)){ 
               echo '<option value="'.$row[0].'">'.$row[1].'</option>'; 
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
</select>
<span id="experr3" class="error"></span>


<select name="expstateid" class="states" id="expstateid" onclick="validateState()" style="margin-left:2px;">
     <option value="">State</option>
</select>

<span id="experr4" class="error"></span>


<select name="expcityid" class="cities" id="expcityid" onclick="validateCity()" style="margin-left:2px;">
   <option value="">City</option>
</select>

<span id="experr5" class="error"></span>
<br>
 <div style="">
  <div class="exptooltip" style="float:left"><input type="text" id="expstartyear" name="expstartyear" style="float:left;width:150px;" placeholder="Start Year" onblur="validateexpstartyear()" style="height:45px;width:175px;" >
  <span id="tt4" class="exptooltiptext">when did you start working?</span>
  
  </div>
  
  
  <div class="exptooltip" style="float:right;left:-20%;"><input type="text" id="expendyear" name="expendyear" style="float:right;width:150px;" placeholder="End Year" onblur="validateexpendyear()" style="height:45px;width:175px;">
  <span id="tt5" class="exptooltiptext">when was it ended (if true)?</span>
  
  </div>
  </div>
  <div style="">
  <p id="experr6" class="error" style="float:left;width:150px;" > </p>
  <p id="experr7" class="error" style="float:left;width:150px;margin-left:100px;" > </p>
  </div>

 
   <textarea name="expaddinfo" id="expaddinfo" rows="5" cols="40" placeholder="Do you want to share your experience?" >
</textarea>
   </br>
   
  <input type="submit" id="expbtn1" name="expbtn1" value="Save">
  <input type="reset" id="expbtn2" value="Reset">  
 <div style="height:20px;"> </div>
  </form>


  </body>

 </html>
 
 
 