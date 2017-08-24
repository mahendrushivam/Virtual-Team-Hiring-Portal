<?php


if(isset($_GET['companyusername']))
{$companyusername=$_GET['companyusername'];
}
?>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
         
		<script src="assets/jquery-3.1.1.min.js"></script>   
		<script src="assets/location.js"></script> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/companystep2.css">

<style>

.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left:0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.96); 
}


body
{
	overflow:hidden;
}
</style>



<script type="text/javascript" language="javascript" >

function closemodal()
{
	var modal = document.getElementById('companystep2modal');
	modal.style.display = "none";
	window.location.href='navbar.php';
} 
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select City</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
					var value=$('#city').value();
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
			
        }
    });
});


</script> 
<script src="js/companystep2.js" > </script>

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
</head>



<body style="background-color:#C2C4C2  ;" id="bodytag">
<ul class="topnav1" id="myTopnav1">
<li id="wname"><a href="#">WEBSITENAME</a></li>

</ul>
<div id="mainnav">

<form method="post" style="margin-top:30px;" >
		
		<input type="text" id="ipcode" name="ipcode" placeholder="Company Ipcode" class="companyinput" onblur="validateipcode()" onfocus="ipcodeatfocus()" /> 
		<div class="popup">
		<span class="popuptext" id="tooltip1"> </span>
		</div><br> <br>
		
		<input type="text" id="companyaddressl1" placeholder="Address Line1" name="companyaddressl1" class="companyinput" onblur="validatecompanyaddress()" onfocus="addressatfocus()" />
		<input type="text" id="companyaddressl2" placeholder="Address Line2" name="companyaddressl2" class="companyinput">
		<input type="text" id="companyaddressl3" placeholder="Address Line3" name="companyaddressl3" class="companyinput">
		<div class="popup" style="top:-80px;">
		<span class="popuptext" id="tooltip2"> </span>
		</div><br> <br>
		
		<select name="country"  id="country" onmouseover="validatecountry()" class="companyinput" onmouseout="exitcat(this.id)" style="background-color:#8C8F92;cursor:pointer;color:#FFFFFF;">
    <option value="">Select Country</option>
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

<br><br>

<select name="state" class="companyinput" id="state"  style="background-color:#8C8F92;cursor:pointer;color:#FFFFFF;">
     <option value="">Select State</option>
</select>


<br><br>

<select name="city" class="companyinput" id="city"  style="background-color:#8C8F92;cursor:pointer;color:#FFFFFF;">
   <option value="">Select City</option>
</select>

<br><br><br><br>
<input type="submit" class="submitbutton" value="Submit" name="submitbut"/>
</form>
</div>
<div class="modal" id="companystep2modal" role="dialog">
	<div class="modal-dialog" style="">
	
	<div class="modal-content">
		<div class="modal-header" style="background-color:#333333;height:50px;">
		
		
		</div>
		<div class="modal-body" style="height:120px;" >
		
			<p id="contentmodal" style="font-size:16px;font-style:bold;"> </p> 
			
		</div>
		
		<div class="modal-footer"style="background-color:#333333;height:60px;" >
			<button type="button" class="btn btn-default" onclick="closemodal()" style="background-color:#85C1E9  ; color:white;">Ok </button>
		</div>
	</div>
	</div>
</div>
</body>
</html>

<?php


	if(isset($_POST['submitbut']) )
	{
		
			$city=$state=$country=$addressline1=$addressline2=$addressline3=$ipcode='';
	$cityid=test_input($_POST['city']);
	$countryid=test_input($_POST['country']);
	$stateid=test_input($_POST['state']);
	$ipcode=test_input($_POST['ipcode']);
	$addressline1=test_input($_POST['companyaddressl1']);
	$addressline2=test_input($_POST['companyaddressl2']);
	$addressline3=test_input($_POST['companyaddressl3']);
	$address=$addressline1.' '.$addressline2.' '.$addressline3;
	include("dbconnect.php");
	//TO GET CITY NAME
	 if(!empty($cityid))
	 {mysqli_select_db($con,'minorproject');
		 $sql="select * from cities where city_id=".$_POST['city'];
		 $result=mysqli_query($con,$sql);
		 $count=mysqli_num_rows($result);
		 if($count==1)
		 {$row=mysqli_fetch_row($result);
			 $city=test_input($row[1]);
		 }
	 }
	 // TO GET STATE NAME USING STATE ID
	 if(!empty($stateid))
	 {mysqli_select_db($con,'minorproject');
		 $sql="select * from states where state_id=".$_POST['state'];
		 $result=mysqli_query($con,$sql);
		 $count=mysqli_num_rows($result);
		 if($count==1)
		 {$row=mysqli_fetch_row($result);
			 $state=test_input($row[1]);
		 }
	 }
	 // TO GET THE COUNTRY NAME USING COUNTRY ID
	 if(!empty($countryid))
	 {mysqli_select_db($con,'minorproject');
		 $sql="select * from countries where country_id=".$_POST['country'];
		 $result=mysqli_query($con,$sql);
		 $count=mysqli_num_rows($result);
		 if($count==1)
		 {$row=mysqli_fetch_row($result);
			 $country=test_input($row[1]);
		 }
	 }
	 
	 // TO UPDATE THE COMPANY DETAILS i.e ipcode,address,city,state,country
	 
		if(!empty($ipcode) && !empty($addressline1))
		{mysqli_select_db($con,'minorproject');
			$sql="UPDATE company set ipcode='$ipcode', address='$address' ,city='$city' ,state='$state', country='$country' where username='$companyusername';";
			mysqli_query($con,$sql);
			$query="select users.emailid,company.companyname from users,company where users.username='$companyusername' and company.username='$companyusername'";
			$result=mysqli_query($con,$query);
			$count=mysqli_num_rows($result);
			if($count==1)
			{
				$row=mysqli_fetch_row($result);
				$companyname=$row[1];
				$emailid=$row[0];
			}
			include("companymail1.php");
			echo '<script type="text/javascript">';
			echo 'var modal = document.getElementById("companystep2modal");
				
	 modal.style.display = "block";';
	 
	 echo "document.getElementById('contentmodal').innerHTML='Thank you for signing up. You have been sent an email regarding the signup details.';";
			echo '</script>';
			
	
			mysqli_close($con);
			
		}
		else{
			
			mysqli_close($con);
		}
	
	}
	
	function test_input($data) 
								{
									$data = trim($data);
									$data = stripslashes($data);
									$data = htmlspecialchars($data);
									return $data;
								}
	
?>

