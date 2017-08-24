<html>
<head>
</head>

<?php

include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select  phonecode,country_name from country";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);


?>


<body>
<select name="phcode" class="phcode" id="phcode" style="margin-top:60px;width:60px;">
    <option value=""></option>
	<?php
        if($count > 0){
            while($row=mysqli_fetch_row($result)){ 
               echo '<option value="'.$row[0].'">'.$row[1]. '('.$row[0].')'.'</option>'; 
            }
        }
        ?>
</select>
</body>
</html>