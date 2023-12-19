<?php 
include("confs/config.php");
$email = $_POST["email"];	
$message = $_POST["message"];

$sql = "INSERT INTO feedbacks (email, message, created_date, modified_date)
	VALUES ('$email', '$message', now(), now())";

mysqli_query($conn, $sql);
header("Location: index.php");
?>