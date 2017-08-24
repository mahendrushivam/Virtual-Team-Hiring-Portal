<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<body>
<?php
		include('dbconnect.php');
		mysqli_select_db($con,'minorproject');
		$sql1 = "select username from companyemployees where companyemployees.companyname='XYZ'";
		$result = mysqli_query($con,$sql1);
		$count = mysqli_num_rows($result);
		if($count < 1)
		{	
			echo "<script> $(\"#dialog2\").dialog();</script>";
			
		}
		else
		{echo "EXISTS!";}
		mysqli_close($con);		
?>
<div id="dialog2" title="NO EMPLOYEE FOUND !">
  
  <p style="text-align:center;">You currently have no employee! To search for the best fit employee, click on the icon below</p>
  
  <button id="Error1" style="height:75px;width:75px;background-image:url(png/search1.png);background-position:-7px -7px;border-radius:9px;"></button>
</div>
</body>
</html>
