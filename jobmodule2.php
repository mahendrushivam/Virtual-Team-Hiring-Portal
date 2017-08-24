<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<link href="css/bootstrap.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <style>
  .ui-widget {
	font-family: Verdana,Arial,sans-serif;
	font-size: 1.1em;
    width:20%;
}

.ui-widget input
 {
	font-family: Verdana,Arial,sans-serif;
	font-size: 1em;
	margin-left:40px;
	
}
hr.style6 {
	background-color: #fff;
	border-top: 2px dotted #8c8b8b;
}
.dropdown {
    background-color: #fff;
    border: solid;
	border-color:#333333;
    color: black;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 6px 3px;
    cursor: pointer;
	border-radius:8px;
	transition-duration: 0.4s;
}
.dropdown:hover{
border-color:#1ED0EC;
}





  </style>
<script type="text/javascript" language="javascript" >
$(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  }); 
  
  
$(document).ready(function(){
    $('#categories').on('change',function(){
        var category_id = $(this).val();
        if(category_id){
            $.ajax({
                type:'POST',
                url:'jobajaxdata.php',
                data:'category_id='+category_id,
                success:function(html){
                    $('#subcategories').html(html);
                   
                }
            }); 
        }else{
            $('#subcategories').html('<option value="">Select subcategories</option>');
           
        }
    });
});


$(document).ready(function(){
	$("#jobdisplay").load("joblist.php");
	});

	$(document).ready(function(){
	$("#searchbutton").on("click", function() {
		x=document.getElementById("categories").value();
		alert(x);
	)};
	});


	</script>
</head>

<body style="background-color:grey;" >
<div class="container-fluid" >
<div>



    	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 " style="text-align:center; background-color: #333333;margin-left:-60px;"  >
		<br>
		<br>
    <form method="get" action="#" style="height:100%">
    
        <div class="caption" style="color: #1ED0EC;">
		<h3 style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;">Categories:</h3>
		</div>
        
        <select name="dropdown" id="categories" class="dropdown">
        <option value="All"> All </option>
            <?php
            
            $mysqlserver="localhost";
            $mysqlusername="root";
            $mysqlpassword="";
            $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
            
            $dbname = 'minorproject';
            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());
            
            $cdquery="SELECT Distinct categoryname FROM subcategory";
            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());
            
            while ($cdrow=mysql_fetch_array($cdresult)) {
            #$cdTitle=$cdrow["categoryname"];
                echo "<option value='" . $cdrow['categoryname'] ."'>" . $cdrow['categoryname']."</option>";
                  
            
            }
                
            ?>
    
        </select>
		<hr class="style6"></hr>
        <br>
		<div class="caption" style="color:#1ED0EC;;">
		<h3 style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;">SubCategories:</h3>
		</div>
		 <select name="dropdown" id="subcategories" class="dropdown">
        <option value="">Select subcategories</option>'
            
    
        </select>
		<hr class="style6"></hr>
        
		
        <br>
		<h3 style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;color:white">Skills:</h3>
			<div class="ui-widget" >
  				
  				<input id="skills">
			</div>
			<br><br>
			<hr class="style6"></hr>
		<button type="button" class="btn btn-info" id="searchbutton">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
          </form> 
        </div>
	
		
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4"> </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8" id="jobdisplay"  name="jobdisplay" style=" height:100%; ">
						
                
			</div>
			
				
			
		
		</div>
	</div>
  

</body>
</html>