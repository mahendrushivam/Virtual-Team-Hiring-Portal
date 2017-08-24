<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="assets/location.js"></script> 
	<script src="js/jquery.min.js"></script>
<link href="css/signstep2ind.css" rel="stylesheet">
<style>
#openstep{
	width:100%;
}
</style>
<script>


</script>
  </head>
  <body>
    <div class="modal-content animate" style="height:150px;">
	  <ul class="topnav1" id="myTopnav1" style="width:100%">
<li id="wname"><a href="#">WEBSITENAME</a></li>
</ul>
            	<div style="border:0px;margin-top:30px;margin-left:180px;position:fixed">
                	<img id="step1" src="images/Step1.png" style="opacity:0.5;">
                               
            	<span style="border:0px;margin-left:100px">
                	<img id="step2" src="images/Step2.png" >
                    
                </span>
            
                	<span style="border:0px;margin-left:100px" >
                	<img id="step3" src="images/Step3.png" >
                    
                </span>
				</div>
            
        </div>
	
	
	<br><br>
	<div style="background-image:url(images/blackback.jpg);margin-top:-10px;" id="openstep" style="height:100%">
	
</div>


  </body>
</html>
<?php
		if(isset($_GET['step']))
		{
			if($_GET['step']==3)
			{
				echo '<script type="text/javascript">';
	echo '$(document).ready(function() {
		document.getElementById("step2").style.opacity="0.5";
        $("#openstep").load("divstep3.php");
    });';
		echo '</script>';	}
		
		
		else if($_GET['step']==4)
		{
			echo '<script type="text/javascript">';
	echo '$(document).ready(function() {
		document.getElementById("step2").style.opacity="0.5";
        $("#openstep").load("divstep4.php");
    });';
		echo '</script>';
			
			
		}}
		else
		{
			echo '<script type="text/javascript">';
	echo '$(document).ready(function() {
		
        $("#openstep").load("divstep2.php");
    });';
		echo '</script>';
			
		}
		
	
?>
