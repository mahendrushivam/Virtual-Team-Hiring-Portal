function validateipcode()
{
		var letters=/^[0-9]+$/;
		var x=document.getElementById("ipcode");
		var pop=document.getElementById("tooltip1");
		pop.style.visibility="hidden";
		if(x.value=='' || x.value==null)
		{
			comcount=1;
			document.getElementById('ipcode').style.borderColor="#f7bbbb";
			pop.innerHTML="Enter Company Registered Ipcode";
			}
			else if(!(x.value).match(letters))
			{
				document.getElementById('ipcode').style.borderColor="#f7bbbb";  
				comcount=1;
				pop.innerHTML="Ipcode should only contain numeric characters";
			}
			else
			{
				document.getElementById('ipcode').style.borderColor="#CADBE5";
				comcount=0;
				pop.style.visibility="hidden";
				
			}
}


function validatecompanyaddress()
{
		
		var x=document.getElementById("companyaddressl1");
		var pop=document.getElementById("tooltip2");
		pop.style.visibility="hidden";
		if(x.value=='' || x.value==null)
		{
			comcount2=1;
			document.getElementById('companyaddressl1').style.borderColor="#f7bbbb";
			document.getElementById('companyaddressl2').style.borderColor="#f7bbbb";
			document.getElementById('companyaddressl3').style.borderColor="#f7bbbb";
			pop.innerHTML="Enter Valid Company Address";
			}
			
			else
			{
				document.getElementById('companyaddressl1').style.borderColor="#CADBE5";
				document.getElementById('companyaddressl2').style.borderColor="#CADBE5";
				document.getElementById('companyaddressl3').style.borderColor="#CADBE5";
				comcount2=0;
				pop.style.visibility="hidden";
				
			}
}

function ipcodeatfocus()
{
	var pop=document.getElementById("tooltip1");
	if(comcount==1)
	{
		pop.style.visibility="visible";
	}
}

function addressatfocus()
{
	var pop=document.getElementById("tooltip2");
	if(comcount2==1)
	{
		pop.style.visibility="visible";
	}
	else
		comcount2=0;
}