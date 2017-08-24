<?php if (session_status() == PHP_SESSION_NONE)
session_start();

if(isset($_SESSION)){
$username=$_SESSION['username'];}
?>



<?php


function generateotpcode($length = 4, $add_dashes = false, $available_sets = 'd')
{
	$sets = array();
	
	if(strpos($available_sets, 'd') !== false)
		$sets[] = '0123456789';
	
	$all = '';
	$password = '';
	foreach($sets as $set)
	{
		$password .= $set[array_rand(str_split($set))];
		$all .= $set;
	}
	$all = str_split($all);
	for($i = 0; $i < $length - count($sets); $i++)
		$password .= $all[array_rand($all)];
	$password = str_shuffle($password);
	if(!$add_dashes)
		return $password;
	$dash_len = floor(sqrt($length));
	$dash_str = '';
	while(strlen($password) > $dash_len)
	{
		$dash_str .= substr($password, 0, $dash_len) . '-';
		$password = substr($password, $dash_len);
	}
	$dash_str .= $password;
	
	return $dash_str;
}



	if(isset($_POST['mobileno']))
	{
		include("dbconnect.php");
		mysqli_select_db($con,"minorproject");
		$timestamp=$_SERVER["REQUEST_TIME"];
		$otpcode=generateotpcode(4,false);
		$mobileno=$_POST['mobileno'];
		$sql="insert into mobilenumbers (mobileno,username,otpcode,timestamp)  values ('$mobileno','$username','$otpcode','$timestamp')";
		mysqli_query($con,$sql);
		die("noerror");
		mysqli_close($con);
		
		
	}
	
	
	if(isset($_POST['phcode']))
	{
		include("dbconnect.php");
		mysqli_select_db($con,"minorproject");
		$phcode=$_POST['phcode'];
		$sql="select * from country where country_name='$phcode'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_row($result);
		$sdigitvalue=$row[3];
		mysqli_close($con);
		die($sdigitvalue);
		
	}
	
	
	if(isset($_POST['otpcode']))
	{
		include("dbconnect.php");
		mysqli_select_db($con,"minorproject");
		$otpcode=$_POST['otpcode'];
		$sql="select * from mobilenumbers where mobilenumbers.username='$username'";
		$result=mysqli_query($con,$sql);
		$time=$_SERVER["REQUEST_TIME"];
		$count=mysqli_num_rows($result);
		$flag=0;
		if($count>0)
		{
			$row=mysqli_fetch_row($result);
			{	$timestamp=$row[4];
				$mobileno=$row[1];
				if($row[2]==$otpcode && abs($timestamp-$time)<=300)
				{
					$flag=1;
					$sql1="update individual set mobileno='$mobileno' where individual.username='$username'; delete from mobilenumbers where mobilenumbers.username='$username'";
					mysqli_multi_query($con,$sql1);
					
					mysqli_close($con);
				
				}
				
				else if(abs($timestamp-$time)>300)
				{$flag=0;
					mysqli_close($con);
					
				}
				
			}
			
		}
		
		print_r($flag);
	
		
		
	}


?>

