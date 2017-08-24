<?php

if(isset($_GET['delete_id']) && isset($_GET['acctype']) && isset($_GET['accusername']))
{include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	
	$query='';
 $query="DELETE FROM users WHERE id=".$_GET['delete_id'];
 mysqli_query($con,$query);
 mysqli_close($con);
 header("Location: admin.php?path=1&category=1");
}
if(isset($_GET['status_id']) && isset($_GET['statuspresent']))
{include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$query='';
	$query="select * from users where id=".$_GET['status_id'];
	$result=mysqli_query($con,$query);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$row=mysqli_fetch_row($result);
		
		$emailid=$row[3];
		$username=$row[2];
		$password=$row[4];
	}
	if($_GET['statuspresent']==0)
	{$query="UPDATE users set status='1' WHERE id=".$_GET['status_id'];
	include("companymail2.php");
	}
else
	$query="UPDATE users set status='0' WHERE id=".$_GET['status_id']; 
 mysqli_query($con,$query);
 mysqli_close($con);
 header("Location: admin.php?path=1&category=1");

}


 ?>
	


<html>
	<head>
	<link rel="stylesheet" href="css/allacounts.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.95); /* Black w/ opacity */
}

.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.95); /* Black w/ opacity */
}



	</style>

<script type="text/javascript">
function delete_id(id,acctype,accusername)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='allaccounts.php?delete_id='+id+"&acctype='"+acctype+"'&accusername='"+accusername;
     }
	 
}
function applicationstatus_id(id,presentstatus)
{
     if(confirm('Are you sure you want to change status ?'))
     {
        window.location.href='allaccounts.php?status_id='+id+"&statuspresent="+presentstatus;
     }
}

function openprofileinfo(getusername) {
	
	window.location.href='allaccounts.php?category=1&username='+getusername;
}

function closemodal()
{
	var modal = document.getElementById('profileinfo');
	modal.style.display = "none";
	window.location.href='admin.php?path=1';
}
function closemodal1()
{
	var modal = document.getElementById('companyprofileinfo');
	modal.style.display = "none";
	window.location.href='admin.php?path=1';
}





</script>	

	</head>
	<body>
			
			<table id="accounts" style="margin-top:1px;width:100%">
			<div>
				<tr style="border-top:2px solid white;">
				<th style="width:8%"> S.no </th>
				<th style="width:18%"> Name </th>
				<th style="width:18%"> Username </th>
				<th style="width:24%"> Email-id  </th>
				<th style="width:10%"> Account Type </th>
				<th style="border-right:0px;width:8%"> Activation Status </th>
				<th style="border:0px;width:300px"> </th>
				</tr>
				</div>
				<?php
					$countuser=1;
					include("dbconnect.php");
					if($_GET['category']==1)
					$sql="select * from users  where acc_type!='Admin'";
					else if($_GET['category']==2)
						$sql="select * from users where users.acc_type='User'";
					else if($_GET['category']==3)
						$sql="select * from users where users.acc_type='Company'";
					
					mysqli_select_db($con,"minorproject");
					$res=mysqli_query($con,$sql);
					$count=mysqli_num_rows($res);
					if($count>0)
						{ 
							
								while($row=mysqli_fetch_row($res))
								{
									$status=$row[5];
									if($row[1]=='User')
									{
									$query="select * from individual where username='".$row[2]."'";}
									else
										$query="select * from company where username='".$row[2]."'";
									$result=mysqli_query($con,$query);
									$row1=mysqli_fetch_row($result);
									if($row[1]=='User')
									$name=$row1[1]." ".$row1[2];
									else 
										$name=$row1[1];
									?>
									
							<tr>
							<td><p><?php echo $countuser; ?> </p></td>
							<td><p><?php echo $name; ?> </p></td>
							<td><p><?php echo $row[2]; ?> </p></td>
							<td><p><?php echo $row[3]; ?> </p></td>
							<td><p><?php echo $row[1]; ?> </p></td>
							<?php
							if($status==0)
							{?>
							<td><label class="switch">
							<input type="checkbox" disabled>
							<div class="slider round"></div>
							</label></td>
							
							
							<?php
							}
							else if($status==1)
							{?>
							<td><label class="switch">
							<input type="checkbox" checked disabled>
							<div class="slider round"></div>
							</label></td>
							
							<?php
							}?>
							<td>
							
							
							<a href="javascript:applicationstatus_id(<?php echo $row[0]; ?>,<?php echo $row[5];?>)">
								<span class="glyphicon glyphicon-saved" style="padding-right:10px;cursor:pointer;" id="changeapplicationrecord"> </span> 
							</a>
							<a  href="javascript:openprofileinfo('<?php echo $row[2]; ?>')" ><span class="glyphicon glyphicon-eye-open" style="padding-right:10px;cursor:pointer;" id="viewrecord" ></span> </a>						
							<a href="javascript:delete_id(<?php echo $row[0]; ?>,'<?php echo $row[1]; ?>','<?php echo $row[2]; ?>')"><span class="glyphicon glyphicon-trash" style="cursor:pointer;"id="delrecord"></span></a>
							
							</td>
							</tr>
							<?php
							$countuser++;
						$count--;}
						}
						else
						{?>
							<tr>
							<td> No records present </td>
							</tr>
						<?php }
						
					
				?>
			</table>
			<div class="modal" id="companyprofileinfo" role="dialog">
	
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="background-color:#5499C7;>
		
		<h2 class="modal-title" align="center" style="color:white; font-size:25px;" style="padding-left:-200px;"> <h4 style="font-size:20">Company Profile Information</h4>
		</div>
		<div class="modal-body">
		<div style="height:200px;" style="float:left;">
		<img src="images/company.png" style="padding-top:20px;"> </img>
		</div>
		<p style="margin-top:-180px;margin-left:210px;font-size:18px;"> Company Name </p> <input type="text" id="modcompanyname" style="margin-left:350px;margin-top:-42px;border:0px;" disabled /> <br><br>
		<p style="margin-top:0px;margin-left:210px;font-size:18px;">Owner Firstname</p> <input type="text" id="modcomfirstname" style="margin-left:350px;margin-top:-42px;border:0px;" disabled /> <br><br>
		<p style="margin-top:0px;margin-left:210px;font-size:18px;">Owner Lastname </p><input type="text" id="modcomlastname" style="margin-left:350px;margin-top:-42px;border:0px;" disabled /> <br><br>
		<p style="margin-top:0px;margin-left:210px;font-size:18px;">Username </p><input type="text" id="modcomusername" style="margin-left:350px;margin-top:-42px;border:0px;" disabled /> <br><br>
		
		
		<p style="margin-left:100px;margin-top:0px;font-size:18px">Email-id </p><input type="text" id="modcomemail" style="margin-left:205px;margin-top:-42px;border:0px;" disabled /> <br><br>
		<p style="margin-left:100px;margin-top:0px;font-size:18px">Address </p><textarea name="text" rows="3"  id="modcomaddress" style="margin-left:205px;margin-top:-42px;border:0px;" > </textarea><br><br>
		</div>
		<div class="modal-footer" style="background-color:#5499C7;">
			<button type="button" class="btn btn-default"  onclick="closemodal1()" style="background-color:#4169E1; color:white;">Close</button>
		</div>
	</div>
	</div>
	</div>
		<div class="modal" id="profileinfo" role="dialog">
	
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="background-color:#5499C7;>
		
		<h2 class="modal-title" align="center" style="color:white; font-size:25px;" style="padding-left:-200px;"> <h4 style="font-size:20"> Profile Information</h4>
		</div>
		<div class="modal-body">
		<div style="height:200px;" style="float:left;">
		<img src="images/users.png" id="profileinfo" style="padding-top:20px;"> </img>
		</div>
		<p style="margin-top:-180px;margin-left:210px;font-size:20px;"> Firstname </p> <input type="text" id="modfirstname" style="margin-left:310px;margin-top:-42px;border:0px;" disabled /> <br><br>
		<p style="margin-top:0px;margin-left:210px;font-size:20px;"> Lastname</p> <input type="text" id="modlastname" style="margin-left:310px;margin-top:-42px;border:0px;" disabled /> <br><br>
		<p style="margin-top:0px;margin-left:210px;font-size:20px;">Gender </p><input type="text" id="modgender" style="margin-left:310px;margin-top:-42px;border:0px;" disabled /> <br><br>
		<p style="margin-top:0px;margin-left:210px;font-size:20px;">Username </p><input type="text" id="modusername" style="margin-left:310px;margin-top:-42px;border:0px;" disabled /> <br><br>
		
		
		<p style="margin-left:100px;margin-top:0px;font-size:20px">Email-id </p><input type="text" id="modemail" style="margin-left:200px;margin-top:-42px;border:0px;" disabled /> <br><br>
		<p style="margin-left:100px;margin-top:0px;font-size:20px">Address </p><textarea name="text" rows="3"  id="modaddress" style="margin-left:200px;margin-top:-42px;border:0px;" > </textarea><br><br>
		</div>
		<div class="modal-footer" style="background-color:#5499C7  ;">
			<button type="button" class="btn btn-default"  onclick="closemodal()" style="background-color:#4169E1; color:white;">Close</button>
		</div>
		</div>
		</div>
	</div>
	
	</body>
</html>


<?php
			if(isset($_GET['username']))
{	
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$username=$_GET['username'];
	$username=test_input($username);
	
								
								
								
	$query="SELECT * FROM users where username='$username'";
 $result=mysqli_query($con,$query);
 $count=mysqli_num_rows($result);

 
					if($count>0)
						{ 
							
								while($row=mysqli_fetch_row($result))
								{
										if($row[1]=='User')
										{
											$query="Select * from individual where username='$username'";
										}
										else if($row[1]=='Company')
										{
											$query="Select * from company where username='$username'";
											
										}
										$result1=mysqli_query($con,$query);
										$count1=mysqli_num_rows($result1);
										if($count1==1)
										{$row1=mysqli_fetch_row($result1);
											if($row[1]=="Company")
										{
											$address=$row1[2].", ".$row1[3].", ".$row1[4].", ".$row1[5];
											echo '<script type="text/javascript">
                 var modal = document.getElementById("companyprofileinfo");
				 
	 modal.style.display = "block";';
	 echo "document.getElementById('modcompanyname').value='".$row1[1]."';";
	 echo "document.getElementById('modcomfirstname').value='".$row1[9]."';";
	 echo "document.getElementById('modcomlastname').value='".$row1[10]."';";
	 echo "document.getElementById('modcomusername').value='".$row1[7]."';";
	 echo "document.getElementById('modcomusername').value='".$row[2]."';";
	 echo "document.getElementById('modcomemail').value='".$row[3]."';";
	 echo "document.getElementById('modcomaddress').value='".$address."';";
	 
											echo '</script>';
											
										}
											
											
											else if($row[1]=="User")
											{
											$address=$row1[5].", ".$row1[6].", ".$row1[7].", ".$row1[8]; 
											
								echo '<script type="text/javascript">
                 var modal = document.getElementById("profileinfo");
				 
	 modal.style.display = "block";';
	 echo "document.getElementById('modfirstname').value='".$row1[1]."';";
	 echo "document.getElementById('modlastname').value='".$row1[2]."';";
	 echo "document.getElementById('modgender').value='".$row1[10]."';";
	 echo "document.getElementById('modusername').value='".$row[2]."';";
	 echo "document.getElementById('modemail').value='".$row[3]."';";
	 
	 
	 echo "document.getElementById('modaddress').value='".$address."';";
										
	 
          echo  '</script>';
										}
										
										}
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
