<html>
<head>

<script type="text/javascript">

$(document).ready(function(e) {
   $('.has-sub').click(function(){
		$(this).toggleClass('tap');
	});
});
</script>
</head>
<?php
include("dbconnect.php");
mysqli_select_db();
$sql="select categoryname from categories";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

?>
<body>
<form>
<select name="categories" class="categories" id="categories">

</select>
</form>


</body>
</html>
