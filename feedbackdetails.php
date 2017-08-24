<?php
if(isset($_POST['feedbackid']))
{
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$sql="delete from feedback where id=".$_POST['feedbackid'].";";
	mysqli_query($con,$sql);
	mysqli_close($con);
	die('noerror');
	
	
}
?>