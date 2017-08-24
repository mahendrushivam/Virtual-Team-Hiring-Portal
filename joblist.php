<?php
$category=$username='';
if (session_status() == PHP_SESSION_NONE)
session_start();
if(isset($_SESSION['username']))
	$username=$_SESSION['username'];
else
	$username='';
if(isset($_SESSION['categories']))
{
	$category=$_SESSION['categories'];
}
else
	
	{
		$category='All';
	}
?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<link href="css/bootstrap.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<style>
.service-box {
	background: #fff;
	border-bottom: 2px solid #f7f7f7;
	padding: 40px 20px;
	margin-left:20px;
	margin-right:20px;
	margin-top:40px;
	
	
}

.service-box:hover {
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
	margin-top: -10px;
}

.service-icon {
	margin-bottom: 20px;
}	

.service-desc h5 {
	text-transform: uppercase;
	font-weight: 700;
	color: #666;
	font-size: 18px;
	margin-bottom: 10px;
}
.service-desc .divider-header {
	
}
</style>

<script>

function applyforjob(id)
{
	window.location.href="jobmodule.php?id="+id;
	
}
</script>


<body style="background-color:grey;">

 

<?php
			$months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
			include("dbconnect.php");
			mysqli_select_db($con,"minorproject");
			
			if($category!='All')
			{$sql="select * from jobs where jobcategory='$category'";
		}
			else if($category=='All')
			{
				$sql="select * from jobs";
			}
			$result=mysqli_query($con,$sql);
			$count=mysqli_num_rows($result);
			
		?>

		
			<div class="row" style="margin-top:30px;">
			
			<?php  
		if($count>0)
		{
		while($count>0) 
			
			{
				if($count>0)
				{
				$row=mysqli_fetch_row($result);  ?>
				<div class="col-md-4">
				<div class="text-center" >
					<div class="service-box">
						<div class="service-icon">
							<img src="images/job.png" alt="company1 logo" width="50px" height="50px"></img>
						</div>
						<div class="service-desc">						
						<h5><?php echo $row[2];  ?></h5>
						<div class="divider-header"></div>
						
						<div class="row">
							<span class="fa fa-text-width" aria-hidden="true"></span><strong style="font-size:15px"> Job Title : <?php echo $row[1]; ?></strong></div>
							<br>
							<div class="row">
							<i class="fa fa-clock-o" aria-hidden="true"></i> <strong style="font-size:15px" >Start Time : <?php 
							$d = date_parse_from_format("Y-m-d", $row[5]);
							echo $months[$d["month"]-1].','.$d["year"]; ?></strong></div>
							<br>
							<?php if($username!='')
							{	$flag1=0;
								$sql2="select * from applicationsindividual where username='$username'";
								$res1=mysqli_query($con,$sql2);
								$countapp1=mysqli_num_rows($res1);
								while($countapp1>0)
								{
									$rowapp=mysqli_fetch_row($res1);
									if($rowapp[2]==$row[2] && $rowapp[4]==$row[1])
									{
										$flag1=1;
										break;
									}
									$countapp1--;
								}
								
								if($flag1==1)
								{?>
									<a href="#" class="btn btn-primary" style="width:160px">Already Applied</a>	
							<?php
									
								}
								else
								{
									
									
								?>
								
								<a href="javascript:applyforjob(<?php echo $row[0];?>)" class="btn btn-primary" style="width:100px">Apply</a>

<?php								
									
								}
							}
							
							else
							{
?>								
						<a href="javascript:applyforjob(<?php echo $row[0];?>)" class="btn btn-primary" style="width:100px">Apply</a>
						
							<?php  } ?>
					</div>
					</div>
                </div>
				</div>
				
			<?php   $count--;
			
						}

								if($count>0)
						
						{$row=mysqli_fetch_row($result);
						
						?>
				<div class="col-md-4" style="margin-bottom:20px;">
				<div class="text-center" >
					<div class="service-box">
						<div class="service-icon">
							<img src="images/job.png" alt="company2 logo" width="50px" height="50px"></img>
						</div>
						<div class="service-desc">						
						<h5><?php echo $row[2]; ?></h5>
						<div class="divider-header"></div>
						<div class="row">
							<span class="fa fa-text-width" aria-hidden="true"></span><strong style="font-size:15px"> Job Title : <?php echo $row[1]; ?></strong></div>
							<br>
							<div class="row">
							<i class="fa fa-clock-o" aria-hidden="true"></i> <strong style="font-size:15px" >Start Time :  <?php 
							$d = date_parse_from_format("Y-m-d", $row[5]);
							echo $months[$d["month"]-1].','.$d["year"]; ?></strong></div>
							<br>
						
						<?php if($username!='')
							{	$flag2=0;
								$sql2="select * from applicationsindividual where username='$username'";
								$res2=mysqli_query($con,$sql2);
								$countapp2=mysqli_num_rows($res1);
								while($countapp2>0)
								{
									$rowapp1=mysqli_fetch_row($res1);
									if($rowapp1[2]==$row[2] && $rowapp1[4]==$row[1])
									{
										$flag2=1;
										break;
									}
									$countapp2--;
								}
								
								if($flag2==1)
								{?>
									<a href="#" class="btn btn-primary" style="width:160px">Already Applied</a>	
							<?php
									
								}
								else
								{
									
									
								?>
								
								<a href="javascript:applyforjob(<?php echo $row[0];?>)" class="btn btn-primary" style="width:100px">Apply</a>

<?php								
									
								}
							}
							
							else
							{
?>								
						<a href="javascript:applyforjob(<?php echo $row[0];?>)" class="btn btn-primary" style="width:100px">Apply</a>
						
							<?php  } ?>
					</div>
                </div>
				</div>
				</div>
					<?php 	
					$count--;
					}	 
					
					if($count>0)
						
						{
							$row=mysqli_fetch_row($result);
							
							 ?>
				<div class="col-md-4">
				<div class="text-center" >
					<div class="service-box" style="margin-bottom:20px;">
						<div class="service-icon">
							<img src="images/job.png" alt="company logo" width="50px" height="50px"></img>
						</div>
						<div class="service-desc">						
						<h5> <?php echo $row[2]; ?></h5>
						<div class="divider-header"></div>
						<div class="row">
							<span class="fa fa-text-width" aria-hidden="true"></span><strong style="font-size:15px"> Job Title :  <?php echo $row[1]; ?> </strong></div>
							<br>
							<div class="row">
							<i class="fa fa-clock-o" aria-hidden="true"></i> <strong style="font-size:15px" >Start Time :  <?php 
							$d = date_parse_from_format("Y-m-d", $row[5]);
							echo $months[$d["month"]-1].','.$d["year"]; ?></strong></div>
							<br>
						
					<?php if($username!='')
							{	$flag3=0;
								$sql2="select * from applicationsindividual where username='$username'";
								$res3=mysqli_query($con,$sql2);
								$countapp3=mysqli_num_rows($res3);
								while($countapp3>0)
								{
									$rowapp=mysqli_fetch_row($res3);
									if($rowapp[2]==$row[2] && $rowapp[4]==$row[1])
									{
										$flag3=1;
										break;
									}
									$countapp3--;
								}
								
								if($flag3==1)
								{?>
									<a href="#" class="btn btn-primary" style="width:160px">Already Applied</a>	
							<?php
									
								}
								else
								{
									
									
								?>
								
								<a href="javascript:applyforjob(<?php echo $row[0];?>)" class="btn btn-primary" style="width:100px">Apply</a>

<?php								
									
								}
							}
							
							else
							{
?>								
						<a href="javascript:applyforjob(<?php echo $row[0];?>)" class="btn btn-primary" style="width:100px">Apply</a>
						
							<?php  } ?>
					</div>
                </div>
				</div>
				</div>
			</div>
						
			<?php
						
						$count--;
						}
						
						?>
						
						<?php
			} 

		}	else

		{
			?>
			<div class="col-md-4">
				<div class="text-center" >
					<div class="service-box">
						<div class="service-icon">
							<img src="images/job.png" alt="company1 logo" width="50px" height="50px"></img>
						</div>
						<div class="service-desc">						
						<h5><?php echo 'No Jobs found for this category' ?></h5>
						<div class="divider-header"></div>
						
						
						
					</div>
					</div>
                </div>
				</div>
			
			<?php 
		}
		?> 
			
			

</body>
</html>