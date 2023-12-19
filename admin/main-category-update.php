<?php  
include("../confs/admin-auth.php");   
include("../confs/config.php");   
$id = $_POST["id"];
$name = $_POST["name"];
$image = $_FILES["image"]["name"];  
$tmp = $_FILES["image"]["tmp_name"];

if($image) {    
    move_uploaded_file($tmp, "images/$image");    
    $sql = "UPDATE maincategories SET name='$name', image='$image', modified_date=now() WHERE id = $id";
} else {    
    $sql = "UPDATE maincategories SET name='$name', modified_date=now() WHERE id = $id";
}

mysqli_query($conn, $sql);
header("Location: home.php");
?>