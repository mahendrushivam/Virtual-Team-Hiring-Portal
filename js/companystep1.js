function ownerfirstnameatfocus()
{
	if(ocount1==1)
	{pop1="cmypopup";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		ocount1=0;
	
}










// VALIDATE COMPANY NAME

function validatecompanyname(x1)
{
 
	var letters = /^[A-Z a-z 0-9]+$/; 
	var pop1="cmypopup2";
	var x=document.getElementById(x1).value;
	document.getElementById("cmypopup2").style.visibility="hidden";
	if(x=="" || x==null)
	{
		 var popup = document.getElementById(pop1);
     
		document.getElementById(x1).style.backgroundColor="#f7bbbb";
    
		ocount4=1;	 
	  document.getElementById(pop1).innerHTML="Enter Company Name";
	}
	else if(!x.match(letters) && x!="")    
	{  
      
		document.getElementById(x1).style.backgroundColor="#f7bbbb";
       
		ocount4=1;	  
		document.getElementById(pop1).innerHTML="Company Name should only contain alphanumeric characters";
	}
	else
	{     var popup = document.getElementById(pop1);
			document.getElementById(x1).style.backgroundColor="#ffffff";
			popup.classList.toggle('close');
			document.getElementById(pop1).style.visibility="hidden";
	}

}




function ownerlastnameatfocus()
{
	if(ocount2==1)
	{pop1="cmypopup1";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		ocount2=0;
	
}
function owneremailidatfocus()
{
	if(ocount3==1)
	{pop1="cmypopup3";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		ocount3=0;
	
}




function companynameatfocus()
{
	if(ocount4==1)
	{pop1="cmypopup2";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		ocount4=0;
	
}




function validateowneremail()
{
	var x = document.getElementById("comemail").value;
	var popup = document.getElementById('cmypopup3');
	popup.style.visibility="hidden"
	if(x==null ||  x=="")
	{
			var popup = document.getElementById('cmypopup3');
      
			document.getElementById('comemail').style.backgroundColor="#f7bbbb";
			count3=1;  
			popup.innerHTML="Enter Company email-id";
	}
	else if(document.getElementById('comemail').value!="" && x!=null)
	{
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
		{
       
			var popup = document.getElementById('cmypopup3');
			document.getElementById('comemail').style.backgroundColor="#f7bbbb";  
			popup.innerHTML="Enter a valid email id format ex:abc@gmail.com"; 
			count3=1;
		}
	else
	{
		var popup = document.getElementById('cmypopup3');
		document.getElementById('comemail').style.backgroundColor="#ffffff";
		popup.classList.toggle('close');
		document.getElementById('cmypopup3').style.visibility="hidden";
	}
}
}


// VALIDATE Password

function companypasswordval()
{
	var x=document.getElementById("compswd").value;
	var popup = document.getElementById('cmypopup4');
	document.getElementById('cmypopup4').style.visibility="hidden";
	if(document.getElementById('compswd').value=="" )
{
		 var popup = document.getElementById('cmypopup4');
      
      document.getElementById('compswd').style.backgroundColor="#f7bbbb";
       ocount5=1;
	  popup.innerHTML="Enter Password";
}

	else if(x.match(/^[A-Z][\S]+$/))
	{
		if(x.match(/\b([!]+|[@]+|[#]+|[\$]+|[%]+|[.]+|[\^]+|[\&]+|[\*]+|[\(]+|[\)]+|[_]+|[\+]+)/) && x.length>=8)
		{
			
			var popup = document.getElementById('cmypopup4');
			document.getElementById('compswd').style.backgroundColor="#ffffff";
			popup.classList.toggle('close');
			document.getElementById('cmypopup4').style.visibility="hidden";
		}
		else if(x.length<8)
		{
		var popup = document.getElementById('cmypopup4');
			document.getElementById('compswd').style.backgroundColor="#f7bbbb";
			ocount5=1;  
			popup.innerHTML="Password must conatin at least 8 characters";
				
		}
		else
		{
		
			document.getElementById('compswd').style.backgroundColor="#f7bbbb";
			var popup = document.getElementById('cmypopup4');
			ocount5=1;
			popup.innerHTML="password must contain a special character.For e.g %^!@$_#&*+()";
			//document.getElementById("11").innerHTML="password must contain a special character.For e.g %^!@$_#&*+()";
		}
	}
	else
	{
		if(x.match(/^\d/))
		{
				ocount5=1;
			document.getElementById('compswd').style.backgroundColor="#f7bbbb";
			popup.innerHTML="First character cannot be a digit";

		}
		else
		{
			document.getElementById('compswd').style.backgroundColor="#f7bbbb";
			  
				ocount5=1;
			popup.innerHTML="First character must be a capital";}
	}
	}
	
function companypasswordatfocus()
{
	if(ocount5==1)
	{
		pop1="cmypopup4";
		var popup = document.getElementById(pop1);
		
      document.getElementById(pop1).style.visibility="visible";
	}
	else
		ocount5=0;
	
}


function companyconfirmpasswordd()
{		var popup = document.getElementById('cmypopup5');
		x=document.getElementById("comcpswd").value;
		y=document.getElementById("compswd").value;
		popup.style.visibility="hidden";
		if(x==null || x=="")
		{
			ocount6=1;
			document.getElementById('comcpswd').style.backgroundColor="#f7bbbb";
			popup.innerHTML="Enter ConfirmPassword";
		}
		else if(x!=y && document.getElementById("cpswd").value!=null)
		{
		
			document.getElementById('comcpswd').style.backgroundColor="#f7bbbb";
			document.getElementById('compswd').style.backgroundColor="#f7bbbb";
			ocount6=1;
			  
			popup.innerHTML="Entered confirm password doesn't match";
		}
		else if(x==y)
		{
		
			var popup = document.getElementById('cmypopup5');
			document.getElementById('comcpswd').style.backgroundColor="#ffffff";
			document.getElementById('compswd').style.backgroundColor="#ffffff";
			popup.classList.toggle('close');
			document.getElementById('cmypopup5').style.visibility="hidden";
		}
		
			}
			
function companyconfirmpasswordatfocus()
{
	if(ocount6==1)
	{
		pop1="cmypopup5";
		var popup = document.getElementById(pop1);
		
		document.getElementById(pop1).style.visibility="visible";
	}
	else
	{
		ocount6=0;
	}
}








