

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
			var popup = document.getElementById('indopupmenu');
				document.getElementById('indopupmenu').style.visibility="hidden";
				popup.classList.toggle('close');
				uncolor();
			}
			else if(flag1==false)
			{
				var popup = document.getElementById('indopupmenu');
				document.getElementById('indopupmenu').style.visibility="visible";
				//document.getElementById('day').style.backgroundColor="#ffc8c8";
			  popup.innerHTML="Select Day";
				coloureddayofmonth();
			}
			else if(flag3==false)
			{
			var popup = document.getElementById('indopupmenu');
				document.getElementById('indopupmenu').style.visibility="visible";
				popup.classList.toggle('show');   popup.innerHTML="Select DateOfBirth";
				coloureddayofmonth();
			}
			else if(flag2==false)
			{
			var popup = document.getElementById('indopupmenu');
				document.getElementById('indopupmenu').style.visibility="visible";
				popup.classList.toggle('show');   popup.innerHTML="Select Year";
				coloureddayofmonth();
			}
			else
			{
			var popup = document.getElementById('mypopup2');
     // document.getElementById('fname').style.backgroundColor="#ffffff";
      popup.classList.toggle('close');
      document.getElementById('mypopup2').style.visibility="hidden";
		uncolor();
		}
			}

			
	function coloureddayofmonth()
	{
		document.getElementById("day").style.borderColor="#f7bbbb";
		document.getElementById("month").style.borderColor="#f7bbbb";
		document.getElementById("year").style.borderColor="#f7bbbb";
		document.getElementById("dob").style.borderColor="#f7bbbb";
	}
	
	function uncolor()
	{
		document.getElementById("day").style.borderColor="white";
		document.getElementById("month").style.borderColor="white";
		document.getElementById("year").style.borderColor="white";
		document.getElementById("dob").style.borderColor="#white";
	}
			
	