<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Multi-select Dropdown List with Checkbox by CodexWorld</title>
<link href="jquery.multiselect.css" rel="stylesheet" type="text/css">
<style>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</style>
</head>
<body>
<?php
include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select username from companyemployees";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>


<select name="langOpt3[]" multiple id="langOpt3">


<?php
		if($count>0)
		{
		
		 while($row=mysqli_fetch_row($result)){ 
               echo '<option value="'.$row[0].'">'.$row[0].'</option>'; 
		
				
		
		}
		}

?>
</select>





<script src="jquery.min.js"></script>
<script src="jquery.multiselect.js"></script>
<script>


$('#langOpt3').multiselect({
    columns: 1,
    placeholder: 'Select Team Members',
    search: true,
    selectAll: true
});


</script>
</body>
</html>