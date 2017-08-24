function validateEndYear(){
   var x =document.forms["Resume"]["eeyear"].value;
    if(x==null || x=="")
	{
		t="          When your college ended?";	
    	document.getElementById("err5").innerHTML= ""+t;	
		
	}
		else 
	 {
		 if(x.match(/^[0-9]+$/)&& x.length==3)
		 {
			 document.getElementById("err5").innerHTML= "Ok";
		 }
		 else
		 {
			 document.getElementById("err5").innerHTML= " Invalid Year";
			 action=1;
		 }
		 
	 }

}







function validateCollege(){
   var x =document.forms["Resume"]["college"].value;
    if(x==null || x=="")
	{
		q="* Which college did you go to?";	
    	document.getElementById("err1").innerHTML= "<br>"+q;
		action=1;
	 }
	 
	 else
	 {
		 document.getElementById("err1").innerHTML= "<br>inNAN";
		 if(x.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("err1").innerHTML= "<br>Ok";
		 }
		 else
		 {
			 document.getElementById("err1").innerHTML= "<br>* Enter a valid college name";
			 action=1;
		 }
	 }        
}

function validateCourse(){
   var y =document.forms["Resume"]["course"].value;
    if(y==null || y=="")
	{
	w="* What course did you opted ?";	
    	document.getElementById("err2").innerHTML= "<br>"+w;
action=1;		
	 }else 
	 {
		 document.getElementById("err2").innerHTML= "<br>inNAN";
		 if(y.match(/^[a-z A-Z][^\d]+([a-z A-Z]*|[\d]|[\d]{2}|[\d]{3})$/))
		 {
			 document.getElementById("err2").innerHTML= "<br>Ok";
		 }
		 else
		 {
			 document.getElementById("err2").innerHTML= "<br>* Invalid Course Name";
		 action=1;
		 }
		 
	 }
		 
	 
                 
}

function validateStream(){
   var x =document.forms["Resume"]["stream"].value;
    if(x==null || x=="")
	{
	e="Which stream did you take?";	
    	document.getElementById("err3").innerHTML= "<br>"+e;
		action=1;
	}
	else 
	 {
		 if(x.match(/^[^\d]+$/))
		 {
			 document.getElementById("err3").innerHTML= "<br>Ok";
		 }
		 else
		 {
			 document.getElementById("err3").innerHTML= "<br>* Invalid Stream";
			 action=1;
		 }
		
	 }
}

function validateStartYear(){
   var x =document.forms["Resume"]["ssyear"].value;
    if(x==null || x=="")
	{
		r="* When you college started?";	
    	document.getElementById("err4").innerHTML= ""+r;
		action=1;
	}
	else 
	 {
		 if(x.match(/^[0-9]+$/)&& x.length==3)
		 {
			 document.getElementById("err4").innerHTML= "Ok";
		 }
		 else
		 {
			 document.getElementById("err4").innerHTML= "Invalid Year";
			 
		 }
		 
	 }
	
	
	
	
}