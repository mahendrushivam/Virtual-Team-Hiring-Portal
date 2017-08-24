<?php
		if(isset($_GET['deleteproject']))
		{
			include("dbconnect.php");
			mysqli_select_db($con,"minorproject");
			$query='DELETE FROM projects where id='.$_GET['deleteproject'];
			mysqli_query($con,$query);
			mysqli_close($con);
			header("Location: admin.php?path=2");
		}

?>

<html>
	<head>
		<link rel="stylesheet" href="css/allprojects.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		

			.modal {
						display: none; 
						position: fixed; 
						z-index: 1; 
						left: 0;
						top: 0;
						width: 100%; 
						height: 100%; 
						overflow: auto; 
						background-color: rgb(0,0,0); 
						background-color: rgba(0,0,0,0.9); 
					}
			#projects td{
						padding:7px;
						width:162px;
						padding-left:20px;
						}
						

			</style>
			<script type="text/javascript">
				function deleteproject(id)
				{
					if(confirm('Sure To Remove This Record ?'))
					{
						window.location.href='allprojects.php?deleteproject='+id;
					}
				}
				
				function openproject(id)
				{
					window.location.href='allprojects.php?opprojectid='+id;
				}
				function closemodal()
				{
					var modal = document.getElementById('projectinfo');
					modal.style.display = "none";
					window.location.href='admin.php?path=2';
}
			</script>
	</head>
	<body>
		<table id="projects" style="margin-top:3px;">
			<div style="width:100%;">
			<tr>
			<th style="width:10%;"> S.no </th>
			<th style="width:16%;"> Name  </th>
			<th style="width:22%;"> Company Name </th>
			<th style="width:20%;"> Username </th>
			<th style="width:16%;"> Team name   </th>
			<th style="width:16%;"> </th>
			</div>
			<?php
				$countprojects=1;
				include("dbconnect.php");
				$sql="select * from projects";
				mysqli_select_db($con,"minorproject");
				$res=mysqli_query($con,$sql);
				$count=mysqli_num_rows($res);
				if($count>0)
						{ 
							
								while($row=mysqli_fetch_row($res))
								{
									
			?>
								<tr>
								<td style="width:50px;"><p><?php echo $countprojects; ?> </p> </td>
								<td><p><?php echo $row[1]; ?> </p> </td>
								<td> <p><?php echo $row[3]; ?></td>
								<td> <p><?php echo $row[2]; ?></td>
								<td> <p><?php echo $row[1]; ?></td>
								<td>
								
								<a  href="javascript:openproject(<?php echo $row[0];?>)" >
								<span class="glyphicon glyphicon-eye-open" style="padding-right:10px;cursor:pointer;" >  </span> 
								</a>						
								<a  href="javascript:deleteproject(<?php echo $row[0];?>)">  
								<span class="glyphicon glyphicon-trash" style="cursor:pointer;"> </span>
								</a>
							
								</td>
								</tr>
			<?php
								
								$countprojects++;
								}
								mysqli_close($con);
						}
						else
						{?>
							<tr style="height:50px;"> 
							<td></td>
							<td style="font-size:18px"> No project records</td>
							<td> </td>
							<td></td>
							<td> </td>
							<td> </td>
							</tr>
						<?php }
						
			?>
		</table>
		<div class="modal" id="projectinfo" role="dialog">
	
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="background-color:#5499C7;>
		
		<h2 class="modal-title" align="center" style="color:white; font-size:25px;" style="padding-left:-200px;"> <h4 style="font-size:20"> Project Details</h4>
		</div>
		<div class="modal-body">
		<p style="margin-top:0px;margin-left:30px;font-size:20px;"> ProjectName</p> <input type="text" id="modprojectname" class="projectdetailscol" disabled /> <br><br>
	    <p style="margin-top:0px;margin-left:30px;font-size:20px;"> Company Name</p> <input type="text" id="modcompanyname" class="projectdetailscol"  disabled /> <br><br>
		<p style="margin-top:0px;margin-left:30px;font-size:20px;"> Project Category</p> <textarea rows="2"  id="modcategoryname" class="projectdetailscol" style="height:80px;"> </textarea><br><br>
		<p style="margin-top:0px;margin-left:30px;font-size:20px;"> Username</p> <input type="text" id="modusername" class="projectdetailscol"  disabled /> <br><br>
		<p style="margin-top:0px;margin-left:30px;font-size:20px;"> Virtual Teamname</p> <input type="text" id="modvirtualteam" class="projectdetailscol" disabled /> <br><br>
		<p style="margin-top:0px;margin-left:30px;font-size:20px;"> Additiona Information</p> <textarea rows="3"id="modaddinfo" class="projectdetailscol" style="height:80px;" > </textarea> <br><br>
		
		
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

		if(isset($_GET['opprojectid']))
		{
			include("dbconnect.php");
			mysqli_select_db($con,"minorproject");
			$sql="select * from projects where id=".$_GET['opprojectid'];
			$result=mysqli_query($con,$sql);
			$count=mysqli_num_rows($result);
			if($count==1)
			{
				$row=mysqli_fetch_array($result);
				echo '<script type="text/javascript">
						var modal = document.getElementById("projectinfo");
						modal.style.display = "block";';
				echo "document.getElementById('modprojectname').value='".$row[1]."';";
				echo "document.getElementById('modcompanyname').value='".$row[3]."';";
				echo "document.getElementById('modcategoryname').value='".$row[4]."';";
				echo "document.getElementById('modusername').value='".$row[3]."';";
				echo "document.getElementById('modvirtualteam').value='".$row[1]."';";
				echo "document.getElementById('modaddinfo').value='".$row[7]."';";
	        echo '</script>';
			}
			mysqli_close($con);
		}

?>