<?php  
include("../confs/admin-auth.php");
include("../confs/config.php"); 
$iname = $_POST["iname"]; 
$mname = $_POST["mname"];
$calorie = $_POST["calorie"];
$mcid = $_POST["mcid"]; 
$scid = $_POST["scid"];
$image = $_FILES["image"]["name"];  
$tmp = $_FILES["image"]["tmp_name"];  

if ($image) {   
	move_uploaded_file($tmp, "images/$image");  
}

$sql = "INSERT INTO itemcategories (image, iname, mname, calorie, mcid, scid, created_date, modified_date)
		VALUES ('$image', '$iname', '$mname', '$calorie', '$mcid', '$scid', now(), now())";  

mysqli_query($conn, $sql);  
header("Location: {$_SERVER['HTTP_REFERER']}");
?>