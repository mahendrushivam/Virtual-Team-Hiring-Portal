<html lang="en">
  <head>
    
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
                    $('#city').html('<option value="">Select City</option>'); 
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
					var value=$('#city').value();
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
			
        }
    });
});

$(document).ready(function(){
$('#day').on('change',function(){
        var day = $(this).val();
        if(day!=''){
            var month=$("#month").find('option:selected').val();
			var year=$("#year").find('option:selected').val();
			if(month=='' || year=='')
			{
				
				var popup = document.getElementById('indopupmenu');
				document.getElementById('indopupmenu').style.visibility="visible";
				popup.classList.toggle('show');   
				popup.innerHTML="Please select DOB properly";
			}
			else{
				document.getElementById('indopupmenu').style.visibility="hidden";
				popup.classList.toggle('close');
				popup.innerHTML="noerror";
				}
		}
    });
});

$(document).ready(function(){
$('#month').on('change',function(){
        var day = $(this).val();
        if(month!=''){
            var day=$("#day").find('option:selected').val();
			var year=$("#year").find('option:selected').val();
			if(day=='' || year=='')
			{
				
				var popup = document.getElementById('indopupmenu');
				document.getElementById('indopupmenu').style.visibility="visible";
				popup.classList.toggle('show');   
				popup.innerHTML="Please select DOB properly";
			}
			else{
				document.getElementById('indopupmenu').style.visibility="hidden";
				popup.classList.toggle('close');
				popup.innerHTML="noerror";
				}
		}
		
    });
});

$(document).ready(function(){
$('#year').on('change',function(){
        var year = $(this).val();
        if(year!=''){
            var day=$("#day").find('option:selected').val();
			var month=$("#month").find('option:selected').val();
			if(day=='' || month=='')
			{
				
				var popup = document.getElementById('indopupmenu');
				document.getElementById('indopupmenu').style.visibility="visible";
				popup.classList.toggle('show');   
				popup.innerHTML="Please select DOB properly";
			}
			else
			{
				document.getElementById('indopupmenu').style.visibility="hidden";
				popup.classList.toggle('close');
				popup.innerHTML="noerror";
				}
		}
    });
});


$(document).ready(function(){
        $("#next").click(function(){
        	var gender = $("input[name='gender']:checked").val();
			var day = $("#day").find('option:selected').val();
			var month = $("#month").prop('selectedIndex');
			var year = $("#year").find('option:selected').val();
			var city = $("#city").find('option:selected').val();
			var state = $("#state").find('option:selected').val();
			var country = $("#country").find('option:selected').val();
			var pop1= $("#indopupmenu").text();
			if(day!='' && month!=0 && year!='')
			{var pop1="noerror";
		
			}
			
			
			var dataString ='gender='+gender +'&country='+country+'&state='+state+'&city='+city+'&day='+day+'&month='+month+'&year='+year+'&pop1='+pop1;
			$.ajax({
                type:'POST',
                url:'step2ajax.php',
                data:dataString,
                error: function(data) {
                successmessage = 'Error';
                alert(successmessage);
            },
            success: function(data) {
				window.location.href="signstep2.php?step=3";
                
            }
            }); 
});
});

$(document).ready(function(){
        $("#skip").click(function(){
        	window.location.href="signstep2.php?step=3";
});
});
</script> 

<?php
    
    include('dbconnect.php');
    if(!$con)
							{
								die('could not connect'.mysqli_connect_error());
							}
							mysqli_select_db($con,"minorproject");
    //Get all country data
    $query = "SELECT * FROM countries ORDER BY country_name ASC";
    $result=mysqli_query($con,$query);
	$count=mysqli_num_rows($result);
 
    
    ?>
        <style>
        

</style>
</head>
<body style="background-color:#333333">
<div style="margin-top:200px;" id="" style="border:0px;background-color:#333333">
<div style="height:30px"></div>

<form method="post" style="margin-top:40px;margin-left:350px;width:60%">
		
		<p style="margin-top:20px;">
  <div class="individualinput" style="margin-bottom:10px;border:2px solid #1B4B68 ;background-color:#AEB6BF  ; " >
  <align="left" >Gender :</h4>
  
  
  <input type="radio" name="gender" value="Male" id="male"   align="center" style="" onblur="validateGender()" /> <b style="color:black;font-size:15px; margin-right:20px" >Male</b>
  <input type="radio" name="gender" value="Female" id="female"  align="center"style="" > <b style="color:black;font-size:15px"> Female</b><br></p>
  </div>
  
  <div  class="individualinput" id="dob" style="margin-bottom:5px; border:2px solid #1B4B68;background-color:#AEB6BF  ;"> <h4>Date of Birth :</h4>
  
  </div>
  <select name="DOBDay" class="individualinput" id="day" style="width:17%;border:2px solid #1B4B68;background-color:#AEB6BF  ;" align="left">
	<option value=""> Day </option>
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

<select name="DOBMonth" id="month" class="individualinput" style="width:22%;border:2px solid #1B4B68;background-color:#AEB6BF  ;">
	<option value=""> Month </option>
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
  
  <select name="DOBYear" id="year" class="individualinput" style="width:14%;border:2px solid #1B4B68;background-color:#AEB6BF  ;">
	<option value=""> Year </option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
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
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
</select>
<div class="popup" style="height:15px;">
<div class="popuptext" id="indopupmenu"> </div>
</div>



<!--<div class="button">-->
<div class="row" style="margin-top:10px"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> </div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"> 
<select name="country" class="individualinput" id="country" style="margin-top:10px;border:2px solid #1B4B68;background-color:#AEB6BF;text-align:center;width:180px;margin-left:-110px;">
    <option value="">Select Country</option>
	<?php
        if($count > 0){
            while($row=mysqli_fetch_row($result)){ 
               echo '<option value="'.$row[0].'">'.$row[1].'</option>'; 
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
</select>


<select name="state" class="individualinput" id="state"  style="border:2px solid #1B4B68;background-color:#AEB6BF;text-align:center;width:180px  ;margin-right:30px;">
     <option value="">Select State</option>
</select>

<select name="city" class="individualinput" id="city"  style="margin-top:0px;border:2px solid #1B4B68;background-color:#AEB6BF  ;text-align:center;width:180px;margin-right:0px;margin-left:0px;">
   <option value="">Select City</option>
   
</select></div>
</div><br><br>
<input type="button" value="Next" name="indstep2submit" id="next" class="btn btn-primary" style="margin-left:80px;width:250px;height:50px;font-size:22px" >
<input type="button" value="Skip" name="indstep2skip" class="btn btn-primary" id="skip" style="width:250px;height:50px;font-size:22px;margin-left:24px;">
		</form> 
<div style="height:120px;"> </div>		
	
</body>
</html>