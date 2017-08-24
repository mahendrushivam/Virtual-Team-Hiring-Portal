<?php

if(isset($_GET['delete_id']))
{include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
 $query="DELETE FROM users WHERE id=".$_GET['delete_id'];
 mysqli_query($con,$query);
 mysqli_close($con);
 header("Location: allaccounts.php");
}
if(isset($_GET['status_id']) && isset($_GET['statuspresent']))
{include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$query='';
	if($_GET['statuspresent']==0)
 $query="UPDATE users set status='1' WHERE id=".$_GET['status_id'];
else
	$query="UPDATE users set status='0' WHERE id=".$_GET['status_id']; 
 mysqli_query($con,$query);
 mysqli_close($con);
 header("Location: allaccounts.php");

}
?>


<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		#accounts {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:100%;
}

	#accounts th {
    border: 1px solid #ddd;
    padding: 8px;
	
}
#accounts td{
	padding:7px;
	width:100px;
}

#accounts tr:nth-child(even){background-color: #f2f2f2;}

#accounts tr:hover {background-color: #ddd;}

#accounts th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #333;
    color: white;
	width:100px;
}

.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 28px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

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
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
	</style>

<script type="text/javascript">
function delete_id(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='allaccounts.php?delete_id='+id;
     }
}
function applicationstatus_id(id,presentstatus)
{
     if(confirm('Are you sure you want to change status ?'))
     {
        window.location.href='allaccounts.php?status_id='+id+"&statuspresent="+presentstatus;
     }
}






function openprofileinfo() {
	var modal = document.getElementById('myModal');
    modal.style.display = "block";
	
}

window.onclick = function(event) {
	var modal = document.getElementById('myModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>	
	</head>
	<body>
			
			<table id="accounts">
			<div style="width:80%">
				<tr>
				<th> S.no </th>
				<th> Name </th>
				<th> Username </th>
				<th> Email-id  </th>
				<th> Account Type </th>
				<th style="border-right:0px;"> Activation Status </th>
				<th style="border:0px"> </th>
				</tr>
				</div>
				<?php
					$countuser=1;
					include("dbconnect.php");
					$sql="select * from users";
					mysqli_select_db($con,"minorproject");
					$res=mysqli_query($con,$sql);
					$count=mysqli_num_rows($res);
					if($count>0)
						{ 
							
								while($row=mysqli_fetch_row($res))
								{
									$status=$row[5];
									?>
									
							<tr>
							<td><p><?php echo $countuser; ?> </p></td>
							<td><p><?php echo 'myname is'; ?> </p></td>
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
							<a href="javascript:openprofileinfo()" ><span class="glyphicon glyphicon-eye-open" style="padding-right:10px;cursor:pointer;" id="viewrecord" ></span> </a>						
							<a href="javascript:delete_id(<?php echo $row[0]; ?>)"><span class="glyphicon glyphicon-trash" style="cursor:pointer;"id="delrecord"></span></a>
							</td>
							</tr>
							<?php
							$countuser++;
						$count--;}
						}
						
					
				?>
			</table>
			
		<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <p>Some text in the Modal..</p>
  </div>

</div>
	</body>
</html>
