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


.content {
    
    background-color:#333   ;
    
    padding: 0px;
    width: 20%;
    height:70%;
	float:left;
	 border: 1px solid #272322;
	border-radius: 10px;
	
    color:white;
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
    margin-top:570px;
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

#floating-button{
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background: #db4437;
  position: fixed;
  bottom: 30px;
  right: 30px;
  cursor: pointer;
  box-shadow: 0px 2px 5px #666;
}

.plus{
  color: white;
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 0;
  margin: 0;
  line-height: 55px;
  font-size: 38px;
  font-family: 'Roboto';
  font-weight: 300;
  animation: plus-out 0.3s;
  transition: all 0.3s;
}

#container-floating{
  position: fixed;
  width: 70px;
  height: 70px;
  bottom: 30px;
  right: 30px;
  z-index: 50px;
}

#container-floating:hover{
  height: 400px;
  width: 90px;
  padding: 30px;
}

#container-floating:hover .plus{
  animation: plus-in 0.15s linear;
  animation-fill-mode: forwards;
}

.edit{
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  display: block;
  right: 0;
  padding: 0;
  opacity: 0;
  margin: auto;
  line-height: 65px;
  transform: rotateZ(-70deg);
  transition: all 0.3s;
  animation: edit-out 0.3s;
}

#container-floating:hover .edit{
  animation: edit-in 0.2s;
   animation-delay: 0.1s;
  animation-fill-mode: forwards;
}

@keyframes edit-in{
    from {opacity: 0; transform: rotateZ(-70deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

@keyframes edit-out{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(-70deg);}
}

@keyframes plus-in{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(180deg);}
}

@keyframes plus-out{
    from {opacity: 0; transform: rotateZ(180deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

.nds{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  position: fixed;
  z-index: 300;
  transform:  scale(0);
  cursor: pointer;
}

.nd1{
  background: #d3a411;
  right: 40px;
  bottom: 120px;
  animation-delay: 0.2s;
    animation: bounce-out-nds 0.3s linear;
  animation-fill-mode:  forwards;
}

.nd3{
  background: #3c80f6;
  right: 40px;
  bottom: 180px;
  animation-delay: 0.15s;
    animation: bounce-out-nds 0.15s linear;
  animation-fill-mode:  forwards;
}

.nd4{
  background: #ba68c8;
  right: 40px;
  bottom: 240px;
  animation-delay: 0.1s;
    animation: bounce-out-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

.nd5{
  
  right: 40px;
  bottom: 300px;
  animation-delay: 0.08s;
  animation: bounce-out-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

@keyframes bounce-nds{
    from {opacity: 0;}
    to {opacity: 1; transform: scale(1);}
}

@keyframes bounce-out-nds{
    from {opacity: 1; transform: scale(1);}
    to {opacity: 0; transform: scale(0);}
}

#container-floating:hover .nds{
  
  animation: bounce-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

#container-floating:hover .nd3{
  animation-delay: 0.08s;
}
#container-floating:hover .nd4{
  animation-delay: 0.15s;
}
#container-floating:hover .nd5{
  animation-delay: 0.2s;
}

.letter{
  font-size: 23px;
  font-family: 'Roboto';
  color: white;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0;
  top: 0;
  bottom: 0;
  text-align: center;
  line-height: 40px;
}

.reminder{
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  bottom: 0;
  line-height: 40px;
}

.profile{
  border-radius: 50%;
  width: 40px;
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
  right: 20px;
}

.modal-content {
margin: 80px 0px 0px 0px;
padding: 0px 0px 0px 0px;
background-color:#fff;
position:fixed;
overflow:hidden;
width:100%;

top:0%;
border:0px;
	
	}
.content3 {
    
    background-color: #333333;
    margin-top:50px;
    padding-top: 0px;
    width: 74%;
    height:68%;
	 border: 1px solid #272322;
	border-radius: 10px;
	box-shadow: 0 2px 18px 1px rgba(0,0,0,0.6),0 10px 24px 0 rgba(0,0,0,0.35);
    
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
$(document).ready( function() {
    $("#applicationindividual").on("click", function() {
        $("#backdiv").load("applicationindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	
	
	
	
	$("#invitesindividual").on("click", function() {
        $("#backdiv").load("invitesindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	
	$("#jobsindividual").on("click", function() {
        $("#backdiv").load("jobsindividual.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	$("#dashboardindividual").on("click", function() {
        $("#backdiv").load("pinfodiv3.php");
		document.getElementById("backdiv").style.backgroundColor="#C2C4C2";
		
    });
	
	
});

function closeNav() {
    document.getElementById("sidenav").style.width = "0";
    document.getElementById("backdiv").style.marginLeft = "0";
   
}
function openNav1() {
    document.getElementById("sidenav").style.width = "200px";
    document.getElementById("backdiv").style.marginLeft = "200px";
   
}


</script>
<body >













  
  

  <div id="container-floating">

  <a class="nd5 nds" data-toggle="tooltip" data-placement="left" data-original-title="Simone"></a>
  <a class="nd4 nds" data-toggle="tooltip" data-placement="left" data-original-title="contract@gmail.com"><img class="reminder">
    <p class="letter">C</p>
  </a>
  <a data-toggle="tooltip" data-placement="left" data-original-title="Reminder"><img class="reminder" src="//ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/ic_reminders_speeddial_white_24dp.png" /></a>
  <a  href="#myModal1" class="nd1 nds" data-toggle="modal" data-dismiss="modal" ><img class="reminder">
    <p class="letter">E</p>
  </a>

  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
    <p class="plus">+</p>
    <img class="edit" src="http://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
  </div>

</div>
<div class="modal fade" id="myModal1" role="dialog">
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
