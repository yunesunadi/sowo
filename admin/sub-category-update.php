<?php  
include("../confs/admin-auth.php");   
include("../confs/config.php");   
$id = $_POST["id"];   
$sname = $_POST["sname"];    
$image = $_FILES["image"]["name"];  
$tmp = $_FILES["image"]["tmp_name"];

if($image) {
    move_uploaded_file($tmp, "images/$image");   
    $sql = "UPDATE subcategories SET image='$image', sname='$sname', modified_date=now() WHERE id = $id";   
} else {
    $sql = "UPDATE subcategories SET sname='$sname', modified_date=now() WHERE id = $id";
}

mysqli_query($conn, $sql);   
header("Location: {$_SERVER['HTTP_REFERER']}");
?>