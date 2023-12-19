<?php  
include("../confs/admin-auth.php");
include("../confs/config.php"); 
$sname = $_POST["sname"]; 
$main_id = $_POST["main_id"]; 
$image = $_FILES["image"]["name"];  
$tmp = $_FILES["image"]["tmp_name"];

if($image){   
	move_uploaded_file($tmp, "images/$image");
}

$sql = "INSERT INTO subcategories(image, sname, main_id, created_date, modified_date)
		VALUES ('$image', '$sname', '$main_id', now(), now())";

mysqli_query($conn, $sql);   
header("Location: {$_SERVER["HTTP_REFERER"]}");
?>