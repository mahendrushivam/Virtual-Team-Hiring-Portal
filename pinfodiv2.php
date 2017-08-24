<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
if(isset($_SESSION)){
$username=$_SESSION['username'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dash.css">


<style>



.content {
    
    background-color: #181818   ;
    
    padding: 0px;
    width: 20%;
    height:75%;
	float:left;
	 border: 1px solid #272322;
	border-radius: 10px;
	
    color:white;
	}

	
	
.contentside {
    
	
    background-color: #181818    ;
    
	margin-left:50px;
    padding: 0px;
    width: 50%;
	float:left;
    height:75%;
	 border: 1px solid #272322;
	border-radius: 10px;
	
    overflow:auto;
	color:white;
	}
	
	
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.header {
    
	padding: 2px 16px;
    background-color:#486580  ;
	border-top: 1px solid #486580 ;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
    color: white;
	height:24%;
}

.inp1{
	
	padding:0px 0px 0px 20px;
	font-family: font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:16px;

	}

.inp{
	background-color:#181818 ;
    height:7%;
	width:25%;
	margin-top:15px;
	margin-bottom:-4px;
	margin-left:100px;
	
	
	}
	
.divv{
	margin-top:20px;
	
}

.imgcont{
	margin-top:4px;
	margin-left:70px;
}

.pp{
	font-family: font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	
}



.content2 {
    
    background-color: #fefefe;
    margin-top:660px;
    padding: 0px;
    width: 74%;
    height:68%;
	 border: 1px solid #486580;
	border-radius: 10px;
	
    
	}





.header2 {
    padding: 2px 16px;
    background-color:#486580  ;
	border-top: 1px solid #486580;
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




	.content3 {
    
    background-color: #fefefe;
    margin:50px 0px 0px 0px;
    padding-top: 0px;
    width: 74%;
    height:68%;
	 border: 1px solid #272322;
	border-radius: 10px;
	box-shadow: 0 2px 18px 1px rgba(0,0,0,0.6),0 10px 24px 0 rgba(0,0,0,0.35);
    
	}




.header3 {
    padding: 2px 16px;
    background-color:#486580  ;
	border-top: 1px solid #272322;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
    color: white;
	height:28%;
}



.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
	background-color:#181818;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

#ach {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:90%;
	padding-left:40px;
	margin-top:10px;
	margin-left:25px;
	position:relative;
}

	
#ach td{
	padding:7px;
	width:100px;
}




.achbutton
{width:100px;
border-radius: 8px;
background-color:#181818;
height:43px;
color:#AEB6BF;
font-size:17px;
cursor:pointer;
margin-bottom:0px;
left:20%;
margin-top:-25px;
margin-left:40px;
}



.content4 {
    background-color: #fefefe;
    margin:50px 0px 0px 0px;
    padding-top: 0px;
    width: 74%;
    height:68%;
	 border: 1px solid #272322;
	border-radius: 10px;
	box-shadow: 0 2px 18px 1px rgba(0,0,0,0.6),0 10px 24px 0 rgba(0,0,0,0.35);
    overflow:auto;
	}




.header4 {
    padding: 2px 16px;
    background-color:#486580  ;
	border-top: 1px solid #272322;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
    color: white;
	height:28%;
}




.card1 {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
	background-color:#181818;
    border-radius: 5px;
}

.card1:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

#proj{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:90%;
	padding-left:40px;
	margin-top:10px;
	margin-left:35px;
	position:relative;
}

	
#proj td{
	padding:7px;
	width:100px;
}




.projbutton
{width:100px;
border-radius: 8px;
background-color:#181818;
height:43px;
color:#AEB6BF;
font-size:17px;
cursor:pointer;
margin-bottom:0px;
left:20%;
margin-top:-25px;
margin-left:40px;
}



.content5 {
    background-color: #fefefe;
    margin:50px 0px 0px 0px;
    padding-top: 0px;
    width: 74%;
    height:68%;
	 border: 1px solid #272322;
	border-radius: 10px;
	box-shadow: 0 2px 18px 1px rgba(0,0,0,0.6),0 10px 24px 0 rgba(0,0,0,0.35);
    overflow:auto;
	}




.header5 {
    padding: 2px 16px;
    background-color: #486580   ;
	border-top: 1px solid #272322;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
    color: white;
	height:28%;
}

.inp1{
	
	padding:2px 0px 0px 40px;
	font-family: "Times New Roman", Times, serif;
	font-size:16px;
}


	
.divv{
	margin-top:1px;
	
}


.card2 {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 50%;
	background-color:#181818;
    border-radius: 5px;
}

.card2:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 4px 4px 0 0;
}

#skill {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:50%;
	padding-left:40px;
	margin-top:20px;
	margin-left:25px;
	position:relative;
}

	
#skill  td{
	padding:7px;
	width:100px;
}




.skillbutton
{width:100px;
border-radius: 8px;
background-color:#181818;
height:43px;
color:#AEB6BF;
font-size:17px;
cursor:pointer;
margin-bottom:0px;
left:20%;
margin-top:8px;
margin-left:40px;
}


</style>
</head>
<body>

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
<div style="margin-top:100px;position:relative;">
  <div class="content">
    <div class="header" >
	
	<div class="imgcont"> 
	<img src="emp.jpg" alt="Person" width="90" height="90">
	</div>
	</div>
    
      <div class="inp"><p class="pp"><b>Name</b></p></div>    
	  <div class="inp"><p class="pp"><b>Gender</b></p></div>    
	   <div class="inp"><p class="pp"><b>D.O.B.</b></p></div>        
	   <div class="inp"><p class="pp"><b>Address</b></p></div>    
	   <div class="inp"><p class="pp"><b>City</b></p></div> 
	   <div class="inp"><p class="pp"><b>State</b></p></div> 
       <div class="inp"><p class="pp"><b>Country</b></p></div> 
	   <div class="inp"><p class="pp"><b>Mob.</b></p></div> 
    
  </div>
<div class="contentside">
  <div class="header" style="height:100px" >
	
	<span class="glyphicon glyphicon-user" style="font-size:24px;padding-top:14px;margin-top:20px;"></span>
      
      <h3 style="padding-left:40px;margin-top:-28px;">Personal Information</h3>
    <span class="glyphicon glyphicon-pencil" style="float:right;font-size:18px;margin-top:-30px;"></span>
	</div>
  
  <div class="divv" style=""><span class="inp1" > Rajat Soni</span></div>
  <div class="divv"><span class="inp1" > Male</span></div> 
  <div class="divv"><span class="inp1" > 09/04/1996</span></div>
  <div class="divv"><span class="inp1" > c-2/290 Janakpuri New Delhi</span></div>
  <div class="divv"><span class="inp1" > New Delhi</span></div>
  <div class="divv"><span class="inp1" > Delhi</span></div>
   <div class="divv"><span class="inp1" > India</span></div>
   <div class="divv"><span class="inp1" > 8826817797</span></div>
</div>
</div>


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
				$count=0;
				include("dbconnect.php");
				$sql="select * from qualifications where username='$username'";
				mysqli_select_db($con,"minorproject");
				$result=mysqli_query($con,$sql);
				$count=mysqli_num_rows($result);
				if($count>0)
				{
					?> <tr>
								<td><p><?php echo $counteducations; ?> </p> </td>
								<td><p><?php echo $row[2]; ?> </p> </td>
								<td> <p><?php echo $row[5]; ?></p></td>
								<td> <p><?php echo $row[4]; ?></p></td>
								<td> <p><?php echo $row[8]; ?></p></td>
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


<?php
include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select * from acheivements where username='$username';";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>

<div class="content3">
    <div class="header3" >
	
	
 <img src="medal1.png" alt="Person" width="86" height="76" style="margin-top:30px;">     
      <h2 style="padding-left:100px;margin-top:-50px;">Acheivements</h2>
</div>
<table border="0" id="ach" style="">
			<?php
					
					if($count>0)
					{
					while($count>0)
					{
						$row=mysqli_fetch_row($result);
						$count--;
		?>
					<tr class="card" style="border-collapse: collapse;" border="0">
							<td style="width:14%"><img src="trophy.png" alt="Achievement Icon" width="100" style=""></td>
							<td style="padding-left:0px;width:60%;">
									<p style="font-size:22px;line-height:28px;color:#AEB6BF"> <?php echo $row[1];?><br>
									About ::<?php echo $row[3];?><br>
									Year ::<?php echo $row[2];?>
									</p>
							</td>
							<td style="width:40%;">
										<a href="#" style="text-decoration:none" >  <p class="achbutton"> <span class="glyphicon glyphicon-pencil" style="font-size:18px;margin-top:0px;margin-left:50px;"></span></p> </a>
										<a href="#" style="text-decoration:none" ><p class="achbutton" style="margin-top:-3px;"><span class="glyphicon glyphicon-trash" style="font-size:18px;margin-top:0px;margin-left:50px;"></span> </p> </a>
							</td>

					</tr>

			<?php
					}}
					else
					{ ?>
						<tr class="card" style="border-collapse: collapse;" border="0">
								<td style="width:14%"><img src="trophy.png" alt="Acheivement Icon" width="100" style=""></td>
								<td style="padding-left:0px;width:60%;">
											<p style="font-size:18px;line-height:28px;color:#AEB6BF"> <?php echo "No Acheivements";?><br> </p>
								</td> 
						</tr>
			<?php 
					}
			?>

</table>
</div>



<?php

include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select * from acheivements where username='$username';";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>
<div class="content4">
    <div class="header4" >
	
	
 <img src="proj.jpg" alt="Person" width="96" height="86" style="margin-top:25px;">     
      <h2 style="padding-left:100px;margin-top:-60px;">Projects</h2>
</div>
<table border="0" id="proj" style="">
<?php
				
					if($count>0)
					{
					while($count>0)
					{
						$row=mysqli_fetch_row($result);
						$count--;
		?>
<tr class="card1" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="projm.jpg" alt="Project Icon" width="70" style=""></td>
 <td style="padding-left:0px;width:60%;">
    <p style="font-size:22px;line-height:28px;color:#AEB6BF"> Project Name ::<?php echo $row[1];?><br>
   Category Name::<?php echo $row[2];?><br>
   Year ::<?php echo $row[5];?></p>
  </td>
  <td style="width:40%;">
  <a href="#" style="text-decoration:none" >  <p class="projbutton"> <span class="glyphicon glyphicon-pencil" style="font-size:18px;margin-top:0px;margin-left:50px;"></span></p> </a>
   <a href="#" style="text-decoration:none" ><p class="projbutton" style="margin-top:-3px;"><span class="glyphicon glyphicon-trash" style="font-size:18px;margin-top:0px;margin-left:50px;"></span> </p> </a>
  </td>

</tr>
<?php
					}}
					else
					{ ?>
						<tr class="card1" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="projm.jpg" alt="Project Icon" width="70" style=""></td>
  <td style="padding-left:0px;width:60%;">
    <p style="font-size:18px;line-height:28px;color:#AEB6BF"> <?php echo "No Projects";?><br> </p>
	</td> </tr>
					<?php 
					}
					?>


</table>
</div>



<?php

include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select * from acheivements where username='$username';";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>


<div class="content5">
    <div class="header5" >
	
	
 <img src="skill1.png" alt="Person" width="86" height="76" style="margin-top:30px;">     
      <h2 style="padding-left:100px;margin-top:-50px;">Skills</h2>
</div>
<table border="0" id="skill" style="">
<?php
					
					if($count>0)
					{
					while($count>0)
					{
						$row=mysqli_fetch_row($result);
						$count--;
		?>
<tr class="card2" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="skill.png" alt="skill Icon" width="50" style=""></td>
 <td style="padding-left:0px;width:60%;">
    <p style="font-size:22px;line-height:28px;color:#AEB6BF"> Skill ::<?php echo $row[1];?><br>
      Level::<?php echo $row[3];?></p>
  </td>
 
<td style="width:10%;">
  <a href="#" style="text-decoration:none" >  <p class="skillbutton"> <span class="glyphicon glyphicon-pencil" style="font-size:18px;margin-top:0px;margin-left:50px;"></span></p> </a>
   <a href="#" style="text-decoration:none" ><p class="skillbutton" style="margin-top:-3px;"><span class="glyphicon glyphicon-trash" style="font-size:18px;margin-top:0px;margin-left:50px;"></span> </p> </a>
  </div></td>
 

 </tr>


  
 


<?php
					}}
					else
					{ ?>
						<tr class="card2" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="skill.png" alt="Skill Icon" width="70" style=""></td>
  <td style="padding-left:0px;width:60%;">
    <p style="font-size:18px;line-height:28px;color:#AEB6BF"> <?php echo "No Acheivements";?><br> </p>
	</td> </tr>
					<?php 
					}
					?>

</table>
</div>


  </body>
</html>

