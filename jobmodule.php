<?php
if (session_status() == PHP_SESSION_NONE)
session_start();
$username='';

if(isset($_SESSION)){
if(isset($_SESSION['username']))	
$username=$_SESSION['username'];

}
else
{
	$username='';
}
$_SESSION['categories']='';
?>

<?php
$categories='';

if(isset($_GET['cat']))
{
	if(isset($_SESSION['categories']))
	{unset($_SESSION['categories']);
	$_SESSION['categories']=$_GET['cat'];
	}
}

else
	
	{
		$categories="All";
		
		if(isset($_SESSION['categories']))
	{unset($_SESSION['categories']);
	$_SESSION['categories']="All";
	}
	}
	
	?>


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

.service-box {
	background: #fff;
	border-bottom: 2px solid #f7f7f7;
	padding: 40px 20px;
}

.service-box:hover {
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
	margin-top: -20px;
}

.service-icon {
	margin-bottom: 20px;
}	

.service-desc h5 {
	text-transform: uppercase;
	font-weight: 700;
	color: #666;
	font-size: 18px;
	margin-bottom: 10px;
}
.service-desc .divider-header {
	margin-bottom: 30px;
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
	</script>
</head>

<body style="background-color:grey;" >
<div class="container-fluid" style="height:100%">
<div style="height:100%;">

<div class="row" style="height:100%;">

    	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4" style="text-align:center; background-color: #333333;"  >
		
		<button class="btn btn-info"> 
		<?php
		if($username!='')
		{echo  '<a href="dashboard.php" style="text-decoration:none">';
		}
		
		if($username=='')
		{echo  '<a href="navbar.php" style="text-decoration:none">';
		}
		?>
		
			
		<span class="fa fa-arrow-left" aria-hidden="true" style="padding-left:150px;"></span> Back </a></button>
		<br>
		<br>
    <form method="post" style="height:100%" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
        <div class="caption" style="color: #1ED0EC;">
		<h3 style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;">Categories:</h3>
		</div>
        
        <select name="categories" id="categories" class="dropdown">
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
            
			
			echo '<option value="'.$cdrow['categoryname'].'" '; if($cdrow['categoryname']==$_SESSION['categories']): echo '  selected="selected"  ';  endif; echo '>'.$cdrow['categoryname'].'</option>'; 
            
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
		<button  type="submit" class="btn btn-info" name="jobsearchbtn">
      <span class="glyphicon glyphicon-search" id="jobsearchbut"></span> Search
    </button>
          </form> 
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8" id="jobdisplay"  name="jobdisplay" style=" height:100%; ">
						
                
			</div>
			
				
			
			</div>
		</div>
	</div>
  

</body>
</html>



<?php   

if(isset($_POST['jobsearchbtn']))
	
	{
		$category1=$_POST['categories'];
		$_SESSION['categories']=$category1;
		
	}