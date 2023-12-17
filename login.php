<?php
include("confs/config.php");
session_start();

$name = $_POST["name"];
$password = $_POST["password"];

$user_row = mysqli_query($conn, "SELECT * FROM users WHERE name='$name' AND password='$password'");

if($name === "admin" && $password === "admin123") {    
    $_SESSION["auth"] = true;
    header("Location: ./admin/home.php");
} else if(mysqli_num_rows($user_row) === 1) {
    $_SESSION["user_auth"] = true;
    $_SESSION["user_id"] = $row["id"];
    header("Location: main-category.php");
} else {
    header("Location: index.php");  
}
?>