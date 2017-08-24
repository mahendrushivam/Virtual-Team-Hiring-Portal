
<?php if (session_status() == PHP_SESSION_NONE)
session_start();

if(isset($_SESSION)){
$username=$_SESSION['username'];}
?>



<?php
 $expname=$organizationname=$expstartyear=$expendyear=$country=$city=$state=$expaddinfo='';

 {
	 
	 
	 {
		 
		$expname=exp_input($_POST['profile']);
		$organizationname=exp_input($_POST['organization']);
		$expstartyear=exp_input($_POST['startyear']);
		$expendyear=exp_input($_POST['endyear']);
		$countryid=exp_input($_POST['countryid']);
		$cityid=exp_input($_POST['cityid']);
		$stateid=exp_input($_POST['stateid']);
		$expaddinfo=exp_input($_POST['expaddinfo']);
		$exptype=exp_input($_POST['exptype']);
		include("dbconnect.php");
		//TO GET CITY NAME
	 if(!empty($cityid))
	 {mysqli_select_db($con,'minorproject');
		 $sql="select * from cities where city_id=".$_POST['cityid'];
		 $result=mysqli_query($con,$sql);
		 $count=mysqli_num_rows($result);
		 if($count==1)
		 {$row=mysqli_fetch_row($result);
			 $city=exp_input($row[1]);
		 }
	 }
	 // TO GET STATE NAME USING STATE ID
	 if(!empty($stateid))
	 {mysqli_select_db($con,'minorproject');
		 $sql="select * from states where state_id=".$_POST['stateid'];
		 $result=mysqli_query($con,$sql);
		 $count=mysqli_num_rows($result);
		 if($count==1)
		 {$row=mysqli_fetch_row($result);
			 $state=exp_input($row[1]);
		 }
	 }
	 // TO GET THE COUNTRY NAME USING COUNTRY ID
	 if(!empty($countryid))
	 {mysqli_select_db($con,'minorproject');
		 $sql="select * from countries where country_id=".$_POST['countryid'];
		 $result=mysqli_query($con,$sql);
		 $count=mysqli_num_rows($result);
		 if($count==1)
		 {$row=mysqli_fetch_row($result);
			 $country=exp_input($row[1]);
		 }
	 }
	 
	 
		
		mysqli_select_db($con,"minorproject");
		$sql="insert into experiences (exptype,trainingname,place,startyear,endyear,addinfo,username,city,state,country) values ('$exptype','$expname','$organizationname','$expstartyear','$expendyear','$expaddinfo','$username','$city','$state','$country')";
		mysqli_query($con,$sql);
		mysqli_close($con);
		
		
		 
	 }
	 
	 
 }
 
 function exp_input($data) 
								{
									$data = trim($data);
									$data = stripslashes($data);
									$data = htmlspecialchars($data);
									return $data;
								}
								
								?>