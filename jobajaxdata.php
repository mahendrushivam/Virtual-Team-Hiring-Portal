<?php

include('dbConfig.php');

if(isset($_POST["category_id"]) && !empty($_POST["category_id"]))
{
   if($_POST['category_id']!='All')
    $query = $db->query("SELECT * FROM subcategory WHERE subcategory.categoryname = '".$_POST['category_id']."'");
	else
		$query = $db->query("SELECT * FROM subcategory limit 25");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Subcategory</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['id'].'">'.$row['subcategory'].'</option>';
        }
    }else{
        echo '<option value="">Subcategory not available</option>';
    }
}
?>
