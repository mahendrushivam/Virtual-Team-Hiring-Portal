<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
$(document).ready(function()
{
	$("#dialog").dialog({closeText: 'Close',
				  resizable: false,
				  width: 255,
				  height:170,
				  modal:true,
	});
});
</script>
<script>
function redirect1()
{
	window.location.href= "try.php";
} 
</script>
</head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<body>
<div id="dialog" title="SUCCESSFULL">
  
  <p style="margin-top:-2px;"> Team created successfully!<br><br>Would you like to make another!</p>
  <input type="button"value="YES" onclick="redirect1()" style="border-radius:4px;width:100px;position:absolute;"></input>
  <input type="button" value="NO" onclick="redirect2()" style="margin-left:120px;border-radius:4px;width:100px;position:absolute;"></input>
</div>
</body>
</html>