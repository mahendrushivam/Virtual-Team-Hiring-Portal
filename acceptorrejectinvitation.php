<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
	if(isset($_SESSION))
	{
$username=$_SESSION['username'];
	}
?>

<?php


if(isset($_POST['invitationid']))
{
	
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$teamname=$_POST['teamname'];
	$companyname=$_POST['companyname'];
	$jobtitle=$_POST['jobtitle'];
	$sql="insert into companyemployees (username,teamname,companyname,jobtitle) values('$username','$teamname','$companyname','$jobtitle');
	DELETE from invitesindividual where id=".$_POST['invitationid'].";";
	mysqli_multi_query($con,$sql);
	mysqli_close($con);
	die ('error');
	
	
}


if(isset($_POST['rejectid']))
{
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$sql="DELETE from invitesindividual where id=".$_POST['rejectid'].";";
	mysqli_query($con,$sql);
	mysqli_close($con);
	
}

?>






	?>