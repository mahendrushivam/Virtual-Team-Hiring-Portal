<?php
if (session_status() == PHP_SESSION_NONE)
session_start();?>

<?php
	if(isset($_GET['logintype']))
	{
		$logintype=test_input($_GET['logintype']);
		if(strcmp($logintype,'google')==0)
		{
			header("Location:signstep2.php");
		}
		
	}
	if(isset($_GET['username']) && isset($_GET['token']))
	{	$timediff=86400;
		$username=test_input($_GET['username']);
		$password=test_input($_GET['token']);
		
		include("dbconnect.php");
		mysqli_select_db($con,"minorproject");
		$sql="select * from users where users.username='$username' and users.password='$password'";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			$row=mysqli_fetch_row($result);
			$status=$row[5];
			$logintime=$row[6];
			$time=$_SERVER['REQUEST_TIME'];
			$acctype=$row[1];
			if((abs($time-$logintime))<$timediff)
			{
				$sql="update users set status='1' ,logintime=4294967295 where users.username='$username';";
				mysqli_query($con,$sql);
				$_SESSION['username']=$username;
				
				if($acctype=='User')
				{header("Location:signstep2.php");
			mysqli_close($con);
				}
			else if($acctype=='Company')
			{
				$username=$row[2];
				$query="select companyname from company where company.username='$username'";
				$comres=mysqli_query($con,$query);
				$countcom=mysqli_num_rows($comres);
				if($countcom==1)
				{
					$rowcom=mysqli_fetch_row($comres);
					$_SESSION['companyname']=$rowcom[0];
				}
				header("Location:Company/company.php");
				mysqli_close($con);
			}
			}
			else
			{	mysqli_close($con);
				echo '<html>
								<head>
								</head>
								<body style="background-color:#333333;" >
								<div style="height:30px;background-color:#B2BABB;width:100%;margin-top:40px;"><br>
								<p style="font-size:28px;color:#B2BABB">Error 433:: link has been expired ! </p><br>
								<div style="height:30px;background-color:#333333;width:100%;"><br>
								 
						</body>
					 </html>';
			}
		}
		
	}
	
	
	if(isset($_POST['loginbutton']))
	{
		$username=test_input($_POST['loginusername']);
		$password=test_input($_POST['loginpassword']);
		$password=md5($password);
		include("dbconnect.php");
		mysqli_select_db($con,"minorproject");
		$sql="select * from users where username='$username' and password='$password';";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			$row=mysqli_fetch_row($result);
			$status=$row[5];
			$acctype=$row[1];
			if($status==1)
			{
				if($acctype=='Admin')
				{
					mysqli_close($con);
					header("Location:admin.php");
				}
				else if($acctype=='User')
				{
					mysqli_close($con);
					$_SESSION['username']=$username;
					header("Location:dashboard.php");
				}
				else if($acctype=="Company")
				{
					
					mysqli_close($con);
					$_SESSION['username']=$username;
					header("Location:Company/company.php");
				}
			}
			else
			{
				mysqli_close($con);
				header("Location:navbar.php");
			}
		}
		mysqli_close($con);
	}
	
	
	function test_input($data) 
								{
									$data = trim($data);
									$data = stripslashes($data);
									$data = htmlspecialchars($data);
									return $data;
								}
?>