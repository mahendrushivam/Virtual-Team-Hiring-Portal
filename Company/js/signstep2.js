function validateGender()
{
		var x=document.getElementById("male");
		var y=document.getElementById("female");
		
		if(x.checked=="false" &&  y.checked=="false")
		{
			var popup = document.getElementById('mypopup1');
     // document.getElementById('fname').style.backgroundColor="#ffffff";
      popup.classList.toggle('close');
      document.getElementById('mypopup1').style.visibility="hidden";	
		}
		else
		{var popup = document.getElementById('mypopup1');
				document.getElementById('mypopup1').style.visibility="visible";
				popup.classList.toggle('show');   popup.innerHTML="Select Gender";
			
		}
}

function validateday()
{
		var day=document.getElementById("day");
			if(day.selectedIndex==0)
			{
				return false;
			}
			else 
			{
			return true;
			}
}

function validatemonth()
{
			var month=document.getElementById("month");
			if(month.selectedIndex==0)
			{
				return false;
			}
			else 
			{
			return true;
			}
}

function validateyear()
{
var year=document.getElementById("year");
			if(year.selectedIndex==0)
			{
				return false;
			}
			else 
			{
			return true;
			}
}

function validatedob()
{
			var flag1=validateday();
			var flag2=validateyear();
			var flag3=validatemonth();
			if(flag1==false && flag2==false && flag3==false)
			{
			var popup = document.getElementById('mypopup2');
				document.getElementById('mypopup2').style.visibility="visible";
				popup.classList.toggle('show');   popup.innerHTML="Select Date of Birth";
			}
			else if(flag1==false)
			{
				var popup = document.getElementById('mypopup2');
				document.getElementById('mypopup2').style.visibility="visible";
				//document.getElementById('day').style.backgroundColor="#ffc8c8";
				popup.classList.toggle('show');   popup.innerHTML="Select Day";
			}
			else if(flag2==false)
			{
			var popup = document.getElementById('mypopup2');
				document.getElementById('mypopup2').style.visibility="visible";
				popup.classList.toggle('show');   popup.innerHTML="Select Year";
			}
			else if(flag3==false)
			{
			var popup = document.getElementById('mypopup2');
				document.getElementById('mypopup2').style.visibility="visible";
				popup.classList.toggle('show');   popup.innerHTML="Select Month";
			}
			else
			{
			var popup = document.getElementById('mypopup2');
     // document.getElementById('fname').style.backgroundColor="#ffffff";
      popup.classList.toggle('close');
      document.getElementById('mypopup2').style.visibility="hidden";
		}
			}
			
	function exitcat(x)
	{var y="";
	if(x=="div1")
	y="mypopup2";
	else if(x=="country")
	y="mypopup3";
	else if(x=="state")
	y="mypopup4";
	else if(x=="city")
	y="mypopup5";	
	{
		var popup = document.getElementById(y);
     // document.getElementById('fname').style.backgroundColor="#ffffff";
      popup.classList.toggle('close');
      document.getElementById(y).style.visibility="hidden";}
	}

			
			function validatecountry()
			{
			var country=document.getElementById("country");
			if(country.selectedIndex==0)
			{
				var popup = document.getElementById('mypopup3');
				document.getElementById('mypopup3').style.visibility="visible";
				popup.classList.toggle('show');   popup.innerHTML="Please select the country name";
			}
			else 
			{
				var popup = document.getElementById('mypopup3');
      popup.classList.toggle('close');
      document.getElementById('mypopup3').style.visibility="hidden";
			}
			}

			
			function validatestate()
			{
			var state=document.getElementById("state");
			if(state.selectedIndex==0)
			{
				var popup = document.getElementById('mypopup4');
				document.getElementById('mypopup4').style.visibility="visible";
				popup.classList.toggle('show');   popup.innerHTML="Please select the state name";
			}
			else 
			{
				var popup = document.getElementById('mypopup4');
      popup.classList.toggle('close');
      document.getElementById('mypopup4').style.visibility="hidden";
			}
			}
			
	function validatecity()
			{
			var city=document.getElementById("city");
			if(city.selectedIndex==0)
			{
				var popup = document.getElementById('mypopup5');
				document.getElementById('mypopup5').style.visibility="visible";
				popup.classList.toggle('show');   popup.innerHTML="Please select the city name";
			}
			else 
			{
				var popup = document.getElementById('mypopup5');
      popup.classList.toggle('close');
      document.getElementById('mypopup5').style.visibility="hidden";
			}
			}