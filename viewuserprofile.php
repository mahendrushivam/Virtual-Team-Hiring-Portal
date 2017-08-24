<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
if(isset($_SESSION)){
$username=$_SESSION['username'];?>
<!DOCTYPE html>
<html>
<head>

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
#snackbar {
    visibility:hidden; 
    min-width:100%; 
    margin-left:0px;
    background-color:#829BB5; 
    color: #fff; 
    height:80px;
    border-radius: 2px;
    padding: 16px; 
    position:fixed; 
    z-index: 1; 
    left: 0%; 
    top:130px; 
}



    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}


@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}


#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
.nd6{
  background: #ba68c8;
  right: 40px;
  bottom: 360px;
  animation-delay: 0.1s;
    animation: bounce-out-nds 0.1s linear;
  animation-fill-mode:  forwards;
}


ul.topnav1 li a:hover  {background: #16222A; 
background: -webkit-linear-gradient(to left, #16222A , #3A6073); 
background: linear-gradient(to left, #16222A , #3A6073);}


.content {
    
    background-color:#333   ;
    
    padding: 0px;
    width: 20%;
    height:72%;
	float:left;
	 border: 1px solid #272322;
	border-radius: 10px;
	
    color:white;
	}
	.educationcat:link, educationcat:visited {
    background: #4C555C; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #232526 , #0c0d0d); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #232526 , #0c0d0d); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: white;
    margin:20px 0px 5px 1px;
	padding: 12px 8px ;
	border-radius: 2px;
    text-align: left;
    font-size:18px;
	text-decoration: none;
    display: inline-block;
    height:8%;
	width:35%;
	}
	
	.experiencecat:link, experiencecat:visited {
    background: #4C555C; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #232526 , #0c0d0d); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #232526 , #0c0d0d); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: white;
    margin:20px 0px 5px 1px;
	padding: 12px 8px ;
	border-radius: 2px;
    text-align: left;
    font-size:18px;
	text-decoration: none;
    display: inline-block;
    height:8%;
	width:35%;
	}

	
	
.contentside {
    
	
    background-color: #333   ;
    
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

    height:7%;
	width:100%;
	margin-top:15px;
	margin-bottom:-4px;
	padding-left:100px;
	border-bottom: 1px dotted gray;
	
	}
	
.divv{
	margin-top:20px;
	border-bottom: 1px dotted gray;
	padding-left:60px;
}

.imgcont{
	margin-top:8px;
	margin-left:70px;
}

.pp{
	font-family: font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	
}



.content2 {
    
    background-color: #333;
    margin-top:640px;
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


.labelbutton
{

	color:#72828C;
	background-color:#90BAD5;
	border:5px solid #72828C ;
	height:45px;
	padding-right:100px;
	font-size:22px;
	cursor:pointer;
	margin-left:80px;
	padding-left:20px;
}	



#education {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:90%;
	margin-bottom:30px;

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

#education tr:nth-child(even){background-color:#f2f2f2;}
#education tr:nth-child(odd){background-color:#9CA3AA;}

#education tr:hover {background-color:#75818C  ;}

#education th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #333;
    color: white;
	width:100px;
}


#experiencetable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:90%;
	margin-bottom:30px;

}

	#experiencetable th {
    border: 1px solid #ddd;
    padding: 8px;
	font-size:15px;
	
}
#experiencetable td{
	padding:7px;
	width:100px;
}

#experiencetable tr:nth-child(even){background-color:#f2f2f2;}
#experiencetable tr:nth-child(odd){background-color:#9CA3AA;}

#experiencetable tr:hover {background-color:#75818C  ;}

#experiencetable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #333;
    color: white;
	width:100px;
}


.content3 {
    
    background-color: #333333;
    margin-top:50px;
    padding-top: 0px;
    width: 74%;
    height:68%;
	 border: 1px solid #272322;
	border-radius: 10px;
	
    
	}
	
	
	.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

#achievements {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:90%;
	padding-left:40px;
	margin-top:10px;
	margin-left:25px;
	position:relative;'
}



	
#achievements td{
	padding:7px;
	width:100px;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
	background-color:#333333;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
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

.skillrate{
	
	height:40px;
	width:500px;
	border-radius: 5px;
    border: 2px solid #333333;
	margin-left:20px;
	background-color:#D6DBDF  ;
}


</style>
</head>


<?php
include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select firstname,lastname from individual where individual.username='$username'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
$name=$row[0].' '.$row[1];
mysqli_close($con);
}
?>
<script>



function truncateText(selector, maxLength) 
{
    var element = document.querySelector(selector),
        truncated = element.innerText;

    if (truncated.length > maxLength) {
        truncated = truncated.substr(0,maxLength) + '...';
    }
    return truncated;
}

document.querySelector('#achievecontent').innerText = truncateText('#achievecontent', 80);

function closeNav() {
    document.getElementById("sidenav").style.width = "0";
    document.getElementById("backdiv").style.marginLeft = "0";
   
}
function openNav1() {
    document.getElementById("sidenav").style.width = "200px";
    document.getElementById("backdiv").style.marginLeft = "200px";
   
}





	
	
	






</script>
<body style="background-color:#C2C4C2" >







<div class="modal-content1" style="height:0px;">
<ul class="topnav1" id="myTopnav1" style="height:60px">
<li id="wname"><a href="#" style="">WEBSITENAME</a></li>


</div>	











<div id="backdiv" class="backdiv" style="position:relative;top:100px;">

  
  

  
<?php 
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$sql="select * from individual where username='$username'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$row=mysqli_fetch_row($result);
	
?>
<div style="margin-top:70px;position:relative;">
  <div class="content">
    <div class="header" >
	
	<div class="imgcont"> 
	<img src="images/emp.png" alt="Person" width="96" height="96">
	</div>
	</div>
    
      <div class="inp"><p class="pp"><b>Name</b></p></div>    
	  <div class="inp"><p class="pp"><b>Gender</b></p></div>    
	   <div class="inp"><p class="pp"><b>D.O.B.</b></p></div>        
	   <div class="inp"><p class="pp"><b>Address</b></p></div>    
	   <div class="inp"><p class="pp"><b>City</b></p></div> 
	   <div class="inp"><p class="pp"><b>State</b></p></div> 
       <div class="inp"><p class="pp"><b>Country</b></p></div> 
	   <div class="inp"><p class="pp"><b>Profession</b></p></div>
	   <div class="inp" style="height:45px;"><p class="pp"><b>Mob.</b></p></div>
    
  </div>
<div class="contentside" style="height:75%">
  <div class="header" style="height:100px" >
	
	<span class="glyphicon glyphicon-user" style="font-size:24px;padding-top:14px;margin-top:20px;"></span>
      
      <h3 style="padding-left:40px;margin-top:-28px;">Personal Information</h3>
     
	</div>
  
  <div class="divv" style=""><span class="inp1" > <?php echo $row[1].' '.$row[2]?></span></div>
  <div class="divv"><span class="inp1" > <?php echo $row[9]; ?></span></div> 
  <div class="divv"><span class="inp1" > <?php echo $row[3]; ?></span></div>
  <div class="divv"><span class="inp1" > <?php echo $row[5]; ?></span></div>
  <div class="divv"><span class="inp1" > <?php echo $row[6]; ?></span></div>
  <div class="divv"><span class="inp1" > <?php echo $row[7]; ?></span></div>
   <div class="divv"><span class="inp1" ><?php echo $row[8]; ?></span></div>
   <div class="divv"><span class="inp1" > <?php echo $row[4]; ?></span></div>
   <div class="divv"><span class="inp1" > <?php echo $row[16]; ?></span></div>
</div>
</div>
	<?php }
	mysqli_close($con);
	?>
<div style="margin-top:590px;"> </div>
<div class="content2" style="margin-top:0px">
    <div class="header2" >
      <span class="glyphicon glyphicon-education" style="padding-left:100px;margin-top:30px;margin-bottom:15px;font-size:30px;"> <h3 style="padding-left:40px;margin-top:-28px;font-size:26px;">Educational Qualifications</h3></span>

	  
	  </div>
<table id="education" style="margin-left:20px;margin-top:30px">
			
				<tr style="border-top:2px solid white;">
				<th style="width:10%;"> S.no </th>
				<th> Qualif_Type </th>
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
						$row=mysqli_fetch_row($result);
					?> <tr>
								<td><p><?php echo $counteducations; ?> </p> </td>
								<td><p><?php echo $row[1]; ?> </p> </td>
								<td> <p><?php echo $row[2]; ?></p></td>
								<td> <p><?php echo $row[4]; ?></p></td>
								<td> <p><?php echo $row[6]; ?></p></td>
								<td> <p><?php echo $row[7]; ?></p></td>
								<td> <a href="javascript:deleteeducationrecord(<?php echo $row[0];?>,'<?php echo $row[1];?>')"  ><span class="glyphicon glyphicon-trash"  style="cursor:pointer;"  ></span></a></td>
								</tr>
				<?php	         $counteducations++;
					
					$count--;}
					?>
					
					<tr>
							<td> </td>
							<td style="width:30%;" > 
							<p style="color:#333;font-size:18px; "><a href="#educationchoice" data-toggle="modal" data-dismiss="modal" style="text-decoration:none;"><span class="glyphicon glyphicon-plus"></span>  <?php echo "Add Education Record";?> </a><br> </p>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td> </td>
							<td> </td>
							</tr>
					<?php
				}
				else
				{
				?>
							<tr>
							<td> </td>
							<td style="width:30%;" > 
							<p style="color:#333;font-size:18px; "> <?php echo "No Education Record";?> <br> </p>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td> </td>
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

<div class="content3" style="margin-top:35px;">
    <div class="header" >
	
	
 <img src="images/achieve2.png" alt="Person" width="86" height="76" style="margin-top:30px;">     
      <h2 style="padding-left:100px;margin-top:-50px;">Acheivements</h2>
</div>
<table border="0" id="achievements" style="margin-bottom:40px;">
<?php
					
					if($count>0)
					{
					while($count>0)
					{
						$row=mysqli_fetch_row($result);
						$count--;
		?>
<tr class="card" style="border-collapse: collapse;background-color:#ECF0F1;height:20px;border-left:10px solid #AEB6BF" border="0">
  <td style="width:14%"><img src="images/achievements.png" alt="Achievement Icon" width="70" height="70"></td>
 <td style="padding-left:0px;width:60%;">
    <p style="font-size:22px;color:#34495E;margin-right:40px;margin-left:0px;"> Achievement Name :: <?php echo $row[1];?><br>
   <p style="margin-right:10px;margin-left:0px;font-size:18px" id="achievecontent"><?php echo $row[3];?> <a href="" > Read more</a></p> <br>
  </td>
  <td style="width:40%;">
  
  </td>

</tr>



<?php
					}
					?>
					
					<?php
					}
					else
					{ ?>
						<tr class="card" style="border-collapse: collapse;background-color:#ECF0F1;height:20px;width:60%;border-left:10px solid #AEB6BF;border-radius:25px;">
  <td style="width:14%"><img src="images/achievements.png" alt="Acheivement Icon" width="100" height="70" style=""></td>
  <td style="padding-left:0px;width:60%;">
    <p style="font-size:22px;line-height:28px;color:#34495E;"> No Acheivements Records<br> </p>
	</td> </tr>
					<?php 
					}
					?>

</table>
</div>









<?php

include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select * from skills where username='$username';";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>


<div class="content3">
    <div class="header" >
	
	
 <img src="images/skill2.png" alt="Skillname" width="60" height="60" style="margin-top:20px;">     
      <h2 style="padding-left:100px;margin-top:-50px;">Skills</h2>
</div>
<table style="margin-top:40px;margin-bottom:50px;">
<?php         while($count>0) 
					{
						$row=mysqli_fetch_row($result);
						
	?>
		<tr style="margin-left:60px;">
		<td style=""> <p style="color:#BFC9CA  ;font-size:22px;margin-left:20px;">  <?php echo $row[1]; ?></p></td>
		<td style="">  <div class="skillrate" style="margin-bottom:20px;"> 
							<?php if($row[3]=='Beginner')  {?>
							<div  style="width:33.5%;background: linear-gradient(to right, #7B241C,#F5CBA7,#F1948A,#E74C3C  );;height:35px;"> </div>
							
							<?php  } 
							else if($row[3]=='Intermediate')
							{?>
									<div  style="width:66.5%;background: linear-gradient(to right, #7B241C,#F5CBA7,#F1948A,#E74C3C,#138D75,#76D7C4,#A2D9CE  ,#45B39D );height:35px;"> </div>
									
							<?php } else if($row[3]=='Advance') { ?>
							<div  style="width:100%;background:linear-gradient(to right, #7B241C,#F5CBA7,#F1948A,#E74C3C,#138D75,#76D7C4,#A2D9CE,#45B39D,#2471A3,#5DADE2,#2471A3,#34495E );height:35px;"> </div>
							<?php } ?>
		
		</tr>
		
					<?php   $count--;
					}
					?>
</table>
</div>

<!--  PROJECT SHOW MODULE-->



<?php

include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select * from projectindividual where username='$username';";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>




<div class="content3" style="margin-top:50px;">
    <div class="header" style="height:80px;">
	
	
 <img src="images/project1.png" alt="Person" width="60" height="60" style="margin-top:15px;color:white">     
      <h2 style="padding-left:80px;margin-top:-60px;">Projects</h2>
</div>
<table style="margin-top:30px;margin-bottom:30px;margin-left:30px;margin-right:40px;">
<?php     
if($count>0)
{while($count>0) 
{
	$row=mysqli_fetch_row($result);
	?>
<tr class="card" style="border-collapse: collapse;background-color:#ECF0F1;height:20px;width:60%;border-left:10px solid #AEB6BF;border-radius:25px;">
<td style="padding-left:30px;"> <img src="images/proj2.png" width="70" height="70" > </img></td>
<td style="padding-left:40px;width:100%"> <p style="color:#34495E;font-size:22px">Project Name :: <?php echo $row[2]; ?></p>

	<p style="color:#34495E;font-size:16px"> <b>Category :: </b><?php echo $row[3]." , ".$row[4] ; ?> </p> </td>
	<td> </td>
	
</tr>
<?php   
$count--;
}  
?>

<?php 
mysqli_close($con);}

else
{

?>
<tr style="card" >
<td style="padding-left:30px;"> <img src="images/proj2.png" width="60" height="60" > </img></td>
<td style="padding-left:50px;"> <p style="font-size:22px;line-height:28px;color:#34495E;"> <?php echo " No Project recors";?> </a><br> </p></td>
	
	<td> </td>
</tr>

<?php } ?>
</table>
</div>





<div class="content3">
    <div class="header" style="height:80px;">
	
	
 <img src="images/exp.png" alt="Person" width="60" height="60" style="margin-top:15px;color:white">     
      <h2 style="padding-left:80px;margin-top:-60px;">Experiences</h2></div>
	  <table id="experiencetable" style="margin-left:20px;margin-top:30px">
			
				<tr style="border-top:2px solid white;">
				<th style="width:10%;"> S.no </th>
				<th> Exp_Type</th>
				<th> Profile</th>
				<th> Organization</th>
				<th> Start Year</th>
				<th> End Year </th>
				<th> </th>
				
				</tr>
				
				
				<?php
				$countexp=1;
				$count=0;
				include("dbconnect.php");
				$sql="select * from experiences where username='$username'";
				mysqli_select_db($con,"minorproject");
				$result=mysqli_query($con,$sql);
				$count=mysqli_num_rows($result);
				if($count>0)
				{
					while($count>0)
					{
						$row=mysqli_fetch_row($result);
					?> <tr>
								<td><p><?php echo $countexp; ?> </p> </td>
								<td><p><?php echo $row[1]; ?> </p> </td>
								<td> <p><?php echo $row[2]; ?></p></td>
								<td> <p><?php echo $row[4]; ?></p></td>
								<td> <p><?php echo $row[6]; ?></p></td>
								<td> <p><?php echo $row[7]; ?></p></td>
								<td> <a href="javascript:deleteexperiencrecord(<?php echo $row[0];?>,'<?php echo $row[1]; ?>')"  ><span class="glyphicon glyphicon-trash"  style="cursor:pointer;"  ></span></a></td>
								</tr>
				<?php	         $countexp++;
					
					$count--;}
					?>
					
					
					<?php
				}
				else
				{
				?>
							<tr>
							<td> </td>
							<td style="width:30%;" > 
							<p style="color:#333;font-size:18px; "><?php echo "No Experience records";?> </a><br> </p>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td> </td>
							<td> </td>
							</tr>
						<?php }
						
					
				?>
	</table>

</div>

</div>

</body>
</html>





