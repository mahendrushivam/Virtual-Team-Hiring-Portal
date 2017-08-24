<?php if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';
if(isset($_SESSION)){
$username=$_SESSION['username'];
echo $username;
}
?>



<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="jquery.multiselect.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.multiselect.js"></script>

<script>
$(document).ready(function(){


	  
	  $("#closetip").click(function(){$("#tip").css("display","none");});
	  $("#options").click(function(){$("#optionsdiv").css("display","inline");$(this).css("display","none");});
      $("#optionback").click(function(){$("#options").css("display","inline");$("#optionsdiv").css("display","none");});
      
	  $('#langOpt3').multiselect({
    columns: 1,
    placeholder: 'Choose from company employees',
    search: true,
    selectAll: true
});
					$('#langOpt1').multiselect({
					columns: 1,
					placeholder: 'Search results',
					});
 $("#searchgo").click(function() {
                var string1 = document.getElementById("felement5").value;
                
                $.post('search.php',{'string':string1},function(data)
					{
					x=data;
					var arr=x.split();
					var y = arr.length;
					alert(x);
					while(y>0)
					{
						var container=document.getElementById("sm");
						var z= document.createElement("option");
						z.setAttribute("value","anmol");
						var t = document.createTextNode("shivam");
						z.appendChild(t);
						container.appendChild(z);
						y--;
					}
                    
				});
 });




var SITE = SITE || {};
 
SITE.fileInputs = function() {
  var $this = $(this),
      $val = $this.val(),
      valArray = $val.split('\\'),
      newVal = valArray[valArray.length-1],
      $button = $this.siblings('.btn'),
      $fakeFile = $this.siblings('.file-holder');
  if(newVal !== '') {
    $button.text('Photo Chosen');
    if($fakeFile.length === 0) {
      $button.after('<span class="file-holder">' + newVal + '</span>');
    } else {
      $fakeFile.text(newVal);
    }
  }
};
	  
	  
$('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    var tmppath = URL.createObjectURL(event.target.files[0]);

    reader.onload = function (e) {
      $('#img-uploaded1').attr('src', e.target.result);
      $('input.img-path').val(tmppath);
						}

						reader.readAsDataURL(input.files[0]);
						}
					}

						$(".uploader").change(function(){
						readURL(this);
						}); 
  	
	
	
	



	
$(window).scroll(function () {
if ($(window).scrollTop() < 30) {
  $('#myTopnav1').css("opacity", 1);
  $('#myTopnav1').addClass('navbar-fixed');
}
    
if ($(window).scrollTop() > 30) {
  $('#myTopnav1').css( "opacity", 0.33); 
    }
});
	var SITE = SITE || {};
 
SITE.fileInputs = function() {
  var $this = $(this),
      $val = $this.val(),
      valArray = $val.split('\\'),
      newVal = valArray[valArray.length-1],
      $button = $this.siblings('.btn'),
      $fakeFile = $this.siblings('.file-holder');
  if(newVal !== '') {
    $button.text('Photo Chosen');
    if($fakeFile.length === 0) {
      $button.after('<span class="file-holder">' + newVal + '</span>');
    } else {
      $fakeFile.text(newVal);
    }
  }
};
	  
	  
$('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    var tmppath = URL.createObjectURL(event.target.files[0]);

    reader.onload = function (e) {
      $('#img-uploaded').attr('src', e.target.result);
      $('input.img-path').val(tmppath);
						}

						reader.readAsDataURL(input.files[0]);
						}
					}

						$(".uploader").change(function(){
						readURL(this);
						}); 
 	
});
</script>
  <script>
 var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
function ValidateImage(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
  </script>

</head>
<link rel="stylesheet" href="projects.css">
<link rel="stylesheet" href="manager.css">
<body>

<?php
// define variables and set to empty values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST['uplo']))
{  
		$image=addslashes($_FILES['proimg']['tmp_name']);
		$name=$_FILES['proimg']['name'];
		$image=file_get_contents($image);
		$image=base64_encode($image);
				  include('dbconnect.php');
					mysqli_select_db($con,'minorproject');
					$sql = "update companyteams set teampic='$image' where companyteams.username='$username'";
					$result = mysqli_query($con,$sql);
					if($result)
					{
					 echo '<script>alert("Success");</script>';	
					}
					else
					{
						echo '<script>alert("Failure");</script>';
					}
				 mysqli_close($con);
			}
		
	
	}
?>
<div id="main">
<div>
<ul class="topnav1" id="myTopnav1" >
 <li  style="margin-left:0px;margin-right:1px;"><a href="#" id="dashboardindividual">Website Name</a></li>
  <li class="active" style="margin-left:1px;margin-right:1px;"><a href="#Dash" id="dashboardindividual">Dashboard</a></li>
  <li style="margin-left:1px;margin-right:1px;" onclick="changecolor()"><a href="#" id="applicationindividual" >People</a></li>
  <li style="margin-left:1px;margin-right:1px;"><a href="#" id="invitesindividual">Invites</a></li>
  <li style="margin-left:1px;margin-right:1px;"><a href="#" id="jobsindividual">Projects</a></li>
   <li style="margin-left:1px;margin-right:1px;"><a href="#" id="jobsindividual">Work Desk</a></li> 
   <button id="butt1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="right:0px;margin-top:6px;margin-left:2px;margin-right:2px;position:fixed;"><span class="glyphicon glyphicon-plus"></span>  Add Project</button>
</ul>
</div>
<div style="width:100%;background-color:#283747;position:absolute;">
<p style="margin-left:10px;color:white;margin-top:50px;font-size:15px;">company name</p>
<form class="form-group" style="margin-top:-20px;" id="form1" name="searchform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div>
<input type="search" name="search1" class="form-control" placeholder="Search" style="width:300px;height:27px;margin-left:400px;"></input></div>
<span style="margin-left:50px;margin-top:-27px;margin-left:703px;position:absolute;"><button type="button" class="btn btn-default" style="background-color:#EAECEE;" ><span class="glyphicon glyphicon-search"></span></button></span>

</form>
</div>
<div id="dash" style="margin-top:104px;width:200px;height:100%;border-right:1px solid black;position:absolute;">
<img id="teamimage" src="http://placehold.it/200x200" data-toggle="modal" data-target="#myModal3"></img>
  </div>

<!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Profile pic</h4>
        </div>
        <div class="modal-body">
<form name="modalform" id="form2" enctype="multipart/form-data" name="searchform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="content">
    <div class="left">
    <input type="file" name="proimg" id="img-uploaded">	
	</div>
    <div class="right">
    <input id="path" type="text" class="img-path" placeholder="Image Path" style="border: 2px solid #eee;padding: 1em .25em;width: 96%;color: #999;border-radius: $base-radius;">
    <span class="file-wrapper">
    <input type="file" name="photo" id="imgInp" class="uploader" onchange="ValidateImage(this)" />
    <span id="uploader" class="btn btn-default" style="background-color:#5499C7;color:#fff;font-size:15px;">Upload Image</span>
    </span>
    </div>
    </div>


</div>
<div class="modal-footer">
<input type="Submit" name="uplo" style="background-color:#5499C7;color:#fff;font-size:15px;">Set as team picture</input>
</div>
</form>
</div>
</div>
</div>
</div>
<?php
include("dbconnect.php");
			mysqli_select_db($con,"minorproject");
			

				$sql="select teampic from companyteams where companyteams.username='$username'";
				$result=mysqli_query($con,$sql);
				$count=mysqli_num_rows($result);
				if($count>0)
				{echo $count;
					$row=mysqli_fetch_row($result);
					
					echo '<script>document.getElementById("teamimage").height="200";document.getElementById("teamimage").width="200";document.getElementById("teamimage").src="data:image;base64,'.$row[0].'";</script>';
				}
			    else
				{
					echo '<script>document.getElementById("teamimage").src="http://placehold.it/100x100";</script>';
				}
				
mysqli_close($con);
?>
<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Projects</h4>
        </div>
        <div class="modal-body">
          <div id="tip" style="border-radius:2px;width:574px;border:1px solid black;background-color:#EAECEE"><h5 style="font-size:17px;margin-left:8px;">Let's get you started with the projects<span id="closetip" class="close" style="float:right;fontsize:12px;margin-top:-9px;margin-right:4px;">&times;</span></h5><p style="margin-left:8px;">Type the name of your project and hit the return key. Don't worry about other options. You can change these and project name anytime afterwords.</p></div>
		<br>
		<form id="project" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " onsubmit="validateMe()">
		<div id="projectdetails" class="form-group" style="border-radius:2px;width:574px;border:1px solid gray;background-color:#EAECEE">
			<input id="felement1"name="projectname" type="text" class="form-control" placeholder="Da Vince Time machine"></input>
			
		</div>

		
		<div id="optionsdiv" style="border-radius:2px;width:574px;background-color:#EAECEE;display:none;">
				
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#mainoption">Description</a></li>
					<li><a data-toggle="tab" href="#menu1">Project picture</a></li>
					<li><a data-toggle="tab" href="#menu2">People</a></li>
					<li><a data-toggle="tab" href="#menu3">Date</a></li>
					<span id="optionback" class="close" style="float:right;fontsize:12px;">&times;</span>
				</ul>

  <div class="tab-content">
  <div id="mainoption" class="tab-pane fade in active">
     <textarea id="felement2" name="addinfo" rows="5" class="form-control" placeholder="Project Description" style="resize:none;" ></textarea>
   </div> 
	<div id="menu1" class="tab-pane fade">
      <h3>Upload Picture</h3>
   <div class="box">
    
    <div class="content">
    <div class="left">
    <img name="projectimage" id="img-uploaded1" src="http://placehold.it/100x100" alt="your image" height="100" width="197">	
    
	</div>
    <div class="right">
    <input id="path1" type="text" class="img-path" placeholder="Image Path" style="border: 2px solid #eee;padding: 1em .25em;width: 96%;color: #999;border-radius: $base-radius;">
    <span class="file-wrapper">
    <input type="file" name="photo" id="imgInp1" class="uploader" onchange="ValidateImage(this)" />
    <span id="uploader1" class="btn btn-default" style="background-color:#5499C7;color:#fff;font-size:15px;">Upload Image</span>
    </span>
    </div>
    </div>
	
  </div>
</div>
    <div id="menu2" class="tab-pane fade">
	  <h2 style="color:#CD6155">Who do you want to add in this project?</h2>
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
			<p style="font-size:15px;text-align:center">OR</p>
			<button id="searchmodal" type="button" class="btn btn-info btn-lg"  style="width:100%;text-align:center;"data-toggle="modal"  data-target="#myModal2">Search user from our database</button>
			
	
	
	
	</div>
    <div id="menu3" class="tab-pane fade">
      

	  
		<div class="dates-wrapper group" style="margin-top:15px;">
  
			<div class="field clearfix date-range-start date-wrapper">
					<div class="label">
					<label for="datepicker-start" style="font-size:16px">Start:</label>
					</div>
					<div class="input">
					<input class="input1" type="date" name="experience-start" id="datepicker-start" class="input-text" placeholder="dd/mm/yyyy">
					</div>
			</div>

			<div class="field clearfix date-range-start date-wrapper">
				<div class="label">
				<label for="datepicker-end" style="font-size:16px">End:</label>
				</div>
				<div class="input">
				<input class="input1" type="date" name="experience-end" id="datepicker-end" class="input-text" placeholder="dd/mm/yyyy">
				</div>
			</div>
  
		</div>
	  
	  
	    
    </div>
  </div>
</div>
			
</form>
<input id="options" type="button" class="btn btn-default" value="Options" style="background-color:#EAECEE;border-radius:2px;width:80px;">
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-default" data-dismiss="modal" style="float:left;margin-left:5px;background-color:#EDBB99;">Add Project</button>
        </div>
      </div>     
    </div>
  </div>

</div>

<div class="modal fade" id="myModal2" role="dialog">
			<div class="modal-dialog">
    
			<!-- Modal 2 content-->
			<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Search people for your project</h4>
			</div>
			<div class="modal-body">
		    <input name="usersearch" type="text" class="form-control" id="felement5" placeholder="Enter Skills you seek in your project mate"></input>	
			<select multiple id="langOpt1"></select>
			</div>
			<div class="modal-footer">
			 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			 <button id="searchgo" type="button" class="btn" style="background-image:url('search2.png');float:left;height:43px;width:43px;background-position:-2px -2px">
			</div>
			</div>
			</div>
			</div>




</body>
</html>