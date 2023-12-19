<?php  
include("../confs/admin-auth.php");   
include("../confs/config.php");   
$id = $_POST["id"];   
$iname = $_POST["iname"];  
$mname = $_POST["mname"];  
$calorie = $_POST["calorie"];   
$image = $_FILES["image"]["name"];  
$tmp = $_FILES["image"]["tmp_name"];

if($image) {    
    move_uploaded_file($tmp, "images/$image");    
    $sql = "UPDATE itemcategories SET image='$image', iname='$iname', mname='$mname', calorie='$calorie', modified_date=now() WHERE id = $id"; 
} else {
    $sql = "UPDATE itemcategories SET iname='$iname', mname='$mname', calorie='$calorie', modified_date=now() WHERE id = $id"; 
}

mysqli_query($conn, $sql);   
header("Location: {$_SERVER['HTTP_REFERER']}"); 
?>