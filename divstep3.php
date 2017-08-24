<html  lang="en">
<head>

  <link href="css/bootstrap.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
.numberfield {
background-color: #fff;
border: 2px solid #ccc;
border-radius: 0.25em;
color: inherit;
display: block;
height:45px;
font-family: inherit;
font-size: 20px;
line-height: inherit;
margin-top:3px;
margin: 0;
padding: 0.5em;
position: relative;
vertical-align: middle;
width: 60%;
margin-left:30px;
margin-top:20px;
-webkit-appearance: none;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}


.number {
background-color: #fff;
border: 2px solid #ccc;
border-radius: 0.25em;
font-family: inherit;
font-size: 20px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
.numberfield:focus {
border-color:#34495E;
outline: transparent;
z-index: 2;
}


#submitpassword{
	width:40%;
	overlay:hidden;
	height:50px;
	margin-left:20px;
	-webkit-border-radius:5px 5px 5px 5px;
	-moz-border-radius: 5px 5px 5px 5px;
      margin-top:7px;
	padding-left:8px;
	font-size:24px;
	color:#333333;
	font-style:bold;
	cursor:pointer;
	background-color:#808B96    ;
}
#submitpassword:hover{
	
	background-color:#333333;
	color:white;
	cursor:pointer;
}


#skipbutton{
	width:40%;
	overlay:hidden;
	height:50px;
	margin-left:20px;
	-webkit-border-radius:5px 5px 5px 5px;
	-moz-border-radius: 5px 5px 5px 5px;
      margin-top:7px;
	padding-left:8px;
	font-size:24px;
	color:#333333;
	font-style:bold;
	cursor:pointer;
	background-color:#808B96    ;
}
#skipbutton:hover{
	
	background-color:#333333;
	color:white;
	cursor:pointer;
}


#passwordlabel{
	width:100%;
	overlay:hidden;
	height:60px;
	color:white;
	font-size:20px;
	
	padding-top:10px;
	
	font-size:18px;
	background-color:#333333;
}

#mainnav1
{
background-color:#53585A  ;
width:100%;

height:100%;	

}
</style>

<script type="text/javascript" language="javascript" >

		$(document).ready(function(){
    $('#skipbutton').on('click',function(){
        window.location.href="dashboard.php";
        
    });
	$('#submitpassword').on('click',function(){
		var mobileno=document.getElementById("sdigit").value+document.getElementById("number").value;
       $.post('mobilevalidation.php', {'mobileno':mobileno});
	   
	   window.location.href="signstep2.php?step=4";
        
    });
	
	
	});
	
	
	$(document).ready(function(){
    $('#phcode').on('change',function(){
        var phcode = $(this).val();
        
            $.ajax({
                type:'POST',
                url:'mobilevalidation.php',
                data:'phcode='+phcode,
                success:function(data){
                    document.getElementById("sdigit").value='+'+data;
					
                }
            }); 
        
    });
	});
</script>
</head>
<body style="width:100%;">

<div style="margin-top:-40px;height:100%;margin-left:0px;width:100%;padding-top:1px;" id="mainnav1">
<div class="login" style="border:5px solid #333333;margin-left:300px;margin-top:130px;margin-bottom:108px;width:50%;">
<div id="passwordlabel"><p style="padding-left:80px;font-size:20px;"></p> </div>
<form method="post" id="phonevalidationform">
<?php

include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select  phonecode,country_name from country";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);


?>
<div >
<select name="phcode"  id="phcode" class="col-lg-1 col-md-1 col-sm-1 col-xs-1 numberfield" style="margin-top:20px;width:50px;float:left;background-color:#F2F3F4">
    <option value=""> </option>
	<?php
        if($count > 0){
            while($row=mysqli_fetch_row($result)){ 
               echo '<option value="'.$row[1].'">'.'<> '.$row[1].''.'</option>'; 
            }
        }
        ?>
		<input type="text" id="sdigit" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 numberfield" style="width:100px;background-color:#F2F3F4" >
<input class="numberfield" placeholder="Enter number" id="number" style="float:left;margin-left:20px;background-color:#F2F3F4"> 
</div>

<div>
<div>
<input type="button" id="submitpassword" name="submitpassword" value="Submit" style="float:left"/>
<input type="button"  id="skipbutton" value="Skip" style=""/></div>
</div>
</form>

</div>
</div>
<div style="height:120px;"> </div>

</body>
</html>