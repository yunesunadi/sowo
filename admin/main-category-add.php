<?php  
include("../confs/admin-auth.php");  
include("../confs/config.php");   
$name = $_POST["name"];   
$image = $_FILES["image"]["name"];  
$tmp = $_FILES["image"]["tmp_name"];

if($image){
	move_uploaded_file($tmp, "images/$image");
}

$sql = "INSERT INTO maincategories (name, image, created_date, modified_date) 
		VALUES ('$name', '$image', now(), now())";

mysqli_query($conn, $sql);
header("Location: home.php");
?>