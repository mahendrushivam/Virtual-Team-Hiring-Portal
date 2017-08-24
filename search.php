<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'minorproject';
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
$searchTerm = $_GET['term'];
$query = $db->query("SELECT * FROM subcategories WHERE subcategoryname LIKE '%".$searchTerm."%' ORDER BY subcategoryname ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['subcategoryname'];
}
echo json_encode($data);
?>