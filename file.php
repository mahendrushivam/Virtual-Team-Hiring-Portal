<?php
					include("dbconnect.php");
					$comusernameerr=$comemailiderr=$comfirsterr=$comlasterr=$compasserr="";
					$comusername=$comemailid=$comfirstname=$comlastname=$compassword="";
					$action = array();
					$action['result'] = null;
                    $errarray = array();
				if(isset($_POST['companysignup']))
				{if ($_SERVER["REQUEST_METHOD"] == "POST")
					{
							$comusername=test_input($_POST["comusername"]);
							$comuname=test_input($_POST["comuname"]);
							$comemailid=test_input($_POST["comemail"]);
							$comfirstname=test_input($_POST["comfname"]);
							$comlastname=test_input($_POST["comlname"]);
							$compassword=test_input($_POST["compass"]);
							$con=mysqli_connect('localhost','root','');
							if(empty($comfirstname))
							{
							$action['result'] = 'error';
							array_push($errarray,'Please enter Firstname');
							}
							if(empty($comuname))
							{
							$action['result'] = 'error';
							array_push($errarray,'Please enter Companyname');
							}
							if(empty($comusername))
							{
							$action['result'] = 'error';
							array_push($errarray,'Please enter Username');
							}
							if(empty($comemailid))
							{
							$action['result'] = 'error';
							array_push($errarray,'Please enter Company Email');
							}
							if(empty($compassword))
							{
							$action['result'] = 'error';
							array_push($errarray,'Please enter Password');
							}
							
							
							if(!$con)
							{
								die('could not connect'.mysqli_connect_error());
							}
							mysqli_select_db($con,"minorproject");
							if($action['result'] == 'error')
							{
								mysqli_close($con);
								
							$text=implode("\\n",$errarray);
							
							
							}
							else
							{
									$compassword=md5($compassword);
									$timestamp=$_SERVER["REQUEST_TIME"];
									$sql="insert into users (acc_type,username,emailid,password,status,logintime) values ('Company','$comusername','$comemailid','$compassword','0','$timestamp');insert into company (username,companyname,ownerfirstname,ownerlastname) values ('$comusername','$comuname','$comfirstname','$comlastname')";
									
									mysqli_multi_query($con,$sql);
									
									mysqli_close($con);
									//echo '<script> alert("You have been registered successfully. Please check your emails to confirm your email address"); </script>';
									
									
									header("Location:companysignupstep2.php?companyusername=".$comusername);
									$comusername=$comfirstname=$comemailid=$compassword=$comuname=$comlastname='';
							
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
			
			
			<html>
			<head>
			</head>
			<body>
			</body>
			</html>