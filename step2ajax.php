<?php if (session_status() == PHP_SESSION_NONE)
session_start();

if(isset($_SESSION)){
$username=$_SESSION['username'];}
?>
<?php

include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$city=$state=$country='';

if($_POST['gender']!='undefined')
{$sql="UPDATE individual set gender='".$_POST['gender']."' where username='$username'";
mysqli_query($con,$sql);}
// TO INPUT DATE 
if($_POST['pop1']=='noerror')
{$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$datef=$year.'-'.$month.'-'.$day;
$date=date_create($datef);
$dob=date_format($date,"Y-m-d");
$sql="UPDATE individual set dob='$dob' where username='$username'";
mysqli_query($con,$sql);}


//TO INPUT CITY STATE COUNTRY 
$countryid=$_POST['country'];

$stateid=$_POST['state'];
$cityid=$_POST['city'];
//TO GET CITY NAME
	 if(!empty($cityid))
	 {
		 $sql="select * from cities where city_id=".$_POST['city'];
		 $result=mysqli_query($con,$sql);
		 $count=mysqli_num_rows($result);
		 if($count==1)
		 {$row=mysqli_fetch_row($result);
			 $city=test_input($row[1]);
			  $sql="UPDATE individual set city='$city' where username='$username';";
	 mysqli_query($con,$sql);
		 }
	 }
	 // TO GET STATE NAME USING STATE ID
	 if(!empty($stateid))
	 {
		 $sql="select * from states where state_id=".$_POST['state'];
		 $result=mysqli_query($con,$sql);
		 $count=mysqli_num_rows($result);
		 if($count==1)
		 {$row=mysqli_fetch_row($result);
			 $state=test_input($row[1]);
			  $sql="UPDATE individual set  state='$state' where username='$username';";
	 mysqli_query($con,$sql);
		 }
	 }
	 // TO GET THE COUNTRY NAME USING COUNTRY ID
	 if(!empty($countryid))
	 {
		 $sql="select * from countries where country_id=".$_POST['country'];
		 $result=mysqli_query($con,$sql);
		 $count=mysqli_num_rows($result);
		 if($count==1)
		 {$row=mysqli_fetch_row($result);
			 $country=test_input($row[1]);
			  $sql="UPDATE individual set country='$country' where username='$username';";
	 mysqli_query($con,$sql);
		 }
	 }

	 
	 
	 
	mysqli_close($con);
    return "message";
function test_input($data) 
								{
									$data = trim($data);
									$data = stripslashes($data);
									$data = htmlspecialchars($data);
									return $data;
								}

?>