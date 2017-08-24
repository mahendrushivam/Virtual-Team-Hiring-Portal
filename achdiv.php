

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>

body{
	
	overflow:auto;
}


	
	.content1 {
    position: fixed;
    background-color: #fefefe;
    margin:100px 0px 0px 100px;
    padding-top: 0px;
    width: 50%;
    height:68%;
	 border: 1px solid #272322;
	border-radius: 10px;
	box-shadow: 0 2px 18px 1px rgba(0,0,0,0.6),0 10px 24px 0 rgba(0,0,0,0.35);
    
	}




.header {
    padding: 2px 16px;
    background-color: #03101E  ;
	border-top: 1px solid #272322;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
    color: white;
	height:28%;
}

.inp1{
	
	padding:2px 0px 0px 40px;
	font-family: "Times New Roman", Times, serif;
	font-size:16px;
}


	
.divv{
	margin-top:1px;
	
}


.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
	background-color:#181818;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

#ach {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:90%;
	padding-left:40px;
	margin-top:10px;
	margin-left:25px;
	position:relative;
}

	
#ach td{
	padding:7px;
	width:100px;
}




.achbutton
{width:100px;
border-radius: 8px;
background-color:#181818;
height:43px;
color:#AEB6BF;
font-size:17px;
cursor:pointer;
margin-bottom:0px;
left:20%;
margin-top:-25px;
margin-left:40px;
}



</style>
</head>
<body>
<div class="content1">
    <div class="header" >
	
	
 <img src="medal1.png" alt="Person" width="86" height="76" style="margin-top:30px;">     
      <h2 style="padding-left:100px;margin-top:-50px;">Acheivements</h2>
</div>
<table border="0" id="ach" style="">
<tr class="card" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="trophy.png" alt="Achievement Icon" width="100" style=""></td>
 <td style="padding-left:0px;width:60%;">
    <p style="font-size:22px;line-height:28px;color:#AEB6BF"> Achievement Name ::<br>
   About ::shdjashjaksdkajsd
   sadada
   dasdasd
   sda<br>
      Year ::</p>
  </td>
  <td style="width:40%;">
  <a href="#" style="text-decoration:none" >  <p class="achbutton"> <span class="glyphicon glyphicon-pencil" style="font-size:18px;margin-top:0px;margin-left:50px;"></span></p> </a>
   <a href="#" style="text-decoration:none" ><p class="achbutton" style="margin-top:-3px;"><span class="glyphicon glyphicon-trash" style="font-size:18px;margin-top:0px;margin-left:50px;"></span> </p> </a>
  </div></td>

</tr>
<tr class="card" style="border-collapse: collapse;" border="0">
  <td style="width:14%"><img src="trophy.png" alt="Achievement Icon" width="100" style=""></td>
 <td style="padding-left:0px;width:60%;">
    <p style="font-size:22px;line-height:28px;color:#AEB6BF"> Achievement Name ::Hackathon<br>
   About ::shdjashjaksdkajsd
   sadada
   dasdasd
   sda<br>
      Year ::</p>
  </td>
  <td style="width:40%;">
  <a href="#" style="text-decoration:none" >  <p class="achbutton"> <span class="glyphicon glyphicon-pencil" style="font-size:18px;margin-top:0px;margin-left:50px;"></span> </p> </a>
   <a href="#" style="text-decoration:none" ><p class="achbutton" style="margin-top:-3px;"><span class="glyphicon glyphicon-trash" style="font-size:18px;margin-top:0px;margin-left:50px;"></span></p> </a>
  </div></td>

</tr>
</table>
</div>
</body>
</html>