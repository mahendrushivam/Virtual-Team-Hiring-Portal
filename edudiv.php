<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
if(isset($_SESSION)){
$username=$_SESSION['username'];
}?>
!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dash1.css">


<style>


body{
	
	overflow:auto;
}

	
	.content2 {
    
    background-color: #fefefe;
    margin:60px 0px 0px 100px;
    padding: 0px;
    width: 50%;
    height:68%;
	 border: 1px solid #272322;
	border-radius: 10px;
	box-shadow: 0 2px 18px 1px rgba(0,0,0,0.6),0 10px 24px 0 rgba(0,0,0,0.35);
    
	}





.header2 {
    padding: 2px 16px;
    background-color: #031B35;
	border-top: 1px solid #272322;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
    color: white;
	height:24%;
}


	



#education {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:90%;

}

	#education th {
    border: 1px solid #ddd;
    padding: 8px;
	font-size:15px;
	
}
#education td{
	padding:7px;
	width:100px;
}

#education tr:nth-child(even){background-color: #f2f2f2  ;}

#education tr:hover {background-color: #ddd;}

#education th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #333;
    color: white;
	width:100px;
}

</style>
</head>
<body>

  

  <div class="content2">
    <div class="header2" >
      <h2 style="padding-left:100px;margin-top:32px;">Educational Qualifications</h2>
<img src="educ.png" alt="Person" width="96" height="86" style="margin-top:-70px;">
	  
	  </div>
<table id="education" style="margin-left:20px;margin-top:30px">
			
				<tr style="border-top:2px solid white;">
				<th> S.no </th>
				<th> School/College</th>
				<th> Course Name </th>
				<th> Year of passing</th>
				<th> Percentage </th>
				
				
				</tr>
				
				
				<?php
				$counteducations=1;
				include("dbconnect.php");
				$sql="select * from educationsindividual where username='$username'";
				mysqli_select_db($con,"minorproject");
				$res=mysqli_query($con,$sql);
				$count=mysqli_num_rows($res);
				if($count>0)
				{
					?> <tr>
								<td><p><?php echo $counteducations; ?> </p> </td>
								<td><p><?php echo $row[4]; ?> </p> </td>
								<td> <p><?php echo $row[2]; ?></p></td>
								<td> <p><?php echo $row[3]; ?></p></td>
								<td> <p><?php echo $row[5]; ?></p></td>
								</tr>
				<?php	         $counteducations++;
				
				}
				else
				{
				?>
							<tr>
							<td> </td>
							<td > No records present </td>
							<td></td>
							<td></td>
							<td></td>
							</tr>
						<?php }
						
					
				?>
	</table>
</div>

<div class="fixed-action-btn vertical" style="bottom:20px; right: 30px;" >
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating btn-small pink" href="#A">A</a></li>
      <li><a class="btn-floating yellow darken-1" href="#B"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green" href="#C"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue" href="#D"><i class="material-icons">attach_file</i></a></li>
      <li><a class="btn-floating purple" href="#E"><i class="material-icons">attach_file</i></a></li>
	</ul>
  </div>
</body>
</html>
