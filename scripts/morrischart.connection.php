<?php 

$con = mysqli_connect("localhost" , "root" , "" , "glpi_emea");
	$rows = '';
$query = "SELECT * FROM glpi_computers  LIMIT 0, 40";
$result = mysqli_query($con,$query);
$total_rows =  $result->num_rows;
if($result) 
{
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>