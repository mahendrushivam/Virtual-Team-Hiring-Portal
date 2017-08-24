
<?php $username='shivam';?>
<html>
<head>
<style>
#application {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:100%;
}

	#application th {
    border: 1px solid #ddd;
    padding: 8px;
	font-size:16px;
	
}
#application td{
	padding:7px;
	width:100px;
}

#application tr:nth-child(even){background-color: #f2f2f2;}

#application tr:hover {background-color: #ddd;}

#application th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #333;
    color: white;
	width:100px;
}
</style>

</head>
<body>

	<table id="application" style="margin-left:20px">
			
				<tr style="border-top:2px solid white;">
				<th> S.no </th>
				<th> Job Title</th>
				<th> Company Name </th>
				<th> Project name</th>
				<th> Application Status </th>
				
				
				</tr>
				
				
				<?php
				$countapplications=1;
				include("dbconnect.php");
				$sql="select * from applicationsindividual where username='$username'";
				mysqli_select_db($con,"minorproject");
				$res=mysqli_query($con,$sql);
				$count=mysqli_num_rows($res);
				if($count>0)
				{
					?> <tr>
								<td><p><?php echo $countapplications; ?> </p> </td>
								<td><p><?php echo $row[4]; ?> </p> </td>
								<td> <p><?php echo $row[2]; ?></p></td>
								<td> <p><?php echo $row[3]; ?></p></td>
								<td> <p><?php echo $row[5]; ?></p></td>
								</tr>
				<?php	         $countapplications++;
				
				}
				else
				{
				?>
							<tr>
							<td> </td>
							<td > No records present </td>
							<td></td>
							<td></td>
							<td></td>
							</tr>
						<?php }
						
					
				?>
	</table>
</body>
</html>