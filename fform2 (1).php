<!DOCTYPE.html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="fform2.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
$collegeErr = $courseErr = $streamErr = $ssyearErr = $eeyearErr = $ainfoErr = "";
$college = $course = $stream = $ssyear = $eeyear = $ainfo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["college"])) {
    $collegeErr = "What's your college name??";
  } else {
    $college = test_input($_POST["college"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$college)) {
      $collegeErr = "Only letters and white space allowed"; 
    }
  }
  
 if (empty($_POST["course"])) {
    $courseErr = "What's your course name??";
  } else {
    $course = test_input($_POST["course"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$college)) {
      $courseErr = "Only letters and white space allowed"; 
    }
  }

 if (empty($_POST["stream"])) {
    $streamErr = "What's your stream name??";
  } else {
    $stream = test_input($_POST["stream"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$stream)) {
      $streamErr = "Only letters and white space allowed"; 
    }
  } 
 
 if (empty($_POST["ssyear"])) {
    $ssyearErr = "What's your starting year of college??";
  } else {
    $ssyear = test_input($_POST["ssyear"]);
     if(strlen($ssyear)!=4)
   $ssyearErr="Starting year must contain 4 digits";
	 if (!preg_match("/^[0-9 ]*$/",$ssyear)) {
      $ssyearErr = "Only numerics are allowed"; 
    }
  }
  
   if (empty($_POST["eeyear"])) {
    $eeyearErr = "What's your ending year of college??";
  } else {
    $eeyear = test_input($_POST["eeyear"]);
     if(strlen($eyear)!=4 && ($eeyear<=$ssyear))
   $eeyearErr="Ending year must contain 4 digits and it must be greater than Starting year";
	 if (!preg_match("/^[0-9 ]*$/",$eeyear)) {
      $eeyearErr = "Only numerics are allowed"; 
    }
  }
   
   
   if (empty($_POST["ainfo"])) {
    $ainfoErr = "Please give some more details about your internship ";
  } else {
    $ainfo = test_input($_POST["ainfo"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="head">
  <h3 style="color:white;font-size:250%; font-family: Times New Roman, Times, serif; text-align:left;">Graduation</h3></br>
  </div>

  <div class="formm">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
  <input type="text" id="college" name="college" placeholder="College" value="<?php echo $college;?>">
  <span class="error">* <?php echo $collegeErr;?></span>
  </br>
   <input type="text" id="course" name="course" placeholder="Course" value="<?php echo $course;?>">
   <span class="error">* <?php echo $courseErr;?></span>
   </br>
  <input type="text" id="stream" name="stream" placeholder="Stream" value="<?php echo $stream;?>">
  <span class="error">* <?php echo $streamErr;?></span>
  </br>
  <input type="text" id="ssyear" name="ssyear" placeholder="Start Year" value="<?php echo $ssyear;?>">
  <span class="error">* <?php echo $ssyearErr;?></span>
  </br>
  <input type="text" id="eeyear" name="eeyear" placeholder="End Year" value="<?php echo $eeyear;?>">
  <span class="error">* <?php echo $eeyearErr;?></span>
  </br>
  <textarea name="message" rows="5" cols="40" placeholder="Add Information" value="<?php echo $ainfo;?>">
</textarea>
<span class="error">* <?php echo $ainfoErr;?></span>
</br>
  <input type="submit" id="btn1" value="Submit">
  <input type="reset" id="btn2" value="Reset">
   
  </form>

  </div>

  </body>

 </html>