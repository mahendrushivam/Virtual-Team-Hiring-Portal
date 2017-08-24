


function validatename(x1)
{
    
var letters = /^[A-Z a-z]+$/; 
var pop1="";
var x=document.getElementById(x1).value;
if(x1=="fname")
{str="Firstname";
pop1="mypopup";}
else if(x1=="lname")
{str="Lastname";
pop1="mypopup1"}
if(x=="" || x==null)
{
		 var popup = document.getElementById(pop1);
      document.getElementById(pop1).style.visibility="visible";
      document.getElementById(x1).style.backgroundColor="#f7bbbb";
      popup.classList.toggle('show');   
	  //document.getElementById("1name").innerHTML="Enter "+str;
	  document.getElementById(pop1).innerHTML="Enter "+str;
}
else if(!x.match(letters) && x!="")    
{  
      var popup = document.getElementById(pop1);
      document.getElementById(pop1).style.visibility="visible";
      document.getElementById(x1).style.backgroundColor="#f7bbbb";
      popup.classList.toggle('show');   
	  //document.getElementById("1name").innerHTML="Firstname should only contain alphabets";
	  document.getElementById(pop1).innerHTML=str+" should only contain alphabets";
}
else
{     var popup = document.getElementById(pop1);
      document.getElementById(x1).style.backgroundColor="#ffffff";
      popup.classList.toggle('close');
      document.getElementById(pop1).style.visibility="hidden";
}

}

function entername(x)
{
	var str;
var pop;	
		if(document.getElementById(x).value=="" || document.getElementById(x).value==null)
		{
		 
		if(x=="fname")	
			 {str="Firstname";
				pop="mypopup"}	
		if(x=="lname")	
			 {str="Lastname";
				pop="mypopup1"}					
	else if(x=="uname")
			{str="Username";
			pop="mypopup2";}
			
	else if(x=="email")
			{str="Email Id";
			pop="mypopup3";}
	else if(x=="pswd")
			{str="Password";
			pop="mypopup4";}
	else if(x=="cpswd")
			{str="Confirm Password";
			pop="mypopup5";}
	
			var popup = document.getElementById(pop);
      document.getElementById(pop).style.visibility="visible";
      
      popup.classList.toggle('show');
	  popup.innerHTML="Enter "+str;
		}
		}
		function exitname(k,x)
		
	
{if(document.getElementById(x).value=="" || document.getElementById(x).value==null)
{
document.getElementsByClassName("popuptext")[k].style.visibility="hidden";
    var popup = document.getElementsByClassName("popuptext")[k];
    popup.classList.toggle('close');}
     
}
		
function validateusername()
{
    
var letters = /^[A-Z a-z].+[A-Z a-z 1-9]+$/; 
if(document.getElementById('uname').value=="" )
{
		 var popup = document.getElementById('mypopup2');
      document.getElementById('mypopup2').style.visibility="visible";
      document.getElementById('uname').style.backgroundColor="#f7bbbb";
      popup.classList.toggle('show');   
	  popup.innerHTML="Enter Username";
}
 else if(!document.getElementById('uname').value.match(letters))    
{  
	
document.getElementById('mypopup2').style.visibility="visible";
var popup = document.getElementById('mypopup2');
document.getElementById('uname').style.backgroundColor="#f7bbbb";
  popup.classList.toggle('show');   
  popup.innerHTML="Username can contain only alphanumeric characters";
   
	
}
else
{var popup = document.getElementById('mypopup2');
document.getElementById('uname').style.backgroundColor="#ffffff";
popup.classList.toggle('close');
document.getElementById('mypopup2').style.visibility="hidden";

}
}

function validateemail()
{var x = document.getElementById("email").value;
	if(x==null ||  x=="")
{
		 var popup = document.getElementById('mypopup3');
      document.getElementById('mypopup3').style.visibility="visible";
      document.getElementById('email').style.backgroundColor="#f7bbbb";
      popup.classList.toggle('show');   
	  popup.innerHTML="Enter Email-id";
}
else if(document.getElementById('email').value!="" && x!=null)
	{
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
	{
       document.getElementById('mypopup3').style.visibility="visible";
var popup = document.getElementById('mypopup3');
document.getElementById('email').style.backgroundColor="#f7bbbb";
  popup.classList.toggle('show');   
  popup.innerHTML="Enter a valid email id format ex:abc@gmail.com"; 
       
	}
	else
	{
	var popup = document.getElementById('mypopup3');
document.getElementById('email').style.backgroundColor="#ffffff";
popup.classList.toggle('close');
document.getElementById('mypopup3').style.visibility="hidden";
	}
}
}


function confirmpassword()
{		var popup = document.getElementById('mypopup5');
		x=document.getElementById("cpswd").value;
		y=document.getElementById("pswd").value;
		
		if(x==null || x=="")
		{
		document.getElementById('mypopup5').style.visibility="visible";
			document.getElementById('cpswd').style.backgroundColor="#f7bbbb";
			popup.classList.toggle('show');   
			popup.innerHTML="Enter ConfirmPassword";
		}
		else if(x!=y && document.getElementById("cpswd").value!=null)
		{
		document.getElementById('mypopup5').style.visibility="visible";
			document.getElementById('cpswd').style.backgroundColor="#f7bbbb";
			document.getElementById('pswd').style.backgroundColor="#f7bbbb";
			
			popup.classList.toggle('show');   
			popup.innerHTML="Entered confirm password doesn't match";
		}
		else if(x==y)
		{
		
			var popup = document.getElementById('mypopup5');
			document.getElementById('cpswd').style.backgroundColor="#ffffff";
			document.getElementById('pswd').style.backgroundColor="#ffffff";
			popup.classList.toggle('close');
			document.getElementById('mypopup5').style.visibility="hidden";
		}
		
			}
			
			
function passwordval()
{
	var x=document.getElementById("pswd").value;
	if(document.getElementById('pswd').value=="" )
{
		 var popup = document.getElementById('mypopup4');
      document.getElementById('mypopup4').style.visibility="visible";
      document.getElementById('pswd').style.backgroundColor="#f7bbbb";
      popup.classList.toggle('show');   
	  popup.innerHTML="Enter Password";
}

	else if(x.match(/^[A-Z][\S]+$/))
	{
		if(x.match(/\b([!]+|[@]+|[#]+|[\$]+|[%]+|[.]+|[\^]+|[\&]+|[\*]+|[\(]+|[\)]+|[_]+|[\+]+)/) && x.length>=8)
		{
			
			var popup = document.getElementById('mypopup4');
			document.getElementById('pswd').style.backgroundColor="#ffffff";
			popup.classList.toggle('close');
			document.getElementById('mypopup4').style.visibility="hidden";
		}
		else if(x.length<8)
		{document.getElementById('mypopup4').style.visibility="visible";
		var popup = document.getElementById('mypopup4');
			document.getElementById('pswd').style.backgroundColor="#f7bbbb";
			popup.classList.toggle('show');   
			popup.innerHTML="Password must conatin at least 8 characters";
				
		}
		else
		{
		document.getElementById('mypopup4').style.visibility="visible";
			document.getElementById('pswd').style.backgroundColor="#f7bbbb";
			var popup = document.getElementById('mypopup4');
			popup.classList.toggle('show');   
			popup.innerHTML="password must contain a special character.For e.g %^!@$_#&*+()";
			//document.getElementById("11").innerHTML="password must contain a special character.For e.g %^!@$_#&*+()";
		}
	}
	else
	{
		if(x.match(/^\d/))
		{var popup = document.getElementById('mypopup4');
				document.getElementById('mypopup4').style.visibility="visible";
			document.getElementById('pswd').style.backgroundColor="#f7bbbb";
			popup.classList.toggle('show');   
			popup.innerHTML="First character cannot be a digit";

		}
		else
		{document.getElementById('mypopup4').style.visibility="visible";
			document.getElementById('pswd').style.backgroundColor="#f7bbbb";
			popup.classList.toggle('show');   
			popup.innerHTML="First character must be a capital";}
	}
	}
	
	
