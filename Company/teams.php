<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
if(isset($_SESSION)){
$username=$_SESSION['username'];
$companyname=$_SESSION['companyname'];
}

?>






<?php

if(isset($_GET['status_id']) && isset($_GET['statuspresent']))
{include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$query='';
	if($_GET['statuspresent']==0)
 $query="UPDATE companyteams set teamstatus=1 WHERE id=".$_GET['status_id'];
else
	$query="UPDATE companyteams set teamstatus=0s WHERE id=".$_GET['status_id']; 
 mysqli_query($con,$query);
 mysqli_close($con);
 header("Location: company.php?path=1");

}

?>


<html>
<head>
<script>


function teamstatus(id,presentstatus)
{
     if(confirm('Are you sure you want to change team status ?'))
     {
        window.location.href='teams.php?status_id='+id+"&statuspresent="+presentstatus;
     }
}
</script>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="teams.css">
<body style="background-color:#C2C4C2  ;">


          
			<table id="accounts" style="border:0px;">
			<div>
				<tr>
				<th style="border-top:0px;width:10%"> S.no </th>
				<th style="border-top:0px;width:20%"> Team Name </th>
				<th style="border-top:0px;width:15%"> Team Manager </th>
				<th style="border-top:0px;width:25%"> Manager's id  </th>
				<th style="border-top:0px;width:15%"> Change </th>
				<th style="border-top:0px;width:15%"> Activation Status </th>
				
				</tr>
				</div>
				<?php
				
				include("dbconnect.php");
				mysqli_select_db($con,"minorproject");
				$sql="select * from companyteams where companyteams.companyname='Chachra Traders'";
				$result=mysqli_query($con,$sql);
				$count=mysqli_num_rows($result);
				$countteams=1;
				while($count>0)
				{
					$row=mysqli_fetch_row($result);
					$status=$row[5];
					
?>				
				<tr>
			    <td><p><?php echo $countteams; ?> </p></td>
				<td><p><?php echo $row[2]; ?></p></td>
				<td><p>   <?php echo $row[4]; ?> </p></td>
				<td><p>  <?php echo $row[6]; ?> </p></td>
				<td><p><a href="javascript:teamstatus(<?php echo $row[0];?>,<?php echo $status; ?>)" ><span class="glyphicon glyphicon-refresh" > </a></p></td>
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
			 </tr>
			 <?php 
				$count--;
				$countteams++;}
				
				?>
			</table>
</body>
</html>
