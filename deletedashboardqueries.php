<?php if (session_status() == PHP_SESSION_NONE)
session_start();

if(isset($_SESSION)){
$username=$_SESSION['username'];}
?>

<?php
if(isset($_POST['delid']) && isset($_POST['deledutype']))
{
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$id=test_input($_POST['delid']);
	
	$sql="delete from qualifications where id=".$_POST['delid']." and username='$username' && qualif_type='".$_POST['deledutype']."';";
	mysqli_query($con,$sql);
	mysqli_close($con);
	die("noerror");
	
	
}
?>

<?php
if(isset($_POST['delexpid']) && isset($_POST['delexptype']))
{
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	
	
	$sql="delete from experiences where id=".$_POST['delexpid']." and username='$username' && exptype='".$_POST['delexptype']."';";
	mysqli_query($con,$sql);
	mysqli_close($con);
	die("noerror");
	
	
}


function test_input($data) 
								{
									$data = trim($data);
									$data = stripslashes($data);
									$data = htmlspecialchars($data);
									return $data;
								}
?>