
<html>
<head>


<link rel="stylesheet" href="css/companystep1.css" >    
<style>
input#comusername
{
background-image:url(png/glyphicons-522-user-lock.png);
background-repeat:no-repeat;
background-position:6px;

margin-top:15px;
padding-left:35px;
width:360px;
height:45px;
font-size:16px;
}


</style>
<script src="js/companystep1.js" type="text/javascript"> </script>
<script>


function validateownerfirstname(x1)
{
 
var letters = /^[A-Z a-z]+$/; 
var pop1="cmypopup";
var x=document.getElementById(x1).value;
 document.getElementById("cmypopup").style.visibility="hidden";
if(x=="" || x==null)
{
		 var popup = document.getElementById(pop1);
     
      document.getElementById(x1).style.backgroundColor="#f7bbbb";
    
ocount1=1;	  
	  //document.getElementById("1name").innerHTML="Enter "+str;
	  document.getElementById(pop1).innerHTML="Ente Firstname";
}
else if(!x.match(letters) && x!="")    
{  
      
      document.getElementById(x1).style.backgroundColor="#f7bbbb";
       
		ocount1=1;	  
	  //document.getElementById("1name").innerHTML="Firstname should only contain alphabets";
	  document.getElementById(pop1).innerHTML="Owner Firstname should only contain alphabets";
}
else
{     var popup = document.getElementById(pop1);
      document.getElementById(x1).style.backgroundColor="#ffffff";
     popup.classList.toggle('close');
     document.getElementById(pop1).style.visibility="hidden";
}

}


function validateownerlastname(x1)
{
 
var letters = /^[A-Z a-z]+$/; 
var pop1="cmypopup1";
var x=document.getElementById(x1).value;
var popup = document.getElementById(pop1);
 document.getElementById(pop1).style.visibility="hidden";
if(x=="" || x==null)
{
		 
     
      document.getElementById(x1).style.backgroundColor="#f7bbbb";
      ocount2=1;	 
	  document.getElementById(pop1).innerHTML="Enter Lastname";
}
else if(!x.match(letters) && x!="")    
{  
      
      document.getElementById(x1).style.backgroundColor="#f7bbbb";
       
ocount2=1;	  
	  
	  document.getElementById(pop1).innerHTML="Owner's lastname should only contain alphabets";
}
else
{     
      document.getElementById(x1).style.backgroundColor="#ffffff";
     popup.classList.toggle('close');
     document.getElementById(pop1).style.visibility="hidden";
}

}

function validatecompanyusername(x1)
{
 
	var letters = /^[A-Z a-z 0-9]+$/; 
	var pop1="cmypopup6";
	var x=document.getElementById(x1).value;
	document.getElementById("cmypopup6").style.visibility="hidden";
	if(x=="" || x==null)
	{
		 var popup = document.getElementById(pop1);
     
		document.getElementById(x1).style.backgroundColor="#f7bbbb";
    
		ocount7=1;	 
	  document.getElementById(pop1).innerHTML="Enter Username";
	}
	else if(!x.match(letters) && x!="")    
	{  
      
		document.getElementById(x1).style.backgroundColor="#f7bbbb";
       
		ocount7=1;	  
		document.getElementById(pop1).innerHTML="Userame should only contain alphanumeric characters";
	}
	else
	{     var popup = document.getElementById(pop1);
			document.getElementById(x1).style.backgroundColor="#ffffff";
			popup.classList.toggle('close');
			document.getElementById(pop1).style.visibility="hidden";
	}

}
function companyusernameatfocus()
{
	if(ocount7==1)
	{pop1="cmypopup6";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		ocount7=0;
	
}

$(document).ready(function() {
    var x_timer;    
    $("#comusername").keyup(function (e){
        clearTimeout(x_timer);
        var username = $(this).val();
        x_timer = setTimeout(function(){
          var dataString ='username='+username;
			$.post('checkusername.php', {'username':username}, function(data) {
			if(data=='error')
			{
				document.getElementById("cmypopup6").innerHTML='Username already exists';
				document.getElementById("cmypopup6").style.visibility="visible";
				document.getElementById("comusername").style.backgroundColor="#f7bbbb";
			}
			else
			{
				document.getElementById("comusername").style.backgroundColor="#ffffff";
			}
			
			
    });
        }, 300);
    }); 
	
	$("#comusername").keyup(function (e){
		
				document.getElementById("cmypopup6").style.visibility="hidden";
	});
	
	
	
	
		$("#comfname").keyup(function (e){
		
				document.getElementById("cmypopup").style.visibility="hidden";
				});
				
		$("#comlname").keyup(function (e){
		
				document.getElementById("cmypopup1").style.visibility="hidden";
					});
		
		$("#comusername").keyup(function (e){
		
				document.getElementById("cmypopup6").style.visibility="hidden";
					});
		
		$("#compswd").keyup(function (e){
		
				document.getElementById("cmypopup4").style.visibility="hidden";
					});
		
		$("#comcpswd").keyup(function (e){
		
				document.getElementById("cmypopup5").style.visibility="hidden";
					});
		
		
	

	
});


$(document).ready(function() {
    var x_timer;    
    $("#comemail").keyup(function (e){
        clearTimeout(x_timer);
        var useremail = $(this).val();
        x_timer = setTimeout(function(){
          
			$.post('checkusername.php', {'useremail':useremail}, function(data) {
			if(data=='error')
			{
				document.getElementById("cmypopup3").innerHTML='Email-id already exists';
				document.getElementById("cmypopup3").style.visibility="visible";
				document.getElementById("comemail").style.backgroundColor="#f7bbbb";
			}
			else
			{
				document.getElementById("comemail").style.backgroundColor="#ffffff";
			}
			
			
    });
        }, 400);
    }); 
	
	$("#comemail").keyup(function (e){
		
				document.getElementById("cmypopup3").style.visibility="hidden";
	});
	
});







</script>

</head>
<body>




  <div class="section" >

 <div class="formm" >

<form method="post" action="file.php">
  
  <div class="namepopup">
  <input type="text" class="box" id="comfname" name="comfname" placeholder="Owner Firstname"  size="20"  style="margin-left:70px;margin-top:8px;" onblur="validateownerfirstname(this.id)" onfocus="ownerfirstnameatfocus()"> </br></p>
  <span class="namepopuptext"  id="cmypopup" ></span>
  
  
  </div>
  <div class="namepopup">
  <input type="text" class="box" id="comlname" name="comlname" placeholder="Owner Lastname"   size="20"  onblur="validateownerlastname(this.id)" onfocus="ownerlastnameatfocus()"> </br></p>
  <span class="namepopuptext"  id="cmypopup1" ></span>
 
  
  </div>
  <div class="popup" >
  <input type="text" class="box" id="comuname" name="comuname" placeholder="Company Name"  style="margin-top: 5px;margin-left:70px; "  size="40" onblur="validatecompanyname(this.id)" onfocus="companynameatfocus()"></br>
  
  <span class="popuptext" id="cmypopup2" ></span>
  </div>
  <div class="popup" >
  <input type="text" class="box" id="comusername" name="comusername" placeholder="Username"  style="margin-left:70px; "  size="40" onblur="validatecompanyusername(this.id)" onfocus="companyusernameatfocus()"></br>
  
  <span class="popuptext" id="cmypopup6" ></span>
  </div>
  <div class="popup" >
  <input type="email" class="box" id="comemail" name="comemail" placeholder="Email Address"   style="margin-top: 18px;margin-left:70px;" size="40" onblur="validateowneremail()" onfocus="owneremailidatfocus()"></br>
  <span class="popuptext" id="cmypopup3" > </span>
  </div>
   <div class="popup">
   <input type="password" id="compswd" class="box" name="compass" placeholder="Password"  style="margin-top: 18px;margin-left:70px;" size="40"  onblur="companypasswordval()" onfocus="companypasswordatfocus()"/> </br>
  <div class="popuptext" id="cmypopup4" > </div>
  </div>
  <div class="popup" >
   <input type="password" id="comcpswd" class="box" name="comcpass" placeholder="Confirm Password" style="margin-top: 18px;margin-left:70px;" size="40" onblur="companyconfirmpasswordd()" onfocus="companyconfirmpasswordatfocus()"></br>
  <div class="popuptext" id="cmypopup5" > </div></div>
  <div id="RecaptchaField2"   style="margin-top:15px;margin-left:105px;"> </div>
  <div class="row"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
  <input type="submit" class= "btn btn-primary" value="Signup" style="margin-top: 18px;margin-left:70px;height:60px;" name="companysignup" onclick="Function1(0)">
  </div>
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"></div></div>
 
  </form>

  </div>
  



 </body>
</html>
