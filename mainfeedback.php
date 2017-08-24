<?php
$resname=$resmessage=$ressubject=$resemail='';
if(isset($_POST['resname']) && isset($_POST['resemail']) && isset($_POST['ressubject']) && isset($_POST['resmessage']))
{
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$resname=$_POST['resname'];
	$resemail=$_POST['resemail'];
	$resmessage=$_POST['resmessage'];
	$ressubject=$_POST['ressubject'];
	
	
	$sql="insert into feedback (name,emailid,subject,message) values ('$resname','$resemail','$ressubject','$resmessage')";
	mysqli_query($con,$sql);
	die("noerror");
	mysqli_close($con);
	
}


?>