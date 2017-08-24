<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
if(isset($_SESSION)){
$username=$_SESSION['username'];
echo $username;
}
?>


<?php
	$companyname=$password='';
	$companyname=test_input($_POST['logcomp']);
	$password=test_input($_POST['comppassword']);
	if(isset($_POST['employeelogin']))
	{
				{if ($_SERVER["REQUEST_METHOD"] == "POST")
					
					{
						if($companyname!='' && $password!='')
						{
							
							include("dbconnect.php");
							mysqli_select_db($con,"minorproject");
							$sql="select companyname , password from companyemployees where companyemployees.username='$username'";
							$result=mysqli_query($con,$sql);
							$count=mysqli_num_rows($result);
							$password=md5($password);
							if($count>0)
							{
							while($count>0)
								
								{
									$row=mysqli_fetch_row($result);
									if($row[0]==$companyname && strcmp($password,$row[1])==0)
									{
										
										mysqli_close($con);
										header("Location:Company/Manager/manager.php");
										break;
									}
									
									
								}
								
								
								
							}
							else
								
								{
									echo 'hello';
									
								}
							
							
							
						}
						
					}
					
					
				}
				
				
}



function test_input($data) 
								{
									$data = trim($data);
									$data = stripslashes($data);
									$data = htmlspecialchars($data);
									return $data;
								}


?>

