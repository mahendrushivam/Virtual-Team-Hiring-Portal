<!DOCTYPE.html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="fform1.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
$nameErr = $placeErr = $cityErr = $stateErr = $syearErr = $eyearErr= $fieldErr=$ainfoErr="";
$name = $place = $city = $state = $syear = $eyear= $field= $ainfo="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "What's your course name??";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["place"])) {
    $placeErr = "What's your Organization Name??";
  } else {
    $place = test_input($_POST["place"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$place)) {
      $placeErr = "Only letters and white space allowed"; 
    }
  }
    
  if (empty($_POST["city"])) {
    $cityErr = "What's your city??";
  } else {
    $city = test_input($_POST["city"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      $cityErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["state"])) {
    $stateErr = "What's your state??";
  } else {
    $state = test_input($_POST["state"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
      $stateErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["syear"])) {
    $syearErr = "What's your starting year of internship??";
  } else {
    $syear = test_input($_POST["syear"]);
     if (!preg_match("/^[0-9 ]*$/",$syear)) {
      $syearErr = "Only numerics are allowed"; 
    }
  }
  
   if (empty($_POST["eyear"])) {
    $eyearErr = "What's your ending year of internship??";
  } else {
    $eyear = test_input($_POST["eyear"]);
     if (!preg_match("/^[0-9 ]*$/",$eyear)) {
      $eyearErr = "Only numerics are allowed"; 
    }
  }
 

 if (empty($_POST["field"])) {
    $fieldErr = "What's your field??";
  } else {
    $field = test_input($_POST["field"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$field)) {
      $fieldErr = "Only letters and white space allowed"; 
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
  <h3 style="color:white; font-size:250%;font-family:Tahoma, Geneva, sans-serif; text-align:left;letter-spacing: 2px;">Internship</h3></br>
  </div>

  <div class="formm">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
  <input type="text" id="name" name="name" placeholder="Course Name" value="<?php echo $name;?>>
  <span class="error">* <?php echo $nameErr;?></span>
  </br>
  
   <input type="text" id="place" name="place" placeholder="Place/Organization" value="<?php echo $place;?>>
   <span class="error">* <?php echo $placeErr;?></span>
   </br>
  <input type="text" id="city" name="city" placeholder="City" value="<?php echo $city;?>>
  <span class="error">* <?php echo $placeErr;?></span>
  </br>
  <input type="text" id="state" name="state" placeholder="State" value="<?php echo $state;?>>
  <span class="error">* <?php echo $stateErr;?></span>
  </br>
  <input type="text" id="syear" name="syear" placeholder="Start Year" value="<?php echo $syear;?>>
  <span class="error">* <?php echo $syearErr;?></span>
  </br>
  <input type="text" id="eyear" name="eyear" placeholder="End Year" value="<?php echo $eyear;?>>
  <span class="error">* <?php echo $eyearErr;?></span>
  </br>
  <input type="text" id="field" name="field" placeholder="Field" value="<?php echo $field;?>>
  <span class="error">* <?php echo $fieldErr;?></span>
  </br>
  <textarea name="message" rows="5" cols="40" placeholder="Add Information" value="<?php echo $ainfo;?>>
</textarea>
<span class="error">* <?php echo $ainfoErr;?></span>
</br>
  <input type="submit" id="btn1" value="Submit">
   <input type="reset" id="btn2" value="Reset">
   
  </form>

  </div>

  </body>

 </html>