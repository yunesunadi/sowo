<?php  
include("../confs/admin-auth.php");
include("../confs/config.php");  
$id = $_GET["id"];  
$sql = "DELETE FROM itemcategories WHERE id = $id";  
mysqli_query($conn, $sql);
header("Location: {$_SERVER['HTTP_REFERER']}"); 
?>