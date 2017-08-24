<!DOCTYPE.html>
<html>
<head>


<style>
.perstooltip {
    position: relative;
    display: inline-block;
   
}

.perstooltip .perstooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #000000;
    text-align: center;
    padding: 2px 0;
    position: absolute;
    z-index: 1;
    bottom: 20px;
    left: 340px;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 3s;
}

.perstooltip .perstooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.perstooltip:hover .perstooltiptext {
    visibility: visible;
    opacity: 1;
}


	
   
   ::-webkit-input-placeholder { 
  color: black;
  opacity:0.8;
   }
  
  #perbtn1,#perbtn2{ 
background-color:#5D6D7E  ;

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
  
  #perbtn2{
	  float:left;
	 margin:41px 0px 0px 35px;
   width:160px;
   height:40px;
   }
  
     #perbtn1:hover {background-color:#85929E
}
   #perbtn2:hover {background-color:#85929E
}
   #perbtn1:active {
  background-color:#85929E ;
  transform: translateY(4px);
}

#perbtn2:active {
  background-color:#85929E ;
  transform: translateY(4px);
}

  
  
  
  select{
	margin:10px 5px 0px -10px;
    padding:0px 0px 0px 3px;
    height:40px;
    width:80px;	
    border-radius: 4px;
	border: 1px solid #272322;;
	background-color:#e6e6e6;
	}
	
   #pergender{
	
    width:80px;
	
	   
   }
   
   
	


</style>
<script >


function validateFname(){
   var x =document.forms["pers"]["ffname"].value;
    if(x==null || x=="")
	{
		q="* What is your first name?";	
    	document.getElementById("perserr1").innerHTML= ""+q;
	 }
	 
	 else
	 {
		 document.getElementById("perserr1").innerHTML= "inNAN";
		 if(x.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("perserr1").innerHTML= "Ok";
		 
		 }
		 else
		 {
			 document.getElementById("perserr1").innerHTML= " Invalid Firstname";
		 }
	 }        
}


function validateLname(){
   var x =document.forms["pers"]["llname"].value;
    if(x==null || x=="")
	{
		q="* What is your last name?";	
    	document.getElementById("perserr2").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		 document.getElementById("perserr2").innerHTML= "<br>inNAN";
		 if(x.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("perserr2").innerHTML= "<br>Ok";
		 
		 }
		 else
		 {
			 document.getElementById("perserr2").innerHTML= "<br>* Invalid last name";
		 }
	 }        
}





function validateGender(){
   var x =document.getElementById("pergender").selectedIndex;
    if(x==0)
	{
		q="* Select your Gender?";	
    	document.getElementById("perserr3").innerHTML= "<br>"+q;
	 }
	 
	 else
	 {
		
		 document.getElementById("perserr3").innerHTML= "<br>Ok";
		 
		 		 
	 }        
}



$(document).ready(function(){
    $('#percountryid').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#perstateid').html(html);
                    $('#percityid').html('<option value="">Select City</option>'); 
                }
            }); 
        }else{
            $('#perstateid').html('<option value="">Select country first</option>');
            $('#percityid').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#perstateid').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#percityid').html(html);
					var value=$('#percityid').value();
                }
            }); 
        }else{
            $('#percityid').html('<option value="">Select state first</option>'); 
			
        }
    });
});



$(document).ready(function() {
	document.getElementById("phoneno").style.backgroundColor="#e6e6e6";
	document.getElementById("perfname").style.backgroundColor="#e6e6e6";
	document.getElementById("perlname").style.backgroundColor="#e6e6e6";
	document.getElementById("perdob").style.backgroundColor="#e6e6e6";
$("#perfname").blur(function (e){
	document.getElementById("perfname").style.backgroundColor="#e6e6e6";
		
			
	});
	
	$("#perfname").focus(function (){
		document.getElementById("perfname").style.backgroundColor="#F4F6F7";
			
	});
	
	
	$("#perlname").blur(function (e){
	document.getElementById("perlname").style.backgroundColor="#e6e6e6";
		
			
	});
	
	$("#perlname").focus(function (){
		document.getElementById("perlname").style.backgroundColor="#F4F6F7";
			
	});
	
	
	$("#phoneno").blur(function (e){
	document.getElementById("phoneno").style.backgroundColor="#e6e6e6";
		
			
	});
	
	$("#phoneno").focus(function (){
		document.getElementById("phoneno").style.backgroundColor="#F4F6F7";
			
	});
	
	
	$("#perdob").blur(function (e){
	document.getElementById("perdob").style.backgroundColor="#e6e6e6";
		
			
	});
	
	$("#perdob").focus(function (){
		document.getElementById("perdob").style.backgroundColor="#F4F6F7";
			
	});
});






</script>



</head>


<?php

	
	
	$firstname=$lastname=$gender=$dob=$phoneno=$city=$state=$country='';
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$sql="select * from individual where username='$username'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		
		$row=mysqli_fetch_row($result);
		$firstname=$row[1];
		$lastname=$row[2];
		$phoneno=$row[16];
		$gender=$row[9];
		$dob=$row[3];
		$country=$row[8];
		$state=$row[7];
		$city=$row[6];
		
	}
	
	$query = "SELECT * FROM countries ORDER BY country_name ASC";
    $result1=mysqli_query($con,$query);
	$counter=mysqli_num_rows($result1);
	
	
?>


<body>


  
<form name="pers" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="back">

 <div class="perstooltip" style="" >
<input type="text" id="perfname" name="perfname" placeholder="First Name"  style="margin-top:30px"  value="<?php echo $firstname;?>" onkeydown="validateFname()">
<span class="perstooltiptext">What 's your firstname?</span>
  </div>
  <br>
  <span id="perserr1" class="error"></span>
  
 
   <div class="perstooltip">
  <input type="text" id="perlname" name="perlname" placeholder="Last Name" value="<?php echo $lastname;?>" onkeydown="validateLname()">
   <span class="perstooltiptext">What's your lastname?</span>
   </div>
   <br>
   <span id="perserr2" class="error"></span>
  
   
  
  <div class="perstooltip">
  <select name="Gender" id="pergender" onclick="validateGender()" style="margin-left:6px;">
	<option> Gender </option>
	<option value="Male"  <?php if($gender == 'Male'): ?> selected="selected"<?php endif; ?> >Male</option>
	<option value="Female"  <?php if($gender == 'Female'): ?> selected="selected"<?php endif; ?> >Female</option>
	<option value="Other" <?php if($gender == 'Other'): ?> selected="selected"<?php endif; ?> >Other</option>
  </select>
 
  </div>
  <span id="perserr3" class="error"></span>
  </br>
  
  <div class="perstooltip">
	<input type="date" id="perdob"  value="<?php echo $dob;?>" placeholder="Date Of Birth">

</div>

</br>


  <select name="country" class="countries" id="percountryid" autofocus style="margin-left:6px;">
    <option value="">Country</option>
	<?php
        if($counter > 0){
            while($row1=mysqli_fetch_row($result1)){ 
			if($row1[1]==$country)
				$getcountryid=$row1[0];
               echo '<option value="'.$row1[0].'" '; if($row1[1]==$country): echo '  selected="selected"  ';  endif; echo '>'.$row1[1].'</option>'; 
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
	
</select>

<?php
$query1 = "SELECT * FROM states  where country_id='$getcountryid' ORDER BY state_name ASC";
    $result2=mysqli_query($con,$query1);
	$counter2=mysqli_num_rows($result2);

?>


<select name="state" class="states" id="perstateid"  style="margin-left:2px;">
     <option value="">State</option>
	 
	<?php
        if($counter2 > 0){
            while($row1=mysqli_fetch_row($result2)){ 
			if($row1[1]==$state)
				$getstateid=$row1[0];
               echo '<option value="'.$row1[0].'" '; if($row1[1]==$state): echo '  selected="selected"  ';  endif; echo '>'.$row1[1].'</option>'; 
            }
        }else{
            echo '<option value="">States not available</option>';
        }
        ?>
	 
	 
</select>


<?php
$query1 = "SELECT * FROM cities  where state_id='$getstateid' ORDER BY city_name  ASC";
    $result2=mysqli_query($con,$query1);
	$counter2=mysqli_num_rows($result2);

?>
<select name="city" class="cities" id="percityid" autofocus style="margin-left:2px;">
   <option value="">City</option>
   
   <?php
        if($counter2 > 0){
            while($row1=mysqli_fetch_row($result2)){ 
               echo '<option value="'.$row1[0].'" '; if($row1[1]==$city): echo '  selected="selected"  ';  endif; echo '>'.$row1[1].'</option>'; 
            }
        }else{
            echo '<option value="">Cities not available</option>';
        }
        ?>
</select>
</br>


<div class="perstooltip">
 <input type="text" id="phoneno" name="phone" value="<?php echo $phoneno;?>" placeholder="Mobile no. "   >
<span class="perstooltiptext">What's your mobileno ?</span>
</div>
  </br>
  <input type="submit" id="perbtn1" value="Save">
  <input type="reset" id="perbtn2" value="Reset">   
  </form>


  </body>

 </html>