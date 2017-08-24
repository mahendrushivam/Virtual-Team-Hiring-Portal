<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<script src="assets/jquery-3.1.1.min.js"></script>   
		<script src="assets/location.js"></script> 
<script src="js/jquery.min.js"></script>
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script> 
<?php
    //Include database configuration file
    include('dbconnect.php');
    if(!$con)
							{
								die('could not connect'.mysqli_connect_error());
							}
							mysqli_select_db($con,"minorproject");
    //Get all country data
    $sql = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
    $result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
    //Count total number of rows
    
    ?>


      
<link href="css/step2.css" rel="stylesheet">
</head>
<body style="background :linear-gradient(to bottom right, white, #D7CEC7)">

<div class="head">
  <h3 style="color:white; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height:48px; margin:0; text-align:right;">Step 2</h3></br>
  </div>
  <hr style="border-color:TAN;border-style:solid;border-width:4.5px;margin-top:0px">
<div class="section" >
<br>
<h1 align="center" style="font-family: 'Inder',sans-serif;line-height:28px;margin-bottom:15px;color: #76323F;font-size:32px">Create an account</h1>
 <div class="formm">

<form>
  
  <p>
  <h4 align="left" style="color:white;padding:0px 0px 0px 0px;margin:0px 0px 0px 62px;margin-top:30px;font-size:20px">Gender :</h4>
  <div style="margin-top:-25px">
  <input type="radio"  name="gender" value="male" id="rd1" checked align="center" style="height:4%;width:4%;margin-right:5px;margin-left:60px"> <b style="color:white;font-size:15px; margin-right:20px" >Male</b>
  <input type="radio"  name="gender" value="female" id="rd1" align="center"style="height:4%;width:4%;margin-right:5px"> <b style="color:white;font-size:15px"> Female</b><br></p>
  </div>
  <hr align="center" style="margin-left:50px;margin-right:50px;border-color:orange;border-width:2.5px border-style:solid">
  <h4 align="left" style="color:white;padding:0px 0px 0px 0px;margin:0px 0px 0px 62px;margin-top:30px;font-size:20px">Date of Birth :</h4>
  <select name="DOBDay" class="button1" id="s1" style="padding:12px 12px;height:10%;width:19%" align="left">
	<option> Day </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>
<select name="DOBMonth" id="s2" class="button1" style="padding:12px 12px;height:10%;width:30%">
	<option> Month </option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>

	</select>
  
  <select name="DOBYear" id="s3" class="button1" style="padding:12px 12px;height:10%;width:22%">
	<option> Year </option>
	<option value="1993">2016</option>
	<option value="1993">2015</option>
	<option value="1993">2014</option>
	<option value="1993">2013</option>
	<option value="1993">2012</option>
	<option value="1993">2011</option>
	<option value="1993">2010</option>
	<option value="1993">2009</option>
	<option value="1993">2008</option>
	<option value="1993">2007</option>
	<option value="1993">2006</option>
	<option value="1993">2005</option>
	<option value="1993">2004</option>
	<option value="1993">2003</option>
	<option value="1993">2002</option>
	<option value="1993">2001</option>
	<option value="1993">2000</option>
	<option value="1993">1999</option>
	<option value="1993">1998</option>
	<option value="1993">1997</option>
	<option value="1993">1996</option>
	<option value="1993">1995</option>
	<option value="1993">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1947">1946</option>
	<option value="1947">1945</option>
	<option value="1947">1944</option>
	<option value="1947">1943</option>
	<option value="1947">1942</option>
	<option value="1947">1941</option>
	<option value="1947">1940</option>
</select>
<br>
<!--<div class="button">-->
<select name="country" class="countries" id="country" style=" background-color: #50394c;
    border: none;
    color: white;
    padding: 20px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 8px 8px;
    cursor: pointer;
	border-radius:10px;
	transition-duration: 0.4s;">
    <option value="">Select Country</option>
	<?php
        if($count > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
</select>
<select name="state" class="states" id="state" style=" background-color: #50394c;
    border: none;
    color: white;
    padding: 20px 40px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 8px 8px;
    cursor: pointer;
	border-radius:10px;
	transition-duration: 0.4s;">
     <option value="">Select State</option>
</select><br>
<select name="city" class="cities" id="city" style=" background-color: #50394c;
    border: none;
    color: white;
    padding: 20px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 8px 8px;
    cursor: pointer;
	border-radius:10px;
	transition-duration: 0.4s;">
   <option value="">Select City</option>
</select>
</div>
 </form>
  
  <input type="button" class= "button"id="btn1" value="Next"  align="right"style="margin-top: 0px;">
 
 

  </div>


 </body>
</html>
