<html  lang="en">
<head>

  <link href="css/bootstrap.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>


#mainnav1
{
background-color:#53585A  ;
width:100%;

height:100%;	

}



#snackbar8 {
    visibility:hidden; 
    min-width:65%; 
    margin-left:350px; 
    background-color: #333; 
    color: #fff; 
    border-radius: 5px; 
    padding: 16px; 
    position:fixed; 
	height:80px;
    z-index: 1;
    left: 0%; 
    bottom: 10px; 
}


#snackbar8.show {
    visibility: visible; 
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




</style>
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
$('#submitotp').on('click',function(){
		var numb1=document.getElementById("numb1").value;
		var numb2=document.getElementById("numb2").value;
		var numb3=document.getElementById("numb3").value;
		var numb4=document.getElementById("numb4").value;
		var otpcode=parseInt(numb1+numb2+numb3+numb4);
		$.ajax({
                type:'POST',
                url:'mobilevalidation.php',
                data:'otpcode='+otpcode,
                success:function()
				{
					alert("Changed Successfully");
	window.location.href="dashboard.php";
	
	
					}
					else
						
						{
							
					window.location.href="signstep2.php?step=4";
                }
            }); 
       
        
    });
	});
	


 </script>

</head>
<body style="width:100%;">

<div style="margin-top:-40px;height:100%;margin-left:0px;width:100%;padding-top:1px;background-color:#85AAC0  ;" id="mainnav1">
<div class="row" style="margin-top:10px;">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"><img src="images/otpicon.png" width="120" height="100"> </div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>


</div>

<div class="row" style="margin-top:20px;">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><p style="font-size:22px;color:white"> Enter Your 4 digit OTP validation code below in the input box </p></div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
</div>


<div class="row" style="margin-top:20px;">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
<form>
<input type="text"  id="numb1" style="width:50px;height:45px;font-size:24px;text-align:center">
<input type="text" id="numb2" style="width:50px;height:45px;font-size:24px;text-align:center">
<input type="text" id="numb3" style="width:50px;height:45px;font-size:24px;text-align:center">
<input type="text" id="numb4" style="width:50px;height:45px;font-size:24px;text-align:center">
</form>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
</div>

</div>

<div class="row" style="margin-top:20px;">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<input type="button" class="btn btn-primary" id="resendotp" value="Resend OTP" style="height:45px;width:150px;margin-right:30px;margin-left:40px;font-size:18px;">
<input type="submit" class="btn btn-primary" id="submitotp" value="Submit" style="height:45px;width:150px;font-size:18px;">

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
</div>

<div style="height:120px;"> </div>
<div id="snackbar8"><img src="images/feedback1.png" style="float:left;margin-top:-15px;"> </img><p id="message8" style="font-size:20px;padding-left:30px;color:#E2EAF1">Some text some message..</p></div>			
</div>




</body>
</html>