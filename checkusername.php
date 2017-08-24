<?php
if(isset($_POST['username']))
{	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$username=$_POST['username'];
	$sql="select * from users where username='$username'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		die ('error');
	}
	else
		
		{
		die ('noerror');
		}
		mysqli_close($con);
	}
	
	if(isset($_POST['useremail']))
{	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$useremail=$_POST['useremail'];
	$sql="select * from users where users.emailid='$useremail'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		die ('error');
	}
	else
		
		{
		die ('noerror');
		}
		mysqli_close($con);
	}
	
	
	if(isset($_POST['getusername']) && isset($_POST['password']))
	{
		
		include("dbconnect.php");
		mysqli_select_db($con,"minorproject");
		$username=test_input($_POST['getusername']);
		$password=test_input($_POST['password']);
		$sql="select * from users where username='$username'";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);

		if($count==1)
		{
			$row=mysqli_fetch_row($result);
			$orgpassword=test_input(($row[4]));
		
			
			if(strcmp(md5($password),$orgpassword)==0)
			{
		          die ('noerror');
	         }
			else
			{
		          die ('error');
			}
		}
		         mysqli_close($con);
		         die('error');
	}
	
	
	function test_input($data) 
								{
									$data = trim($data);
									$data = stripslashes($data);
									$data = htmlspecialchars($data);
									return $data;
								}
?>