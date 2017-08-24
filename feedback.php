<?php if (session_status() == PHP_SESSION_NONE)
session_start();


?>

<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	
	#feedback {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:82%;
}

	#feedback th {
    border: 1px solid #ddd;
    padding: 8px;
	font-size:18px;
	
}
#feedback tr{
	height:50px;
}

#feedback tr:nth-child(even){background-color: #f2f2f2;}

#feedback tr:hover {background-color: #ddd;}

#feedback th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #333;
    color: white;
	font-size:18px;
	
	width:162px;
}


		#snackbar {
    visibility:hidden; 
    min-width:65%; 
    margin-left:350px; 
    background-color: #333; 
    color: #fff; 
    border-radius: 5px; 
    padding: 16px; 
    position:fixed; 
	height:80px;
    z-index: 1;
    left: 0%; 
    bottom: 10px; 
}

.modal {
    display:none; 
    position: fixed;
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.95);
}


#snackbar.show {
    visibility: visible; 
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}


@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
	</style>
	<script type="text/javascript">
			function deletefeedback(id)
			{
				$(document).ready(function() {
				$.post('feedbackdetails.php', 
					{'feedbackid':id}, 
						function(data) {
						window.location.href='admin.php?path=3';
					});
    
				});
			}
			
			function replyfeedback(id)
			{
			
				window.location.href='feedback.php?replyid='+id;
			
				
			}
			function closemodal()
			{
			
				window.location.href='admin.php?path=31';
			
				
			}
			
			
	</script>
	</head>
	<body>
	<?php
	include("dbconnect.php");
	mysqli_select_db($con,"minorproject");
	$sql="select * from feedback";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	
	?>
	<table id="feedback" style="margin-top:1px;width:100%;">
		
				<tr style="border-top:2px solid white;">
				<th style="width:10%"> S.no </th>
				<th style="width:18%"> Name </th>
				<th style="width:24%"> Emailid </th>
				<th style="width:36%"> Subject</th>
				<th style="border:0px;width:12%"> </th>
				</tr>
				
				<?php
				$countfeedback=1;
				if($count>0)
				{
				while($count>0)
				{	$row=mysqli_fetch_row($result);
					?>
					<tr>
					<td style="width:10%;text-align:center;"> <?php echo $countfeedback; ?></td>
					<td style="width:18%;"><?php echo $row[1]; ?> </td>
					<td style="width:24%;"> <?php echo $row[2]; ?> </td>
					<td style="width:36%;"><?php echo $row[3]; ?> </td>
					<td style="width:12%;">
							<a href="javascript:replyfeedback(<?php echo $row[0]; ?>)">
							<span class="glyphicon glyphicon-eye-open" style="padding-right:10px;cursor:pointer;" id="viewfeedback" ></span> 
							</a>
							<a href="javascript:replyfeedback(<?php echo $row[0];?>)">
							<span class="glyphicon glyphicon-folder-open" style="padding-right:10px;cursor:pointer;" id="replyfeedback"> </span>
							</a>
													
							<a href="javascript:deletefeedback(<?php echo $row[0];?>)">
							<span class="glyphicon glyphicon-trash" style="cursor:pointer;"id="deletefeedback"></span>
							</a>
					</td>
					<?php
					$count--;
					$countfeedback++;
					
				}
				}
				else
				{
					?>
					<tr>
					<td> </td>
					<td style="font-size:16px;"><?php echo "No feedback present"?> </td>
					<td>  </td>
					<td></td>
					<td></td>
					</tr>
					<?php
					
				}
				?>
			
</table>

<div id="snackbar"><img src="images/feedback1.png" style="float:left;margin-top:-15px;"> </img><p id="message" style="font-size:20px;padding-left:30px;color:#E2EAF1">Some text some message..</p></div>			
	</body>
	<div class="modal" id="feedbackinfo" role="dialog">
	
	<div class="modal-dialog">
	<div class="modal-content">
		
		<div class="modal-body" style="margin:0px;padding:0px;border:18px double #50708E ">
		<div class="upperdiv" style="background-color:#333;height:110px;color:white;padding-top:5px">
		<p style="font-size:18px;padding-left:50px;border-bottom: 1px dotted gray;height:35px;color:#98A6B4 ;" id="from" > from    :  </p>
		<p style="font-size:18px;padding-left:30px;border-bottom: 1px dotted gray;color:#98A6B4;" id="subject">subject    : </p>
		<p style="font-size:18px;padding-left:50px;color:#98A6B4;" id="date" > date    :  </p>
	
		</div>
		<div class="contentmail" style="background-color:#9EADBB;height:300px;margin-top:0px;width:100%;" >
		<p style="font-size:16px;line-spacing:14px;margin-right:100px;margin-left:30px;padding-top:40px;width:85%;word-wrap: break-word;" id="mailcontent" > </p></div>
		<div class="modal-footer" style="background-color:#333;">
		
							<a href="#" id="viewfeed">
							<span class="glyphicon glyphicon-folder-open" style="padding-right:10px;paddingcursor:pointer;font-size:18px;" id="viewfeedback"> Reply </span>
							</a>
													
							<a href="#" id="deletefeed">
							<span class="glyphicon glyphicon-trash" style="cursor:pointer;font-size:18px"id="deletefeedback"> Delete</span>
							</a>
							<a href="javascript:closemodal()">
							<span class="glyphicon glyphicon-remove" style="cursor:pointer;font-size:18px;padding-left:5px" id="deletefeedback">Close</span>
							</a>
		</div>
		</div>
		</div>
	</div>
</html>
<?php 

	if(isset($_GET['del']))
	{
	if($_GET['del']==1)
	{
		echo '<script>';
		echo 'var x = document.getElementById("snackbar");
		document.getElementById("message").innerHTML="Your selected feedback has been deleted successfully!";
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);';
		echo '</script>';
	}
	
}
?>
<?php
if(isset($_GET['replyid']))
{
include("dbconnect.php");
mysqli_select_db($con,"minorproject");
$sql="select * from feedback where id=".$_GET['replyid'];
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count==1)
{
	$row=mysqli_fetch_row($result);
	echo '<script>';
	echo 'document.getElementById("from").innerHTML+="'.$row[2].'";';
	echo 'document.getElementById("subject").innerHTML+="'.$row[3].'";';
	echo 'document.getElementById("date").innerHTML+="'.$row[5].'";';
	echo 'document.getElementById("mailcontent").innerHTML+="'.$row[4].'";';
	echo 'document.getElementById("feedbackinfo").style.display="block";';
	echo '$("a#viewfeed").attr("href", "javascript:replyfeedback('.$row[0].')");';
echo '$("a#deletefeed").attr("href", "javascript:deletefeedback('.$row[0].')");';
		echo '</script>';
		mysqli_close($con);
}


}

?>