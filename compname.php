<?php
$companyusername='rupaljain';
include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$query="select users.emailid,company.companyname from users,company where users.username='$companyusername' and company.username='$companyusername'";
			$result=mysqli_query($con,$query);
			$count=mysqli_num_rows($result);
			if($count==1)
			{
				$row=mysqli_fetch_row($result);
				$companyname=$row[1];
				$emailid=$row[0];
			}
			
			
?>