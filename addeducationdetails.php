<?php if (session_status() == PHP_SESSION_NONE)
session_start();

if(isset($_SESSION)){
$username=$_SESSION['username'];}
?>

<?php
		$college=$course=$stream=$edustartyear=$eduendyear=$percent=$edutype='';
		
		{
		
			{
			$college=edu_input($_POST['college']);
			$course=edu_input($_POST['course']);
			$stream=edu_input($_POST['stream']);
			$edustartyear=edu_input($_POST['ssyear']);
			$eduendyear=edu_input($_POST['eeyear']);
			$percent=edu_input($_POST['percentage']);
			$edutype=edu_input($_POST['edutype']);
			include("dbconnect.php");
			mysqli_select_db($con,"minorproject");
			$sql="insert into qualifications (qualif_type,college,startyear,endyear,stream,degree,percentage,username) values ('$edutype','$college','$edustartyear','$eduendyear','$stream','$course','$percent','$username')";
			mysqli_query($con,$sql);
			mysqli_close($con);
			die ("noerror");
			
			}
		}
		
		function edu_input($data) 
								{
									$data = trim($data);
									$data = stripslashes($data);
									$data = htmlspecialchars($data);
									return $data;
								}
 
 
 ?>
 