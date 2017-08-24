<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<style>
.card1
{
	height:200px;
	width:250px;
	background-color:#99A3A4;
	border-radius:9px;
	margin-top:72px;
	}
.card1:hover {
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
	margin-top: -5px;
}
.img1
{
	height:114px;
	width:114px;
	border-radius:200px;
	background-color:#ECF0F1;
	margin-top:-185px;
	margin-left:68px;
	position:absolute;
	
}
.btn{
	border-radius:4px;
	margin-top:18px;
	margin-left: 33px;
	height:30px;
	width:90px;
	position:absolute;	
	shadow: 4px;
}
.btn:focus{
	border-color:#AEB6BF;
}
.text1{
	font-family:"Gill Sans Extrabold", Helvetica, sans-serif;
	font-size:19px;
	color:black;	
	margin-top:55px;
	text-align:center;
	position:relative;
	
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<body>

<div id="main">
<div id="submain" style="display:none;">
<div id="div1" name="div1" class="card1">
<br>
<p id="username" name="username" class="text1" style="text-align:center">Anmol</p>
<p id="jobtitle" name="jobtitle" style="text-align:center;font-size:18px;color:white;margin-top:-20px;">android developer</p>
<img class="img1" src="png/employee-default.png">
</img>
<input type="button" id="btn1" class="btn" value="View Profile">
<input id="btn2" class="btn" type="button" style="margin-left:140px;" value="Contact">
</div>
</div>

<div id="dialog2" title="NO EMPLOYEE FOUND !" style="display:none;">
  
  <p style="text-align:center;">You currently have no employee! To search for the best fit employee, click on the icon below</p>
  
  <button id="Error1" style="height:75px;width:75px;background-image:url(png/search1.png);background-position:-7px -7px;border-radius:9px;"></button>
</div>
<table id="main2">
</table>



<p id="try"></p>
</div>
<?php 
include('dbconnect.php');
mysqli_select_db($con,'minorproject');
$sql1 = "select username from companyemployees where companyemployees.companyname='rupal karyani'";
$sql2 = "select jobtitle from companyemployees where companyemployees.companyname='rupal karyani'";
$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
$count1 = mysqli_num_rows($result1);
$count2 = mysqli_num_rows($result2);
$employees = array();
$jobtitle = array();
$i=0;
$p=$count1;
$q=$count2;
while($p>0){
  $row =  mysqli_fetch_row($result1);
  $employees[$i] = $row[0];
  $i++;
  $p--;
}
$j=0;
while($q>0){
  $row =  mysqli_fetch_row($result2);
  $jobtitle[$j] = $row[0];
  $j++;
  $q--;
}

		if($count1 < 1)
		{	
			echo "<script> $(\"#dialog2\").dialog();</script>";
			
		}
		else
		{		

			echo '<script> var container1,container2,container3,container4,count=1;
			container1 = document.getElementById("main"); 
			container2 = document.getElementById("main2");
		    </script>';
			
			while($count1 > 0)
			{		
				$temp = $count1-2;	
				if(($temp) >= 0)
				{
					echo '<script>container3 = document.createElement("tr");container3.style="height:400px;width:400px;"</script>';
					while($count1>$temp)
					{
					 
					 
					  echo '<script>
				      container4 = document.createElement("td"); 
					  var y = document.createElement("div");
					  y.id="division"+count;
					  y.style="	height:200px;width:250px;background-color:#99A3A4;border-radius:9px;margin-top:40px;margin-right:88px;";
					  var a = document.createElement("p");
					  var b = document.createElement("p");
					  var c = document.createElement("img");
					  var d = document.createElement("input");
					  var e = document.createElement("input");
					  var f = document.createElement("br");
					  a.id= "fpara"+count;
					  a.style="font-family:\'Gill Sans Extrabold\', Helvetica, sans-serif;font-size:19px;color:black;margin-top:55px;text-align:center;position:relative";
					  b.id="spara"+count;
					  b.style="text-align:center;font-size:18px;color:white;margin-top:-20px;";
					  c.id="image"+count;
					  c.style="height:114px;width:114px;border-radius:200px;background-color:#ECF0F1;margin-top:-185px;margin-left:68px;position:absolute"; 
					  c.src="png/employee-default.png";
					  d.type="button";
					  d.id="fbtn"+count;
					  d.style="border-radius:4px;margin-top:18px;margin-left: 33px;height:30px;width:90px;position:absolute;shadow: 4px";					  
					  d.value="View Profile";
					  e.id="sbtn"+count; 
					  e.style="	border-radius:4px;margin-top:18px;margin-left: 140px;height:30px;width:90px;position:absolute;shadow: 4px"; 
					  e.type="button";  
					  e.value="Contact";
					  a.innerHTML ="'.$employees[$count1-1].'";
					  b.innerHTML ="'.$jobtitle[$count1-1].'";
					  y.appendChild(f);
					  y.appendChild(a);
					  y.appendChild(b);
					  y.appendChild(c);
					  y.appendChild(d);
					  y.appendChild(e);
					  a.innerHTML ="'.$employees[$count1-1].'";
					  b.innerHTML ="'.$jobtitle[$count1-1].'";
					  container4.appendChild(y);
					  container3.appendChild(container4);
                      count++;					  
					  </script>';
					  
					  $count1 = $count1 - 1;
					  
					}
					echo '<script>container2.append(container3);</script>';
				}
				else
				{
					
					
					  echo '<script>
					  container3 = document.createElement("t3");
				      container4 = document.createElement("td"); 
					  var y = document.createElement("div");
					  y.id="division"+count;
					  y.style="	height:200px;width:250px;background-color:#99A3A4;border-radius:9px;margin-top:40px;margin-right:88px;";
					  var a = document.createElement("p");
					  var b = document.createElement("p");
					  var c = document.createElement("img");
					  var d = document.createElement("input");
					  var e = document.createElement("input");
					  var f = document.createElement("br");
					  a.id= "fpara"+count;
					  a.style="font-family:\'Gill Sans Extrabold\', Helvetica, sans-serif;font-size:19px;color:black;margin-top:55px;text-align:center;position:relative";
					  b.id="spara"+count;
					  b.style="text-align:center;font-size:18px;color:white;margin-top:-20px;";
					  c.id="image"+count;
					  c.style="height:114px;width:114px;border-radius:200px;background-color:#ECF0F1;margin-top:-185px;margin-left:68px;position:absolute"; 
					  c.src="png/employee-default.png";
					  d.type="button";
					  d.id="fbtn"+count;
					  d.style="border-radius:4px;margin-top:18px;margin-left: 33px;height:30px;width:90px;position:absolute;shadow: 4px";					  
					  d.value="View Profile";
					  e.id="sbtn"+count; 
					  e.style="	border-radius:4px;margin-top:18px;margin-left: 140px;height:30px;width:90px;position:absolute;shadow: 4px"; 
					  e.type="button";  
					  e.value="Contact";
					  a.innerHTML ="'.$employees[$count1-1].'";
					  b.innerHTML ="'.$jobtitle[$count1-1].'";
					  y.appendChild(f);
					  y.appendChild(a);
					  y.appendChild(b);
					  y.appendChild(c);
					  y.appendChild(d);
					  y.appendChild(e);
					  a.innerHTML ="'.$employees[$count1-1].'";
					  b.innerHTML ="'.$jobtitle[$count1-1].'";
					  container4.appendChild(y);
					  container3.appendChild(container4);
					  container2.append(container3);
                      count++;
					  </script>';
					$count1--;
				}
				
			}
			
		}
		mysqli_close($con);	
?>
</body>
</html>