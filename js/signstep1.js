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

