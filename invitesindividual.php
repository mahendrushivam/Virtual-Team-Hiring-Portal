<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
	if(isset($_SESSION))
	{
$username=$_SESSION['username'];
	}
?>



<!DOCTYPE html>
<html>
<head>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
	background-color:#363C43  ;
    border-radius: 5px;
	
	
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

#invites {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:77%;
	padding-left:40px;
	margin-top:-50px;
	position:relative;
}

	
#invites td{
	padding:7px;
	width:100px;
}

#invites tr:nth-child(even){background-color: #f2f2f2;}

#invites tr{
	margin-bottom:30px;
}

#invites tr:nth-child(even) td{
	color:#000000;
}

.invitesbutton
{width:200px;
border-radius: 8px;
background-color:#B1B6BB  ;
height:43px;
color:#2C3E50;
font-size:17px;
cursor:pointer;
margin-bottom:0px;
left:20%;
}


#snackbar4 {
    visibility:hidden; 
    min-width:100%; 
    margin-left:-30px;
    background-color:#829BB5; 
    color: #fff; 
    height:80px;
    border-radius: 2px;
    padding: 16px; 
    position:relative; 
    z-index: 1; 
    left: 0%; 
    top:30px; 
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


#snackbar4.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}


</style>
<script type="text/javascript">

function acceptinvitation(id,companyname,teamname,jobtitle)
{$(document).ready( function() {
    $.post('acceptorrejectinvitation.php', 
	{'invitationid':id,'companyname':companyname,'teamname':teamname,'jobtitle':jobtitle}, 
	function(data) {
		window.location.href='dashboard.php?path=1';
			
	
	});
});
	
}


function rejectinvitation(id)
{$(document).ready( function() {
    $.post('acceptorrejectinvitation.php', 
	{'rejectid':id}, 
	function(data) {
		window.location.href='dashboard.php?path=2';
	               });
});
	
}
</script>
</head>
<body>

<div id="snackbar4"><img src="images/hire2.png" style="float:left"> </img><p id="message4" style="font-size:20px;padding-left:30px;color:#E2EAF1">Some text some message..</p></div>

<?php

include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select * from invitesindividual where username='$username';";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>
<table border="0" id="invites" style="margin-top:40px;">
		<?php
					$countinvites=1;
					if($count>0)
					{
					while($count>0)
					{
						$row=mysqli_fetch_row($result);
						$count--;
						
		?>
		
<tr class="card" style="border-collapse: collapse;
       border: 8px solid #999;
       " border="0">
  <td style="width:14%"><img src="images/invitation.png" alt="Invites Icon" width="100" style=""></td>
 <td style="padding-left:0px;width:60%;">
 <?php  if($countinvites%2!=0) { ?>
 <p style="font-size:20px;line-height:28px;color:#AEB6BF">  <?php }
else   {?>
<p style="font-size:20px;line-height:28px;color:#667583"><?php }	?> 
<?php echo $row[3];?> <br> 
   Company Name   :: <?php echo $row[4]; ?> <br>
      Project Name  :: <?php echo $row[2]; ?></p>
  </td>
<td style="width:40%;">
  
   <a href="javascript:acceptinvitation(<?php echo $row[0]; ?>,'<?php echo $row[4];?>','<?php echo $row[2];?>','<?php echo $row[3]; ?>')" style="text-decoration:none"><p class="invitesbutton" style="margin-top:-3px;"><img src="images/accept1.png" alt="Accept Icon" width="33" height="33"style="">  Accept</p> </a>
   <a href="javascript:rejectinvitation(<?php echo $row[0]; ?>)" style="text-decoration:none"><p class="invitesbutton" style="margin-top:-3px;"><img src="images/reject.png" alt="Reject Icon" width="33" height="33"style="">Reject</p></a>
  </td>
</tr> 

<?php
					$countinvites++; }}
					else
					{ ?>
						<tr class="card" style="border-collapse: collapse; border: 8px solid #999;" border="0">
  <td style="width:14%"><img src="images/invitation.png" alt="Invites Icon" width="100" style=""></td>
  <td style="padding-left:0px;width:60%;">
    <p style="font-size:18px;line-height:28px;color:#AEB6BF"> <?php echo "No new Invites";?><br> </p>
	</td> </tr>
					<?php 
					}
					?>

</table>

</body>
</html>

<?php

if(isset($_GET['iac']))
{
	if($_GET['iac']==1)
	{		echo '<script>';
		echo 'var x = document.getElementById("snackbar4");
		document.getElementById("message4").innerHTML="Congratulations, you have been hired for the company name";
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);';
		echo '</script>';
	}
	
}
?>