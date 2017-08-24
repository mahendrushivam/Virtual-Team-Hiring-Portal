<?php

class Users {
	public $tableName = 'users';
	
	function __construct(){
		//database configuration
		$dbServer = 'localhost'; //Define database server host
		$dbUsername = 'root'; //Define database username
		$dbPassword = ''; //Define database password
		$dbName = 'minorproject'; //Define database name
		
		//connect databse
		$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
		if(mysqli_connect_errno()){
			die("Failed to connect with MySQL: ".mysqli_connect_error());
		}else{
			$this->connect = $con;
		}
	}
	
	function generatepassword($length = 9, $add_dashes = false, $available_sets = 'lud')
{
	$sets = array();
	if(strpos($available_sets, 'l') !== false)
		$sets[] = 'abcdefghjkmnpqrstuvwxyz';
	if(strpos($available_sets, 'u') !== false)
		$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
	if(strpos($available_sets, 'd') !== false)
		$sets[] = '23456789';
	
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
	
	function checkUser($oauth_provider,$oauth_uid,$fname,$lname,$email,$picture,$acctype)
	{
		 $prevQuery = mysqli_query($this->connect,"SELECT * FROM users WHERE emailid= '".$email."'") or die(mysqli_error($this->connect));
		if(mysqli_num_rows($prevQuery) > 0)
			{
				$result = mysqli_fetch_array($prevQuery);
				$_SESSION['count']=1;
				return $result;
			
			}
		else
		{	
			$password=$this->generatepassword(9,false);
			$emailpassword=$password;
			$password=md5($password);
			$insert = mysqli_query($this->connect,"INSERT INTO users SET username = '".$email."', acc_type ='".$acctype."', emailid='".$email."' , password='".$password."' , status='1' ,logintime=4294967295") or die(mysqli_error($this->connect));
			$insert1=mysqli_query($this->connect,"INSERT INTO individual SET firstname='".$fname."', lastname='".$lname."', username='".$email."'") or die(mysqli_error($this->connect));
			$query = mysqli_query($this->connect,"SELECT * FROM users WHERE username='".$email."'") or die(mysqli_error($this->connect));
			$result = mysqli_fetch_array($query);
			$_SESSION['count']=0;
			$_SESSION['username']=$email;
			include("mailgmail.php");
			$emailpassword=null;
			return $result;
		}
	}	
}
?>