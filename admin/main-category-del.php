<?php  
include("../confs/admin-auth.php");  
include("../confs/config.php");   
$id = $_GET["id"];   
$sql = "DELETE FROM maincategories WHERE id = $id";   
mysqli_query($conn, $sql);   
header("location: home.php"); 
?>