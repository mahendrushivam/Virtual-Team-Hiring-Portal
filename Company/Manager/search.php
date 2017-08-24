<?php 

include("dbconnect.php");
			mysqli_select_db($con,"minorproject");
			
			if(isset($_POST['string']))
			{
			$string = $_POST['string'];
			$arr=explode(",",$string);
			$length=count($arr);
			$count1=0;
			$users=[];
			for($i=0;$i<$length;$i++)
			{
		    $sql="select username from skills where skillname='$arr[$i]'";
			$result=mysqli_query($con,$sql);
			$count=mysqli_num_rows($result);
			
			while($count>0)
			{
				$row=mysqli_fetch_row($result);
				if(!in_array($row[0],$users))
				{
					$users[$count1]=$row[0];
					$count--;
					$count1++;
				}
				else
				{
					$count1--;
				}
	
			}
			}
			$string=implode(" ",$users);
			die($string);
			}
			
?>