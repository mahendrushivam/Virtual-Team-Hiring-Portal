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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/minorstep1.css">
  <link rel="stylesheet" href="css/modal1.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" src="assets/bootstrap/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/dash.css">


<style>









</style>
</head>
<body>

<div id="container-floating">

  <a class="nd5 nds" data-toggle="tooltip" data-placement="left" data-original-title="Simone"></a>
  <a class="nd4 nds" data-toggle="tooltip" data-placement="left" data-original-title="contract@gmail.com"><img class="reminder">
    <p class="letter">C</p>
  </a>
  <a class="nd3 nds" data-toggle="tooltip" data-placement="left" data-original-title="Reminder"><img class="reminder" src="//ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/ic_reminders_speeddial_white_24dp.png" /></a>
  <a  href="#educationmodal" class="nd1 nds" data-toggle="modal" data-dismiss="modal"><img class="reminder">
    <p class="letter">E</p>
  </a>

  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
    <p class="plus">+</p>
    <img class="edit" src="http://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
  </div>

</div>
<div style="margin-top:100px;position:relative;">
  <div class="content">
    <div class="header" >
	
	<div class="imgcont"> 
	<img src="emp.jpg" alt="Person" width="96" height="96">
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
<div class="contentside" style="height:75%">
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
      <span class="glyphicon glyphicon-education" style="padding-left:100px;margin-top:30px;margin-bottom:15px;font-size:30px;"> <h3 style="padding-left:40px;margin-top:-28px;font-size:26px;">Educational Qualifications</h3></span>

	  
	  </div>
<table id="education" style="margin-left:20px;margin-top:30px">
			
				<tr style="border-top:2px solid white;">
				<th style="width:10%;"> S.no </th>
				<th> School/College</th>
				<th> Course Name </th>
				<th> Year of passing</th>
				<th> Percentage </th>
				<th> </th>
				
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
					while($count>0)
					{
					?> <tr>
								<td><p><?php echo $counteducations; ?> </p> </td>
								<td><p><?php echo $row[0]; ?> </p> </td>
								<td> <p><?php echo $row[1]; ?></p></td>
								<td> <p><?php echo $row[2]; ?></p></td>
								<td> <p><?php echo $row[4]; ?></p></td>
								<td> </td>
								</tr>
				<?php	         $counteducations++;
					
					$count--;}
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
							<td> </td>
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
    <div class="header" >
	
	
 <img src="images/achieve2.png" alt="Person" width="86" height="76" style="margin-top:30px;">     
      <h2 style="padding-left:100px;margin-top:-50px;">Acheivements</h2>
</div>
<table border="0" id="achievements">
<?php
					
					if($count>0)
					{
					while($count>0)
					{
						$row=mysqli_fetch_row($result);
						$count--;
		?>
<tr class="card" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="images/achieve.png" alt="Achievement Icon" ></td>
 <td style="padding-left:0px;width:60%;">
    <p style="font-size:22px;line-height:28px;color:#AEB6BF"> Achievement Name ::<?php echo $row[1];?><br>
   About ::<?php echo $row[3];?><br>
      Year ::<?php echo $row[2];?></p>
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
  </td>
 

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

<div class="modal fade" id="" role="dialog">
	<div class="modal-dialog" >
	
	<div class="modal-content" >
		<div class="modal-header" style="background-color:TAN;height:50px;margin-bottom:0px;padding:0px;">
		<div style="margin-left:395px;">
		<button type="button" class="close" data-toggle="modal" data-dismiss="modal" style="color:#565656; cursor:auto;">&times</button>
		</div>
		
		</div>
		<div class="modal-body1" style="height:100%;margin-top:-25px;" >
		<?php  include("minor1j.php");?>
		</div>
		
	</div>
	</div>
	
</div>



  </body>
</html>

