function firstnameatfocus()
{
	if(count1==1)
	{pop1="mypopup";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		count1=0;
	
}

function validatename(x1)
{
 
var letters = /^[A-Z a-z]+$/; 
var pop1="mypopup";
var x=document.getElementById(x1).value;
 document.getElementById("mypopup").style.visibility="hidden";
if(x=="" || x==null)
{
		 var popup = document.getElementById(pop1);
     
      document.getElementById(x1).style.backgroundColor="#f7bbbb";
    
count1=1;	  
	  //document.getElementById("1name").innerHTML="Enter "+str;
	  document.getElementById(pop1).innerHTML="Enter Firstname";
}
else if(!x.match(letters) && x!="")    
{  
      
      document.getElementById(x1).style.backgroundColor="#f7bbbb";
       
count1=1;	  
	  //document.getElementById("1name").innerHTML="Firstname should only contain alphabets";
	  document.getElementById(pop1).innerHTML="Firstname should only contain alphabets";
}
else
{     var popup = document.getElementById(pop1);
      document.getElementById(x1).style.backgroundColor="#ffffff";
     popup.classList.toggle('close');
     document.getElementById(pop1).style.visibility="hidden";
}

}


// VALIDATE USERNAME

function validateusername(x1)
{
 
	var letters = /^[A-Z a-z 0-9]+$/; 
	var pop1="mypopup2";
	var x=document.getElementById(x1).value;
	document.getElementById("mypopup2").style.visibility="hidden";
	if(x=="" || x==null)
	{
		 var popup = document.getElementById(pop1);
     
		document.getElementById(x1).style.backgroundColor="#f7bbbb";
    
		count4=1;	 
	  document.getElementById(pop1).innerHTML="Enter Username";
	}
	else if(!x.match(letters) && x!="")    
	{  
      
		document.getElementById(x1).style.backgroundColor="#f7bbbb";
       
		count4=1;	  
		document.getElementById(pop1).innerHTML="Username should only contain alphanumeric characters";
	}
	else
	{     var popup = document.getElementById(pop1);
			document.getElementById(x1).style.backgroundColor="#ffffff";
			popup.classList.toggle('close');
			document.getElementById(pop1).style.visibility="hidden";
	}

}

function lastnameatfocus()
{
	if(count2==1)
	{pop1="mypopup1";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		count2=0;
	
}
function emailidatfocus()
{
	if(count3==1)
	{pop1="mypopup3";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		count3=0;
	
}

function usernameatfocus()
{
	if(count4==1)
	{pop1="mypopup2";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		count4=0;
	
}


function validatelastname(x1)
{
 
var letters = /^[A-Z a-z]+$/; 
var pop1="mypopup1";
var x=document.getElementById(x1).value;
var popup = document.getElementById(pop1);
 document.getElementById(pop1).style.visibility="hidden";
if(x=="" || x==null)
{
		 
     
      document.getElementById(x1).style.backgroundColor="#f7bbbb";
      count2=1;	 
	  document.getElementById(pop1).innerHTML="Enter Lastname";
}
else if(!x.match(letters) && x!="")    
{  
      
      document.getElementById(x1).style.backgroundColor="#f7bbbb";
       
count2=1;	  
	  
	  document.getElementById(pop1).innerHTML="Lastname should only contain alphabets";
}
else
{     
      document.getElementById(x1).style.backgroundColor="#ffffff";
     popup.classList.toggle('close');
     document.getElementById(pop1).style.visibility="hidden";
}

}

function validateemail()
{
	var x = document.getElementById("email").value;
	var popup = document.getElementById('mypopup3');
	popup.style.visibility="hidden"
	if(x==null ||  x=="")
	{
			var popup = document.getElementById('mypopup3');
      
			document.getElementById('email').style.backgroundColor="#f7bbbb";
			count3=1;  
			popup.innerHTML="Enter Email-id";
	}
	else if(document.getElementById('email').value!="" && x!=null)
	{
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
		{
       
			var popup = document.getElementById('mypopup3');
			document.getElementById('email').style.backgroundColor="#f7bbbb";  
			popup.innerHTML="Enter a valid email id format ex:abc@gmail.com"; 
			count3=1;
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


// VALIDATE Password

function passwordval()
{
	var x=document.getElementById("pswd").value;
	var popup = document.getElementById('mypopup4');
	document.getElementById('mypopup4').style.visibility="hidden";
	if(document.getElementById('pswd').value=="" )
{
		 var popup = document.getElementById('mypopup4');
      
      document.getElementById('pswd').style.backgroundColor="#f7bbbb";
       count5=1;
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
		{
		var popup = document.getElementById('mypopup4');
			document.getElementById('pswd').style.backgroundColor="#f7bbbb";
			count5=1;  
			popup.innerHTML="Password must conatin at least 8 characters";
				
		}
		else
		{
		
			document.getElementById('pswd').style.backgroundColor="#f7bbbb";
			var popup = document.getElementById('mypopup4');
			count5=1;
			popup.innerHTML="password must contain a special character.For e.g %^!@$_#&*+()";
			//document.getElementById("11").innerHTML="password must contain a special character.For e.g %^!@$_#&*+()";
		}
	}
	else
	{
		if(x.match(/^\d/))
		{
				count5=1;
			document.getElementById('pswd').style.backgroundColor="#f7bbbb";
			popup.innerHTML="First character cannot be a digit";

		}
		else
		{
			document.getElementById('pswd').style.backgroundColor="#f7bbbb";
			  
				count5=1;
			popup.innerHTML="First character must be a capital";}
	}
	}
	
function passwordatfocus()
{
	if(count5==1)
	{
		pop1="mypopup4";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		count5=0;
	
}


function confirmpasswordd()
{		var popup = document.getElementById('mypopup5');
		x=document.getElementById("cpswd").value;
		y=document.getElementById("pswd").value;
		popup.style.visibility="hidden";
		if(x==null || x=="")
		{
			count6=1;
			document.getElementById('cpswd').style.backgroundColor="#f7bbbb";
			popup.innerHTML="Enter ConfirmPassword";
		}
		else if(x!=y && document.getElementById("cpswd").value!=null)
		{
		
			document.getElementById('cpswd').style.backgroundColor="#f7bbbb";
			document.getElementById('pswd').style.backgroundColor="#f7bbbb";
			count6=1;
			  
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
			
function confirmpasswordatfocus()
{
	if(count6==1)
	{
		pop1="mypopup5";
		var popup = document.getElementById(pop1);
		
		document.getElementById(pop1).style.visibility="visible";
	}
	else
	{
		count6=0;
	}
}








