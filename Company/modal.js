var arr = [0,0,0,0,0];

var modal = document.getElementById('modal1');
 var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function validatePassword()
{
 var x=document.getElementById("spass").value;
 var y=document.getElementById("rpass").value;

 if(x == y)
 {
	arr[4] = 1;
	$("#5").html("*");
 }
 else
 {   
	 $("#5").html("<br>* Password mismatch!");
 }	 
		
}
var x;
function validateN(x)
{
	if(x.length > 30)
	{
		
		$("#1").html("<br>* Exceeded max character limit! Allowed '30'");
		arr[1] = 0;
	}
	else
	{
		$("#1").html("*");
		arr[1] = 1; 
	}
	
}

function validateMe()
{
	var x=document.getElementById("tname").value;
	var y=document.getElementById("mname").value;
	var z=document.getElementById("mid").value;
	var a=document.getElementById("spass").value;
	var b=document.getElementById("rpass").value;
	var c=document.getElementById("1").innerHTML;
	var d=document.getElementById("2").innerHTML;
	var e=document.getElementById("3").innerHTML;
	var f=document.getElementById("5").innerHTML;
	
	if(x == "" || y == "" || z == "" || a == "" || b == "" || c.length > 1 || d.length > 1 || e.length > 1 || f.length > 1 )
	{
		alert("Some fields are missing or incorrectly filled!");
		event.preventDefault();
	}
	else
	{
		this.submit();
		this.display="none";
	}
}

function passwordStrength(password) {
	
     
	var desc = [{'width':'0px'}, {'width':'20%'}, {'width':'40%'}, {'width':'60%'}, {'width':'80%'}, {'width':'100%'}];
	
	var descClass = ['', 'progress-bar-danger', 'progress-bar-danger', 'progress-bar-warning', 'progress-bar-success', 'progress-bar-success'];

	var score = 0;

	//if password bigger than 6 give 1 point
	if (password.length > 6) score++;
     
	//if password has both lower and uppercase characters give 1 point	
	if ((password.match(/[a-z]/)) && (password.match(/[A-Z]/))) score++;

	//if password has at least one number give 1 point
	if (password.match(/[0-9]+/)) score++;

	//if password has at least one special caracther give 1 point
	if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) )	score++;

	//if password bigger than 12 give another 1 point
	if (password.length > 10) {score++;}
	
	switch(score){
    case 1:
        $("#jak_pstrength").text("weak").css({color: 'black'});
        break;
    case 2:
        $("#jak_pstrength").text("strong").css({color: 'black'});
        break;
	case 3:
        $("#jak_pstrength").text("VeryStrong").css({color: 'black'});
        break;
	case 4:
        $("#jak_pstrength").text("SuperStrong").css({color: 'black'});
        break;
	case 5:
        $("#jak_pstrength").text("Unbreakable").css({color: 'black'});
        break;
    default:
        $("#jak_pstrength").text("PasswordStrength").css({color: 'red'});
}
	
	// display indicator
	$("#jak_pstrength").removeClass(descClass[score-1]).addClass(descClass[score]).css(desc[score]);
}

